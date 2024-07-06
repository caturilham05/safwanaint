<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\ContentCategory;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $contents = Content::with(['contentCategory', 'media'])
        ->where('active', 1)
        ->whereRelation('contentCategory', 'name', 'home')
        ->orderBy('id', 'ASC')
        ->get();

        $data = ['data' => $contents];
        return view('index', $data);
    }

    public function profile()
    {
        return view('profile');
    }

    public function service()
    {
        return view('service');
    }

    public function contact()
    {
        return view('contact');
    }
}
