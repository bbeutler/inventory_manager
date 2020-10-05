<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->template->render();
	}

	public function login_auth()
	{

	}

	public function logout()
    {
        $this->session->sess_destroy();
        $this->bitauth->delete_remember_token();
        $this->bitauth->logout();

        redirect('home');
    }
}

