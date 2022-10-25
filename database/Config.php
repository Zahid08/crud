<?php

class Config
{
   private $dataBaseHost="localhost";
   private $dataBaseUser="root";
   private $databasePassword="";
   private $databaseName="person";
   private $connections=false;
   private $result=array();

   public function connect(){
       if (!$this->connections){
           $connected   =   mysqli_connect($this->dataBaseHost, $this->dataBaseUser, '', $this->databaseName);
           if ($connected){
               $this->connections=true;
               return $connected;
           }else{
               array_push($this->result,mysqli_error());
               return false;
           }
       }else{
           return  true;
       }
   }
}