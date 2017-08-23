<?php
	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;
	use App\Http\CatalogModel;

	class ControllerCatalog extends Controller
	{
		public function index($id_project){
			$data['title'] = "Project ";
			$data['catalog'] = CatalogModel::detail_catalog();
			//$data['catalog'] = CatalogModel::where('id_project', $id_project)->get();
			return view('project', $data);
		}
		public function project(){
			return view('project');
		}
		
	}