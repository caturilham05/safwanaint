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
        $imageslider = Imageslider::with(['media'])->where('active', 1)->where('imageslider_category_id', 1)->orderBy('id', 'DESC')->get();
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
        $imageslider = Imageslider::with(['media'])->where('active', 1)->where('imageslider_category_id', 2)->orderBy('id', 'DESC')->get();
        $data = ['title' => 'Crew Service', 'data' => $this->getData('crew service'), 'imageslider' => $imageslider];
        return view('service', $data);
    }

    public function contact()
    {
        $data = ['title' => 'Contact'];
        return view('contact', $data);
    }

    public function digital_signature($token)
    {
        $data_contact = Contact::where('signature', $token)->where('active', 1)->get()->first();
        if (!$data_contact) {
            abort('404');
        }
        $data = ['data' => $this->getData('signature')->first(), 'title' => 'Digital Signature', 'data_contact' => $data_contact];
        return view('signature', $data);
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
