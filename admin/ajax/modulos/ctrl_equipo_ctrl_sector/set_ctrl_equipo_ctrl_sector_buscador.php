<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CtrlEquipoCtrlSector::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ctrl_equipo_ctrl_sector.id', Gral::getVars(1, 'buscador_ctrl_equipo_ctrl_sector_id'), Gral::getVars(1, 'buscador_ctrl_equipo_ctrl_sector_id_comparador'));
	$criterio->add('ctrl_equipo_ctrl_sector.ctrl_equipo_id', Gral::getVars(1, 'buscador_ctrl_equipo_ctrl_sector_ctrl_equipo_id'), Gral::getVars(1, 'buscador_ctrl_equipo_ctrl_sector_ctrl_equipo_id_comparador'));
	$criterio->add('ctrl_equipo_ctrl_sector.ctrl_sector_id', Gral::getVars(1, 'buscador_ctrl_equipo_ctrl_sector_ctrl_sector_id'), Gral::getVars(1, 'buscador_ctrl_equipo_ctrl_sector_ctrl_sector_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ctrl_equipo_ctrl_sector');
		$criterio->setCriterios();		
}
?>

