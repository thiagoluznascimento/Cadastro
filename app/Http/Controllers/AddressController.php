<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
    public function index($id_address = 0){
        if ($id_address == 0){
            $address = [];
        }
        else {
            $address = Address::where('id', $id_address)->first();
        }
        $addresses = Address::where('user_id', Auth::id())->get();
        return view('address')->with('addresses', $addresses)->with('address', $address);
    }

    public function insertAddress(Request $request){

        $rules = [
            'city' => 'required|min:3|max:20',
            'district' => 'required|min:3|max:50',
            'street' => 'required|min:3|max:100',
            'number' => 'required|integer|min:0'
        ];

        $mensagens = [
            'require' => 'Campo obrigatório',

            'city.min' => 'Minimo 3 digitos',
            'city.max' => 'Máximo 20 digitos',

            'district.min' => 'Minimo 3 digitos',
            'district.max' => 'Máximo 50 digitos',

            'street.min' => 'Minimo 3 digitos',
            'street.max' => 'Máximo 100 digitos',

            'number.min' => 'Nao aceita número negativo',
        ];

        $request->validate($rules, $mensagens);

        Address::create([
            'user_id' => Auth::id(),
            'city' => $request->input('city'),
            'district' => $request->input('district'),
            'street' => $request->input('street'),
            'number' => $request->input('number'),
        ]);
        return redirect()->action([AddressController::class, 'index'], $id_address = 0);
    }


    public function updateAddress(Request $request){
        $rules = [
            'city' => 'required|min:3|max:20',
            'district' => 'required|min:3|max:50',
            'street' => 'required|min:3|max:100',
            'number' => 'required|integer|min:0'
        ];

        $mensagens = [
            'require' => 'Campo obrigatório',
            'city.min' => 'Minimo 3 digitos',
            'city.max' => 'Máximo 20 digitos',
            'district.min' => 'Minimo 3 digitos',
            'district.max' => 'Máximo 50 digitos',
            'street.min' => 'Minimo 3 digitos',
            'street.max' => 'Máximo 100 digitos',
            'number.min' => 'Nao aceita número negativo',
        ];

        $request->validate($rules, $mensagens);

        Address::find($request->id)->update([
            'user_id' => Auth::id(),
            'city' => $request->input('city'),
            'district' => $request->input('district'),
            'street' => $request->input('street'),
            'number' => $request->input('number'),
        ]);
        return redirect()->action([AddressController::class, 'index'], $id_address = 0);

    }


    public function deleteAddress($id_address){
        Address::destroy($id_address);
        return redirect()->action([AddressController::class, 'index'], $id_address = 0);
    }

}
