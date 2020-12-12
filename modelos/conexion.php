<?php


class Conexion{

    static public function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=u802679854_sdr",
                        "u802679854_sdr",
                        "Messi+10Arg.");

        $link->exec("set names utf8");

        return $link;
    }

}