<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\palylistname;
use App\Models\playlistsongs;
Use \Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    //
    function Playlists_all() {
        $playlist_headings = DB::table('palylistnames')->select('id', 'playlistname')->get(); 
        $playlists = DB::table('palylistnames')->join('playlistsongs', 'palylistnames.id', '=', 'playlistsongs.playlist_id')->get();
        
        $allPlaylists = [
            "Headings"=> $playlist_headings,
            "Songs"=> $playlists
        ]; 

        return $allPlaylists;
        
    }

    function Adds() {
        return DB::table('local_ads')->get();
    }
    function index(Request $request)
    {
        $user= User::where('email', $request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }

    function schedule_all() {
        $date = Carbon::now();
        $date2 = Carbon::now();
        $date3 = Carbon::now();
        $date4 = Carbon::now();
        $date5 = Carbon::now();
        $date6 = Carbon::now();
        $date7 = Carbon::now();
        $day1 = DB::table('day1s')->get();
        $day2 = DB::table('day2s')->get();
        $day3 = DB::table('day3s')->get();
        $day4 = DB::table('day4s')->get();
        $day5 = DB::table('day5s')->get();
        $day6 = DB::table('day6s')->get();
        $day7 = DB::table('day7s')->get(); // adding 10 days from today on
// If $date is Monday, return $date. Otherwise, add days until next Monday.
$monday = $date->is('Monday') ? $date : $date->next('Monday');
$tuesday = $date2->is('Tuesday') ? $date2 : $date2->next('Tuesday');
$wednesday = $date3->is('Wednesday') ? $date3 : $date3->next('Wednesday');
$thursday = $date4->is('Thursday') ? $date4 : $date4->next('Thursday');
$friday = $date5->is('Friday') ? $date5 : $date5->next('Friday');
$saturday = $date6->is('Saturday') ? $date6 : $date6->next('Saturday');
$sunday = $date7->is('Sunday') ? $date7 : $date7->next('Sunday');


// echo $monday;
// echo $tuesday;
// echo $wednesday;
// echo $thursday;
// echo $friday;
// echo $saturday;
// echo $sunday;

        $data = [
            "Monday"=> [
            "date"=> $monday,
            "schedule"=> $day1
            ],
            "Tuesday"=> [
                "date"=> $tuesday,
                "schedule"=> $day2
                ],
            "Wednesday"=> [
                "date"=> $wednesday,
                "schedule"=> $day3
                ],
            "Thursday"=> [
                "date"=> $thursday,
                "schedule"=> $day4
                ],
            "Friday"=> [
                "date"=> $friday,
                "schedule"=> $day5
                ],
            "Saturday"=> [
                "date"=> $saturday,
                "schedule"=> $day6
                ],
            "Sunday"=> [
                "date"=> $sunday,
                "schedule"=> $day7
                ],
        ];
        return $data;
    }

}
