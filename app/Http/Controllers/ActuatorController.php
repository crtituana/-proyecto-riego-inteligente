<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Actuator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ActuatorController extends Controller

{
    public function getActuator(Request $request){
        $actuator = Actuator::get();
        return response()->json($actuator, 200);
    }
    public function postActuator(Request $request){
        $data = $request->json()->all();
        $actuator = Actuator::create([
            'state'=> $data['state'],
        ]);
        return response()->json($actuator, 201);
    }
    public function putActuator(Request $request){
        $data = $request->json()->all();
        $actuator = Actuator::findOrFail($data['id']);
        $response = $actuator->update([
            'state'=> $data['state'],
        ]);
        return response()->json($actuator, 201);
    }
    public function deleteActuator(Request $request){
        $data = $request->json()->all();
        $actuator = Actuator::findOrFail($data['id']);
        $response = $actuator->delete();
        return response()->json($actuator, 201);
    }
}