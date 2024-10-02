<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvProveedorInsMarca::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_proveedor_ins_marca.id', Gral::getVars(1, 'buscador_prv_proveedor_ins_marca_id'), Gral::getVars(1, 'buscador_prv_proveedor_ins_marca_id_comparador'));
	$criterio->add('prv_proveedor_ins_marca.prv_proveedor_id', Gral::getVars(1, 'buscador_prv_proveedor_ins_marca_prv_proveedor_id'), Gral::getVars(1, 'buscador_prv_proveedor_ins_marca_prv_proveedor_id_comparador'));
	$criterio->add('prv_proveedor_ins_marca.ins_marca_id', Gral::getVars(1, 'buscador_prv_proveedor_ins_marca_ins_marca_id'), Gral::getVars(1, 'buscador_prv_proveedor_ins_marca_ins_marca_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_proveedor_ins_marca');
		$criterio->setCriterios();		
}
?>

