<?php
namespace app\index\controller;
use think\Controller;

class Index extends Base
{
    public function index()
    {
        $datas = model('Deal')->getNormalDealByCategoryCityId(1, $this->city->id);
        // 获取4个子分类
        $assortment = model('Category')->getNormalRecommendCategoryByParentId(1, 4);
        return $this->fetch('',[
            'datas' => $datas,
            'assortment' => $assortment,
        ]);
    }
}
