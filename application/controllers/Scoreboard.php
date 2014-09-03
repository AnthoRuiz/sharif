<?php
/**
 * Sharif Judge online judge
 * @file Scoreboard.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Scoreboard extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		if ($this->input->is_cli_request())
			return;
		if ( ! $this->session->userdata('logged_in')) // if not logged in
			redirect('login');
	}


	// ------------------------------------------------------------------------


	public function index()
	{

		$this->load->model('scoreboard_model');

		$data = array(
			'all_assignments' => $this->assignment_model->all_assignments(),
			'scoreboard' => $this->scoreboard_model->get_scoreboard($this->user->selected_assignment['id']),
			'avatar' => $this->buscar_avatar()
		);

		$this->twig->display('pages/scoreboard.twig', $data);
	}

//------------------------------buscar avatar-------------------------------------
	public function buscar_avatar($user_id = FALSE)
	{
		if ($user_id === FALSE)
			$user_id = $this->user_model->username_to_user_id($this->user->username);
		$user = $this->user_model->get_user($user_id);
		$name_image = $user->avatar;
		return $name_image;
	}

}