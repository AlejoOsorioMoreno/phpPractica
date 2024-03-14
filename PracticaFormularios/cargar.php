<?php

if (mime_content_type($_FILES["fichero"]["tmp_name"])!="image/png" && 
mime_content_type($_FILES["fichero"]["tmp_name"])!="image/jpg" ) {
    echo"Tipo de fichero no admitido";
    exit();
}

if ($_FILES['fichero']['size']/1024>3972) {
    echo 'El archivo supera el peso permitido';
    exit();
}

if (!file_exists("Archivos")) {
    if (mkdir("Archivos",0777)) {
        echo"Error al crear al crear directorio";
        exit();
    }
}


chmod("Archivos",0777);


if (move_uploaded_file($_FILES["fichero"]["tmp_name"],"Archivos/".$_FILES["fichero"]["name"])) {
    echo "Archivo subido con exito";
}else {
    echo "Error al subir el archivo ";
}