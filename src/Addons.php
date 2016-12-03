<?php
namespace addons;

use think\Request;

abstract class Addons
{

    /**
     * 插件需要的配置
     */
    protected $_config = [];

    /**
     * 插件注册的业务钩子
     * @var array
     */
    protected $modelHook = [];

    /**
     * 插件注册的视图钩子
     * @var array
     */
    protected $viewHook = [];

    /** 安装方法 */
    public abstract function up();

    /** 卸载方法 */
    public abstract function down();

    /** 升级方法 */
    public abstract function upgrade();

    /** 插件配置方法 */
    public abstract function config(Request $request);

}