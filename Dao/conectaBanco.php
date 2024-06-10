<?php
class conectaBanco{
    static $conn;

    public static function getConnection(){
        if(!isset($conn)){                 //isset = conjunto de dados (!isset = se não está vazia)

            $database = "stayin";//coloque o nome de seu bd
            $user = "root";
            $pass = "1234";
            $host = "localhost";
            $port = "3306"; // na faculdade mysql do xamp é 3307
    
            try{
                $conn = new PDO("mysql:host=$host;port=$port;dbname=$database", $user, $pass);
                echo "conectado"; 
                return $conn;
    
            }catch(PDOException $ex){ // exceção de erro
                echo "Erro!".$ex->getMessage();
                return null;
            }
        }
        return $conn;
    }

}

?>