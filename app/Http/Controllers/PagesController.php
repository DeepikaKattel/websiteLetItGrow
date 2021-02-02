<?php

namespace App\Http\Controllers;

use App\Models\AdminCareer;
use Illuminate\Http\Request;

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
        return view('pages.products');
    }
    public function team()
    {
        return view('pages.team');
    }
    public function features()
    {
        return view('pages.features');
    }
    public function maps()
    {
        return view('maps');
    }

}
