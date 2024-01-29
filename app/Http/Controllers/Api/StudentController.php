<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tugas;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function Index(){
        $data = Tugas::all();

        return response()->json(['data' => $data]);
    }
}
