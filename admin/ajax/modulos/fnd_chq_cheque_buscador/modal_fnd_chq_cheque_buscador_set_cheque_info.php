<?php
include '_autoload.php';

$modulo = Gral::getVars(Gral::VARS_GET, 'modulo', 0);
$key = Gral::getVars(Gral::VARS_GET, 'key', -1);
$cheque_id = Gral::getVars(Gral::VARS_GET, 'cheque_id', 0);
$cmb_fnd_chq_en_cartera = Gral::getVars(Gral::VARS_GET, 'en_cartera', -1);
$txt_buscador_cheque = Gral::getVars(Gral::VARS_GET, 'txt_buscador_cheque', '');
$limpiar_cheque_seleccionado = Gral::getVars(Gral::VARS_GET, 'limpiar_cheque_seleccionado', 0);
$var_sesion_random = Gral::getVars(Gral::VARS_GET, 'var_sesion_random', '');


$var_sesion_modulo = $modulo . '_cheque_info' . $var_sesion_random;

$fnd_chq_cheque_descripcion_completa = '';

if ($limpiar_cheque_seleccionado == 1) {
    $arr_fnd_chq_cheque_buscador_cheque_infos = Gral::getSes($var_sesion_modulo);
    if (!is_null($arr_fnd_chq_cheque_buscador_cheque_infos[$key])) {
        unset($arr_fnd_chq_cheque_buscador_cheque_infos[$key]);
        Gral::setSes($var_sesion_modulo, $arr_fnd_chq_cheque_buscador_cheque_infos);
        $cheque_id = 0;
    }
}


if ($cheque_id == 0) {
    $cmb_fnd_chq_en_cartera = 1; //Se traen solo cheques en cartera por default
    $txt_buscador_cheque = '';

    $arr_fnd_chq_cheque_buscador_cheque_infos = Gral::getSes($var_sesion_modulo);

    if (!is_null($arr_fnd_chq_cheque_buscador_cheque_infos[$key])) {
        $arr = $arr_fnd_chq_cheque_buscador_cheque_infos[$key];

        $ses_cheque_id = $arr['cheque_id'];
        if ($ses_cheque_id != 0) {
            $fnd_chq_cheque = FndChqCheque::getOxId($ses_cheque_id);
            if ($fnd_chq_cheque) {
                $txt_descripcion = $fnd_chq_cheque->getDescripcion();
                $txt_firmante = $fnd_chq_cheque->getFirmante();
                $txt_entregador = $fnd_chq_cheque->getEntregador();
                $txt_numero_cheque = $fnd_chq_cheque->getNumero();
                $txt_importe_cheque = $fnd_chq_cheque->getImporte();
                $txt_fecha_emision = $fnd_chq_cheque->getFechaEmision();
                $txt_fecha_cobro = $fnd_chq_cheque->getFechaCobro();
                $cmb_fnd_chq_chequera_id = $fnd_chq_cheque->getFndChqChequeraId();
                $cmb_gral_banco_id = $fnd_chq_cheque->getGralBancoId();
                $txt_codigo_sucursal = $fnd_chq_cheque->getCodigoSucursal();
                $cmb_fnd_chq_tipo_emisor_id = $fnd_chq_cheque->getFndChqTipoEmisorId();
                $cmb_fnd_chq_tipo_emision_id = $fnd_chq_cheque->getFndChqTipoEmisionId();
                $cmb_fnd_chq_tipo_pago_id = $fnd_chq_cheque->getFndChqTipoPagoId();
                $cmb_fnd_chq_cruzado = $fnd_chq_cheque->getCruzado();
                $txa_observacion = $fnd_chq_cheque->getObservacion();

                $fnd_chq_chequera = FndChqChequera::getOxId($cmb_fnd_chq_chequera_id);
                $gral_banco = GralBanco::getOxId($cmb_gral_banco_id);
                $fnd_chq_tipo_emisor = FndChqTipoEmisor::getOxId($cmb_fnd_chq_tipo_emisor_id);
                $fnd_chq_tipo_emision = FndChqTipoEmision::getOxId($cmb_fnd_chq_tipo_emision_id);
                $fnd_chq_tipo_pago = FndChqTipoPago::getOxId($cmb_fnd_chq_tipo_pago_id);
                $gral_si_no = GralSiNo::getOxId($cmb_fnd_chq_cruzado);

                $gral_si_no_descripcion = ($gral_si_no) ? $gral_si_no->getDescripcion() : '';
                $fnd_chq_chequera_descripcion = ($fnd_chq_chequera) ? $fnd_chq_chequera->getDescripcion() : '';
                $gral_banco_descripcion = ($gral_banco) ? $gral_banco->getDescripcion() : '';
                $fnd_chq_tipo_emisor_descripcion = ($fnd_chq_tipo_emisor) ? $fnd_chq_tipo_emisor->getDescripcion() : '';
                $fnd_chq_tipo_emision_descripcion = ($fnd_chq_tipo_emision) ? $fnd_chq_tipo_emision->getDescripcion() : '';
                $fnd_chq_tipo_pago_descripcion = ($fnd_chq_tipo_pago) ? $fnd_chq_tipo_pago->getDescripcion() : '';
            }
        } else {
            $cmb_gral_banco_id = $arr['gral_banco_id'];
            $txt_codigo_sucursal = $arr['codigo_sucursal'];
            $txt_descripcion = $arr['descripcion'];
            $txt_entregador = $arr['entregador'];
            $txt_firmante = $arr['firmante'];
            $txt_numero_cheque = $arr['numero_cheque'];
            $txt_importe_cheque = $arr['importe_cheque'];
            $txt_fecha_emision = $arr['fecha_emision'];
            $txt_fecha_cobro = $arr['fecha_cobro'];
            $cmb_fnd_chq_chequera_id = $arr['fnd_chq_chequera_id'];
            $cmb_fnd_chq_tipo_emisor_id = $arr['fnd_chq_tipo_emisor_id'];
            $cmb_fnd_chq_tipo_emision_id = $arr['fnd_chq_tipo_emision_id'];
            $cmb_fnd_chq_tipo_pago_id = $arr['fnd_chq_tipo_pago_id'];
            $cmb_fnd_chq_cruzado = $arr['fnd_chq_cruzado'];
            $txa_observacion = $arr['fnd_chq_observacion'];

            $fnd_chq_tipo_emisor = FndChqTipoEmisor::getOxId($cmb_fnd_chq_tipo_emisor_id);
        }
    }
} elseif ($cheque_id != 0) {
    $fnd_chq_cheque = FndChqCheque::getOxId($cheque_id);
    if ($fnd_chq_cheque) {
        $txt_descripcion = $fnd_chq_cheque->getDescripcion();
        $txt_firmante = $fnd_chq_cheque->getFirmante();
        $txt_entregador = $fnd_chq_cheque->getEntregador();
        $txt_numero_cheque = $fnd_chq_cheque->getNumero();
        $txt_importe_cheque = $fnd_chq_cheque->getImporte();
        $txt_fecha_emision = $fnd_chq_cheque->getFechaEmision();
        $txt_fecha_cobro = $fnd_chq_cheque->getFechaCobro();
        $cmb_fnd_chq_chequera_id = $fnd_chq_cheque->getFndChqChequeraId();
        $cmb_gral_banco_id = $fnd_chq_cheque->getGralBancoId();
        $txt_codigo_sucursal = $fnd_chq_cheque->getCodigoSucursal();
        $cmb_fnd_chq_tipo_emisor_id = $fnd_chq_cheque->getFndChqTipoEmisorId();
        $cmb_fnd_chq_tipo_emision_id = $fnd_chq_cheque->getFndChqTipoEmisionId();
        $cmb_fnd_chq_tipo_pago_id = $fnd_chq_cheque->getFndChqTipoPagoId();
        $cmb_fnd_chq_cruzado = $fnd_chq_cheque->getCruzado();
        $txa_observacion = $fnd_chq_cheque->getObservacion();

        $fnd_chq_chequera = FndChqChequera::getOxId($cmb_fnd_chq_chequera_id);
        $gral_banco = GralBanco::getOxId($cmb_gral_banco_id);
        $fnd_chq_tipo_emisor = FndChqTipoEmisor::getOxId($cmb_fnd_chq_tipo_emisor_id);
        $fnd_chq_tipo_emision = FndChqTipoEmision::getOxId($cmb_fnd_chq_tipo_emision_id);
        $fnd_chq_tipo_pago = FndChqTipoPago::getOxId($cmb_fnd_chq_tipo_pago_id);
        $gral_si_no = GralSiNo::getOxId($cmb_fnd_chq_cruzado);

        $gral_si_no_descripcion = ($gral_si_no) ? $gral_si_no->getDescripcion() : '';
        $fnd_chq_chequera_descripcion = ($fnd_chq_chequera) ? $fnd_chq_chequera->getDescripcion() : '';
        $gral_banco_descripcion = ($gral_banco) ? $gral_banco->getDescripcion() : '';
        $fnd_chq_tipo_emisor_descripcion = ($fnd_chq_tipo_emisor) ? $fnd_chq_tipo_emisor->getDescripcion() : '';
        $fnd_chq_tipo_emision_descripcion = ($fnd_chq_tipo_emision) ? $fnd_chq_tipo_emision->getDescripcion() : '';
        $fnd_chq_tipo_pago_descripcion = ($fnd_chq_tipo_pago) ? $fnd_chq_tipo_pago->getDescripcion() : '';
    }
}

$fnd_chq_cheques = FndChqCheque::getFndChqChequeXCriterio($cmb_fnd_chq_en_cartera, $txt_buscador_cheque);
//Gral::prr($fnd_chq_cheques);

$fnd_chq_tipo_emisor_id = $cmb_fnd_chq_tipo_emisor_id;
$fnd_chq_chequera_id = $cmb_fnd_chq_chequera_id;
$gral_banco_id = $cmb_gral_banco_id;
$fnd_chq_tipo_emision_id = $cmb_fnd_chq_tipo_emision_id;
$fnd_chq_tipo_pago_id = $cmb_fnd_chq_tipo_pago_id;

if ($fnd_chq_cheque) {
    $fnd_chq_cheque_descripcion_completa = $fnd_chq_cheque->getDescripcionCompleta();
}
//Gral::prr($var_sesion_modulo);
//Gral::prr($arr_fnd_chq_cheque_buscador_cheque_infos[$key]);
?>

<div class='datos modificar-datos-cheque' var_sesion_random='<?php echo $var_sesion_random; ?>'>

    <form id='form_fnd_chq_cheque_buscador' name='form_fnd_chq_cheque_buscador' method='post' action='' modulo='<?php echo $modulo ?>' var_sesion_random='<?php echo $var_sesion_random; ?>' key='<?php echo $key ?>' cheque_id='<?php echo ($fnd_chq_cheque) ? $fnd_chq_cheque->getId() : 0 ?>'>
        <div class='label-error' id='error_general_error'></div>

        <div class='datos'>

            <div class='col c1'>

                <?php if ($ses_cheque_id): ?>
                    <div class="filtros">
                        <div class="filtro">
                            <div class="comparador">Cheque Seleccionado</div>
                            <div class="valor"><?php Gral::_echo($fnd_chq_cheque_descripcion_completa); ?></div>
                            <div class="eliminar">
                                <img src="imgs/btn_elim.gif" height="16" border="0" align="absmiddle">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class='par'>
                    <div class='label'>
                        <?php Lang::_lang('Tipo Emisor'); ?>
                    </div>
                    <div class='dato'>
                        <?php if ($fnd_chq_cheque): ?>
                            <label for='cheque_tipo_emisor'><?php Gral::_echo($fnd_chq_tipo_emisor_descripcion); ?></label>
                        <?php else: ?>
                            <?php Html::html_dib_select(1, 'cmb_fnd_chq_tipo_emisor_id', Gral::getCmbFiltro(FndChqTipoEmisor::getFndChqTipoEmisorsCmb(), '...'), $fnd_chq_tipo_emisor_id, 'textbox fnd_chq_tipo_emisor_id' . $error_input_css); ?>
                            <div class='label-error' id='cmb_fnd_chq_tipo_emisor_id_error'></div>
                        <?php endif; ?> 
                    </div>
                </div>

                <div class='par chq-chequera-editar' style='<?php echo ($fnd_chq_tipo_emisor && $fnd_chq_tipo_emisor->getCodigo() == FndChqTipoEmisor::TIPO_TERCERO) ? 'display:none;' : ''; ?>'>
                    <div class='label'>
                        <?php Lang::_lang('Chequera'); ?>
                    </div>
                    <div class='dato'>
                        <?php if ($fnd_chq_cheque): ?>
                            <label for='chequera'><?php Gral::_echo($fnd_chq_chequera_descripcion); ?></label>
                        <?php else: ?>
                            <?php Html::html_dib_select(1, 'cmb_fnd_chq_chequera_id', Gral::getCmbFiltro(FndChqChequera::getFndChqChequerasCmb(), '...'), $fnd_chq_chequera_id, 'textbox fnd_chq_chequera_id' . $error_input_css); ?>
                            <div class='label-error' id='cmb_fnd_chq_chequera_id_error'></div>
                        <?php endif; ?> 
                    </div>
                </div>

                <?php if ($fnd_chq_cheque): ?>
                    <div class='par'>
                        <div class='label'>
                            <?php Lang::_lang('Descripcion'); ?>
                        </div>
                        <div class='dato'>
                            <?php if ($fnd_chq_cheque): ?>
                                <label for='cheque_descripcion'><?php Gral::_echoTxt($txt_descripcion); ?></label>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class='par'>
                    <div class='label'>
                        <?php Lang::_lang('Banco'); ?>
                    </div>
                    <div class='dato'>
                        <?php if ($fnd_chq_cheque): ?>
                            <label for='banco_descripcion'><?php Gral::_echo($gral_banco_descripcion); ?></label>
                        <?php else: ?>
                            <?php Html::html_dib_select(1, 'cmb_gral_banco_id', Gral::getCmbFiltro(GralBanco::getGralBancosCmb(), '...'), $gral_banco_id, 'textbox gral_banco_id depende-chequera' . $error_input_css); ?>
                            <div class='label-error' id='cmb_gral_banco_id_error'></div>                        
                        <?php endif; ?> 
                    </div>
                </div>

                <div class='par'>
                    <div class='label'>
                        <?php Lang::_lang('Codigo Sucursal'); ?>
                    </div>
                    <div class='dato'>
                        <?php if ($fnd_chq_cheque): ?>
                            <label for='banco_sucursal'><?php Gral::_echoTxt($txt_codigo_sucursal); ?></label>
                        <?php else: ?>
                            <input name='txt_codigo_sucursal' type='text' class='textbox depende-chequera' id='txt_codigo_sucursal' value='<?php Gral::_echoTxt($txt_codigo_sucursal); ?>' size='20' />
                            <div class='label-error' id='txt_codigo_sucursal_error'></div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class='par'>
                    <div class='label'>
                        <?php Lang::_lang('Nro Cheque'); ?>
                    </div>
                    <div class='dato'>
                        <?php if ($fnd_chq_cheque): ?>
                            <label for='cheque_numero'><?php Gral::_echoTxt($txt_numero_cheque); ?></label>
                        <?php else: ?>
                            <input name='txt_numero_cheque' type='text' class='textbox' id='txt_numero_cheque' value='<?php Gral::_echoTxt($txt_numero_cheque); ?>' size='20' />
                            <div class='label-error' id='txt_numero_cheque_error'></div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class='par'>
                    <div class='label'>
                        <?php Lang::_lang('Importe Cheque'); ?>
                    </div>
                    <div class='dato'>
                        <?php if ($fnd_chq_cheque): ?>
                            <label for='cheque_importe'><?php Gral::_echoImp($txt_importe_cheque); ?></label>
                        <?php else: ?>
                            <input name='txt_importe_cheque' type='text' class='textbox moneda' id='txt_importe_cheque' value='<?php Gral::_echoTxt(Gral::getImporteDesdeDbToPriceFormat($txt_importe_cheque)); ?>' size='20' />
                            <div class='label-error' id='txt_importe_cheque_error'></div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class='par'>
                    <div class='label'>
                        <?php Lang::_lang('Firmante'); ?>
                    </div>
                    <div class='dato'>
                        <?php if ($fnd_chq_cheque): ?>
                            <label for='cheque_firmante'><?php Gral::_echoTxt($txt_firmante); ?></label>
                        <?php else: ?>
                            <input name='txt_firmante' type='text' class='textbox depende-chequera' id='txt_firmante' value='<?php Gral::_echoTxt($txt_firmante); ?>' size='40' />
                            <div class='label-error' id='txt_firmante_error'></div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class='par'>
                    <div class='label'>
                        <?php Lang::_lang('Entregador'); ?>
                    </div>
                    <div class='dato'>
                        <?php if ($fnd_chq_cheque): ?>
                            <label for='cheque_entregador'><?php Gral::_echoTxt($txt_entregador); ?></label>
                        <?php else: ?>    
                            <input name='txt_entregador' type='text' class='textbox' id='txt_entregador' value='<?php Gral::_echoTxt($txt_entregador) ?>' size='40' />
                            <div class='label-error' id='txt_entregador_error'></div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class='par'>
                    <div class='label'>
                        <?php Lang::_lang('Fecha de Emision'); ?>
                    </div>
                    <div class='dato'>
                        <?php if ($fnd_chq_cheque): ?>
                            <label for='cheque_fecha_emision'><?php Gral::_echoTxt(Gral::getFechaToWeb($txt_fecha_emision)); ?></label>
                        <?php else: ?> 
                            <input id='txt_fecha_emision' name='txt_fecha_emision' type='text' class='textbox date' size='9' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_fecha_emision)); ?>' title='<?php Lang::_lang('Ingrese la fecha de Emision') ?>' />
                            <input type='button' id='cal_txt_fecha_emision' value=' ... '>
                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_emision', onUpdate: function () {
                                        //setAdmBuscadorTop('pde_remito_gestion')
                                    }
                                });
                            </script>
                            <div class='label-error' id='txt_fecha_emision_error'></div>
                        <?php endif; ?> 
                    </div>
                </div>

                <div class='par'>
                    <div class='label'>
                        <?php Lang::_lang('Fecha de Cobro'); ?>
                    </div>
                    <div class='dato'>
                        <?php if ($fnd_chq_cheque): ?>
                            <label for='cheque_fecha_cobro'><?php Gral::_echoTxt(Gral::getFechaToWeb($txt_fecha_cobro)); ?></label>
                        <?php else: ?>
                            <input id='txt_fecha_cobro' name='txt_fecha_cobro' type='text' class='textbox date' size='9' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_fecha_cobro)); ?>'  title='<?php Lang::_lang('Ingrese la fecha de Cobro') ?>' />
                            <input type='button' id='cal_txt_fecha_cobro' value=' ... '>
                            <script type='text/javascript'>
                                Calendar.setup({
                                    inputField: 'txt_fecha_cobro', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_cobro', onUpdate: function () {
                                        //setAdmBuscadorTop('pde_remito_gestion')
                                    }
                                });
                            </script>
                            <div class='label-error' id='txt_fecha_cobro_error'></div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class='par'>
                    <div class='label'>
                        <?php Lang::_lang('Tipo Emision'); ?>
                    </div>
                    <div class='dato'>
                        <?php if ($fnd_chq_cheque): ?>
                            <label for='cheque_tipo_emision'><?php Gral::_echoTxt($fnd_chq_tipo_emision_descripcion); ?></label>
                        <?php else: ?>
                            <?php Html::html_dib_select(1, 'cmb_fnd_chq_tipo_emision_id', Gral::getCmbFiltro(FndChqTipoEmision::getFndChqTipoEmisionsCmb(), '...'), $fnd_chq_tipo_emision_id, 'textbox fnd_chq_tipo_emision_id' . $error_input_css); ?>
                            <div class='label-error' id='cmb_fnd_chq_tipo_emision_id_error'></div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class='par'>
                    <div class='label'>
                        <?php Lang::_lang('Tipo Pago'); ?>
                    </div>
                    <div class='dato'>
                        <?php if ($fnd_chq_cheque): ?>
                            <label for='cheque_tipo_pago'><?php Gral::_echoTxt($fnd_chq_tipo_pago_descripcion); ?></label>
                        <?php else: ?>
                            <?php Html::html_dib_select(1, 'cmb_fnd_chq_tipo_pago_id', Gral::getCmbFiltro(FndChqTipoPago::getFndChqTipoPagosCmb(), '...'), $fnd_chq_tipo_pago_id, 'textbox fnd_chq_tipo_pago_id' . $error_input_css); ?>
                            <div class='label-error' id='cmb_fnd_chq_tipo_pago_id_error'></div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class='par'>
                    <div class='label'>
                        <?php Lang::_lang('Cruzado'); ?>
                    </div>
                    <div class='dato'>
                        <?php if ($fnd_chq_cheque): ?>
                            <label for='cheque_cruzado'><?php Gral::_echoTxt($gral_si_no_descripcion); ?></label>
                        <?php else: ?>
                            <?php Html::html_dib_select(1, 'cmb_fnd_chq_cruzado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_fnd_chq_cruzado, 'textbox cmb_fnd_chq_cruzado' . $error_input_css); ?>
                            <div class='label-error' id='cmb_fnd_chq_cruzado_error'></div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class='par'>
                    <div class='label'>
                        <?php Lang::_lang('Observacion'); ?>
                    </div>
                    <div class='dato'>
                        <?php if ($fnd_chq_cheque): ?>
                            <label for='cheque_observacion'><?php Gral::_echoTxt($txa_observacion); ?></label>
                        <?php else: ?>
                            <textarea name='txa_observacion' rows='2' cols='30' id='txa_observacion' class='textbox' ><?php Gral::_echoTxt($txa_observacion); ?></textarea>
                            <div class='label-error' id='txa_observacion_error'><?php Gral::_echo($txa_observacion_error) ?></div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

            <div class='col c2'>

                <div class='buscador-cheque'>
                    <?php include 'bloque_fnd_chq_cheque_buscador.php'; ?>                    
                </div>

                <div class='cheques-buscador'>
                    <?php include 'bloque_fnd_chq_cheque_buscador_cheques.php'; ?>
                </div>
            </div>

            <div class='botonera'>
                <button class='boton btn_guardar' id='btn_guardar' name='btn_guardar' type='button'><?php Lang::_lang('Guardar Datos del Cheque') ?></button>
            </div>

        </div>
    </form>

</div>
<script>
    //setInit();
    //setInitFndChqChequeBuscador();
</script>