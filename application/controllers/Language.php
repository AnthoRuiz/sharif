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
	}

	public function change($language)
	{
		if($language == "ES")
			$this->config->set_item('language','spanish');
		elseif($language == "EN")
			$this->config->set_item('language','english');

		//echo $this->config->item('language');
		redirect('dashboard','refresh');
	}
	
}