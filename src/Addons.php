<?php
namespace Qsnh\think\Addons;

abstract class Addons
{

    /** 安装方法 */
    public abstract function up();

    /** 卸载方法 */
    public abstract function down();

    /** 升级方法 */
    public abstract function upgrade();

}