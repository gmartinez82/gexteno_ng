<?php
include "_autoload.php";
$user = UsUsuario::autenticado();

$pan_panols = PanPanol::getPanPanols();
$pan_panols_aut = array();

foreach ($pan_panols as $pan_panol) {
    $codigo = PanPanol::PREFIJO_CREDENCIAL . $pan_panol->getCodigo();
    if (Login::esAutorizado($user, $codigo)) {
        $pan_panols_aut[] = $pan_panol;
    }
}
?>
<div class="datos cambio-tipo-asignacion">

    <p class="mensaje">A través de la siguiente grilla puede actualizar el tipo de asignacion de insumos actual del Pañol, en el caso de que sea "<strong>Pañolero</strong>" es únicamente el panolero el que puede entregar los insumos a los operarios, en el caso de que sea "<strong>Operario</strong>" es el mismo operario el que indica que insumo está colocando en el coche.</p>

    <table border='0' align='center' class='tabla-modal' id='listado_adm_pdi_asignacion'>
        <tr>
            <td width="130" align='center' class="adm_tbl_encabezado"><?php Lang::_lang('Galpon') ?></td>
            <td width="100" align='center' class="adm_tbl_encabezado"><?php Lang::_lang('Actual') ?></td>
            <td width="140" align='center' class="adm_tbl_encabezado"><?php Lang::_lang('Cambiar a') ?></td>
            <td width="140" align='center' class="adm_tbl_encabezado"><?php Lang::_lang('Actualizado el') ?></td>
            <td width="140" align='center' class="adm_tbl_encabezado"><?php Lang::_lang('Actualizado por') ?></td>
        </tr>
        <?php
        foreach ($pan_panols_aut as $pan_panol) {
            $pdi_tipo_asignacion_actual_id = ($pan_panol->getPdiAsignacionActual()) ? $pan_panol->getPdiAsignacionActual()->getPdiTipoAsignacionId() : null;
            ?>
            <tr id="tr_uno_panol_<?php Gral::_echo($pan_panol->getId()) ?>" class="uno" identificador="<?php Gral::_echo($pan_panol->getId()) ?>">
                <td align='left' class="adm_tbl_lineas">
                    <?php Gral::_echo($pan_panol->getDescripcion()) ?>
                </td>
                <td align='center' class="adm_tbl_lineas">
                    <strong>
                        <?php if ($pan_panol->getPdiAsignacionActual()) { ?>
                            <img class="guardar" src="imgs/btn_candado_<?php Gral::_echo(($pan_panol->getPdiAsignacionActual()->getPdiTipoAsignacion()->getCodigo() == PditipoAsignacion::TIPO_OPERARIO) ? 0 : 1) ?>.png" alt="tipo-asignacion" width="18" align='absmiddle' />

                            <?php Gral::_echo(($pan_panol->getPdiAsignacionActual()) ? $pan_panol->getPdiAsignacionActual()->getPdiTipoAsignacion()->getDescripcion() : '-') ?>

                        <?php } ?>
                    </strong>
                </td>
                <td align='center' class="adm_tbl_lineas">
                    <?php Html::html_dib_select(1, 'cmb_pdi_tipo_asignacion_id_' . $pan_panol->getId(), Gral::getCmbFiltro(PdiTipoAsignacion::getPdiTipoAsignacionsCmb(), Lang::_lang('...', true)), $pdi_tipo_asignacion_actual_id, 'textbox') ?>

                    &nbsp;
                    <img class="guardar" src="imgs/btn_guardar.png" alt="guardar" title="<?php Lang::_lang('Guardar Cambios') ?>" width="18" align='absmiddle' />
                </td>
                <td align='center' class="adm_tbl_lineas">
                    <?php Gral::_echo(($pan_panol->getPdiAsignacionActual()) ? Gral::getFechaHoraToWeb($pan_panol->getPdiAsignacionActual()->getCreado()) . ' hs' : '-') ?>
                </td>
                <td align='center' class="adm_tbl_lineas">
                    <?php Gral::_echo(($pan_panol->getPdiAsignacionActual()) ? $pan_panol->getPdiAsignacionActual()->getCreadoPorDescripcion() : '-') ?>
                </td>
            </tr>
        <?php } ?>
    </table>

</div>