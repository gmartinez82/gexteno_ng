<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeH001GCamDEAsoc::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.id', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_id'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_id_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.descripcion', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_descripcion'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_descripcion_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_de_id', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_de_id_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h002_itipdocaso', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h002_itipdocaso'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h002_itipdocaso_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h003_ddestipdocaso', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h003_ddestipdocaso'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h003_ddestipdocaso_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h004_dcdcderef', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h004_dcdcderef'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h004_dcdcderef_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h005_dntimdi', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h005_dntimdi'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h005_dntimdi_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h006_destdocaso', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h006_destdocaso'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h006_destdocaso_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h007_dpexpdocaso', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h007_dpexpdocaso'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h007_dpexpdocaso_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h008_dnumdocaso', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h008_dnumdocaso'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h008_dnumdocaso_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h009_itipodocaso', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h009_itipodocaso'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h009_itipodocaso_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h010_ddtipodocaso', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h010_ddtipodocaso'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h010_ddtipodocaso_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h011_dfecemidi', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h011_dfecemidi'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h011_dfecemidi_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h012_dnumcomret', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h012_dnumcomret'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h012_dnumcomret_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h013_dnumrescf', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h013_dnumrescf'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h013_dnumrescf_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h014_itipcons', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h014_itipcons'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h014_itipcons_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h015_ddestipcons', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h015_ddestipcons'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h015_ddestipcons_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h016_dnumcons', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h016_dnumcons'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h016_dnumcons_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.eku_h017_dnumcontrol', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h017_dnumcontrol'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_eku_h017_dnumcontrol_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.codigo', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_codigo'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_codigo_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.observacion', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_observacion'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_observacion_comparador'));
	$criterio->add('eku_de_h001_g_cam_d_e_asoc.estado', Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_estado'), Gral::getVars(1, 'buscador_eku_de_h001_g_cam_d_e_asoc_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_h001_g_cam_d_e_asoc');
		$criterio->setCriterios();		
}
?>

