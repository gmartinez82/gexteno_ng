<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeE770GDtipDEGCamItemGVehNuevo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.id', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_id'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_id_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.descripcion', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_descripcion'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_descripcion_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_de_id', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_de_id_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_de_e700_g_dtip_d_e_g_cam_item_id', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_de_e700_g_dtip_d_e_g_cam_item_id'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_de_e700_g_dtip_d_e_g_cam_item_id_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e771_itipopvn', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e771_itipopvn'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e771_itipopvn_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e772_ddestipopvn', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e772_ddestipopvn'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e772_ddestipopvn_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e773_dchasis', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e773_dchasis'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e773_dchasis_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e774_dcolor', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e774_dcolor'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e774_dcolor_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e775_dpotencia', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e775_dpotencia'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e775_dpotencia_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e776_dcapmot', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e776_dcapmot'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e776_dcapmot_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e777_dpnet', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e777_dpnet'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e777_dpnet_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e778_dpbruto', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e778_dpbruto'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e778_dpbruto_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e779_itipcom', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e779_itipcom'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e779_itipcom_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e780_ddestipcom', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e780_ddestipcom'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e780_ddestipcom_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e781_dnromotor', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e781_dnromotor'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e781_dnromotor_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e782_dcaptracc', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e782_dcaptracc'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e782_dcaptracc_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e783_danofab', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e783_danofab'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e783_danofab_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e784_ctipveh', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e784_ctipveh'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e784_ctipveh_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e785_dcapac', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e785_dcapac'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e785_dcapac_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e786_dcilin', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e786_dcilin'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_eku_e786_dcilin_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.codigo', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_codigo'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_codigo_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.observacion', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_observacion'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_observacion_comparador'));
	$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.estado', Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_estado'), Gral::getVars(1, 'buscador_eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo');
		$criterio->setCriterios();		
}
?>

