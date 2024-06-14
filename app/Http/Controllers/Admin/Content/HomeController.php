<?php

namespace App\Http\Controllers\Admin\Content;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = Home::first();
        if (is_null($data)) $data = Home::create([]);

        return view('admin.pages.home.index', compact('data'));
    }

    public function edit(Request $request,$id)
    {
        $input = $request->all();

        if($request->hasFile('slider_banner')){
            $input['image'] = 'storage/slider_banner/'.$this->uploadFile(
                $input['image'],
                'slider_banner',
            );
        }
        if($request->hasFile('image_section_one')){
            $input['image_section_one'] = 'storage/section/'.$this->uploadFile(
                $input['image_section_one'],
                'section',
            );
        }
        if($request->hasFile('icon_one')){
            $input['icon_one'] = 'storage/icon/'.$this->uploadFile(
                $input['icon_one'],
                'icon',
            );
        }
        if($request->hasFile('icon_two')){
            $input['icon_two'] = 'storage/icon/'.$this->uploadFile(
                $input['icon_two'],
                'icon',
            );
        }
        if($request->hasFile('icon_three')){
            $input['icon_three'] = 'storage/icon/'.$this->uploadFile(
                $input['icon_three'],
                'icon',
            );
        }
        if($request->hasFile('image_section_three')){
            $input['image_section_three'] = 'storage/section/'.$this->uploadFile(
                $input['image_section_three'],
                'section',
            );
        }

        if($request->hasFile('promise_banner')){
            $input['promise_banner'] = 'storage/promise/'.$this->uploadFile(
                $input['promise_banner'],
                'promise',
            );
        }

        $home = Home::find($id)->update($input);
        
        return redirect()->route('admin.home.index')->with('toastSuccess', __('crud.created', ['name' => 'Home']));
    }
}
