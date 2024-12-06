<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\contact;

class contactcontroller extends Controller
{
    public function index()
    {
        $contacts=contact::all();
        return view('home',['contact'=>$contacts]);
    }
    public function store(Request $request)
    {
        $name=$request->name;
        $mobile=$request->mobile;
        $contact=new Contact();
        $contact->name=$name;
        $contact->mobile=$mobile;
        $contact->save();
        return redirect()->route('contact.index');
    }
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('edit', compact('contact'));
    }
    public function update(Request $request,$id)
    {
        $contact=contact::find($id);
        $contact->name=$request->name;
        $contact->mobile=$request->mobile;
        $contact->update();
        return redirect()->route('contact.index');
    }
    public function delete($id)
    {
        $contact=contact::find($id);
        $contact->delete();
        return redirect()->route('contact.index');
    }
}
