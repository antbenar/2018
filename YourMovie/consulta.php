<?php

function connectDB(){
    $dbname = 'YourMovie';
    $dbuser = 'root'; /*Aquí colocar usuario*/
    $dbpass = ''; /*Aquí colocar la contraseña*/
    $dbhost = 'localhost:3307'; //si te manda error por el puerto, lo cambias solo por localhost

    $conexion = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
    return $conexion;
}

function getJson($query){
    //Creamos la conexión con la función anterior
    $conexion = connectDB();

    //generamos la consulta

    mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

    if(!$result = mysqli_query($conexion, $query)) die(); //si la conexión cancelar programa

    $rawdata = array(); //creamos un array

    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0;

    while($row = mysqli_fetch_array($result))
    {
        $rawdata[$i] = $row;
        $i++;
    }

    $close = mysqli_close($conexion);//desconectamos la base de datos
  
    return json_encode($rawdata); //lo convertimmos a jsson
}

?>