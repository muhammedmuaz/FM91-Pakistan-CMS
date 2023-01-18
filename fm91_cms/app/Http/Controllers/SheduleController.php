<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\schedule;
use App\Models\day1;
use App\Models\day2;
use App\Models\day3;
use App\Models\day4;
use App\Models\day5;
use App\Models\day6;
use App\Models\day7;
use App\Models\palylistname;
use Illuminate\Support\Facades\Redirect;

class SheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $day1 = day1::all();
        $day2 = day2::all();
        $day3 = day3::all();
        $day4 = day4::all();
        $day5 = day5::all();
        $day6 = day6::all();
        $day7 = day7::all();
        
        return view('schedule', compact('day1', 'day2', 'day3', 'day4', 'day5', 'day6', 'day7')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("schedule-form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        if ($request->get('Week_Day') == '1') {
            if($request->hasFile('showpic')){
                $filenameWithExt = $request->file('showpic')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                 $extension = $request->file('showpic')->getClientOriginalExtension();
                  $fileNameToStore = $filename.'_'.time().'.'.$extension;
                  $request->file('showpic')->storeAs('public/images',$fileNameToStore);
                
            $day = new day1([
                'showname' => $request->get('showname'),
                'authorname' => $request->get('authorname'),
                'details' => $request->get('details'),
                'showPicture' => $fileNameToStore,
                'starttime' => $request->get('starttime'),
                'closetime' => $request->get('endtime'),
                
            ]);
            $day->save();
        }
        }
        elseif ($request->get('Week_Day') == '2') {
            if($request->hasFile('showpic')){
                $filenameWithExt = $request->file('showpic')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                 $extension = $request->file('showpic')->getClientOriginalExtension();
                  $fileNameToStore = $filename.'_'.time().'.'.$extension;
                  $request->file('showpic')->storeAs('public/images',$fileNameToStore);
                
                $day = new day2([
                    'showname' => $request->get('showname'),
                    'authorname' => $request->get('authorname'),
                    'details' => $request->get('details'),
                    'showPicture' => $fileNameToStore,
                    'starttime' => $request->get('starttime'),
                    'closetime' => $request->get('endtime'),
        
                ]);
                $day->save();
            }

    }
        elseif ($request->get('Week_Day') == '3') {
                if($request->hasFile('showpic')){
                    $filenameWithExt = $request->file('showpic')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                     $extension = $request->file('showpic')->getClientOriginalExtension();
                      $fileNameToStore = $filename.'_'.time().'.'.$extension;
                      $request->file('showpic')->storeAs('public/images',$fileNameToStore);
                    
                $day = new day3([
                    'showname' => $request->get('showname'),
                    'authorname' => $request->get('authorname'),
                    'details' => $request->get('details'),
                    'showPicture' => $fileNameToStore,
                    'starttime' => $request->get('starttime'),
                    'closetime' => $request->get('endtime'),
        
                ]);
                $day->save();
            }
             }
             elseif ($request->get('Week_Day') == '4') {
                if($request->hasFile('showpic')){
                    $filenameWithExt = $request->file('showpic')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                     $extension = $request->file('showpic')->getClientOriginalExtension();
                      $fileNameToStore = $filename.'_'.time().'.'.$extension;
                      $request->file('showpic')->storeAs('public/images',$fileNameToStore);
                    
                $day = new day4([
                    'showname' => $request->get('showname'),
                    'authorname' => $request->get('authorname'),
                    'details' => $request->get('details'),
                    'showPicture' => $fileNameToStore,
                    'starttime' => $request->get('starttime'),
                    'closetime' => $request->get('endtime'),
        
                ]);
                $day->save();
            }
             }
             elseif ($request->get('Week_Day') == '5') {
                if($request->hasFile('showpic')){
                    $filenameWithExt = $request->file('showpic')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                     $extension = $request->file('showpic')->getClientOriginalExtension();
                      $fileNameToStore = $filename.'_'.time().'.'.$extension;
                      $request->file('showpic')->storeAs('public/images',$fileNameToStore);
                    
                $day = new day5([
                    'showname' => $request->get('showname'),
                    'authorname' => $request->get('authorname'),
                    'details' => $request->get('details'),
                    'showPicture' => $fileNameToStore,
                    'starttime' => $request->get('starttime'),
                    'closetime' => $request->get('endtime'),
        
                ]);
                $day->save();
            }
             }
             elseif ($request->get('Week_Day') == '6') {
                if($request->hasFile('showpic')){
                    $filenameWithExt = $request->file('showpic')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                     $extension = $request->file('showpic')->getClientOriginalExtension();
                      $fileNameToStore = $filename.'_'.time().'.'.$extension;
                      $request->file('showpic')->storeAs('public/images',$fileNameToStore);
                    
                $day = new day6([
                    'showname' => $request->get('showname'),
                    'authorname' => $request->get('authorname'),
                    'details' => $request->get('details'),
                    'showPicture' => $fileNameToStore,
                    'starttime' => $request->get('starttime'),
                    'closetime' => $request->get('endtime'),
        
                ]);
                $day->save();
            }
             }
             else {
                if($request->hasFile('showpic')){
                    $filenameWithExt = $request->file('showpic')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                     $extension = $request->file('showpic')->getClientOriginalExtension();
                      $fileNameToStore = $filename.'_'.time().'.'.$extension;
                      $request->file('showpic')->storeAs('public/images',$fileNameToStore);
                    
                $day = new day7([
                    'showname' => $request->get('showname'),
                    'authorname' => $request->get('authorname'),
                    'details' => $request->get('details'),
                    'showPicture' => $fileNameToStore,
                    'starttime' => $request->get('starttime'),
                    'closetime' => $request->get('endtime'),
        
                ]);
                $day->save();
            }
             }

             return Redirect('/schedule');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id, $day)
    {
        if ($request->get('Week_Day') == '1') {

            $day = day1::find($id);
            $day->showname = $request->get('showname');
            $day->authorname = $request->get('authorname');
            $day->details = $request->get('details');
            $day->starttime = $request->get('starttime');
            $day->closetime = $request->get('endtime');
            $day->save();
        }
        elseif ($request->get('Week_Day') == '2') {
            $day = day2::find($id);
            $day->showname = $request->get('showname');
            $day->authorname = $request->get('authorname');
            $day->details = $request->get('details');
            $day->starttime = $request->get('starttime');
            $day->closetime = $request->get('endtime');
            $day->save();
        }
        elseif ($request->get('Week_Day') == '3') {
            $day = day3::find($id);
            $day->showname = $request->get('showname');
            $day->authorname = $request->get('authorname');
            $day->details = $request->get('details');
            $day->starttime = $request->get('starttime');
            $day->closetime = $request->get('endtime');
            $day->save();
        }
        elseif ($request->get('Week_Day') == '4') {
            $day = day4::find($id);
            $day->showname = $request->get('showname');
            $day->authorname = $request->get('authorname');
            $day->details = $request->get('details');
            $day->starttime = $request->get('starttime');
            $day->closetime = $request->get('endtime');
            $day->save();
        }
        elseif ($request->get('Week_Day') == '5') {
            $day = day5::find($id);
            $day->showname = $request->get('showname');
            $day->authorname = $request->get('authorname');
            $day->details = $request->get('details');
            $day->starttime = $request->get('starttime');
            $day->closetime = $request->get('endtime');
            $day->save();
        }
        elseif ($request->get('Week_Day') == '6') {
            $day = day6::find($id);
            $day->showname = $request->get('showname');
            $day->authorname = $request->get('authorname');
            $day->details = $request->get('details');
            $day->starttime = $request->get('starttime');
            $day->closetime = $request->get('endtime');
            $day->save();
        }
        else {
            $day = day7::find($id);
            $day->showname = $request->get('showname');
            $day->authorname = $request->get('authorname');
            $day->details = $request->get('details');
            $day->starttime = $request->get('starttime');
            $day->closetime = $request->get('endtime');
            $day->save();
        }
        return Redirect('/schedule');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, $day)
    {
        if ($day == '1') {
            $day = day1::find($id);
            $week = '1';
        }
        elseif ($day == '2'){
            $day = day2::find($id);
            $week = '2';
        }
        elseif ($day == '3'){
            $day = day3::find($id);
            $week = '3';
        }
        elseif ($day == '4'){
            $day = day4::find($id);
            $week = '4';
        }
        elseif ($day == '5'){
            $day = day5::find($id);
            $week = '5';
        }
        elseif ($day == '6'){
            $day = day6::find($id);
            $week = '6';
        }
        else {
            $day = day7::find($id);
            $week = '7';
        }
        return view('schedule-form',compact('day', 'week'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $day)
    {
        //
        if ($day == '1') {
            $day = day1::destroy(array('id',$id));
        }
        elseif ($day == '2'){
            $day = day2::destroy(array('id',$id));
        }
        elseif ($day == '3'){
            $day = day3::destroy(array('id',$id));
        }
        elseif ($day == '4'){
            $day = day4::destroy(array('id',$id));
        }
        elseif ($day == '5'){
            $day = day5::destroy(array('id',$id));
        }
        elseif ($day == '6'){
            $day = day6::destroy(array('id',$id));
        }
        else {
            $day = day7::destroy(array('id',$id));
        }
        return Redirect('/schedule');
    }
}
