<?php
/**
 * Sharif Judge online judge
 * @file Profile.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{

	private $form_status;
	private $edit_username;


	// ------------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();
		if ( ! $this->session->userdata('logged_in')) // if not logged in
			redirect('login');
		$this->form_status = '';
	$this->load->helper('form');
    $this->load->helper('url');
    $this->lang->load('form_validation_lang', 'spanish');
	}


	// ------------------------------------------------------------------------


	public function index($user_id = FALSE)
	{
		/*echo "<PRE>";
		print_r($_POST);
		echo "<PRE>";
		var_dump($_POST);
		echo "<PRE>";
		die();*/
		if ($user_id === FALSE)
			$user_id = $this->user_model->username_to_user_id($this->user->username);

		if ( ! is_numeric($user_id))
			show_404();


		$user = $this->user_model->get_user($user_id);
		if ($user === FALSE)
			show_404();
		$this->edit_username = $user->username;

		//Non-admins are not able to update others' profile
		if ($this->user->level <= 2 && $this->user->username != $this->edit_username) // permission denied
			show_404();
		$this->form_validation->set_rules('display_name', $this->lang->line('name'), 'max_length[40]');
		$this->form_validation->set_rules('email', $this->lang->line('email'), 'required|max_length[40]|valid_email|callback__email_check', array('_email_check' => 'This %s already exists.'));
		$this->form_validation->set_rules('password', $this->lang->line('password'), 'callback__password_check', array('_password_check' => 'The %s field must be between 6 and 200 characters in length.'));
		$this->form_validation->set_rules('password_again', $this->lang->line('password again'), 'callback__password_again_check', array('_password_again_check' => 'The %s field does not match the password field.'));
		$this->form_validation->set_rules('role', 'role', 'callback__role_check');
		if ($this->form_validation->run())
		{
			$user_id = $this->user_model->username_to_user_id($this->user->username);
			$this->form_status = 'ok';
			$name_image = $user->avatar; //retomo el nombre de la imagen
			if($_FILES['userfile']['name']!='')
			{
				//pregunto si el nombre del archivo esta en tanto en thumbs como en la carpeta imagen
				if(file_exists("./files/images/".$name_image) && file_exists("./files/images/thumbs/".$name_image))
				{
					unlink("./files/images/".$name_image);
					unlink("./files/images/thumbs/".$name_image);

				} 

				$respuesta = $this->upload_imagen();

				if(!is_array($respuesta))
				{

					$this->user_model->update_profile($user_id, $respuesta);

				}else
				{

					$this->form_status = 'format';
				}
			}
			else{
				if($name_image == ''){
					if(file_exists("./files/images/".$name_image) && file_exists("./files/images/thumbs/".$name_image))
					{
						unlink("./files/images/".$name_image);
						unlink("./files/images/thumbs/".$name_image);

					} 
					$anonimo = 'anonimo.jpg';
					$this->user_model->update_profile($user_id, $anonimo);
				}
			}
		}
		$user = $this->user_model->get_user($user_id);
		$data = array(
			'all_assignments' => $this->assignment_model->all_assignments(),
			'id' => $user_id,
			'edit_username' => $this->edit_username,
			'email' => $user->email,
			'avatar' => $user->avatar,
			'display_name' => $user->display_name,
			'role' => $user->role,
			'form_status' => $this->form_status,	
		);

		$this->twig->display('pages/profile.twig', $data);

	}

	//-----------------------CARGA IMAGEN----------------------------------------------

	function upload_imagen($user_id = FALSE)
	{
		if ($user_id === FALSE)
			$user_id = $this->user_model->username_to_user_id($this->user->username);
		$user = $this->user_model->get_user($user_id);

			$config['upload_path'] = './files/images';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 2*1024;
			$config['max_width'] = '2048';
			$config['max_height'] = '2048';
			$config['file_name'] = $user->username.$user->id;
			$config['remove_spaces'] = TRUE;
			$this->load->library('upload',$config);

			if(!$this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				return $error;

			}
			else
			{ 

				$data = $this->upload->data();
				$this->create_thumb($data['file_name']);
				return $data['file_name'];

			}
	}



//-----------------------CREAR THUMBS----------------------------------------------

	function create_thumb($imagen)
    {
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'files/images/'.$imagen;
        $config['new_image'] = './files/images/thumbs';
        $config['thumb_marker'] = '';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = FALSE;
        $config['width'] = 70;
        $config['height'] = 60;
        
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }


	// ------------------------------------------------------------------------


	public function _password_check($str)
	{
		if (strlen($str) == 0 OR (strlen($str) >= 6 && strlen($str) <= 200))
			return TRUE;
		return FALSE;
	}

	public function _password_again_check($str)
	{
		if ($this->input->post('password') !== $this->input->post('password_again'))
			return FALSE;
		return TRUE;
	}

	/**
	 * Checks whether a user with this email exists
	 */
	public function _email_check($email)
	{
		if ($this->user_model->have_email($email, $this->edit_username))
			return FALSE;
		return TRUE;
	}

	/**
	 * For validating user role
	 */
	public function _role_check($role)
	{
		// Non-admin users should not be able to change user role:
		if ($this->user->level <= 2)
			return ($role == '');

		// Admins can change everybody's user role:
		$roles = array('admin', 'head_instructor', 'instructor', 'student');
		return in_array($role, $roles);
	}


}