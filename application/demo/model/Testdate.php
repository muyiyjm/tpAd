<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/18
 * Time: 15:09
 */

namespace app\demo\model;

use think\Model;
class Testdate extends Model
{
    protected $table = 'testdate';
    public function pics()
    {
        return $this->hasOne('pics','bid');
    }
}