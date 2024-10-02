<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeD100GDatGralOpeGEmis::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.id', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_id'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_id_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.descripcion', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_descripcion'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_descripcion_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_de_id', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_de_id_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d101_drucem', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d101_drucem'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d101_drucem_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d102_ddvemi', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d102_ddvemi'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d102_ddvemi_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d103_itipcont', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d103_itipcont'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d103_itipcont_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d104_ctipreg', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d104_ctipreg'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d104_ctipreg_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d105_dnomemi', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d105_dnomemi'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d105_dnomemi_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d106_dnomfanemi', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d106_dnomfanemi'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d106_dnomfanemi_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d107_ddiremi', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d107_ddiremi'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d107_ddiremi_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d108_dnumcas', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d108_dnumcas'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d108_dnumcas_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d109_dcompdir1', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d109_dcompdir1'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d109_dcompdir1_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d110_dcompdir2', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d110_dcompdir2'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d110_dcompdir2_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d111_cdepemi', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d111_cdepemi'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d111_cdepemi_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d112_ddesdepemi', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d112_ddesdepemi'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d112_ddesdepemi_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d113_cdisemi', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d113_cdisemi'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d113_cdisemi_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d114_ddesdisemi', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d114_ddesdisemi'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d114_ddesdisemi_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d115_cciuemi', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d115_cciuemi'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d115_cciuemi_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d116_ddesciuemi', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d116_ddesciuemi'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d116_ddesciuemi_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d117_dtelemi', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d117_dtelemi'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d117_dtelemi_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d118_demaile', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d118_demaile'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d118_demaile_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d119_ddensuc', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d119_ddensuc'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_eku_d119_ddensuc_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.codigo', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_codigo'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_codigo_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.observacion', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_observacion'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_observacion_comparador'));
	$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.estado', Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_estado'), Gral::getVars(1, 'buscador_eku_de_d100_g_dat_gral_ope_g_emis_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_d100_g_dat_gral_ope_g_emis');
		$criterio->setCriterios();		
}
?>

