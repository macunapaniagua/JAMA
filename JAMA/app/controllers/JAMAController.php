<?php

class JAMAController extends BaseController{


	public function getIndex(){
		return View::make('hello');
	}


	public function getRegistro(){

		$usuarios = RegistroModel::all();
		
		//return $usuarios;

		return Response::json(array('error' => false, 'usuario' => $usuarios->toArray()), 200);
	}

	public function getMenu(){

		$menu = MenuModel::all();
		return $menu;

		if (Request::wantsJson()){
			return 'Esta pidiendo un json';
		}else{
			return 'No esta pidiendo el json';
		}

		//return Response::json(data, status, headers)
	}

	public function getServicio(){

		$comida = MenuModel::all();
		for($comida as $plato){
			$plato->
		}
	}
}

?>