<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class productocontroller extends Controller
{
    public function getProducto(){
        return response()->json(producto::all(),200);
    }

    public function getProductoid($id){
        $producto = producto::find($id);
        if(is_null($producto)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);

        }
        return response()->json($producto = producto::find($id),200);
    }

    public function insertProducto(Request $request){
        $producto = producto::create($request->all());
        return response($producto,200);
    }

    public function updateProducto(Request $request,$id){
        $producto = producto::find($id);
        if(is_null($producto)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);

        }
        $producto->update($request->all());
        return response($producto,200);
    }

    public function deleteProducto($id){
        $producto = producto::find($id);
        if(is_null($producto)){
            return response()->json(['Mensaje'=>'Registro no encontrado'],404);

        }
        $producto->delete();
        return response()->json(['Mensaje'=>'Registro eliminado'],200);
    }
}
