<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\localAds;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

class AddsController extends Controller
{
    //
    public function index()
    {
        $Adds = localAds::all();
        
        return view('Ads/Ads', compact('Adds'));
    }

    public function storeAdd(Request $request)
    {
        // Add Picture
        
        $validator = Validator::make($request->all(), ['add_img' => ['required', File::image()->max(2 * 1024)]]);
        
        if ($validator->fails()) return back()->with('fail', $validator->messages());

        $filenameWithExt = $request->file('add_img')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('add_img')->getClientOriginalExtension();
        $Add = $filename.'_'.time().'.'.$extension;
        $request->file('add_img')->storeAs('public/Adds',$Add);
        $Image_Path = URL::to('/') . '/storage/Adds/' . $Add;
        $localAdd = new localAds([
            'company_name' => $request->get('company_name'),
            'url' => $request->get('add_url'),
            'cover' => $Image_Path,
        ]);
        $localAdd->save();
        return redirect('/Adds');
    }

    public function destroy($id)
    {
            localAds::destroy(array('id',$id));
            return redirect('/Adds');
    }
}
