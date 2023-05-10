<?php
session_start();
use LDAP\Result;

include("db.php");

class data extends db{
    private $name;
    private $email;
    function subscribe($name,$email){
        $this->email=$email;
        $this->name=$name;
        $q = "insert into subscription(name,email)values('$name','$email')";
        if($this->connection->exec($q)){
            header("location:index.php?msg=subscribed sucessfully");
        }
        else{
            header("location:index.php?msg=subscription failed");
        }
    }
}