<?php

require_once "../controladores/remitos.controlador.php";
require_once "../modelos/remitos.modelo.php";

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";


class TablaRemitos{

    //Mostrar tabla de remitos
    public function mostrarTablaRemitos(){


        $item = null;
        $valor = null;

        $clientes = ControladorClientes::ctrMostrarClientes($item,$valor);
        $remitos = ControladorRemitos::ctrMostrarRemitos($item,$valor);

     

        $datosJson = '{
            "data": [';

            for($i = 0; $i < count($remitos); $i++){
                    
                $item = "id";
                $valor = $remitos[$i]['id_cliente'];;

                $clientes = ControladorClientes::ctrMostrarClientes($item,$valor);

                if(isset($_GET["perfilOculto"]) && $_GET["perfilOculto"] == "Administrador"){
                    $botones = "<a href='/".$remitos[$i]['datos']."' target='_blank' class='btn btn-success'><i class='fa fa-print'></i></a><button class='btn btn-danger btnEliminarRemito' idRemito='".$remitos[$i]['id']."'><i class='fa fa-times'></i></button>";

                }else{
                    $botones = "<a href='/".$remitos[$i]['datos']."' target='_blank' class='btn btn-success'><i class='fa fa-print'></i></a>";

                }
                
               
                $datosJson .= ' [
                    "'.($i+1).'",
                    "'.$clientes['establecimiento'].' - '.$clientes['partido'].'",
                    "'.$remitos[$i]['fecha'].'",
                    "$'.$remitos[$i]['costo'].'",
                    "'.$botones.'"
                ],';
            }
        $datosJson = substr($datosJson, 0, -1);
        $datosJson .= ']}';
          
         
        

        echo $datosJson;
    }
}

// El método mostrarTablaRemitos dispara la creacion de un objeto

$activarRemitos = new TablaRemitos();
$activarRemitos -> mostrarTablaRemitos();