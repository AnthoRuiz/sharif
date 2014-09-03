<?php
/**
 * FACyT
 * @file Portada.php
 * @author Anthony Ruiz <yobakaj@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Portada extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
	$this->twig->display('pages/portada.twig');
	}
}