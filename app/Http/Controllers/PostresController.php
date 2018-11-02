<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postres;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;

class PostresController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$postres = Postres::all();
        return view('admin.postres.index', compact('postres')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $postres = Postres::all();
        return view('admin.postres.create', compact('postres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemCreateRequest $request)
    {
        $postres = new Postres;

        $postres->nombre = $request->nombre;
        $postres->precio = $request->precio;
        $postres->stock = $request->stock;
        $postres->imagen = $request->file('imagen')->store('postres');

        $postres->save();

        return redirect('admin/postres')->with('message','Guardado Satisfactoriamente !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postres = Postres::find($id);
        return view('admin/postres.edit',['postres'=>$postres]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemUpdateRequest $request, $id)
    {        
        $postres = Postres::find($id);

        $postres->nombre = $request->nombre;
        $postres->precio = $request->precio;
        $postres->stock = $request->stock;

        if ($request->hasFile('imagen')) {
            $postres->imagen = $request->file('imagen')->store('postres');
        }

        $postres->save();

        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/postres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imagen = Postres::find($id);

        foreach($imagen as $image){
            Storage::delete($image['imagen']);
        }

        Postres::destroy($id);        

        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/postres');
    }
    

}
