<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\Type;
use App\Item;
use DB;
use Auth;

class RefundsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Gate::allows('isUser')){
            abort(404,"Desculpe, você não tem acesso a essa área.");
        };
        $type = Type::all();
        return view('refund.index', compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $count = count($request['type_id']);
        $id_type = "";
        for ($i=0; $i < $count; $i++) { 
            $id_type = $id_type . $request['type_id'][$i].','; 
        }
        try {             
            $request['type_id'] = substr($id_type, 0, -1 );
            Item::create($request->all());
            return "Cadastrado";
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type = Type::where('id' , $id)->get();
        dd($type);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = Type::where('id' , $id)->get();
        dump($type);
        return 'chama o form '.$id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
