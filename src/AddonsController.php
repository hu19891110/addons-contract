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

	/** 
	 * 视图输出渲染
	 * @param  string $file 模板文件
	 * @param  array  $data 渲染参数
	 * @return think\View
	 */
    protected function output($file, $data = [])
    {
        $path = __DIR__ . DS . '..' . DS . 'view' . DS . $file . '.html';

        if (!file_exists($path)) {
            throw new \Exception("{$path} template file not exists.");
        }

        return $this->fetch($path, $data);
    }

}