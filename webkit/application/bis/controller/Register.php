<?php
namespace app\bis\controller;
use think\Controller;
class Register extends Controller
{
  public function index()
  {
    $citys = model('City')->getNormalCitysByParentId();
    $categorys = model('Category')->getNormalCategoryByParentId();
    return $this->fetch('',[
        'citys' => $citys,
        'categorys' => $categorys,
    ]);
  }

}
