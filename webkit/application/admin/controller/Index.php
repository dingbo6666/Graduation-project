<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
     return $this -> fetch();
    }
    public function map() {
        return \Map::staticimage('北京昌平沙河地铁');
    }
    public function welcome()
    {
      \phpmailer\Email::send('978723801@qq.com','email','hello');
      return '发送邮件成功';
     //return $this -> fetch();
     return "欢迎来到商城后台首页！";
    }
}
