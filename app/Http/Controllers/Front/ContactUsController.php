<?php

namespace App\Http\Controllers\Front;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        Mail::to($request->user())->send(new ContactUs($request->all()));

        return back();
    }
}
