<?php
include '_autoload.php';

$fnd_chq_cheque_id = Gral::getVars(Gral::VARS_GET, 'fnd_chq_cheque_id', 0);
$fnd_chq_cheque    = FndChqCheque::getOxId($fnd_chq_cheque_id);

//Es editar
if($fnd_chq_cheque_id != 0)
{
    if($fnd_chq_cheque)
    {
        //Gral::prr($fnd_chq_cheque);
        $fnd_chq_chequera_id     = $fnd_chq_cheque->getFndChqChequeraId();
        $gral_banco_id           = $fnd_chq_cheque->getGralBancoId();
        $fnd_chq_codigo_sucursal = $fnd_chq_cheque->getCodigoSucursal();
        $fnd_chq_descripcion     = $fnd_chq_cheque->getDescripcion();
        $fnd_chq_entregador      = $fnd_chq_cheque->getEntregador();
        $fnd_chq_firmante        = $fnd_chq_cheque->getFirmante();
        $fnd_chq_numero_cheque   = $fnd_chq_cheque->getNumero();
        $fnd_chq_importe_cheque  = $fnd_chq_cheque->getImporte();
        $fnd_chq_fecha_emision   = Gral::getFechaToWeb($fnd_chq_cheque->getFechaEmision());
        $fnd_chq_fecha_cobro     = Gral::getFechaToWeb($fnd_chq_cheque->getFechaCobro());
        $fnd_chq_tipo_emisor_id  = $fnd_chq_cheque->getFndChqTipoEmisorId();
        $fnd_chq_tipo_emision_id = $fnd_chq_cheque->getFndChqTipoEmisionId();
        $fnd_chq_tipo_pago_id    = $fnd_chq_cheque->getFndChqTipoPagoId();
        $fnd_chq_cruzado         = $fnd_chq_cheque->getCruzado();
        $fnd_chq_observacion     = $fnd_chq_cheque->getObservacion();

        $fnd_chq_importe_cheque = Gral::getImporteDesdeDbToPriceFormat($fnd_chq_importe_cheque);

        $fnd_chq_tipo_emisor = FndChqTipoEmisor::getOxId($fnd_chq_tipo_emisor_id);        
    }
}
else
{
    //Es nuevo
}

//Gral::prr($arr_pde_recibo_cheque_infos[$key]);
?>

<form id='form_fnd_chq_cheque_editar' name='form_fnd_chq_cheque_editar' method='post' action='' fnd_chq_cheque_id='<?php echo $fnd_chq_cheque_id; ?>'>
    <div class='label-error' id='error_general_error'></div>

    <div class='datos'>
        
        <div class='par'>
            <div class='label'><?php Lang::_lang('Tipo Emisor') ?></div>
            <div class='dato'>
               <?php
                Html::html_dib_select(1, 'cmb_fnd_chq_tipo_emisor_id', Gral::getCmbFiltro(FndChqTipoEmisor::getFndChqTipoEmisorsCmb(), '...'), $fnd_chq_tipo_emisor_id, 'textbox fnd_chq_tipo_emisor_id' . $error_input_css);
                ?>
                <div class='label-error' id='cmb_fnd_chq_tipo_emisor_id_error'></div>
            </div>
        </div>
        
        <div class='par chq-chequera-editar' style='<?php echo ($fnd_chq_tipo_emisor && $fnd_chq_tipo_emisor->getCodigo() == FndChqTipoEmisor::TIPO_TERCERO) ? 'display:none;' : ''; ?>'>
            <div class='label'><?php Lang::_lang('Chequera') ?></div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'cmb_fnd_chq_chequera_id', Gral::getCmbFiltro(FndChqChequera::getFndChqChequerasCmb(), '...'), $fnd_chq_chequera_id, 'textbox fnd_chq_chequera_id' . $error_input_css); ?>
                <div class='label-error' id='cmb_fnd_chq_chequera_id_error'></div>
            </div>
        </div>
                        
        <div class='par'>
            <div class='label'><?php Lang::_lang('Banco') ?></div>
            <div class='dato'>
                <?php
                Html::html_dib_select(1, 'cmb_gral_banco_id', Gral::getCmbFiltro(GralBanco::getGralBancosCmb(), '...'), $gral_banco_id, 'textbox gral_banco_id depende-chequera ' . $error_input_css);
                ?>
                <div class='label-error' id='cmb_gral_banco_id_error'></div>
            </div>
        </div>
        
        <div class='par'>
            <div class='label'><?php Lang::_lang('Codigo Sucursal') ?></div>
            <div class='dato'>
                <input name='txt_codigo_sucursal' type='text' class='textbox depende-chequera' id='txt_codigo_sucursal' value='<?php Gral::_echoTxt($fnd_chq_codigo_sucursal) ?>' size='20' />
                <div class='label-error' id='txt_codigo_sucursal_error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'><?php Lang::_lang('Nro Cheque') ?></div>
            <div class='dato'>
                <input name='txt_numero_cheque' type='text' class='textbox' id='txt_numero_cheque' value='<?php Gral::_echoTxt($fnd_chq_numero_cheque) ?>' size='20' />
                <div class='label-error' id='txt_numero_cheque_error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'><?php Lang::_lang('Importe Cheque') ?></div>
            <div class='dato'>
                <input name='txt_importe_cheque' type='text' class='textbox moneda' id='txt_importe_cheque' value='<?php Gral::_echoTxt($fnd_chq_importe_cheque) ?>' size='20' />
                <div class='label-error' id='txt_importe_cheque_error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'><?php Lang::_lang('Firmante') ?></div>
            <div class='dato'>
                <input name='txt_firmante' type='text' class='textbox depende-chequera' id='txt_firmante' value='<?php Gral::_echoTxt($fnd_chq_firmante) ?>' size='40' />
                <div class='label-error' id='txt_firmante_error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'><?php Lang::_lang('Entregador') ?></div>
            <div class='dato'>
                <input name='txt_entregador' type='text' class='textbox' id='txt_entregador' value='<?php Gral::_echoTxt($fnd_chq_entregador) ?>' size='40' />
                <div class='label-error' id='txt_entregador_error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'><?php Lang::_lang('Fecha de Emision') ?></div>
            <div class='dato'>
                <input id='txt_fecha_emision' name='txt_fecha_emision' type='text' class='textbox date' size='9' value='<?php Gral::_echoTxt($fnd_chq_fecha_emision) ?>' title='<?php Lang::_lang('Ingrese la fecha de Emision') ?>' />
                <input type='button' id='cal_txt_fecha_emision' value=' ... '>
                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_fecha_emision', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_emision', onUpdate: function () {
                            //setAdmBuscadorTop('pde_remito_gestion')
                        }
                    });
                </script>
                <div class='label-error' id='txt_fecha_emision_error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'><?php Lang::_lang('Fecha de Cobro') ?></div>
            <div class='dato'>
                <input id='txt_fecha_cobro' name='txt_fecha_cobro' type='text' class='textbox date' size='9' value='<?php Gral::_echoTxt($fnd_chq_fecha_cobro) ?>'  title='<?php Lang::_lang('Ingrese la fecha de Cobro') ?>' />
                <input type='button' id='cal_txt_fecha_cobro' value=' ... '>
                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_fecha_cobro', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_cobro', onUpdate: function () {
                            //setAdmBuscadorTop('pde_remito_gestion')
                        }
                    });
                </script>
                <div class='label-error' id='txt_fecha_cobro_error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'><?php Lang::_lang('Tipo Emision') ?></div>
            <div class='dato'>
               <?php
                Html::html_dib_select(1, 'cmb_fnd_chq_tipo_emision_id', Gral::getCmbFiltro(FndChqTipoEmision::getFndChqTipoEmisionsCmb(), '...'), $fnd_chq_tipo_emision_id, 'textbox fnd_chq_tipo_emision_id' . $error_input_css);
                ?>
                <div class='label-error' id='cmb_fnd_chq_tipo_emision_id_error'></div>
            </div>
        </div>
        
        <div class='par'>
            <div class='label'><?php Lang::_lang('Tipo Pago') ?></div>
            <div class='dato'>
                <?php
                
                Html::html_dib_select(1, 'cmb_fnd_chq_tipo_pago_id', Gral::getCmbFiltro(FndChqTipoPago::getFndChqTipoPagosCmb(), '...'), $fnd_chq_tipo_pago_id, 'textbox fnd_chq_tipo_pago_id' . $error_input_css);
                ?>
                <div class='label-error' id='cmb_fnd_chq_tipo_pago_id_error'></div>
            </div>
        </div>
        
        <div class='par'>
            <div class='label'><?php Lang::_lang('Cruzado') ?></div>
            <div class='dato'>
                <?php
                
                Html::html_dib_select(1, 'cmb_fnd_chq_cruzado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $fnd_chq_cruzado, 'textbox cmb_fnd_chq_cruzado'. $error_input_css);
                ?>
                <div class='label-error' id='cmb_fnd_chq_cruzado_error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'><?php Lang::_lang('Observacion'); ?></div>
            <div class='dato'>
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox' ><?php Gral::_echoTxt($fnd_chq_observacion); ?></textarea>
                <div class='error label-error' id='txa_observacion_error'><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>

        <div class='botonera'>
            <button class='boton btn_guardar' id='btn_guardar' name='btn_guardar' type='button'><?php Lang::_lang('Guardar Datos del Cheque'); ?></button>
        </div>
        
    </div>
</form>

<script>
    setInit();
    setInitFndChqChequeGestion();
</script>
