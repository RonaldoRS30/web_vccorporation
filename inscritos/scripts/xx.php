<?php 

$cad="insert into organizacion_documento(cod_tipo_documento, cod_organizacion, num_salida) values('01','10','0');";

for($i=1;$i<=55;$i++)
{
	for($j=1;$j<=55;$j++)
	{
		if($j<=9)
			$val='0'.(string)($j);
		else
			$val=$j;
		echo "insert into organizacion_documento(cod_tipo_documento, cod_organizacion, num_salida) values('".$val."','".$i."','0');<br>";
	}
}
?>