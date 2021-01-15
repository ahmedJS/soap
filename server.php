<?php

class server{
    public function __construct(){}
    public function getStudentName($id)
    {
        return "macc";
    }
}


$param = array("uri"=>"soap/server.php");
$server = new soapServer(null,$param);
$server->setClass("server");
$server->handle();


?>