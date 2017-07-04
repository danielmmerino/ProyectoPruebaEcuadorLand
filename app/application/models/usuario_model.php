<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function login($email, $contrasena){


		
		$this->db->where('correo',$email);
		$this->db->where('contrasena',$contrasena);
		$q= $this->db->get('registrados');
		if ($q->num_rows() == 1) {
			return true;
			# code...
		}else
		{
			return false;
		}
	}

	public function registrarUsusario($email,$nombre,$apellido,$contrasena1,$contrasena2)
	{
		if ($contrasena1==$contrasena2) {
			$registro  = array('id' =>'' ,'nombre'=> $nombre, 'apellido'=>$apellido, 'email'=>$email, 'fecha_registro'=> date('Y-m-d'), 'permisos'=>"c" );
			$this->db->insert('usuarios', $registro);

			$registro2 = array('id' =>'', 'correo'=>$email, 'contrasena'=>$contrasena1);

			$this->db->insert('registrados', $registro2);

			return true;
		}else{

			return false;
		}
		
	}

}

/* End of file usuario_model.php */
/* Location: ./application/models/usuario_model.php */