<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {

    public function listando(){
		$this->load->model('Curso_model');
		$lista = $this->Curso_model->buscaTodos();
		$dados = array('curso' => $lista);
		$this->load->view('curso/listar', $dados);
    }	
    

    public function cadastrar(){

        $this->load->library("form_validation");
        $this->form_validation->set_rules("curso", "curso", "required");
        $resultado = $this->form_validation->run();

        $CursoCadastro = array(
        "nomecurso" => $this->input->post("curso"),   
    );

    $this->load->model("Curso_model");
         if(!$this->Curso_model->verificaCurso($CursoCadastro['nomecurso'])){
         $this->Curso_model->salva($CursoCadastro);
         $this->session->set_flashdata('success', 'Cadastrado com Exito!');
         redirect('/');
      
    }
    else{
       
        $this->session->set_flashdata('danger', 'Curso ja existente!');
        
    }
}



//Editar Curso
public function editar(){
    $idcurso = $this->input->get('idcurso');

    $this->load->model("Curso_model");
    $curso = $this->Curso_model->editarCurso($idcurso);
    $dados = array("curso" => $curso);
    $this->load->view("curso/listar", $dados);
    $this->session->set_flashdata('success', 'Curso editado com exito!');
    redirect('Curso/listando'); 
}


}
