<?php

    echo "NAME: ".$_FILES['file']['name']."<br>";
    echo "TYPE: ".$_FILES['file']['type']."<br>";
    echo "SIZE: ".$_FILES['file']['size']." bytes<br>";
    echo "TMP_NAME: ".$_FILES['file']['tmp_name']."<br>";
    echo "ERROR: ".$_FILES['file']['error']."<br>";


    if(is_uploaded_file($_FILES['file']['tmp_name']))
    {
        $nombre = "foto".date("YmdHis");
        print $nombre;
        copy($_FILES['file']['tmp_name'],"serverOFfiles/$nombre.jpg");
        echo "<br>Archivo subido con exito";
    
    }else
    {
        echo "Error al cargar los archivos";
    }
?>