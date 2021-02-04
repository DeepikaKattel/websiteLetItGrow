<?php

namespace App\Http\Controllers;

use App\Models\AdminCareer;
use App\Models\Products;
use App\Models\ProductsFeatures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function vision()
    {
        return view('pages.vision');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function career()
    {
        return view('pages.career');
    }
    public function services()
    {
        return view('pages.services');
    }
    public function products()
    {
        $products = DB::table('products')->get();
        return view('pages.products', compact('products'));
    }
    public function team()
    {
        return view('pages.team');
    }
    public function features($id)
    {
        $products = Products::find($id);
        $features = ProductsFeatures::where('product_id', '=', $id)->get();
        return view('pages.features', compact('products', 'features'));
    }
    public function maps()
    {
        return view('maps');
    }
    public function privacy()
    {
        return view('pages.privacy');
    }
}
