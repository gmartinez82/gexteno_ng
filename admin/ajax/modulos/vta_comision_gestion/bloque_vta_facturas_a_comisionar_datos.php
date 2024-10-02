<?php
include_once "_autoload.php";

$txt_fecha_desde = Gral::getVars(Gral::VARS_POST, 'txt_fecha_desde', 0);
$txt_fecha_hasta = Gral::getVars(Gral::VARS_POST, 'txt_fecha_hasta', 0);

$cmb_ver_todos = Gral::getVars(Gral::VARS_POST, 'cmb_ver_todos', 0);
$cmb_ver_otros = Gral::getVars(Gral::VARS_POST, 'cmb_ver_otros', 0);

$cmb_vta_preventista_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_preventista_id', 0);
$cmb_vta_comprador_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_comprador_id', 0);
$cmb_vta_vendedor_id = Gral::getVars(Gral::VARS_POST, 'cmb_vta_vendedor_id', 0);
$cmb_gral_actividad_id = Gral::getVars(Gral::VARS_POST, 'cmb_gral_actividad_id', 0);
$cmb_gral_escenario_id = Gral::getVars(Gral::VARS_POST, 'cmb_gral_escenario_id', 0);

$txt_fecha_desde = Gral::getFechaToDB($txt_fecha_desde);
$txt_fecha_hasta = Gral::getFechaToDB($txt_fecha_hasta);

$vta_comprobantes = VtaComision::getVtaComprobantesAComisionar($txt_fecha_desde, $txt_fecha_hasta, $cmb_vta_preventista_id, $cmb_vta_comprador_id, $cmb_vta_vendedor_id, $cmb_gral_actividad_id, $cmb_gral_escenario_id, $cmb_ver_todos, $cmb_ver_otros);
//Gral::prr($vta_comprobantes);

$vta_preventista = VtaPreventista::getOxId($cmb_vta_preventista_id);
$vta_comprador = VtaComprador::getOxId($cmb_vta_comprador_id);
$vta_vendedor = VtaVendedor::getOxId($cmb_vta_vendedor_id);

$porcentaje_comision = 0;
if($vta_preventista){
    $porcentaje_comision = $vta_preventista->getPorcentajeComision();
}
if($vta_comprador){
    $porcentaje_comision = $vta_comprador->getPorcentajeComision();
}
if($vta_vendedor){
    $porcentaje_comision = $vta_vendedor->getPorcentajeComision();
}

if (count($vta_comprobantes) > 0) {
    ?>
    <form id='form_generar_vta_comision' name='form_generar_vta_comision' method='POST' action=''>

        <div class="label-error" id="error_vta_comprobante_error"></div>
        
        <div class="div_vta_comision_agregar_comision">
            <table border='0' align='center' class='listado' id='listado_vta_comision_agregar_comision'>
                <tr>
                    <td align='center' class='adm_tbl_encabezado'>
                            #
                    </td>

                    <td align='center' class='adm_tbl_encabezado'>
                        <input type="checkbox" name="chk_vta_comprobante_select_all" id="chk_vta_comprobante_select_all" >
                    </td>

                    <td align='center' class='adm_tbl_encabezado'>
                        #
                    </td>

                    <td width='130' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Codigo') ?>
                    </td>

                    <td width='220' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Cliente') ?>
                    </td>

                    <td width='110' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Imp Total') ?>
                    </td>

                    <td width='180' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('NC Vinculados') ?>
                    </td>

                    <td width='180' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('RCB Vinculados') ?>
                    </td>

                    <td width='100' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Base Comis') ?>
                    </td>

                    <td width='90' align='center' class='adm_tbl_encabezado'>
                        % <?php Lang::_lang('Comis') ?>

                        <?php if (UsCredencial::getEsAcreditado('VTA_COMISION_GESTION_EDITAR_PORCENTAJE')) { ?>
                            <label class='btn-modificar-porcentaje' >
                                <img src='imgs/btn_modi.gif' width='14' border='0' align="absmiddle" title="Editar Porcentaje" />
                            </label>
                        <?php } ?>
                    </td>

                    <td width='90' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Comision') ?>
                    </td>

                </tr>

                <?php
                $inicio = true;

                foreach ($vta_comprobantes as $vta_comprobante) {
                    ?>
                    <tr id="tr_vta_comprobante_uno_<?php Gral::_echo($vta_comprobante->getId()) ?>" class="uno <?php echo $par ?>" vta_comprobante_id="<?php Gral::_echo($vta_comprobante->getId()) ?>">
                        <?php include "bloque_vta_facturas_a_comisionar_uno.php" ?>
                    </tr>

                <?php } ?>

                <tr>
                    <td align='center' class='adm_tbl_encabezado_gris'>
                        <div class="contador-comprobantes">
                            <?php Gral::_echoInt($cont) ?>
                        </div>                    
                    </td>
                    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
                    <td align='center' class='adm_tbl_encabezado_gris'>
                        <div class="contador-comprobantes-comisionables">
                            <?php Gral::_echoInt($cont_comisionable) ?>
                        </div>                    
                    </td>
                    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
                    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
                    <td align='right' class='adm_tbl_encabezado_gris'>
                        <div class="total-importe-total">
                            <?php Gral::_echoImp($total_importe_total_comprobante) ?>
                        </div>
                    </td>
                    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
                    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
                    <td align='right' class='adm_tbl_encabezado_gris'>
                        <div id="div_p1_comprobante_importe_base_total">
                            <?php Gral::_echoImp($importe_base_total) ?>
                        </div>
                    </td>
                    <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
                    <td align='right' class='adm_tbl_encabezado_gris'>
                        <div id="div_p1_comprobante_importe_comision_total">
                            <?php Gral::_echoImp($importe_comision_total) ?>
                        </div>
                    </td>
                </tr>

            </table>
        </div>

        <?php include "bloque_resumen_comprobantes.php" ?>

        <table class="listado_vta_comision_forma_pago" id="listado_vta_comision_forma_pago">
            <thead>
                <tr>
                    <th width='200' align='center' class='adm_tbl_encabezado'>Forma de Pago</th>
                    <th width='450' align='center' class='adm_tbl_encabezado'>Descripcion</th>
                    <th width='180' align='center' class='adm_tbl_encabezado'>Importe</th>
                    <th>
                        <label class="boton vta-comision-agregar-forma-pago" title="<?php Lang::_lang('Agregar Forma de Pago') ?>">
                            <img src="imgs/btn_add.gif" width="25">
                        </label>
                    </th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>
                <tr>
                    <th align='left' class='adm_tbl_encabezado_gris' colspan="2">Total Pago</th>
                    <th align='right' class='adm_tbl_encabezado_gris'>
                        <div id="div_p1_forma_pago_total_pago"></div>
                    </th>
                </tr>
                <tr>
                    <th align='left' class='adm_tbl_encabezado_gris' colspan="2">Total Comisiones</th>
                    <th align='right' class='adm_tbl_encabezado_gris'>
                        <div id="div_p1_forma_pago_total_comprobantes"></div>
                    </th>
                </tr>
                <tr>
                    <th align='left' class='adm_tbl_encabezado_gris' colspan="2">Saldo</th>
                    <th align='right' class='adm_tbl_encabezado_gris'>
                        <div id="div_p1_forma_pago_total_saldo"></div>
                    </th>
                </tr>

            </tfoot>
        </table>  
        
        <div id="bloque-datos-extra">
        
            <div class="par">
                <div class="label"><?php Lang::_lang('Observacion') ?></div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='1' cols='80' id='txa_observacion' class='textbox'></textarea>
                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
            </div>

        </div>

        <div class="label-error" id="error_general_error"></div>
        
        <div class="botonera">
            <button class="boton" id='btn_generar_comision' name='btn_generar_comision' type='button' class='btn_generar_comision'><?php Lang::_lang('Registrar Comision') ?></button>
        </div>

    </form>
<?php } else { ?>
    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron comprobantes') ?></div>
    </div>
<?php } ?>

<script>
    setInit();
    setInitVtaComisionGestion();
</script>