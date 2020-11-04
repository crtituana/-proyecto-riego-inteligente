<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ControllerController extends Controller

{
    public function getController(Request $request){
        $controller = Controller::get();
        return response()->json($controller, 200);
    }
    public function postController(Request $request){
        $data = $request->json()->all();
        $controller = Controller::create([
            'state'=> $data['state'],
        ]);
        return response()->json($controller, 201);
    }
    public function putController(Request $request){
        $data = $request->json()->all();
        $controller = Controller::findOrFail($data['id']);
        $response = $controller->update([
            'state'=> $data['state'],
        ]);
        return response()->json($controller, 201);
    }
    public function deleteController(Request $request){
        $data = $request->json()->all();
        $controller = Controller::findOrFail($data['id']);
        $response = $controller->delete();
        return response()->json($controller, 201);
    }
}