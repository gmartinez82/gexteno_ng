<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeG001GCamGen::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_g001_g_cam_gen.id', Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_id'), Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_id_comparador'));
	$criterio->add('eku_de_g001_g_cam_gen.descripcion', Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_descripcion'), Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_descripcion_comparador'));
	$criterio->add('eku_de_g001_g_cam_gen.eku_de_id', Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_eku_de_id_comparador'));
	$criterio->add('eku_de_g001_g_cam_gen.eku_g002_dordcompra', Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_eku_g002_dordcompra'), Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_eku_g002_dordcompra_comparador'));
	$criterio->add('eku_de_g001_g_cam_gen.eku_g003_dordvta', Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_eku_g003_dordvta'), Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_eku_g003_dordvta_comparador'));
	$criterio->add('eku_de_g001_g_cam_gen.eku_g004_dasiento', Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_eku_g004_dasiento'), Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_eku_g004_dasiento_comparador'));
	$criterio->add('eku_de_g001_g_cam_gen.codigo', Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_codigo'), Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_codigo_comparador'));
	$criterio->add('eku_de_g001_g_cam_gen.observacion', Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_observacion'), Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_observacion_comparador'));
	$criterio->add('eku_de_g001_g_cam_gen.estado', Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_estado'), Gral::getVars(1, 'buscador_eku_de_g001_g_cam_gen_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_g001_g_cam_gen');
		$criterio->setCriterios();		
}
?>

