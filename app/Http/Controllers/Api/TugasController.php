<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Tugas;
use App\Models\VerifyTugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
     public function DataMatkul(){
        try{
            $data = Tugas::all();

            return new StudentResource(true, 200, "Success", $data);
        }catch(\Exception $e){
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    public function DoneMatkul(Request $request){
        $id = $request->user();

        $data = VerifyTugas::where('npm', $id['npm'])->with('tugas')->get();

        return new StudentResource(true, 200, "Success", $data);
    }
}
