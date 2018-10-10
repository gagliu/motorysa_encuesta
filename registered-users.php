<html>
    <head> 
        <meta charset="UTF-8" />
    
    </head>
<body>

<?php
error_reporting(E_ALL);
//ini_set('display_errors', 'On');
require_once('config.php');

$conexion = mysqli_connect($dbhost, $dbUser, $dbpassword, $db);


if(isset($_POST['user']) && isset($_POST['password']))
{
	if(($_POST['user'] == 'MTPlanAcogida') && ($_POST['password'] == 'a1b2c3'))
	{
		$_SESSION['user'] = 1;
	}
}

if(!isset($_SESSION['user']))
{
	?>
	<form name="form" action="" method="post">
		<table>
			<tr>
				<th>Usuario:</th>
				<td><input type="text" name="user" /></td>
			</tr>
			<tr>
				<th>Contrase&ntilde;a:</th>
				<td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Enviar" /></td>
			</tr>
		</table>
	</form>
	<?php
}
else 
{
    mysql_query("SET CHARACTER SET utf8 ");
	$fields     = $conexion->query("SHOW columns FROM lg_test_drive_acogida_motorysa");
        $fieldNames = array();
        while($row = $fields->fetch_assoc())
        {
            $fieldNames[] = $row["Field"];
        }
	$sql 	= "SELECT * FROM lg_test_drive_acogida_motorysa ORDER by id DESC";
	$result	= $conexion->query($sql);
	
	?>

    <a href="export-excel.php" target="_blank">Descargar en excel</a>
    <br><br>
	<table width="100%" bordercolor="#777777" border="1" cellpadding="1" cellspacing="1">
		<tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Cargo</th>
            <th>Area</th>
            <th>Linea</th>
            <th>Empresa</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Pista 1 Pregunta 1</th>
            <th>Pista 2 Pregunta 1</th>
            <th>Pista 2 Pregunta 2</th>
            <th>Pista 2 Pregunta 3</th>
            <th>Pista 2 Pregunta 4</th>
            <th>Pista 3 Pregunta 1</th>
            <th>Pista 3 Pregunta 2</th>
            <th>Pista 4 Pregunta 1</th>
            <th>Pista 4 Pregunta 2</th>
            <th>Pista 4 Pregunta 3</th>
            <th>Pista 4 Pregunta 4</th>
            <th>Pista 4 Pregunta 5</th>
            <th>Pista 4 Pregunta 6</th>
            <th>Pista 5 Pregunta 1</th>
		</tr>
		<?php
		while($row = $result->fetch_assoc())
		{
                ?>
                    <tr>
                        <?php
                        reset($fieldNames); 
                        foreach ($fieldNames as $value):
                            ?> <td> 
                                <?php 
                                echo ($row[$value]); 

                        	/*if ($value == 'contact_referidos'){
                                $referidos = json_decode($row[$value], true);
                                foreach ($referidos as $k=>$v):
                                    foreach ($v as $kk=>$vv):
                                        echo $kk. ': ' . $vv.'<br/>';
                                    endforeach;
                                endforeach;
                            
                            }elseif ($value == 'sn_autoriza') {
                                echo (isset($row['sn_autoriza']) && $row['sn_autoriza'] == 1) ? 'Si' : 'No';
                                
                            }
                        	else{
                		           echo ($row[$value]); 
                                   //echo utf8_decode($row[$value]); 
                            */
                		
                        ?> </td> <?php 
                        endforeach;
                        ?>					                            
                    </tr>
                <?php
		}
		?>
	</table>
<?php
}

?>

</body>
</html>