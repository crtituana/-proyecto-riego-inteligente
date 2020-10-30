<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Exception;
use App\Customer;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class CustomerController extends Controller

{
    public function getCustomer(Request $request){
        $customer = Customer::get();
        return response()->json($customer, 200);
    }
    public function postCustomer(Request $request){
        $data = $request->json()->all();
        $customer = Customer::create([
            'state'=> $data['state'],
        ]);
        return response()->json($customer, 201);
    }
    public function putCustomer(Request $request){
        $data = $request->json()->all();
        $customer = Customer::findOrFail($data['id']);
        $response = $customer->update([
            'state'=> $data['state'],
        ]);
        return response()->json($customer, 201);
    }
    public function deleteCustomer(Request $request){
        $data = $request->json()->all();
        $customer = Customer::findOrFail($data['id']);
        $response = $customer->delete();
        return response()->json($customer, 201);
    }
}