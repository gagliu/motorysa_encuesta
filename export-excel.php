<?php
 /* 
    @magdalenamedio
 */
 
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once('config.php');
require_once 'excel/PHPExcel.php';

$conexion = mysqli_connect($dbhost, $dbUser, $dbpassword, $db);

$objPHPExcel = new PHPExcel();
   
   //Informacion del excel
   $objPHPExcel->
    getProperties()
        ->setCreator("magadalenamedio.com")
        ->setLastModifiedBy("magadalenamedio.com")
        ->setTitle("Plan Acogida")
        ->setSubject("Plan Acogida")
        ->setDescription("Plan Acogida")
        ->setKeywords("magadalenamedio")
        ->setCategory("Plan Acogida");    
 

    $sql    = "SELECT * FROM lg_test_drive_acogida_motorysa ORDER by id DESC";
    $result = $conexion->query($sql);
   $i = 1;  
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, 'Id');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, 'Nombre');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, 'Cedula');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, 'Cargo');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$i, 'Area');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$i, 'Linea');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$i, 'Empresa');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$i, 'Fecha Inicio');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$i, 'Fecha Fin');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$i, 'Pista 1 Pregunta 1');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$i, 'Pista 2 Pregunta 1');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, 'Pista 2 Pregunta 2');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$i, 'Pista 2 Pregunta 3');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$i, 'Pista 2 Pregunta 4');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$i, 'Pista 3 Pregunta 1');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P'.$i, 'Pista 3 Pregunta 2');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.$i, 'Pista 4 Pregunta 1');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.$i, 'Pista 4 Pregunta 2');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.$i, 'Pista 4 Pregunta 3');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.$i, 'Pista 4 Pregunta 4');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('U'.$i, 'Pista 4 Pregunta 5');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('V'.$i, 'Pista 4 Pregunta 6');
   $objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, 'Pista 5 Pregunta 1');


   while($row = $result->fetch_assoc()){
      $i++; 
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $row["id"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, $row["nombre"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, $row["cedula"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row["cargo"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$i, $row["area"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$i, $row["linea"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$i, $row["empresa"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$i, $row["fecha_inicio"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$i, $row["fecha_fin"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$i, $row["preg_1_1"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$i, $row["preg_2_1"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, $row["preg_2_2"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$i, $row["preg_2_3"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$i, $row["preg_2_4"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$i, $row["preg_3_1"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('P'.$i, $row["preg_3_2"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.$i, $row["preg_4_1"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.$i, $row["preg_4_2"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.$i, $row["preg_4_3"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.$i, $row["preg_4_4"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('U'.$i, $row["preg_4_5"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('V'.$i, $row["preg_4_6"]);
      $objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $row["preg_5_1"]);
 
   }

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="archivo.xlsx"');
//header('Cache-Control: max-age=0');

$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
$objWriter->save('php://output');
exit;
mysql_close ();
?>








