<?php
namespace Qsnh\think\Addons;

use think\Controller;

class AddonsController extends Controller 
{

	public function __call($name, $value)
	{
		throw new \Exception("The {$name} Methods does not exist.");
	}

}