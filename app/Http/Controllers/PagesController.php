<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\StockSnapshot;
use App\Models\StockSnapshotItems;

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
        $snapshots = StockSnapshot::orderBy('created_at', 'desc')->get();
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
                return redirect()->back()->with('success', 'Daily stock snapshot for today already exists.');
            }


            $snapshot = StockSnapshot::create([
                'name' => 'Daily Snapshot - ' . now()->toDateString(),
            ]);

            $snapshot->update([
                'name' => 'webshop_tallow-skincare.hr_001_'
                    . $snapshot->id . '_'
                    . $snapshot->created_at
                    ->timezone('Europe/Zagreb')
                    ->format('d.m.Y_H-i')
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
                    'unit_of_measure' => null,
                    'unit_price' => null,
                    'retail_price' => $item->discounted_price,
                    'special_form_name' => null,
                    'reference_price' => $item->discounted_price,
                    'reference_price_date' => '2026-09-10',
                    'base_price' => NULL,
                    'base_price_date' => null,
                    'date_added' => $item->created_at->format('Y-m-d'),
                    'barcode' => $item->barcode,
                    'availability' => 'Dostupno',
                ]);
            }

            return redirect()->back()->with('success', 'Daily stock snapshot created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function exportSnapshots($snapshotId)
    {

        $snapshot = StockSnapshot::where('name', $snapshotId)->firstOrFail();
       
        $items = StockSnapshotItems::where('stock_snapshot_id', $snapshot->id)->get();
        // csv export logic
        //filmane structure example webshop_your-light.hr_001_16_13.10.2026_00_15.csv in croatian time stamp format
        // $filename = 'webshop_tallow-skincare.hr_001_' . $snapshotId . '_' . $snapshot->created_at->timezone('Europe/Zagreb')->format('d_m_Y_H_i') . '.csv';
        $filename = $snapshot->name;
        $handle = fopen($filename, 'w+');
        //headers 
        // id;naziv;sku;marka;url;jedinica_mjere;cijena_jedinice_mjere;maloprodajna_cijena;naziv_posebnog_oblika;sidrena_cijena;sidrena_cijena_datum;bazna_cijena;bazna_cijena_datum;datum_dodavanja;barkod;dostupnost
        fputcsv($handle, ['id', 'naziv', 'sku', 'marka', 'url', 'jedinica_mjere', 'cijena_jedinice_mjere', 'maloprodajna_cijena', 'naziv_posebnog_oblika', 'sidrena_cijena', 'sidrena_cijena_datum', 'bazna_cijena', 'bazna_cijena_datum', 'datum_dodavanja', 'barkod', 'dostupnost']);
        foreach ($items as $item) {
            fputcsv($handle, [
                $item->product_id,
                $item->name,
                $item->sku,
                $item->brand,
                $item->url,
                $item->unit_of_measure,
                $item->unit_price,
                $item->retail_price,
                $item->special_form_name,
                $item->reference_price,
                $item->reference_price_date,
                $item->base_price,
                $item->base_price_date,
                // formatting the date format to d-m-Y
                $item->date_added ? \Carbon\Carbon::parse($item->date_added)->format('d-m-Y') : null,
                // $item->date_added->format('d-m-Y'),
                $item->barcode,
                $item->availability,
            ]);
        }
        fclose($handle);
        // need to return the file as a download response
        return response()->download($filename)->deleteFileAfterSend(true);
    }
}
