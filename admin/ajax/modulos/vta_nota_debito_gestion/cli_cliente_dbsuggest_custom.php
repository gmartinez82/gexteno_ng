<?php
include "_autoload.php";

$buscar = Gral::getVars(1, 'buscar', '.');
if (strlen($buscar) < 3)
    return;

$c = new Criterio();

$c->addInicioSubconsulta();
$c->add('estado', '1', Criterio::IGUAL, false, '');
$c->addFinSubconsulta();

if ($buscar != '...') {
    $c->add('razon_social', $buscar, Criterio::LIKE, false, Criterio::_AND);
}

$c->addTabla('cli_cliente');
$c->addOrden('orden', 'asc');
$c->setCriterios();

$os = CliCliente::getCliClientes(null, $c);

if (count($os) > 0) {
    ?>
    <ul>
        <?php foreach ($os as $o) { ?>
            <li value="<?php Gral::_echo($o->getId()) ?>" class="uno" descripcion="<?php Gral::_echo($o->getDescripcion()) ?>">

                <div class="avatar"><img src="<?php //Gral::_echo($o->getPathImagenPrincipal(true))      ?>"></div>

                <div class="datos-uno">
                    <div class="descripcion"><?php Gral::_echo($o->getDescripcion()) ?></div>
                    <div class="razon_social"><?php Lang::_lang('Razon Social') ?>: <?php Gral::_echo($o->getRazonSocial()) ?></div>
                </div>
            </li>
        <?php } ?>
    </ul>
<?php } else { ?>
    <div class="noresultado"><?php Lang::_lang('No se encontraron resultados') ?></div>
<?php } ?>

