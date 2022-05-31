<?php
/******************************************
 * Objetivos Arquivo reponsavel pela manipulção de dados contaveis
 *  Obs (Este arquivo fara a ponte entre a view e a Model)
 * Autor:Leonardo
 * Data:31/05/2022
 * Versão: 1.0
 * 
 *********************************************/

function inserirVeiculo ($dadosVeiculo){
    //validação para verificar se o objeto está vazio
    if (!empty($dadosVeiculo)){
        //Validação de caixa vazia dos elementos nome celular e mail pois são obrigatoris no bd
        if (!empty($dadosVeiculo['txtNome']) && !empty($dadosVeiculo['txtVeiculo']) && !empty($dadosVeiculo['txtPlaca'])){

        
            $arrayDados = array (
                "nome"      => $dadosVeiculo['txtNome'],
                "veiculo"  => $dadosVeiculo['txtVeiculo'],
                "placa"   => $dadosVeiculo['txtPlaca']
            );
            //import arquivo de modelagem para manipular o BD
            require_once('model/bd/veiculos.php.php');
            //chama a função que fara o insert no BD (está função está na model)
            if (insertVeiculo($arrayDados))
            return true;
            else
            return array('idErro' => 1,
                        'message' => 'Não foi possivel inserir os dados no banco de dados');
            
        }
        //Função para receber dados de view e encaminhar paara a model (atualizar)
        else{
            return array('idErro' => 2,
                        'message' => 'Existem campos obrigatorios que não foram preenchdidos');
        }
    }
    
}
function atualizarVeiculo ($dadosVeiculo, $arrayDados){
    //recebe o id enviado pelo arrayDados
    $id = $arrayDados['id'];
     //validação para verificar se o objeto está vazio
     if (!empty($dadosVeiculo)){
        //Validação de caixa vazia dos elementos nome celular e mail pois são obrigatoris no bd
        if (!empty($dadosVeiculo['txtNome']) && !empty($dadosVeiculo['txtVeiculo']) && !empty($dadosVeiculo['txtPlaca'])){
            //validação para garantir que o id seja valido
            if(!empty($id) && $id !=0 && is_numeric($id)){
          
            $arrayDados = array (
                "id"        => $id,
                "nome"      => $dadosVeiculo['txtNome'],
                "veiculo"  => $dadosVeiculo['txtVeiculo'],
                "placa"   => $dadosVeiculo['txtPlaca'],
        
            );
            //import arquivo de modelagem para manipular o BD
            require_once('model/bd/veiculos.php.php');
            //chama a função que fara o insert no BD (está função está na model)
                if (updateVeiculo($arrayDados)){
                    return true;
                }else{
                    return array('idErro' => 1,
                        'message' => 'Não foi possivel atualizar os dados no banco de dados');
                } 
            }else
            return array('idErro' => 4, 'message' => 'não é possivel atualizar um registro sem informar um id válido');
        }
  
        else{
            return array('idErro' => 2,
            'message' => 'Existem campos obrigatorios que não foram preenchdidos');
        }
    }
    
}

?>