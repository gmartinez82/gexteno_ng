<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE020GDtipDEGCompPub::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.id', Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_id'), Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_id_comparador'));
	$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.descripcion', Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_descripcion'), Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_descripcion_comparador'));
	$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_eku_de_id_comparador'));
	$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.eku_e021_dmodcont', Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_eku_e021_dmodcont'), Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_eku_e021_dmodcont_comparador'));
	$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.eku_e022_dentcont', Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_eku_e022_dentcont'), Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_eku_e022_dentcont_comparador'));
	$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.eku_e023_danocont', Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_eku_e023_danocont'), Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_eku_e023_danocont_comparador'));
	$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.eku_e024_dseccont', Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_eku_e024_dseccont'), Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_eku_e024_dseccont_comparador'));
	$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.eku_e025_dfecodcont', Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_eku_e025_dfecodcont'), Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_eku_e025_dfecodcont_comparador'));
	$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.codigo', Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_codigo'), Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_codigo_comparador'));
	$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.observacion', Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_observacion'), Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_observacion_comparador'));
	$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.estado', Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_estado'), Gral::getVars(1, 'buscador_eku_de_e020_g_dtip_d_e_g_comp_pub_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e020_g_dtip_d_e_g_comp_pub');
		$criterio->setCriterios();		
}
?>

