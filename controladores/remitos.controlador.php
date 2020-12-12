<?php

class ControladorRemitos{

    

    static public function ctrMostrarRemitos($item, $valor){
        
        $tabla = "remitos";
        
        $respuesta = ModeloRemitos::MdlMostrarRemitos($tabla, $item, $valor);
        
        return $respuesta;
        
    }



    
     /*===================================================
    ELIMINAR REMITO
    ===================================================*/

    static public function ctrEliminarRemito(){

        if(isset($_GET["idRemito"])){
            
            $tabla = "remitos";
            $datos = $_GET["idRemito"];

            $respuesta = ModeloRemitos::mdlEliminarRemito($tabla,$datos);

            if($respuesta == "ok"){
                echo '<script>
                swal.fire({
                    type: "success",
                    title: "El remito ha sido borrado correctamente",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false
                    
                }).then(function(result){
                    if(result.value){
                        window.location = "ver-remitos"
                   
                        
                    }   
                    
                });
                </script>';
            }   

        }

       
    }

}

?>