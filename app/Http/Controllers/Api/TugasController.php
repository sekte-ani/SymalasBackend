<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
     public function DataMatkul(){
        try{
            $data = Tugas::all();

            return response()->json(['data' => $data]);
        }catch(\Exception $e){
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
