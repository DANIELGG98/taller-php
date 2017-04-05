<?php
$nombre=$_REQUEST["nombre"];
$contraseña=$_REQUEST["contraseña"];

if (isset($_REQUEST["contraseña"])&& strlen($_REQUEST["contraseña"])<7){
    echo "no entra!!!";
}else{
    
    $enlace= mysqli_connect('localhost', 'root', 'mysql2017', 'tallerdb', 3306);
    $cadena= "SELECT * FROM usuario WHERE nombre = '".$nombre."'AND contraseña = '".$contraseña."'";
    $resultado= mysqli_query($enlace, $cadena);
    
    if($resultado){
        $total=mysqli_num_rows($resultado);
        
        if($total>0){
            echo "entra";
        }else{
            echo "no entra";
        }
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

