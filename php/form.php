<?php
    //para capturar la info que se ingresa en los inputs del formulario tengo que crear variables.

    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $consulta = $_POST["consulta"] 
    
    //a quien le mando la info
    $para = "yamilrezett@gmail.com";
    $asunto = "este mail fue enviado desde la web";

    //funcion(para que esto funcones) es la funcion que envia la info del from--

    mail($para, $asunto, utf8_decode($email, $celular, $consulta));

    // funcion que redirecciona al usaurio una vez que comple el form--
    header("location:exito.html");








?>