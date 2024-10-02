<?php
include "_autoload.php";

$buscar = Gral::getVars(1, 'buscar', '.');

$c = new Criterio();


if($buscar != '...'){

	$c->add('descripcion', $buscar, Criterio::LIKE, false, Criterio::_OR);
	$c->add('codigo', $buscar, Criterio::LIKE, false, Criterio::_OR);
	$c->add('observacion', $buscar, Criterio::LIKE, false, Criterio::_OR);
}

$c->addTabla('vta_vendedor_descuento');
$c->addOrden('orden', 'asc');
$c->setCriterios();

$os = VtaVendedorDescuento::getVtaVendedorDescuentos(null, $c);
	
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
<?php }else{ ?>
       <div class="noresultado"><?php Lang::_lang('No se encontraron resultados') ?></div>
<?php } ?>

