<?php
//
// Конттроллер страницы чтения.
//
include_once('models/m_user.php');

class C_User extends C_Base
{
	//
	// Конструктор.
	//
	public $user;
	function __construct(){
		$this->user = new M_User();
	}

	public function action_index(){
		$this->title .= '::Авторизация';
		if (isset($_POST)){
			$this->action_auth();
		} else {
			$this->content = $this->Template('views/v_userAuth.php');
		}
	}
	public function action_auth(){
		$this->title .= '::Авторизация';
		$info = "Пользователь не авторизован";
        if($_POST){
            $login = $_POST['l'];
			$password = $_POST['p'];
            $info .= "<br>".$this->user->auth($login,$password);
		    $this->content = $this->Template('views/v_user.php', array('text' => $info));
		}
		else{
		   $login = $_GET['l'];
		   $password = $_GET['p'];
		   $info = $this->user->auth($login,$password);
		   $this->content = $this->Template('views/v_userAuth.php', array('text' => $info));

		}


		/**/	
	}
	public function action_reg(){
		$this->title .= " :: Регистрация";
		$pars = [];
		if($_POST){
			foreach($_POST as $key => $value){
				$pars[$key] = $value;
			}
            
			$info = $this->user->new($pars);
		    $this->content = $this->Template('views/v_user.php', array('text' => $info));

		} else {
			$this->content = $this->Template('views/v_userReg.php', array('text' => $info));
		}	
	}
	public function action_logOut(){

	}

}
