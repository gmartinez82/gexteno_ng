<?php
include "_autoload.php";

$fecha = Gral::getVars(2, 'fecha', '');
$persona_id = Gral::getVars(2, 'persona_id', 0);

$per_persona = PerPersona::getOxId($persona_id);
$gral_empresa = $per_persona->getGralEmpresa();
//$co_centro_operativo = $per_persona->getCoCentroOperativo();
//$gral_area = $per_persona->getGralArea();
//$gral_sector = $per_persona->getGralSector();

if ($per_persona) {
    $per_persona_id = $persona_id;
    $per_mov_movimientos = $per_persona->getPerMovMovimientosEnFecha($fecha, PerMovTipoMovimiento::TIPO_ENTRADA);
}

?>
<div class="datos ficha">
    <input id="hdn_fecha" name="hdn_fecha" type="hidden" value="<?php Gral::_echo($fecha); ?>"/>
    <input id="hdn_per_persona_id" name="hdn_per_persona_id" type="hidden" value="<?php Gral::_echo($per_persona_id); ?>"/>

    <?php include "modal_agregar_top.php" ?>   

    <div class="tabs">
        <ul>
            <li>
                <a href="#tab_general">
                    <?php Lang::_lang('General') ?>
                </a>
            </li>
            <li>
                <a href="#tab_movimiento">
                    <?php Lang::_lang('Movimientos') ?>
                </a>
            </li>
        </ul>

        <!-- Tab General -->
        <div id="tab_general" class="datos">

            <div class="par">
                <div class="label"><?php Lang::_lang('Fecha') ?></div>
                <div class="dato">
                    <?php Gral::_echo(Gral::getFechaToWEB($fecha)) ?>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Persona') ?></div>
                <div class="dato">
                    <?php Gral::_echo($per_persona->getDescripcion()) ?>
                </div>
            </div>

        </div>

        <!-- Tab Movimiento -->
        <div id="tab_movimiento" class="datos">
            <div class="div_bloque_per_mov_movimientos">
                <?php include "bloque_per_mov_movimientos.php"; ?>
            </div>
        </div>
    </div>    
</div>