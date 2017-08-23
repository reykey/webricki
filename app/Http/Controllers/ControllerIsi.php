<?php
	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;

	class ControllerIsi extends Controller
	{
		public function index(){
			return view('home');
		}
		public function project(){
			return view('project');
		}
		
	}