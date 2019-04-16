<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Login extends controller
{
    /*注册*/
	public function login(){
		return $this->fetch('Login/login');
	}
	public function check()
        {
                    
                      $name=$_POST['name'];
                      $pass=$_POST['pass'];
                      $db=Db::name('user');
                      $user=$db->where('name','=',$name)->find();
                      if($user){
                        $passer=$db->where('pass','=',$pass)->find();
                                if($passer){
                                     session("username",$name);
                                     return 222;
                                    
                                }else{
                                  return 1;//用户密码不正确！
                                }

                      }else{
                        return 2;//用户名不正确！
                      }
                    
                  
        }
    /*首页*/
    public function shouye(){
		return $this->fetch('index/index');

    }
    public function welcome(){
		return $this->fetch('index/welcome');

    }
    /*判断用户名*/
    public function houtai()
    {
        $name=$_POST['name'];
        $db=Db::name('user');
        $res=$db->where('name',$name)->find();
        if($res){
            return 1;
        }else{
            return 2;
        }
    }
}