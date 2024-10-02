<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvProveedorUsUsuario::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_proveedor_us_usuario.id', Gral::getVars(1, 'buscador_prv_proveedor_us_usuario_id'), Gral::getVars(1, 'buscador_prv_proveedor_us_usuario_id_comparador'));
	$criterio->add('prv_proveedor_us_usuario.prv_proveedor_id', Gral::getVars(1, 'buscador_prv_proveedor_us_usuario_prv_proveedor_id'), Gral::getVars(1, 'buscador_prv_proveedor_us_usuario_prv_proveedor_id_comparador'));
	$criterio->add('prv_proveedor_us_usuario.us_usuario_id', Gral::getVars(1, 'buscador_prv_proveedor_us_usuario_us_usuario_id'), Gral::getVars(1, 'buscador_prv_proveedor_us_usuario_us_usuario_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_proveedor_us_usuario');
		$criterio->setCriterios();		
}
?>

