<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(contactRequest $request)
    {
        print_r($request->all());
        return redirect('contact');
    }
}
