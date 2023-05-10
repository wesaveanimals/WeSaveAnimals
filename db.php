<?php
class db{
    protected $connection;

    function setconnection(){
        try{
            $this->connection = new PDO("mysql:host=localhost; dbname=wesaveanimals","root","");
            // echo "connection established";
        }catch(PDOException $e){
            echo "connection failed";
        }
    }
}