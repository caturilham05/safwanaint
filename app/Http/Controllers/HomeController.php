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
        $data = ['data' => $this->getData('home'), 'title' => 'Home'];
        return view('index', $data);
    }

    public function profile()
    {
        $data = ['title' => 'Profile', 'data' => $this->getData('profile')];
        return view('profile', $data);
    }

    public function service()
    {
        $data = ['title' => 'Service', 'data' => $this->getData('services')];
        return view('service', $data);
    }

    public function contact()
    {
        $data = ['title' => 'Contact'];
        return view('contact', $data);
    }

    public function getData($data = '')
    {
        if (empty($data)) return false;
        $contents = Content::with(['contentCategory', 'media'])
        ->where('active', 1)
        ->whereRelation('contentCategory', 'name', $data)
        ->orderBy('id', 'ASC')
        ->get();

        return $contents;
    }
}
