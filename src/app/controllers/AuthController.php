<?php

use Phalcon\Mvc\Controller;

class AuthController extends Controller
{
    public function indexAction()
	{
		$this->response->redirect('/auth/login');
    }

	public function loginAction()
	{
		return "Login!";
	}

	public function registerAction()
	{
    }
}
