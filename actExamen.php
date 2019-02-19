<?php
//result of GET method:  mail=&fech=2017-07-29&name=asdmasldmasdoasodmoasm&sueldo=-2&dpto=rh&sex=man&pass=12345678&sub=Enviar
$correo=isset($_GET['mail'])?$_GET['mail']:"Sincorreo";
$dt=isset($_GET['fech'])?$_GET['fech']:"Sin 1900-01-01";
$name=isset($_GET['name'])?$_GET['name']:"";
$salary=isset($_GET['sueldo'])?$_GET['sueldo']:"0";
$dpto=isset($_GET['dpto'])?$_GET['dpto']:"";
$sex=isset($_GET['sex'])?$_GET['sex']:"women";
$pass=isset($_GET['pass'])?$_GET['pass']:"";
$button=isset($_GET['sub'])?$_GET['sub']:"";
echo"<h1>Datos del formulario 💻</h1>
    Correo $correo
    <br>Fecha: $dt
    <br>Nombre: $name
    <br>Salario: $salary
    <br>Departamento: $dpto
    <br>Sexo: $sex
    <br>Contraseña: $pass"
?>