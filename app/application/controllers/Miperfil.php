<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Miperfil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
			$data['titulo'] = 'Mi Perfil';
			//$qe= $_POST['q'] ;
			$perfilUsuario['perfilUs']= $_POST['q'];
			$this -> load -> view('plantillas/Header', $data);
			$this-> load ->view('perfil/index',$perfilUsuario);
	}

}

/* End of file Miperfil.php */
/* Location: ./application/controllers/Miperfil.php */