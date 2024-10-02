<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeG050GCamGenGCamCarg::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.id', Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_id'), Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_id_comparador'));
	$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.descripcion', Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_descripcion'), Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_descripcion_comparador'));
	$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_de_id', Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_de_id_comparador'));
	$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g051_cunimedtotvol', Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g051_cunimedtotvol'), Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g051_cunimedtotvol_comparador'));
	$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g052_ddesunimedtotvol', Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g052_ddesunimedtotvol'), Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g052_ddesunimedtotvol_comparador'));
	$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g053_dtotvolmerc', Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g053_dtotvolmerc'), Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g053_dtotvolmerc_comparador'));
	$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g054_cunimedtotpes', Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g054_cunimedtotpes'), Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g054_cunimedtotpes_comparador'));
	$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g055_ddesunimedtotpes', Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g055_ddesunimedtotpes'), Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g055_ddesunimedtotpes_comparador'));
	$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g056_dtotpesmerc', Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g056_dtotpesmerc'), Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g056_dtotpesmerc_comparador'));
	$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g057_icarcarga', Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g057_icarcarga'), Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g057_icarcarga_comparador'));
	$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.eku_g058_ddescarcarga', Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g058_ddescarcarga'), Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_eku_g058_ddescarcarga_comparador'));
	$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.codigo', Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_codigo'), Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_codigo_comparador'));
	$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.observacion', Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_observacion'), Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_observacion_comparador'));
	$criterio->add('eku_de_g050_g_cam_gen_g_cam_carg.estado', Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_estado'), Gral::getVars(1, 'buscador_eku_de_g050_g_cam_gen_g_cam_carg_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_g050_g_cam_gen_g_cam_carg');
		$criterio->setCriterios();		
}
?>

