<?php  namespace App\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

/**
 * BaseController
 * 
 * @author Bruno Barros  <bruno@brunobarros.com>
 * @copyright	Copyright (c) 2014 Bruno Barros
 */
class BaseController extends Controller{


	/**
	 * Share data
	 *
	 * @param string|array $key
	 * @param null|mixed $value
	 * @return void
	 */
	protected function share($key, $value = null)
	{
		View::share($key, $value);
	}


} 