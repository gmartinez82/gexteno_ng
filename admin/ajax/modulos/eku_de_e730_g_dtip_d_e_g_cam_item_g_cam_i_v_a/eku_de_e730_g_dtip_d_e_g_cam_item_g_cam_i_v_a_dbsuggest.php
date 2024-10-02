<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$buscar = Gral::getVars(1, 'buscar', '...');
if (strlen($buscar) < 3)
    return;

$pag = Gral::getVars(1, 'pag', 1);

$c = new Criterio();
$c->addTrueInicialEnWhere();
SocSocio::setAplicarFiltrosDeAlcance($c);

if($buscar != '...'){
    $c->addInicioSubconsulta();
    $c->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.id', $buscar, Criterio::LIKE, false, Criterio::_AND);

	$c->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.descripcion', $buscar, Criterio::LIKE, false, Criterio::_OR);
	$c->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.codigo', $buscar, Criterio::LIKE, false, Criterio::_OR);
	$c->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.observacion', $buscar, Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->addTabla('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a');
$c->addOrden('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.orden', 'asc');
$c->setCriterios();

$p = new Paginador(10, $pag);

$os = EkuDeE730GDtipDEGCamItemGCamIVA::getEkuDeE730GDtipDEGCamItemGCamIVAs($p, $c);
	
if(count($os) > 0){
?>
<ul>
   <?php foreach($os as $o){ ?>
   <li value="<?php Gral::_echo($o->getId()) ?>" class="uno" descripcion="<?php Gral::_echo($o->getDescripcion()) ?>">
        
	   <div class="datos-uno">
           <div class="descripcion"><?php Gral::_echo($o->getDescripcion()) ?></div>
           <div class="codigo"><?php Gral::_echo($o->getCodigo()) ?></div>
           <div class="observacion"><?php Gral::_echo($o->getObservacion()) ?></div>
            
       </div>
   </li>
   <?php } ?>
</ul>

<?php if (($p->getRegistros() * $p->getPagina()) <= $p->getTotal()) { ?>
    <div class="dbsuggest-boton-ver-mas pag-<?php echo ($pag) ?>" pag_actual="<?php echo ($pag) ?>" pag_siguiente="<?php echo ($pag + 1) ?>">
        Ver próximos <?php Gral::_echoInt($p->getRegistros()) ?> resultados de <?php Gral::_echoInt($p->getTotal()) ?> encontrados
    </div>
<?php } ?>

<?php }else{ ?>
       <div class="noresultado"><?php Lang::_lang('No se encontraron resultados') ?></div>
<?php } ?>

