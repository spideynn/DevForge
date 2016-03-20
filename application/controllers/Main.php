<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library("Aauth");
        $this->load->helper('url');
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
            redirect(site_url());
        } else {
            $this->session->set_flashdata('error', 'Incorrect username or password');
            redirect(site_url());
        }
	}

	public function signup() {
		$something = $this->input->post('something');
	}

	public function admin_login() {
		$something = $this->input->post('something');
	}
}
