<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeReciboArchivo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_recibo_archivo.id', Gral::getVars(1, 'buscador_pde_recibo_archivo_id'), Gral::getVars(1, 'buscador_pde_recibo_archivo_id_comparador'));
	$criterio->add('pde_recibo_archivo.descripcion', Gral::getVars(1, 'buscador_pde_recibo_archivo_descripcion'), Gral::getVars(1, 'buscador_pde_recibo_archivo_descripcion_comparador'));
	$criterio->add('pde_recibo_archivo.pde_recibo_id', Gral::getVars(1, 'buscador_pde_recibo_archivo_pde_recibo_id'), Gral::getVars(1, 'buscador_pde_recibo_archivo_pde_recibo_id_comparador'));
	$criterio->add('pde_recibo_archivo.codigo', Gral::getVars(1, 'buscador_pde_recibo_archivo_codigo'), Gral::getVars(1, 'buscador_pde_recibo_archivo_codigo_comparador'));
	$criterio->add('pde_recibo_archivo.observacion', Gral::getVars(1, 'buscador_pde_recibo_archivo_observacion'), Gral::getVars(1, 'buscador_pde_recibo_archivo_observacion_comparador'));
	$criterio->add('pde_recibo_archivo.archivo', Gral::getVars(1, 'buscador_pde_recibo_archivo_archivo'), Gral::getVars(1, 'buscador_pde_recibo_archivo_archivo_comparador'));
	$criterio->add('pde_recibo_archivo.peso', Gral::getVars(1, 'buscador_pde_recibo_archivo_peso'), Gral::getVars(1, 'buscador_pde_recibo_archivo_peso_comparador'));
	$criterio->add('pde_recibo_archivo.tipo', Gral::getVars(1, 'buscador_pde_recibo_archivo_tipo'), Gral::getVars(1, 'buscador_pde_recibo_archivo_tipo_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_recibo_archivo');
		$criterio->setCriterios();		
}
?>

