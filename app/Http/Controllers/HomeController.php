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

        $contact = Contact::first();

        $data = ['data' => $contents, 'contact' => $contact];
        return view('index', $data);
    }
}
