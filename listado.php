<?php

$cnx=new PDO("mysql:host=bqggbgbgkeyrvf265rdt-mysql.services.clever-cloud.com;dbname=bqggbgbgkeyrvf265rdt","ufhmvd9xclgr0y6b","I2IjyUyyjrsSuUt47UAL");
$res=$cnx->query("select * from refris");

$datos=array();

foreach ($res as $row) {
    array_push($datos, array(
        'id_refris'=>$row['id_refris'],
        'nombres'=>$row['nombres'],
        'url_imagen'=>$row['url_imagen'],
        'url'=>$row['url'],
        'precio1'=>$row['precio1'],
        'precio2'=>$row['precio2'],
    ));
}

echo utf8_encode(json_encode($datos));

?>