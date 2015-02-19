<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$users = User::all();

		$this->load->view('welcome_message', ['users' => $users]);
	}
}
