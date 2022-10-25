<?php

class Config
{
   private $dataBaseHost="localhost";
   private $dataBaseUser="root";
   private $databasePassword="";
   private $databaseName="person";
   private $connections=false;
   private $result=array();
   private $myQuery="";
   private $numResult="";

   public function __construct(){
        $this->connect();
   }

   public function connect(){
       if (!$this->connections){
           $connected=mysqli_connect($this->dataBaseHost,$this
           ->dataBaseUser,$this->databasePassword);
           if ($connected){
               $seldb   =mysqli_select_db($this->databaseName,$connected);
               if ($seldb){
                   $this->connections=true;
                   return true;
               }else{
                   array_push($this->result,mysqli_error());
                   return false;
               }
           }else{
               array_push($this->result,mysqli_error());
               return false;
           }
       }else{
           return  true;
       }
   }
}