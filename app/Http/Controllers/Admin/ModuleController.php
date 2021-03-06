<?php namespace miApp\Http\Controllers\Admin;

use miApp\Http\Requests;
use miApp\Http\Controllers\Controller;

use Illuminate\Http\Request;
use miApp\Module;
use miApp\miApp;
use miApp\Roles;
use miApp\ModuleRole;

class ModuleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$modules = Module::paginate(15);
		return view("admin.module.index")->with("modules",$modules);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("admin.module.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
	
		//dd($request->all());
		
		try{
			$module = new Module($request->all());
			$module->save();
		}catch (QueryException $e){
		
			flash()->overlay("Ocurrió un error en el registro, consulte con el administrador",'Aviso');
			return redirect()->back()->withInput($request->all());
		}
		flash()->overlay('Tu registro ha sido creado!','Aviso');
		return redirect("admin/module");
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$module = Module::findOrFail($id);
		return view("admin.module.delete")->with("module",$module);
	}
	/**
	 * Muestra una vista con los permisos
	 */
	public function showPermissions($id){
		$module = Module::findOrFail($id);
		$roles = Roles::all(['id','slug','name','permissions']);
		$moduleRole = ModuleRole::getModuleRoleByModule($id);
		return view("admin.module_role.edit")->with(['module'=>$module,'roles'=>$roles,'moduleRole'=>$moduleRole]);
		
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$module = Module::findOrFail($id);
		return view("admin.module.edit")->with("module",$module);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$module = Module::findOrFail($id);
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
		$module = Module::findOrFail($id);
		try{
			$module->delete();
		}catch (QueryException $e){
			flash()->overlay("Ocurrió un error en el registro, consulte con el administrador",'Aviso');
			return redirect()->back()->withInput($request->all());
		}
		flash()->overlay('The item has been delete!','Aviso');
		return redirect("admin/module");
	}
	
	public function permission(Request $request){
		try{
			
		}catch (QueryException $e){
			flash()->overlay("Ocurrió un error en el registro, consulte con el administrador",'Aviso');
			return redirect()->back()->withInput($request->all());
		}
		flash()->overlay('The item has been delete!','Aviso');
		return redirect("admin/module");
		
	}

}
