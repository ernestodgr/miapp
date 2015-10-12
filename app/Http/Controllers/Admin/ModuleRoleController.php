<?php namespace miApp\Http\Controllers\Admin;

use miApp\Http\Requests;
use miApp\Http\Controllers\Controller;

use Illuminate\Http\Request;
use miApp\ModuleRole;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Illuminate\Http;

class ModuleRoleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		
		//dd(ModuleRole::getModuleRole());
		
		//dd(\DB::getQueryLog());
		try{
			$module->fill($request->all());
			$module->save();
		}catch (QueryException $e){
		
			flash()->overlay("Ocurrió un error en el registro, consulte con el administrador",'Aviso');
			return redirect()->back()->withInput($request->all());
		}
		flash()->overlay('Tu registro ha sido modificado!','Aviso');
		return redirect("admin/module");
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
