<?php

require_once("conexion.php");


class ModeloRemitos{

    public function mdlGuardarRemito($tabla, $datos){


           
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_cliente, fecha, datos) VALUES ( :id_cliente , :fecha, :datos)");   
        
        $stmt->bindParam(":id_cliente", $datos["id_cliente"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
        $stmt->bindParam(":datos", $datos["datos"], PDO::PARAM_STR);


        $stmt -> execute();
        return "ok";
            
       
        
        $stmt -> close();
        
        $stmt = null;
        
        
    }

      /*============================================
    MOSTRAR REMITOS
    ============================================*/
    
    static public function mdlMostrarRemitos($tabla,$item,$valor){
        
        if($item != null) {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            
            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
            
            $stmt -> execute();
            
            return $stmt -> fetch();
            
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            
            $stmt -> execute();
            
            return $stmt -> fetchAll();
        }
        
        
        
        $stmt -> close();
        
        $stmt = null;
        
    }


        
    /*============================================
    ELIMINAR REMITO
    ============================================*/

    static public function mdlEliminarRemito($tabla,$datos){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");   
        
        $stmt->bindParam(":id", $datos, PDO::PARAM_STR);

         
        if($stmt->execute()){
            
            return "ok";
            
        }else{
            return "error";
        }
        
        $stmt -> close();
        
        $stmt = null;


    }

}