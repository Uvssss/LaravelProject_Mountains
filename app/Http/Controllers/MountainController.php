<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mountains;

class MountainController extends Controller
{
    public function store(Request $request)
    {
        $id=$request->input('id');
        $mountain = $request->input('Mountain');
    }
}
