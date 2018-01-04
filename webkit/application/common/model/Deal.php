<?php
namespace app\common\model;

use think\Model;

class Deal extends BaseModel
{
  public function getNormalDeals($data = []) {
    $data['status'] = 1;
    $order = ['id'=>'desc'];

    $result = $this->where($data)
      ->order($order)
      ->paginate(1);
    return  $result;
  }
}
