<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\API\Vpn;

class VpnController extends Controller
{
    public function index()
    {
        $vpn = new Vpn();
        $vpnList = $vpn->getVpn();

        // dd($vpnList);

        return view('welcome', compact('vpnList'));
    }
}
