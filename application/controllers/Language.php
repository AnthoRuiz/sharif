<?php
/**
 * anthony
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('notifications_model')->helper('text');
	}

	public function change($language)
	{
		$data = array(
			'all_assignments'=>$this->assignment_model->all_assignments(),
			'week_start'=>$this->settings_model->get_setting('week_start'),
			'wp'=>$this->user->get_widget_positions(),
			'notifications' => $this->notifications_model->get_latest_notifications(),
			'avatar' => $this->buscar_avatar()
		);

		if($language == "ES"){
			$this->config->set_item('language','spanish');
		}
		elseif($language == "EN"){
			$this->config->set_item('language','english');
		}
		$this->lang->load('front');
		$this->twig->display('pages/dashboard.twig', $data);
	}



	public function buscar_avatar($user_id = FALSE)
	{
		if ($user_id === FALSE)
			$user_id = $this->user_model->username_to_user_id($this->user->username);
		$user = $this->user_model->get_user($user_id);
		$name_image = $user->avatar;
		return $name_image;
	}
	
}