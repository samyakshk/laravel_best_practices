<?php namespace Modules\Opportunity\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class OpportunityController extends Controller {
	
	public function index()
	{
		return view('opportunity::index');
	}
	
}