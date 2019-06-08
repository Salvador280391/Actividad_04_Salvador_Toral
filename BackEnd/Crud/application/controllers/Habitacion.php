<?php 

class Habitacion extends CI_Controller
{
      public function __construct(){
          parent::__construct();
          $this->load->library('grocery_CRUD');
      }

      public function index(){
          try{
              $crud = new grocery_CRUD();

              $crud->set_theme('datatables');
              $crud->set_table('Habitacion');
              $crud->set_subject('Habitacion');
              $crud->columns('numHabitacion','descripcion','cantPersonas','precio','imagenH');
              $crud->required_fields('numHabitacion','descripcion','cantPersonas','precio','imagenH');
              $crud->display_as('numHabitacion','#');
              $crud->display_as('cantPersonas','Numero de Pesonas');
              $crud->display_as('imagenH','Fotos');

              //$crud
              $output = $crud->render();
              $this->load->view('habitacion.php',(array)$output);
          }catch(Exception $ex){
                show_error($ex->getMessage());
          }
      }
}
