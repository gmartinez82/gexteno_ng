<?php
include "_autoload.php";

$hijo = Gral::getVars(1, 'hijo');
$hijo_elemento_id = Gral::getVars(1, 'hijo_elemento_id');
$padre = Gral::getVars(1, 'padre');
$padre_id = Gral::getVars(1, 'padre_id', 0);
$padre_elemento_id = Gral::getVars(1, 'padre_elemento_id');
$tipo = Gral::getVars(1, 'tipo', 'alta');

$campo_padre = Gral::getDBEliminarPrefijoTipoElemento($padre_elemento_id);
$tabla_hijo = Gral::getDBEliminarIndicadorIdEnCampo(Gral::getDBEliminarPrefijoTipoElemento($hijo_elemento_id));
$clase_hijo = Gral::getDBClaseDesdeTabla($tabla_hijo);

if($padre_id != 0){
	$c = new Criterio();
	$c->add($tabla_hijo.".".$campo_padre, $padre_id, Criterio::IGUAL);
	$c->addTabla($tabla_hijo);
	$c->addOrden('2');
	$c->setCriterios();
	
	eval('$arr_datos = '.$clase_hijo.'::get'.$clase_hijo.'sCmbF(null, $c);');
	//Gral::prr($arr_datos);
}else{
	$arr_datos = array();
}

Html::html_dib_select(1, $hijo, Gral::getCmbFiltro($arr_datos,'Seleccione ...'), 0, 'textbox combo_padre combo_hijo', '', 'combo_padre="'.$padre.'" elemento_id="'.$hijo_elemento_id.'" tipo="'.$tipo.'"') 
?>
<?php if($tipo != 'buscador' && false){ ?>
<img class="img_btn_editar" elemento_id="<?php echo $hijo ?>" clase_id="<?php echo $tabla_hijo ?>" prefijo='' src='imgs/btn_modi.gif' border='0' width='20' align='absmiddle' id="img_btn_editar_<?php echo $hijo ?>" style='display:none;' />
<img class="img_btn_agregar_nuevo" elemento_id="<?php echo $hijo ?>" clase_id="<?php echo $tabla_hijo ?>" prefijo='' src='imgs/btn_add.png' border='0' width='20' align='absmiddle' />
<div class="div_modal_<?php echo $hijo ?>"></div>
<?php } ?>