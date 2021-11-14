<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Torann\GeoIP\GeoIP;

class DashboardController extends Controller
{
    // views Route
    public function index()
    {
        //
    }
    public function ipCheckView(){
        // $ip = geoip()->getLocation('YOUR_IP_ADDRESS_HERE');
        dd(geoip()->getLocation());
        return view('dashboard.home');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
