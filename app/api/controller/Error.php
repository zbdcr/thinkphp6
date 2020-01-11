<?php
namespace app\api\controller;

class Error
{
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        return show(1,'控制器不存在:'.$name,$arguments, 400);
    }
}
