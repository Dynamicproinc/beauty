<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use \App\Models\ProductInformation;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
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

    public function addStock(){

        return view('admin.inventory.addstock');
    }

    public function stockEntries(){
        return view('admin.inventory.stockentries');
    }

    public function addProductInfo($id){
        return view('admin.product.addproductinfo')->with('product_id', $id);
    }

    public function editProductInfo($id){
        $pi =  ProductInformation::where('id', $id)->first();
        if($pi){

            return view('admin.product.editproductinfo')->with('product_info', $pi);
        }
         abort(404);
    }

    public function updateProductInfo(Request $request, $id){
         $request->validate([
            
            'info_content' => 'required|string',
        ], [
           
            'info_title.exists' => 'Selected title does not exist.',
            'info_content.required' => 'Please information selected title.',
            'info_content.string' => 'The content must be a string.',
            
        ]);

         $pi =  ProductInformation::where('id', $id)->first();
        if($pi){
                $pi->content = $request->input('info_content');
                $pi->save();

                return redirect()->back()->with('success', 'Changes saved');
        }
    }

    public function saveProductInfo(Request $request, $id){

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
