<?php
require '../model/PersonModel.php';

$name           =!empty($_REQUEST['name'])?$_REQUEST['name']:'';
$address        =!empty($_REQUEST['address'])?$_REQUEST['address']:'';
$userid        =!empty($_REQUEST['id'])?$_REQUEST['id']:'';

if ($name && $address){

    $dataItem=[
        'name'          =>$name,
        'address'       =>$address,
        'id'       =>$userid,
    ];

    $insertStatus =update($dataItem);
}else{
    header("Location: /view/index.php");
}