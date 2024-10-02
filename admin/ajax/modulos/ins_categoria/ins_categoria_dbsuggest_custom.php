<?php
/**
 * @modificado_por Esteban Martinez
 * @modificado 16/03/2017
 */
include "_autoload.php";

$buscar = Gral::getVars(1, 'buscar', '...');

$c = new Criterio();


if($buscar != '...')
{
    $c->add('familia_descripcion', $buscar, Criterio::LIKE, false, Criterio::_OR);
}

$c->addTabla('ins_categoria');
$c->addOrden('orden', 'asc');
$c->setCriterios();

$os_desordenado = InsCategoria::getInsCategorias(null, $c);

$os = array();
foreach($os_desordenado as $o){
    $os[$o->getArbolFamiliaDescripcion()] = $o;
}
ksort($os);

if(count($os) > 0):
?>
<ul>
   <?php foreach($os as $o): ?>
   <li value="<?php Gral::_echo($o->getId()) ?>" class="uno" descripcion="<?php Gral::_echo($o->getFamiliaDescripcion()) ?>">
        <div class="datos-uno">
            <div class="descripcion"><?php Gral::_echo($o->getArbolFamiliaDescripcion()) ?></div>
        </div>
   </li>
   <?php endforeach; ?>
</ul>

<?php
else:
?>
    <div class="noresultado"><?php Lang::_lang('No se encontraron resultados') ?></div>
<?php
endif;
?>

