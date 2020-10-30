<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sensor;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SensorController extends Controller

{
    public function getSensor(Request $request){
        $sensor = Sensor::get();
        return response()->json($sensor, 200);
    }
    public function postSensor(Request $request){
        $data = $request->json()->all();
        $sensor = Sensor::create([
            'state'=> $data['state'],
        ]);
        return response()->json($sensor, 201);
    }
    public function putSensor(Request $request){
        $data = $request->json()->all();
        $sensor = Sensor::findOrFail($data['id']);
        $response = $sensor->update([
            'state'=> $data['state'],
        ]);
        return response()->json($sensor, 201);
    }
    public function deleteSensor(Request $request){
        $data = $request->json()->all();
        $sensor = Sensor::findOrFail($data['id']);
        $response = $sensor->delete();
        return response()->json($sensor, 201);
    }
}