<?php
namespace addons;

use think\Request;

abstract class Addons
{

    /**
     * 需要配置的数组
     */
    protected $_config = [];

    /** 安装方法 */
    public abstract function up();

    /** 卸载方法 */
    public abstract function down();

    /** 升级方法 */
    public abstract function upgrade();

    /** 插件配置方法 */
    public abstract function config(Request $request);

}