<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\ContentCategory;
use App\Models\Contact;
use App\Models\Imageslider;
use App\Models\Messages;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class HomeController extends Controller
{
    public function index()
    {
        // $locale = app()->currentLocale();
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

    public function contact_post(Request $request)
    {
        /*sementara dimatikan*/
        return abort(404, 'Halaman tidak ditemukan');
        /*sementara dimatikan*/

        $this->validate($request,[
                'fullname' => 'required',
                'email'    => 'required|email',
                'subject'  => 'required',
                'message'  => 'required',
            ],
            [
                'fullname.required' => 'nama lengkap tidak boleh kosong',
                'email.required'    => 'email tidak boleh kosong',
                'email.email'       => 'email tidak valid',
                'subject'           => 'subject tidak boleh kosong',
                'message'           => 'message tidak boleh kosong',
            ]
        );

        $post = [
            'fullname' => $request->fullname ?? '',
            'email'    => $request->email ?? '',
            'subject'  => $request->subject ?? '',
            'message'  => $request->message ?? '',
        ];


        $send = Mail::send('emails.sendemail', [
            'name'            => $post['fullname'],
            'subject'         => $post['subject'],
            'message_content' => $post['message'],
            'email'           => $post['email'],
        ], function ($message) use ($post) {
            $message->to('recehanfaucet@gmail.com')
                    ->subject($post['email']);
            $message->from($post['email'], $post['fullname']);
        });

        Messages::create($post);
        return redirect()->route('contact')->with(['success' => 'Terima kasih, email anda berhasil dikirim!']);
    }

    public function apply()
    {
        $data = ['title' => 'Apply'];
        return view('apply', $data);
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
