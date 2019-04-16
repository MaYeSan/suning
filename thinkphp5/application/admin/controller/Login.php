<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Login extends controller
{
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
    public function shouye(){
		return $this->fetch('index/index');

    }
    public function welcome(){
		return $this->fetch('index/welcome');

    }
}