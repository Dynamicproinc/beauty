<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\StockSnapshot;
use App\Models\StockSnapshotItems;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{

    public function welcome()
    {
        $selection = 1;
        $selected_product = Product::first();

        return view('tallow_theme', compact('selected_product'));
    }

    public function privacy()

    {
        if (!session()->has('locale')) {
            session()->put('locale', 'hr'); // or 'en' depending on your default
        }

        if (session('locale') === 'hr') {
            return view('pages.privacy-hr');
        }

        return view('pages.privacy');
    }
    public function terms()
    {
        if (!session()->has('locale')) {
            session()->put('locale', 'hr'); // or 'en' depending on your default
        }

        if (session('locale') === 'hr') {
            return view('pages.terms-hr');
        }

        return view('pages.terms');
    }

    public function emailSubscription()
    {
        return view('pages.subscribe');
    }

    public function ourStory()
    {


        return view('pages.our-story');
    }

    public function deliveryTerms()
    {
        if (!session()->has('locale')) {
            session()->put('locale', 'hr'); // or 'en' depending on your default
        }

        if (session('locale') === 'hr') {
            return view('pages.delivery-hr');
        }

        return view('pages.delivery');
    }

    // stock snapshot page

    public function stockSnapshot()
    {
        $this->saveSnapshotDaily();
        $snapshots = StockSnapshot::orderBy('created_at', 'desc')->paginate(30);
        return view('document.price-list', compact('snapshots'));
    }

    public function saveSnapshotDaily()
    {
        // Implementation for daily stock snapshot
       

        try {

            // first check if the snapshot for today already exists for the current date
            $existingSnapshot = StockSnapshot::whereDate('created_at', now()->toDateString())->first();
            if ($existingSnapshot) {
                // return response()->json(['status' => 'success', 'message' => 'Daily stock snapshot for today already exists.']);
                return null;
            }


            $snapshot = StockSnapshot::create([
                'name' => 'Daily Snapshot - ' . now()->toDateString(),
            ]);

            // example file name 62108908331_webshop_Donja_Svarca_79C_Karlovac_P1_roba_001_20261117_0800.csv
            //old webshop_tallow-skincare.hr_001_
            // 
            $snapshot->update([
                'name' => '15582754597_WEBSHOP_DONJA_SVARCA_79C_KARLOVAC_001_ROBA_'
                    . $snapshot->id . '_'
                    . $snapshot->created_at
                    ->timezone('Europe/Zagreb')
                    ->format('dmY_Hi')
                    . '.csv',
            ]);

            // Assuming you have a method to get the current stock items
            $currentStockItems = \App\Models\Product::where('status', 'active')->get(); // Replace with your actual stock item retrieval logic

            foreach ($currentStockItems as $item) {
                StockSnapshotItems::create([
                    'stock_snapshot_id' => $snapshot->id,
                    'product_id' => $item->id,
                    'name' => $item->title,
                    'sku' => $item->sku,
                    'brand' => "tallow skin care",
                    'url' => route('shop.product.show', ['id' => $item->slug]),
                    'unit_of_measure' => 'kom',
                    'unit_price' => null,
                    'retail_price' => $item->discounted_price,
                    // i have to get meta title as spacial form in csv special form name use as neto_kolicina (net quantity) in csv file
                    'special_form_name' => $item->meta_title,
                    'reference_price' => $item->discounted_price,
                    'reference_price_date' => '2026-09-10',
                    'base_price' => NULL,
                    'base_price_date' => null,
                    'date_added' => $item->created_at->format('Y-m-d'),
                    'barcode' => $item->barcode,
                    'availability' => 'Dostupno',
                ]);
            }
            // send raw mail to admin that the snapshot has been created aslo need copy to admin
            Mail::raw('Dnevni cjenik uspješno je kreiran. Naziv datoteke: ' .$snapshot->name, function ($message) {
                $message->to('info@tallow-skincare.hr')->subject('Dnevno ažuriranje cjenika');
            });

            // return redirect()->back()->with('success', 'Daily stock snapshot created successfully.');
        } catch (\Exception $e) {
            // return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function exportSnapshots($snapshotId)
    {

        $snapshot = StockSnapshot::where('name', $snapshotId)->firstOrFail();

        $items = StockSnapshotItems::where('stock_snapshot_id', $snapshot->id)->get();
        // csv export logic
        //filmane structure example webshop_your-light.hr_001_16_13.10.2026_00_15.csv in croatian time stamp format
        // $filename = 'webshop_tallow-skincare.hr_001_' . $snapshotId . '_' . $snapshot->created_at->timezone('Europe/Zagreb')->format('d_m_Y_H_i') . '.csv';
        // $filename = $snapshot->name;
        // $handle = fopen($filename, 'w+');
        // //headers 
        // // id;naziv;sku;marka;url;jedinica_mjere;cijena_jedinice_mjere;maloprodajna_cijena;naziv_posebnog_oblika;sidrena_cijena;sidrena_cijena_datum;bazna_cijena;bazna_cijena_datum;datum_dodavanja;barkod;dostupnost
        // fputcsv($handle, ['id', 'naziv', 'sku', 'marka', 'url', 'jedinica_mjere', 'cijena_jedinice_mjere', 'maloprodajna_cijena', 'naziv_posebnog_oblika', 'sidrena_cijena', 'sidrena_cijena_datum', 'bazna_cijena', 'bazna_cijena_datum', 'datum_dodavanja', 'barkod', 'dostupnost']);
        // foreach ($items as $item) {
        //     fputcsv($handle, [
        //         $item->product_id,
        //         $item->name,
        //         $item->sku,
        //         $item->brand,
        //         $item->url,
        //         $item->unit_of_measure,
        //         $item->unit_price,
        //         $item->retail_price,
        //         $item->special_form_name,
        //         $item->reference_price,
        //         $item->reference_price_date,
        //         $item->base_price,
        //         $item->base_price_date,
        //         // formatting the date format to d-m-Y
        //         $item->date_added ? \Carbon\Carbon::parse($item->date_added)->format('d-m-Y') : null,
        //         // $item->date_added->format('d-m-Y'),
        //         $item->barcode,
        //         $item->availability,
        //     ]);
        // }
        // fclose($handle);

        //////////////////////////////

$filename = $snapshot->name;

$handle = fopen($filename, 'wb');

if ($handle === false) {
    throw new \RuntimeException('Unable to create price list CSV.');
}

// UTF-8 encoding; semicolon delimiter.
$delimiter = ';';

// Required information in the prescribed order.
// Special-sale information is placed immediately after retail price.
// headers naziv_robe;sifra_robe;marka_robe;neto_kolicina;jedinica_mjere_robe;maloprodajna_cijena_robe;poseban_oblik_prodaje;cijena_za_jedinicu_mjere_robe;barkod_robe;ean_barkod_robe;bazna_cijena_robe
// english meaning product_name;product_code;product_brand;net_quantity;unit_of_measure;retail_price;special_form_of_sale;unit_price;product_barcode;ean_barcode;base_price
fputcsv($handle, [
    'naziv_robe',
    'sifra_robe',
    'marka_robe',
    'neto_kolicina',
    'jedinica_mjere_robe',
    'maloprodajna_cijena_robe',
    'poseban_oblik_prodaje',
    'cijena_za_jedinicu_mjere_robe',
    'barkod_robe',
    'ean_barkod_robe',
    'bazna_cijena_robe',
], $delimiter, '"', '');

foreach ($items as $item) {

    fputcsv($handle, [
        $item->name,
        $item->sku,
        $item->brand,
        $item->special_form_name, // use special form name as net quantity
        $item->unit_of_measure,
        $item->retail_price,

        // Indicate whether a special form of sale applies.
        $item->special_form_name
            ? 'DA: ' . $item->special_form_name
            : 'NE',

        $item->unit_price,
        $item->barcode,
        $item->barcode,
        $item->retail_price,

    ], $delimiter, '"', '');
}

fclose($handle);




        /////////////////////////////
        // need to return the file as a download response
        return response()->download($filename)->deleteFileAfterSend(true);
    }

    public function getlatestSnapshot(){
        $snapshot = StockSnapshot::latest()->firstOrFail();
       return redirect()->route('stock.snapshot.export', ['snapshotId' => $snapshot->name]);
    }
}
