<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\ContentCategory;
use App\Models\Contact;
use App\Models\Imageslider;

class HomeController extends Controller
{
    public function index()
    {
        $imageslider = Imageslider::with(['media'])->where('active', 1)->orderBy('id', 'DESC')->get();
        $data = ['data' => $this->getData('home'), 'title' => 'Home', 'imageslider' => $imageslider];
        return view('index', $data);
    }

    public function profile()
    {
        $data = ['title' => 'About Us', 'data' => $this->getData('about us')];
        return view('profile', $data);
    }

    public function service()
    {
        $data = ['title' => 'Crew Service', 'data' => $this->getData('crew service')];
        return view('service', $data);
    }

    public function contact()
    {
        // $contacts = Contact::get();
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
