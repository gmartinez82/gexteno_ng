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
    $c->add('prv_proveedor.id', $buscar, Criterio::LIKE, false, Criterio::_AND);

	$c->add('prv_proveedor.descripcion', $buscar, Criterio::LIKE, false, Criterio::_OR);
	$c->add('prv_proveedor.codigo', $buscar, Criterio::LIKE, false, Criterio::_OR);
	$c->add('prv_proveedor.observacion', $buscar, Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->addTabla('prv_proveedor');
$c->addOrden('prv_proveedor.orden', 'asc');
$c->setCriterios();

$p = new Paginador(10, $pag);

$os = PrvProveedor::getPrvProveedors($p, $c);
	
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

