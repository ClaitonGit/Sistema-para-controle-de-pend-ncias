<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semestre extends CI_Controller {

    public function listando(){
		$this->load->model('Semestre_model');
		$lista = $this->Semestre_model->buscaTodos();
		$dados = array('semestre' => $lista);
		$this->load->view('semestre/listar', $dados);
    }	

    public function cadastrar(){
        $SemestreCadastro = array(
        "semestre" => $this->input->post("semestre"),
       
    );
    $this->load->model("Semestre_model");
    $this->Semestre_model->salva($SemestreCadastro);
    redirect('/');
    	
  }
  

  
//Editar Semestre
public function editar(){
  $idsemestre = $this->input->get('idsemestre');

  $this->load->model("Semestre_model");
  $semestre = $this->Semestre_model->editarSem($idsemestre);
  $dados = array("semestre" => $semestre);
  $this->load->view("semestre/listar", $dados);
  $this->session->set_flashdata('success', 'Semestre editado com exito!');
  redirect('Semestre/listando'); 
}
   
}
