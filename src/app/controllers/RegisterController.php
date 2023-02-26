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
		if ($this->request->isPost()) {
			$registerData = [
				'first_name' => $this->request->getPost('fname', 'string'),
				'last_name' => $this->request->getPost('lname', 'string'),
				'birthdate' => $this->request->getPost('birthdate', 'string'),
				'gender' => $this->request->getPost('gender', 'string'),
				'email' => $this->request->getPost('email', 'string'),
				'city' => $this->request->getPost('city', 'string'),
				'interests' => $this->request->getPost('interests', 'string'),
			];

			$registerData = array_filter($registerData);

			die(print_r($registerData, true));
		}
	}
}
