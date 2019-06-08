<?php 

class Usuario extends CI_Controller
{
      public function __construct(){
          parent::__construct();
          $this->load->library('grocery_CRUD');
      }

      public function index(){
          try{
              $crud = new grocery_CRUD();

              $crud->set_theme('datatables');
              $crud->set_table('Usuario');
              $crud->set_subject('Usuarios');
              $crud->columns('idUsuario','nombreU','apellidoU','telefonoU','correoU','passwordU');
              $crud->required_fields('nombreU','apellidoU','correoU','passwordU');
              $crud->display_as('nombreU','Nombre');
              $crud->display_as('apellidoU','Apellidos');
              $crud->display_as('telefonoU','Telefono');
              $crud->display_as('correoU','Correo');
              $crud->display_as('passwordU','Contraseña');


              //$crud
              $output = $crud->render();
              $this->load->view('usuario.php',(array)$output);
          }catch(Exception $ex){
                show_error($ex->getMessage());
          }
      }
}
