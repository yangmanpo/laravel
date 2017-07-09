<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    //建立模型 指向test表格
    protected $table = 'test';
    //不要时间戳
    public $timestamp = false;
}
