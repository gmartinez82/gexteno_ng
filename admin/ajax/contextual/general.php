<?php
include "_autoload.php";

$tabla = Gral::getVars(1, 'tabla');
$clase = Gral::getVars(1, 'clase');
$elemento_id = Gral::getVars(1, 'elemento_id');
$tabla_relacion = Gral::getVars(1, 'tabla_relacion');
$clase_relacion = Gral::getVars(1, 'clase_relacion');
$elemento_id_relacion = Gral::getVars(1, 'elemento_id_relacion');

$o = new $clase;
$o->setId($elemento_id);

$o_relacion = new $clase_relacion;
$o_relacion->setId($elemento_id_relacion);

?>

<div class="uno">
	<a href="<?php echo($tabla_relacion) ?>_alta.php?id=<?php echo($o_relacion->getId()) ?>">
		<?php Lang::_lang('Editar') ?> <strong><?php echo($o_relacion->getDescripcion()) ?></strong>
    </a> 
</div>
<div class="uno">
    <a href="_init.php?arr_gral=<?php echo $clase::getFiltrosArrGral() ?>&arr=<?php echo $o->getFiltrosArrXCampo($clase_relacion, $tabla_relacion.'_id') ?>">
        <?php Lang::_lang('Filtrar Resultados por ') ?> <strong><?php echo($o_relacion->getDescripcion()) ?></strong>
    </a> 
</div>