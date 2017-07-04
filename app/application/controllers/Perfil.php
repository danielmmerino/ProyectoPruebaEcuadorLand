<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (isset($_POST['contrasena'])) {
					# code...
					$this->load->model('usuario_model');
					if($this->usuario_model->login($_POST['email'], md5($_POST['contrasena']))){
						
						

						$data['titulo'] = 'My Perfil';
						$correo['nombre']=$_POST['email'];
						$this -> load -> view('plantillas/Header', $data);
						$this -> load -> view('plantillas/cerrarSesion', $data);

						// realizo la consulta de los datos en tabal2
						$this->db->where('email',$_POST['email']);
						$q= $this->db->get('usuarios');

						$row = $q->row();

						//$id['id']= $row->id;
						$permisos = $row-> permisos;
						$datos['nombre'] = $row-> nombre;
						$datos['apellidoU']= $row-> apellido;
						$datos['email'] = $row -> email;
						$datos['fecha'] = $row-> fecha_registro;
						$datos['biografia'] = $row-> biografia;

						if (strcmp($permisos, "a")==0 ) {
							$datos['permisos']="Administrador";
							$this->load->view('perfil/index',$datos);

						$this->load->view('perfil/perfilAdmin');
						}else{
							$datos['permisos']="Usuario";
							$this->load->view('perfil/index',$datos);
						
						}
						
						
						$this -> load -> view('plantillas/Footer');

						//imprimir todo
						/*foreach ($q->result() as $row) {
							# code...
							echo $row -> email;
							echo "<br>";
						}*/
						
						


					}else{
						//$this->load->view('plantillas/errorAutentif');
						
						
					}
				}	
	}

}

/* End of file perfil.php */
/* Location: ./application/controllers/perfil.php */