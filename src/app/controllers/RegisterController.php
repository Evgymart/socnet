<?php

use Phalcon\Mvc\Controller;
use Phalcon\Tag;

class RegisterController extends Controller
{
	public function initialize()
	{
		$this->tag->title()->set('Register an account');
	}

	public function indexAction()
	{
	}
}
