<?php

class Login extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Login';
		$this->load->view('templates/header', $data);
		$this->load->view('login/index');
		$this->load->view('templates/footer');
	}

	public function registration()
	{
		if ($this->session->userdata('email')) {
			redirect('dashboard');
		}

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[12]', ['min_length' => 'Password too short (Min. 12 character)']);

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Registration';
			$this->load->view('templates/header', $data);
			$this->load->view('login/registration');
			$this->load->view('templates/footer');
		} else {
			$this->_registration();
		}
	}

	private function _registration()
	{
		$url = 'http://localhost:5000/signup';
		/* Init cURL resource */
		$ch = curl_init($url);
		$data = [
			"name" => $this->input->post('name'),
			"email" => $this->input->post('email'),
			"password" => $this->input->post('password'),
		];

		/* pass encoded JSON string to the POST fields */
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

		/* set the content type json */
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

		/* set return type json */
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		/* execute request */
		curl_exec($ch);

		/* close cURL resource */
		// curl_close($ch);

		$responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		if ($responseCode == 422) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">user already exists with that email !</div>');
			redirect('login/registration');
		}

		redirect('login');
	}
}
