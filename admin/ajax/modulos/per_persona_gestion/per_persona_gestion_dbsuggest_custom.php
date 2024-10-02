<?php
include "_autoload.php";

$buscar = Gral::getVars(1, 'buscar', '');

$c = new Criterio();
$c->addTrueInicialEnWhere();

//$c->setWhereInit(true);

if($buscar != '')
{
    $c->addInicioSubconsulta();
	  $c->add('descripcion', $buscar, Criterio::LIKE, false, Criterio::_AND);
	  $c->add('apellido', $buscar, Criterio::LIKE, false, Criterio::_OR);
	  $c->add('nombre', $buscar, Criterio::LIKE, false, Criterio::_OR);
	  $c->add('codigo', $buscar, Criterio::LIKE, false, Criterio::_OR);
	  $c->add('observacion', $buscar, Criterio::LIKE, false, Criterio::_OR);
    $c->addFinSubconsulta();
}

$c->addTabla('per_persona');
$c->addOrden('orden', 'asc');
$c->setCriterios();

$os = PerPersona::getPerPersonas(null, $c);
	
if(count($os) > 0){
?>
<ul>
    <?php foreach($os as $o){ ?>
    <li value="<?php Gral::_echo($o->getId()) ?>" class="uno" descripcion="<?php Gral::_echo($o->getDescripcion()) ?>">
        
	  <div class="avatar"><img src="<?php Gral::_echo($o->getPathImagenPrincipal(true)) ?>"></div>
        
	  <div class="datos-uno">
           <div class="descripcion"><?php Gral::_echo($o->getDescripcion()) ?></div>
           <div class="codigo">Legajo: <?php Gral::_echo($o->getLegajo()) ?></div>
           <div class="codigo"><?php Gral::_echo($o->getGralEmpresa()->getDescripcion()) ?></div>
           <div class="observacion"><?php Gral::_echo($o->getObservacion()) ?></div>
            
    </div>
   </li>
   <?php } ?>
</ul>
<?php }else{ ?>
       <div class="noresultado"><?php Lang::_lang('No se encontraron resultados') ?></div>
<?php } ?>

