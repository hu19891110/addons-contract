<?php
namespace Qsnh\think\Addons;

use think\Controller;

class AddonsController extends Controller 
{
	/** 插件本身信息 */
	protected $me = null;

	public function setMe($addons)
	{
		$this->me = $addons;
	}


	public function __call($name, $value)
	{
		throw new \Exception("The {$name} Methods does not exist.");
	}

}