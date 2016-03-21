<?php namespace Modules\Migration\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class MigrationController extends Controller {
	
	public function index()
	{
		return view('migration::index');
	}
	
}