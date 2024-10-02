<?php
include_once "_autoload.php";

$chk_pde_comprobantes = Gral::getVars(Gral::VARS_POST, "chk_pde_comprobante", null);
$txt_pde_comprobante_importe_saldos = Gral::getVars(Gral::VARS_POST, "txt_pde_comprobante_importe_saldo", null);
$hdn_pde_comprobante_classs = Gral::getVars(Gral::VARS_POST, "hdn_pde_comprobante_class", null);

$pde_comprobantes = array();
foreach ($chk_pde_comprobantes as $key => $chk_pde_comprobante) {
    $pde_comprobante_class = $hdn_pde_comprobante_classs[$key];
    $pde_comprobante = PdeComprobante::getOxId($chk_pde_comprobante, $pde_comprobante_class);

    $importe_orden_pagos[$key] = $txt_pde_comprobante_importe_saldos[$key];
    $pde_comprobantes[$key] = $pde_comprobante;
}
//Gral::prr($importe_orden_pagos);
//Gral::prr($pde_comprobantes);exit;

if (count($pde_comprobantes) > 0) {
    ?>

    <table border='0' align='center' class='listado' id='listado_pde_orden_pago_generar_orden_pago' multiseleccion = "<?php echo $control_presupuesto ?>">
        <tr>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Codigo') ?>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Numero') ?>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Imp Total') ?>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Imp en OP') ?>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Imp Pagado') ?>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Imp Saldo') ?>
            </td>

        </tr>

        <?php
        $inicio = true;

        foreach ($pde_comprobantes as $key => $pde_comprobante) {

            //if ($pde_comprobante->getCantidadDisponibleEnOrdenPago() > 0) {
            ?>
            <tr id="tr_pde_comprobante_uno_<?php Gral::_echo($pde_comprobante->getId()) ?>" class="uno <?php echo $par ?>" pde_comprobante_id="<?php Gral::_echo($pde_comprobante->getId()) ?>">
                <?php
                $importe_unitario = $importe_orden_pagos[$key];
                $importe_unitario = Gral::getImporteDesdePriceFormatToDB($importe_unitario);
                ?>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="codigo-pde-comprobante">
                        <?php Gral::_echo($pde_comprobante->getCodigo()) ?>
                    </div>
                    <div class="fecha-pde-comprobante">
                        <?php Gral::_echo(Gral::getFechaToWeb($pde_comprobante->getCreado())) ?>
                    </div>
                    <div class="pde_comprobante_tipo_estado_id">	
                        <img src="imgs/pde_comprobante_tipo_estado/<?php Gral::_echo($pde_comprobante->getPdeComprobanteTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="10" />
                        <?php Gral::_echo($pde_comprobante->getPdeComprobanteTipoEstado()->getDescripcion()) ?>
                    </div>    
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="numero-pde-comprobante">
                        <?php Gral::_echo($pde_comprobante->getNumeroComprobanteCompleto()) ?>
                    </div>
                    <div class="fecha-vencimiento-pde-comprobante">
                        <?php Gral::_echo(Gral::getFechaToWeb($pde_comprobante->getFechaVencimiento())) ?>
                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="importe">
                        <?php Gral::_echoImp($pde_comprobante->getImporteTotalComprobante()) ?>
                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="importe-pagado">
                        <?php Gral::_echoImp($pde_comprobante->getImporteEnOrdenPago()) ?>
                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="importe-pagado">
                        <?php Gral::_echoImp($pde_comprobante->getImporteEnOrdenPago()) ?>
                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="importe-saldo">
                        <?php Gral::_echoImp($importe_unitario) ?>
                    </div>
                </td>
            </tr>
            <?php //}  ?>


        <?php } ?>
    </table>



    <br>
    <br>
<?php } else { ?>
    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron comprobantes') ?></div>
    </div>
<?php } ?>
