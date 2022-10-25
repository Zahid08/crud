<?php
require '../model/PersonModel.php';

$name           =!empty($_REQUEST['name'])?$_REQUEST['name']:'';
$address        =!empty($_REQUEST['address'])?$_REQUEST['address']:'';

if ($name && $address){

    $dataItem=[
        'name'          =>$name,
        'address'       =>$address,
    ];

    $insertStatus =insert($dataItem);
}else{
    header("Location: /view/index.php");
}