<?php
namespace app\common\model;

use think\Model;

class Featured extends BaseModel
{
  public function getFeaturedsByType($type) {
      $data = [
          'type' => $type,
          'status' => ['neq', -1],
      ];

      $order = ['id'=>'desc'];

      $result = $this->where($data)
          ->order($order)
          ->paginate();
      return $result;
  }
}
