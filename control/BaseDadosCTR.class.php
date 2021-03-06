<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('../model/dao/ColabDAO.class.php');
require_once('../model/dao/MotoristaDAO.class.php');
require_once('../model/dao/EquipDAO.class.php');
require_once('../model/dao/TurnoDAO.class.php');
/**
 * Description of BaseDadosCTR
 *
 * @author anderson
 */
class BaseDadosCTR {
    
    private $base = 1;

    public function dadosColab($versao) {
        
        $versao = str_replace("_", ".", $versao);
        
        $colabDAO = new ColabDAO();
        
        if($versao >= 1.00){
        
            $dados = array("dados"=>$colabDAO->dados($this->base));
            $json_str = json_encode($dados);

            return $json_str;
        
        }
        
    }
    
    public function atualColab($versao, $info) {

        $versao = str_replace("_", ".", $versao);
        
        if($versao >= 1.00){
        
            $colabDAO = new ColabDAO();

            $dado = $info['dado'];

            $dadosEquip = array("dados" => $colabDAO->atual($dado, $this->base));
            $resEquip = json_encode($dadosEquip);
            
            return $resEquip;
        
        }
        
    }
    
    public function dadosMoto($versao) {
        
        $versao = str_replace("_", ".", $versao);
        
        $motoristaDAO = new MotoristaDAO();
        
        if($versao >= 1.00){
        
            $dados = array("dados"=>$motoristaDAO->dados($this->base));
            $json_str = json_encode($dados);

            return $json_str;
        
        }
        
    }
    
    public function atualMoto($versao, $info) {

        $versao = str_replace("_", ".", $versao);
        
        if($versao >= 1.00){
        
            $motoristaDAO = new MotoristaDAO();

            $dado = $info['dado'];

            $dadosEquip = array("dados" => $motoristaDAO->atual($dado, $this->base));
            $resEquip = json_encode($dadosEquip);
            
            return $resEquip;
        
        }
        
    }
    
    public function dadosEquip($versao, $info) {

        $versao = str_replace("_", ".", $versao);
        
        if($versao >= 1.00){
        
            $equipDAO = new EquipDAO();

            $dado = $info['dado'];

            $dadosEquip = array("dados" => $equipDAO->dados($dado, $this->base));
            $resEquip = json_encode($dadosEquip);
            
            return $resEquip;
        
        }
        
    }
    
    public function dadosTurno($versao) {

        $versao = str_replace("_", ".", $versao);
        
        if($versao >= 1.00){
        
            $turnoDAO = new TurnoDAO();

            $dados = array("dados"=>$turnoDAO->dados($this->base));
            $json_str = json_encode($dados);

            return $json_str;
        
        }
        
    }
    
}
