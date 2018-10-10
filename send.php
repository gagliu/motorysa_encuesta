<?php 

session_start();
error_reporting(E_ALL);;
ini_set('display_errors', 'On');
require_once('config.php');
echo json_encode($_SESSION);
echo json_encode($_POST);
$cedula = $_SESSION["cedula"];

$conexion   = mysqli_connect($dbhost, $dbUser, $dbpassword, $db);


$sql 	= "SELECT * FROM lg_test_drive_acogida_motorysa where cedula = '".$cedula."' ORDER by id DESC";
$result	= $conexion->query($sql);

$id = '';
if($row = $result->fetch_assoc()){
	$id = $row['id'];
}

if($id != ''){
	$sql = "UPDATE lg_test_drive_acogida_motorysa SET  ";
	$sql .=	"preg_1_1='".$_POST['preg_1_1']."', ";
	$sql .=	"preg_2_1='".$_POST['preg_2_1']."', ";
	$sql .=	"preg_2_2='".$_POST['preg_2_2']."', ";
	$sql .=	"preg_2_3='".$_POST['preg_2_3']."', ";
	$sql .=	"preg_2_4='".$_POST['preg_2_4']."', ";
	$sql .=	"preg_3_1='".$_POST['preg_3_1']."', ";
	$sql .=	"preg_3_2='".$_POST['preg_3_2']."', ";
	$sql .=	"preg_4_1='".$_POST['preg_4_1']."', ";
	$sql .=	"preg_4_2='".$_POST['preg_4_2']."', ";
	$sql .=	"preg_4_3='".$_POST['preg_4_3']."', ";
	$sql .=	"preg_4_4='".$_POST['preg_4_4']."', ";
	$sql .=	"preg_4_5='".$_POST['preg_4_5']."', ";
	$sql .=	"preg_4_6='".$_POST['preg_4_6']."', ";
	$sql .=	"preg_5_1='".$_POST['preg_5_1']."', ";
	$sql .=	"fecha_fin='".date('YmdHis')."' ";
	
	$sql .= "WHERE id=".$id;
		
	if ($conexion->query($sql) === TRUE) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . $conexion->error;
	}
	mysqli_close($conexion);	

}
//$_SESSION["cedula"] = $_POST['cedula'];             
header ("Location: final.php");



?>