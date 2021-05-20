<?php

namespace App\Http\Controllers;

class BackendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index(){
        return redirect("https://vaxifinder.live");
    }

    public function getSessionsByPin(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,'https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByPin?pincode='
                .request()->pincode.'&date='.request()->date);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $result = json_decode($response);
        curl_close($ch);
        return response()->json($result);
    }
}
