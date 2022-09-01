<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactEditRequest;
use App\Http\Requests\contactRequest;
use App\Models\contactModel;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class contactController extends Controller
{
    public function index()
    {
        $contact = contactModel::get();
        return view('contact', ['contact' => $contact]);
    }

    public function store(contactRequest $request)
    {
        contactModel::create($request->all());
        $request->session()->flash('success', 'Pesan berhasil di kirimkan');
        return redirect('/contact');
    }

    public function delete($id)
    {
        $data = contactModel::where('id', $id)->forceDelete();
        session()->flash('deleted', 'Pesan berhasil di hapus');
        return redirect('/contact');
    }

    public function edit(contactEditRequest $request)
    {
        $data = contactModel::find($request->editId);
        $data->name = $request->editName;
        $data->email = $request->editEmail;
        $data->message = $request->editMessage;
        $data->save();
        session()->flash('edited', 'Pesan berhasil di edit');
        return redirect('/contact');
    }
}
