<?php

class DB {

    public $connect;
    public $host = 'eyvqcfxf5reja3nv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    public $user = 'tjumrdzl4g81evwt';
    public $pass = 'xgjql1pch0hntsut';
    public $db = 'aertwue8zrv2vw9j';

     public function __construct()

     {
        $this->connect = new mysqli($this->host,$this->user,$this->pass,$this->db);
     }
   

     public function getConnect(){

         if($this->connect->connect_error){
             die('Connection failed: ' .$this->connect->connect_error);
          
         }else return $this->connect;
     }
      




}
