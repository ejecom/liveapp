<?php

class ClientesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $clientes = Cliente::all();

        return View::make('clientes.index', ['clientes' => $clientes]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return View::make('clientes.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $cliente = new Cliente;

        $cliente->username = Input::get('username');

        $cliente->password = Hash::make( Input::get('password'));

        $cliente->save();

        return Redirect::route('clientes.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return clientes
	 */
	public function show($username)
	{
		//

        $cliente = Cliente::whereUsername($username)->fisrt();
       // $cliente= Cliente::where('username','=',Input::get('email'))->first();

        return View::make('clientes.show', ['cliente' => $cliente]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
