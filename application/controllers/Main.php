<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library("Aauth");
        $this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function admin() {
		$this->load->view('admin');
	}

	public function site_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if ($this->aauth->login($username, $password)) {
			$userinfo = array(
		        'username'  => $username,
				'is_admin' => $this->aauth->control('admin'),
		        'logged_in' => TRUE
			);
			$this->session->set_userdata($userinfo);
            redirect(site_url());
        } else {
            $this->session->set_flashdata('error', 'Incorrect username or password');
            redirect(site_url());
        }
	}

	public function signup() {
		$this->load->view('signup');
	}

	public function admin_login() {
		$something = $this->input->post('something');
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_admin');
		$this->session->unset_userdata('logged_in');
		redirect(site_url());
	}
}
