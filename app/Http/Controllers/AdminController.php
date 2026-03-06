<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use \App\Models\ProductInformation;
use App\Models\SalesOrder;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
        $start_raw =  Carbon::now()->startOfMonth();
        $end_raw = Carbon::now()->endOfMonth();
        // sales
        $sales_order = SalesOrder::orderBy('created_at', 'desc')->where('payment_status', 'success')->take(6)->get();
        $monthly_sales = SalesOrder::whereBetween('created_at', [$start_raw, $end_raw])->where('payment_status', 'success')->get();
        $tot = 0;
        foreach ($monthly_sales as $item) {
            $tot = $tot + ($item->total_amount + $item->shipping_cost) - $item->discount_amount;
        }
        $this_month_total_sale = $tot;

        // last month sales
        $monthly_sales_last = SalesOrder::whereBetween('created_at', [now()->subMonth()->startOfMonth(),  now()->subMonth()->endOfMonth()])->where('payment_status', 'success')->get();
        $totl = 0;
        foreach ($monthly_sales_last as $item) {
            $totl = $totl + ($item->total_amount + $item->shipping_cost) - $item->discount_amount;
        }
        $last_month_total_sale = $totl;

        $sales_growth = $last_month_total_sale > 0
            ? (($this_month_total_sale - $last_month_total_sale) / $last_month_total_sale) * 100
            : 100;

        // 

        // vistis
        $this_month_visits = Visit::whereBetween('created_at', [$start_raw, $end_raw])->get()->count();
        $last_month_visits = Visit::whereBetween('created_at', [now()->subMonth()->startOfMonth(),  now()->subMonth()->endOfMonth()])->get()->count();
        $visit_growth = $last_month_visits > 0
            ? (($$this_month_visits - $last_month_visits) / $last_month_visits) * 100
            : 100;

        // 


        // purchase
        $last_month_purchases = SalesOrder::whereBetween('created_at', [now()->subMonth()->startOfMonth(),  now()->subMonth()->endOfMonth()])->where('payment_status', 'success')->count();
        $this_month_purchases = SalesOrder::whereBetween('created_at', [$start_raw, $end_raw])->where('payment_status', 'success')->count();
        $purchase_growth = $last_month_purchases > 0
            ? (($this_month_purchases - $last_month_purchases) / $last_month_purchases) * 100
            : 100;
        // end purchase



        $start_format = $start_raw->format('M j');
        $end_format = $end_raw->addDays(1)->format('M j');

        //    user
        $this_month_users = User::whereBetween('created_at', [
            $start_raw,
            $end_raw
        ])->count();
        // last month count

        $last_month_user_count = User::whereBetween('created_at', [
            now()->subMonth()->startOfMonth(),
            now()->subMonth()->endOfMonth()
        ])->count();

        // comparision
        $user_growth = $last_month_user_count > 0
            ? (($this_month_users - $last_month_user_count) / $last_month_user_count) * 100
            : 100;

        // 
        // Chart for monthly growth of purchases , views, user registrations

        $users = User::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('count(*) as total')
        )
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

        $visits = Visit::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('count(*) as total')
        )
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->pluck('total', 'month')
            ->toArray();

       $sales = SalesOrder::selectRaw('MONTH(created_at) as month, SUM(final_total) as total')
    ->whereYear('created_at', date('Y'))
    ->where('payment_status', 'success')
    ->groupByRaw('MONTH(created_at)')
    ->pluck('total', 'month')
    ->toArray();

            // dd($users);


        $months = [];

        for ($i = 1; $i <= 12; $i++) {
            $months['users'][] = $users[$i] ?? 0;
             $months['sales'][] = $sales[$i] ?? 0;
             $months['visits'][] = $visits[$i] ?? 0;
        }

        // 

        $traffic = Visit::select(
        DB::raw('MONTH(created_at) as month'),
        DB::raw('count(*) as total')
    )
    ->whereYear('created_at', date('Y'))
    ->groupBy('month')
    ->pluck('total', 'month')
    ->toArray();

// Build labels for all 12 months
$labels = [];
$series = [];

for ($m = 1; $m <= 12; $m++) {
    $labels[] = date('F', mktime(0, 0, 0, $m, 1));
    $series[] = $traffic[$m] ?? 0; // default to 0 if no data
}

        // 
        $data = [
            'sales_order' => $sales_order,
            'users' => $this_month_users,
            'user_growth' => $user_growth,
            'start_format' => $start_format,
            'end_format' => $end_format,
            'total_sale' => $this_month_total_sale,
            'sales_growth' => $sales_growth,
            'purchases' => $this_month_purchases,
            'purchase_growth' => $purchase_growth,
            'this_month_visits' => $this_month_visits,
            'last_month_visits' => $last_month_visits,
            'visit_growth' => $visit_growth,
            'months' => $months,
            'labels' => $labels,
            'series' => $series
            

        ];
        return view('admin.dashboard', $data);
    }

    public function products()
    {
        $products = Product::all();
        return view('admin.product.products')->with('products', $products);
    }

    public function addProduct()
    {
        return view('admin.product.add');
    }

    public function editProduct($id)
    {
        return view('admin.product.edit', ['id' => $id]);
    }

    public function addStock()
    {

        return view('admin.inventory.addstock');
    }

    public function stockEntries()
    {
        return view('admin.inventory.stockentries');
    }

    public function addProductInfo($id)
    {
        return view('admin.product.addproductinfo')->with('product_id', $id);
    }

    public function orders()
    {
        $orders = SalesOrder::orderBy('created_at', 'desc')->where('payment_status', 'success')->paginate(20);
        return view('admin.orders.index')->with('orders', $orders);
    }

    public function editProductInfo($id)
    {
        $pi =  ProductInformation::where('id', $id)->first();
        if ($pi) {

            return view('admin.product.editproductinfo')->with('product_info', $pi);
        }
        abort(404);
    }

    public function updateProductInfo(Request $request, $id)
    {
        $request->validate([

            'info_content' => 'required|string',
        ], [

            'info_title.exists' => 'Selected title does not exist.',
            'info_content.required' => 'Please information selected title.',
            'info_content.string' => 'The content must be a string.',

        ]);

        $pi =  ProductInformation::where('id', $id)->first();
        if ($pi) {
            $pi->content = $request->input('info_content');
            $pi->save();

            return redirect()->back()->with('success', 'Changes saved');
        }
    }

    public function saveProductInfo(Request $request, $id)
    {

        $request->validate([
            'info_title' => 'required|exists:page_information_titles,id',
            'info_content' => 'required|string',
        ], [
            'info_title.required' => 'Please select an title.',
            'info_title.exists' => 'Selected title does not exist.',
            'info_content.required' => 'Please information selected title.',
            'info_content.string' => 'The content must be a string.',

        ]);

        $pro_info = \App\Models\ProductInformation::updateOrCreate(
            [
                'product_id' => $id,
                'title' => $request->input('info_title'),
            ],
            [
                'title' => $request->input('info_title'),
                'content' => $request->input('info_content'),
                'order' => 0
            ]
        );


        return redirect()->back()->with('success', 'Changes saved');
    }
}
