<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileDataController extends Controller
{
    public function index()
    {
        $identityValues = [
            'Full Name' => 'Kadek Dwi Pelita Pramana',
            'Nickname' => 'Pramana / Dp',
            'Gender' => 'Male',
            'Phone' => '089686365749',
            'Place of Birth' => 'Denpasar',
            'Date of Birth' => '30 March 2005',
            'Address' => 'Jl. Bantas Kangin GG.II No.6 Lingk. Pasek Kedonganan',
        ];

        return view('profiles.profile', compact('identityValues'));
    }
}
