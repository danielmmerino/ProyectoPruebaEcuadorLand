<?php  
	/**
	* 
	*/
	class Login extends CI_Controller
	{
		public function Index(){

			$data['titulo'] = 'Prueba';
			$this -> load -> view('plantillas/Header', $data);
			$this -> load -> view('Login/index');
			$this -> load -> view('plantillas/form_log');
			$this -> load -> view('plantillas/ventanamodal');
				
			$this -> load -> view('plantillas/Footer');

		}



	 public function nuevoUsuario()
		{
			$this->load->model('usuario_model');
			if ($this->usuario_model->registrarUsusario($_POST['email'], $_POST['nombreUsuario'], $_POST['apellidoUsuario'], md5($_POST['contrasena1']), md5($_POST['contrasena2']))) {
				redirect ('miperfil');
			}
			else{
				redirect('Login','refresh');
				$this->load->view('plantillas/errorAutentif');
			}
			
		}
		


		
	}
?>