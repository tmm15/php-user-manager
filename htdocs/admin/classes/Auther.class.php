<?php

class Auther{

    const LOGIN_CHK_KEY="isLogin";

  private $sessionId=null;

  public function __construct()
  {
    session_start();
    $this->sessionId = session_id();
  }

  public function login_chk($is_top = false)
  {
    if($is_top) {
      if(!empty($_SESSION[ Auther::LOGIN_CHK_KEY ])) {
        header("Location: ./list.php");
        exit;
      }
    } else {
      if(empty($_SESSION[ Auther::LOGIN_CHK_KEY ])) {
        header("Location: ./login.php");
        exit;
      }
    }
  }

  public function login($mail_adress, $pass_word)
  {
    if($mail_adress === "aaa@aaa.com" && $pass_word === "aaaaa") {
      return true;
    }else{
      return false;
    }
  }
}
