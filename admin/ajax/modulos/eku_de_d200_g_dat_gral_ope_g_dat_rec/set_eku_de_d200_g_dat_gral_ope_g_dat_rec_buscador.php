<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeD200GDatGralOpeGDatRec::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.id', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_id'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_id_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.descripcion', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_descripcion'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_descripcion_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_de_id', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_de_id_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d201_inatrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d201_inatrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d201_inatrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d202_itiope', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d202_itiope'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d202_itiope_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d203_cpaisrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d203_cpaisrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d203_cpaisrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d204_ddespaisre', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d204_ddespaisre'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d204_ddespaisre_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d205_iticontrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d205_iticontrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d205_iticontrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d206_drucrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d206_drucrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d206_drucrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d207_ddvrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d207_ddvrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d207_ddvrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d208_itipidrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d208_itipidrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d208_itipidrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d209_ddtipidrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d209_ddtipidrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d209_ddtipidrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d210_dnumidrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d210_dnumidrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d210_dnumidrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d211_dnomrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d211_dnomrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d211_dnomrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d212_dnomfanrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d212_dnomfanrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d212_dnomfanrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d213_ddirrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d213_ddirrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d213_ddirrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d218_dnumcasrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d218_dnumcasrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d218_dnumcasrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d219_cdeprec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d219_cdeprec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d219_cdeprec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d220_ddesdeprec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d220_ddesdeprec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d220_ddesdeprec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d221_cdisrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d221_cdisrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d221_cdisrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d222_ddesdisrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d222_ddesdisrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d222_ddesdisrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d223_cciurec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d223_cciurec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d223_cciurec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d224_ddesciurec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d224_ddesciurec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d224_ddesciurec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d214_dtelrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d214_dtelrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d214_dtelrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d215_dcelrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d215_dcelrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d215_dcelrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d216_demailrec', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d216_demailrec'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d216_demailrec_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d217_dcodcliente', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d217_dcodcliente'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_eku_d217_dcodcliente_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.codigo', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_codigo'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_codigo_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.observacion', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_observacion'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_observacion_comparador'));
	$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.estado', Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_estado'), Gral::getVars(1, 'buscador_eku_de_d200_g_dat_gral_ope_g_dat_rec_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_d200_g_dat_gral_ope_g_dat_rec');
		$criterio->setCriterios();		
}
?>

