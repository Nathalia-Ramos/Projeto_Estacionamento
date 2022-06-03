<?php
/**************************************************************************
 * Objetivo: Arquivo de rota, prar segmentar as ações encaminhadas pela view
 *     (dados de um form,listagem de dados, ação de excluir ou atualizar).
 *     Esse arquivo sera respomsasvel por emcaminhar as solicitações para a Controller
 * 
 * Autor: Leonardo
 * Data:08/04/2022
 * Versão: 1.0
 * 
 *************************************************************************/
    $action =(string)null;
    $component =(string)null;
    //validação para verificar se as requisição pe um POST de um formulário
    if($_SERVER['REQUEST_METHOD']== 'POST' || $_SERVER['REQUEST_METHOD'] == 'GET'){
    
        $component = strtoupper($_GET['component']);
        $action = strtoupper ($_GET['action']);
        
        //estrutura condicional para validar quem esta solicitando algo para o router
        switch($component){
            case'CLIENTES':
                //import da controller contatos
                require_once('controller/controllerVeiculo.php');

                //validação para identificar tipo de ação que sera reaalizado
                if ($action == 'INSERIR') {
                        $resposta = inserirCliente($_POST, null);
                    
                    
                    if (is_bool($resposta)){
                        if($resposta)
                            echo("<script>
                            alert('Registro inserido com sucesso');
                            window.location.href = 'index.php'</script>");
                    }elseif(is_array($resposta)){
                            echo("<script>
                            alert('".$resposta['message']."');
                            window.history.back();
                    </script>");
                    }
                
                    
                }
            }
        }
?>