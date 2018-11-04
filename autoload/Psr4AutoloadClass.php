<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 2018/10/25
 * Time: 9:15
 */

namespace AutoLoad;

class Psr4AutoloadClass
{
    /**
     * 命名空间前缀与对应路径的映射
     *
     * @var array
     */
    protected $namespaceMap = [];

    /**
     * 注册自动加载方法
     */
    public function register()
    {
        spl_autoload_register([$this, 'loadClass']);
    }

    /**
     * 添加命名空间映射规则
     *
     * @param string $prefix
     * @param string $base_dir
     * @param bool $prepend
     */
    public function addNamespace($prefix, $base_dir, $prepend = false)
    {
        $prefix = trim($prefix, '\\');
        $base_dir = rtrim($base_dir, '/\\') . DIRECTORY_SEPARATOR;
        if (!isset($this->namespaceMap[$prefix])) {
            $this->namespaceMap[$prefix] = [];
        }
        if ($prepend) {
            array_unshift($this->namespaceMap[$prefix], $base_dir);
        } else {
            array_push($this->namespaceMap[$prefix], $base_dir);
        }
    }

    /**
     * 自动加载方法
     *
     * @param string $class
     * @return bool
     */
    protected function loadClass($class)
    {
        $class = trim($class, '\\');
        $pos = strrpos($class, '\\');
        while ($pos) {
            $prefix = substr($class, 0, $pos);
            $relative_class = substr($class, $pos+1);
            $mapped_file = $this->loadMappedFile($prefix, $relative_class);
            if ($mapped_file) {
                //TODO 单元测试时打开return，关闭break
                break;
//                return $mapped_file;
            }
            $pos = strrpos($prefix, '\\');
        }
        //TODO 单元测试时打开return
//        return false;
    }

    /**
     * 根据映射规则加载对应文件
     *
     * @param string $prefix
     * @param string $relative_class
     * @return bool
     */
    protected function loadMappedFile($prefix, $relative_class)
    {
        if (!isset($this->namespaceMap[$prefix])) {
            return false;
        }
        foreach ($this->namespaceMap[$prefix] as $base_dir) {
            $file = $base_dir . strtr($relative_class, '\\', '/') . '.php';
            if ($this->requireFile($file)) {
                return $file;
            }
        }
        return false;
    }

    /**
     * 文件加载方法
     *
     * @param string $file
     * @return bool
     */
    protected function requireFile($file)
    {
        if (file_exists($file)) {
            require $file;
            return true;
        }
        return false;
    }
}