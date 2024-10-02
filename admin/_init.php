<?php
include "_autoload.php";

$pagina = Gral::getVars(2, 'pagina');

$arr_gral = stripslashes ($_GET['arr_gral']);         
$arr_gral = unserialize($arr_gral);

eval('$criterio = new Criterio('.$arr_gral['clase'].'::SES_CRITERIOS);');
$criterio->addTabla($arr_gral['tabla']);

$arr = stripslashes ($_GET['arr']);         
$arr = unserialize($arr);
foreach($arr as $a){
	$criterio->add($arr_gral['tabla'].'.'.$a['campo'], $a['valor'], Criterio::IGUAL);
}
$criterio->setCriterios();
//Gral::prr($criterio);
header('Location: '.$arr_gral['archivo'].'.php');
?>