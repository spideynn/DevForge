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
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function admin() {
		$this->load->view('header');
		$this->load->view('admin');
		$this->load->view('footer');
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
		$this->load->view('header');
		$this->load->view('signup');
		$this->load->view('footer');
	}

	public function site_signup() {
		if (!$this->input->post('password') === $this->input->post('confirmpass')) {
			$this->session->set_flashdata('error', 'Passwords do not match.');
			redirect(site_url() + '/signup');
		} else if ($this->input->post('tos') === '1') {
			$this->session->set_flashdata('error', 'You did not accept the Terms of Service.');
			redirect(site_url() + '/signup');
		}
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->aauth->create_user($username, $password, $email);
		$this->session->set_flashdata('info', 'Successfully signed up. You can now log in.');
		redirect(site_url());
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_admin');
		$this->session->unset_userdata('logged_in');
		redirect(site_url());
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_admin');
		$this->session->unset_userdata('logged_in');
		redirect(site_url());
	}
}
