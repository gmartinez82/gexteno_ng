<?php
include_once '_autoload.php';
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id');
$hijo = Gral::getVars(1, 'hijo');
$palabra = Gral::getVars(1, 'palabra');
$pagina = Gral::getVars(1, 'pagina', 1);

$padre_clase = Gral::getDBClaseDesdeTabla($padre);

$o_padre = eval('return '.$padre_clase.'::getOxId('.$padre_id.');');
$arr_not_videos = $o_padre->getNotVideosParaBloqueVinculo($palabra, $pagina);
$not_videos = $arr_not_videos['COLECCION'];
$paginador = $arr_not_videos['PAGINADOR'];


foreach($not_videos as $not_video){
	?>
	<div class="uno" id='uno_not_video_<?php echo $not_video->getId() ?>' identificador="<?php echo $not_video->getId() ?>" >
	<?php
	include 'uno_not_video_vinculo.php';
	?>
	</div>
	<?php
}
include "../../../parciales/paginador_set.php";
?>
