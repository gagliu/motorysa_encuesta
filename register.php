<?php 

session_start();
error_reporting(E_ALL);;
ini_set('display_errors', 'On');
require_once('config.php');

$conexion   = mysqli_connect($dbhost, $dbUser, $dbpassword, $db);

echo json_encode($_POST);

$sql 	= "SELECT lg_test_drive_acogida_motorysa.*, IFNULL(fecha_fin,0) fecha_fin_nvl FROM lg_test_drive_acogida_motorysa where cedula = '".$_POST['cedula']."' ORDER by id DESC";
$result	= $conexion->query($sql);

$id = '';
if($row = $result->fetch_assoc()){
	$id = $row['id'];	
	echo $row['fecha_fin_nvl'];
	
	if($row['fecha_fin_nvl'] != 0){
		header ("Location: final.php");
		exit(1);
	}
}


if($id == ''){
	//$autorice = isset($_POST['user_authorize'])?'Si':'No';
	//Datos del cliente
	$insert = "INSERT INTO lg_test_drive_acogida_motorysa (";
	$insert .= "nombre, cedula, cargo, area,linea, empresa, fecha_inicio";
	$insert .= ") VALUES ('";
	$insert .= $_POST['nombre']."','".$_POST['cedula']."','".$_POST['cargo'];
	$insert .= "','".$_POST['area']."','".$_POST['linea'];
	$insert .= "','".$_POST['empresa']."','";
	$insert .= date('YmdHis');
	$insert .= "') ";
	echo $insert;
	$conexion->query($insert);
	mysqli_close($conexion);	
}else{
	$sql = "UPDATE lg_test_drive_acogida_motorysa SET  ";
	$sql .=	"nombre='".$_POST['nombre']."', ";
	$sql .=	"cedula='".$_POST['cedula']."', ";
	$sql .=	"cargo='".$_POST['cargo']."', ";
	$sql .=	"area='".$_POST['area']."', ";
	$sql .=	"linea='".$_POST['linea']."', ";
	$sql .=	"empresa='".$_POST['empresa']."' ";
	$sql .= "WHERE id=".$id;
		
	if ($conexion->query($sql) === TRUE) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . $conexion->error;
	}
	mysqli_close($conexion);	

}
$_SESSION["cedula"] = $_POST['cedula'];             
header ("Location: pasos.php");



?>