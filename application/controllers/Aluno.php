<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

public function indexBuscar(){
        $this->load->view('aluno/listar');
    }
   
public function listando(){
		$this->load->model('Aluno_model');
		$lista = $this->Aluno_model->buscaTodos();
		$dados = array('aluno' => $lista);
		$this->load->view('aluno/listar', $dados);
	}	

public function cadastrar(){
    $aluno = array(
        "nmatricula" => $this->input->post("matricula"),
        "nome" => $this->input->post("nomeAluno"),
);
  
    $this->load->model("Aluno_model");
    if(!$this->Aluno_model->verificaMatricula($aluno['nmatricula'])){
        $this->Aluno_model->salva($aluno);
        redirect('/');
    }else{  
        $this->session->set_flashdata('danger', 'Aluno ja existente!');
        $this->load->view('index');
    }
}


//Editar Aluno
public function editar(){
    $idaluno = $this->input->get('idaluno');

    $this->load->model("Aluno_model");
    $aluno = $this->Aluno_model->editarAl($idaluno);
    $dados = array("aluno" => $aluno);
    $this->load->view("aluno/listar", $dados);
    $this->session->set_flashdata('success', 'Aluno editado com exito!');
    redirect('Aluno/listando'); 
}




}
