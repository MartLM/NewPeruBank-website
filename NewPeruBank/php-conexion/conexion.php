<?php
    class conexion{
        public static function conect(){
            $mysql = new mysqli(db_host, db_user, db_pass, db_name);
            $mysql->set_charset(db_charset);
            return $mysql;
        }
    }
?>