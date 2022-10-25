<?php

session_start();

require '../database/Config.php';

function insert($dataItem=array()){
        $connectionStatus       =new Config();
        $db                     =$connectionStatus->connect();

        $name            =$dataItem['name'];
        $address         =$dataItem['address'];

        mysqli_query($db, "INSERT INTO user (name, address) VALUES ('$name', '$address')");

        $_SESSION['message'] = "User Information Saved";

        header('location: http://localhost/crud/view/index.php');

}

function getUser(){

    $connectionStatus       =new Config();
    $db                     =$connectionStatus->connect();

    $sql                    ="select * from user";
    $result                  = mysqli_query($db, $sql);

    return $result;
}

function singleUser($userId){

    $connectionStatus       =new Config();
    $db                     =$connectionStatus->connect();

    $sql                    ="select * from user where id=$userId";
    $result                 = mysqli_query($db, $sql);
    $dataItem               = mysqli_fetch_array($result, MYSQLI_ASSOC);

    return $dataItem;
}

function update($dataItemArray=array()){
    echo "<pre>";
    print_r($dataItemArray);
    exit();

}