<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendencia extends CI_Controller {
  
    public function listando(){
        $this->load->model('Pendencia_model');
        $lista = $this->Pendencia_model->buscaTodos();
        $dados = array('pendencia' => $lista);
        $this->load->view('pendencia/listar',$dados);
     
 }

 public function listandobus(){
    $this->load->model('Pendencia_model');
    $lista = $this->Pendencia_model->buscaTodos();
    $dados = array('pendencia' => $lista);
    $this->load->view('pendencia/listarBusca',$dados);
 
}

   
 public function listandoHis(){
    $this->load->model('Pendencia_model');
    $lista = $this->Pendencia_model->buscaPendenciaHis();
    $dados = array('pendencia' => $lista);
    $this->load->view('pendencia/listarHistorico',$dados);
 
}


    public function index(){
        $this->load->view('pendencia/cadastro');
    }
        
    public function inicio(){
        $this->load->view('index');
    }

    
public function cadastrar(){
   
$pendencia = array(
    "nmatriculafk" => $this->input->post("idmatriculaf"),
    "idalunof" => $this->input->post("idalunof"),
    "idcursof" => $this->input->post("idcurso"),
    "datas" => $this->input->post("data"),
    "titulo" => $this->input->post("pendencia"),
    "descricao" => $this->input->post("descricao"),
    "nivel" => $this->input->post("nivel"),
    "idsemestref" => $this->input->post("idsemestre"),
    "statusatual" => 'Pendente',

);
  
    $this->load->model("Pendencia_model");
    $this->Pendencia_model->salva($pendencia);
    $this->session->set_flashdata("success","Pendencia cadastrada!");
    redirect('Pendencia/listando');
    
}


public function editar(){
    $idpendencia = $this->input->get('idpendencia');
    $this->load->model("Pendencia_model");
    $pendencia = $this->Pendencia_model->editarPendencia($idpendencia);
    $dados = array("pendencia" => $pendencia);
    $this->load->view("pendencia/listar", $dados);
    redirect('Pendencia/listando');  
    
}


public function RemoverPen(){
    $idpendencia = $this->input->get('idpendencia');
    $this->load->model("Pendencia_model");
    $pendencia = $this->Pendencia_model->RemovePen($idpendencia);
    $dados = array("pendencia" => $pendencia);
    $this->load->view("pendencia/listar", $dados);
    redirect('Pendencia/listando');  
    
}


public function pesquisarAluno(){
    $this->load->model('Pendencia_model', 'pendencia');
    $data['pen'] = $this->pendencia->get_pen();
    $this->load->view('pendencia/listarBusca', $data);
}



}
