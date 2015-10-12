<?php namespace miApp;

use Illuminate\Database\Eloquent\Model;

class ModuleRole extends Model {

	protected $table = "modules_roles";
	
	//protected $fillable = ['role_id'];
	
	public static function getModuleRoleByModule($module_id){
		return \DB::table('modules_roles')
			->join('roles','modules_roles.role_id','=','roles.id')
			->join('modules','modules_roles.module_id','=','modules.id')
			->where("module_id",'=',$module_id)
			->select('modules_roles.*','modules.name as module_name','roles.name as role_name')
			->get();
	}

}
