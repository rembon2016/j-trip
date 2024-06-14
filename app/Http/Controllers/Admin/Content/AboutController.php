<?php

namespace App\Http\Controllers\Admin\Content;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::first();
        if (is_null($data)) $data = About::create([]);

        return view('admin.pages.about.index', compact('data'));
    }

    public function edit(Request $request, $id)
    {
        $input = $request->all();

        if($request->hasFile('banner_about')){
            $input['banner_about'] = 'storage/banner_about/'.$this->uploadFile(
                $input['banner_about'],
                'banner_about',
            );
        }
        if($request->hasFile('photo')){
            $input['photo'] = 'storage/photo/'.$this->uploadFile(
                $input['photo'],
                'photo',
            );
        }

        $about = About::find($id)->update($input);
        
        return redirect()->route('admin.about.index')->with('toastSuccess', __('crud.created', ['name' => 'About']));
    }
}
