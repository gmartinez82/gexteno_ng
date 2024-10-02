<?php if ($cli_cliente && $cli_cliente->getId() != 'null') { ?>

    <?php 
    // -------------------------------------------------------------------------
    // HTML Bloque Cliente Info Sifen
    // -------------------------------------------------------------------------
    $cli_cliente->getHtmlBloqueClienteInfoSifen();
    ?>

    <div class="par">
        <div class="label"><?php Gral::_echoTxt("Cliente") ?>: </div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getDescripcion()) ?>
            <div id="txt_persona_descripcion_error" class="label-error" ></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echo($cli_cliente->getGralTipoDocumento()->getDescripcion()) ?>: </div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getCuit()) ?>
            <div id="cmb_gral_tipo_documento_id_error" class="label-error" ></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echo("Condicion IVA") ?>: </div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getGralCondicionIva()->getDescripcion()) ?>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echo("Email") ?>: </div>
        <div class="dato">
            <?php Gral::_echo($cli_cliente->getEmail()) ?>
            <div id="txt_persona_email_error" class="label-error" ></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echo("Tipo Despacho") ?>: </div>
        <div class="dato">
            <?php
            Html::html_dib_select(1, 'cmb_vta_presupuesto_tipo_despacho_id', $vta_presupuesto_tipo_despachos_cmb, $vta_presupuesto_tipo_despacho_id, 'textbox ' . $error_input_css);
            ?>
            <div class="label-error" id="cmb_vta_presupuesto_tipo_despacho_id_error"></div>
        </div>
    </div>

    <div id="bloque_vta_presupuesto_gestion_pie_datos_despacho">
        <?php include 'bloque_vta_presupuesto_gestion_pie_datos_despacho.php'; ?>  
    </div>

<?php } elseif ($cli_cliente_id == -1) { ?>

    <div class="par">
        <div class="label"><?php Gral::_echo("Tipo Documento") ?> (RUC/CI): </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_gral_tipo_documento_id', $gral_tipo_documentos_cmb, $vta_presupuesto->getGralTipoDocumentoId(), 'textbox ' . $error_input_css); ?>
            <div class="label-error" id="cmb_gral_tipo_documento_id_error"></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echo("Documento") ?>: </div>
        <div class="dato">
            <input id="txt_persona_documento" name="txt_persona_documento" type="text"  class="textbox" size="6" value="<?php Gral::_echo($vta_presupuesto->getPersonaDocumento()) ?>" />
            <div class="label-error" id="txt_persona_documento_error"></div>
        </div>
    </div>
    <div class="bloque-cliente-nuevo-info-sifen"></div>

    <div class="par">
        <div class="label"><?php Gral::_echoTxt("Razon Social") ?>: </div>
        <div class="dato">
            <input id='txt_razon_social' name='txt_razon_social' type='text' class='textbox <?php echo $error_input_css ?> ' value='' size='40' />
            <div id="txt_razon_social_error" class="label-error" ></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echoTxt("Nombre de Fantasia") ?>: </div>
        <div class="dato">
            <input type="text" id="txt_persona_descripcion" name="txt_persona_descripcion" class="textbox" size="6" value="<?php Gral::_echo($vta_presupuesto->getPersonaDescripcion()) ?>" />
            <div id="txt_persona_descripcion_error" class="label-error" ></div>
        </div>
    </div>


<script>
    setKeyupTxtDocumento();
    function setKeyupTxtDocumento(){
        var timeout;
        
        $("#txt_persona_documento").keyup(function (e) {

            // solo numeros
            //this.value = (this.value + '').replace(/[^.0-9]/g, '');

            var documento = $(this).val();

            if (timeout) {
                clearTimeout(timeout);
                timeout = null;
            }

            if (documento.length > 0) {

                timeout = setTimeout(function () {
                    getClienteInfoDesdeSifen(documento);
                }, 1000);
                
            }
        });
    
    }
    
    function getClienteInfoDesdeSifen(documento){
        //console.log(documento);
        
        $.ajax({
            type: "GET",
            url: "ajax/modulos/cli_cliente_gestion/get_html_bloque_cliente_nuevo_info_sifen.php",
            data: 'documento=' + documento,
            dataType: "html",
            beforeSend: function (objeto) {
                $(".bloque-cliente-nuevo-info-sifen").html(img_loading);
            },
            success: function (data) {
                $(".bloque-cliente-nuevo-info-sifen").html(data);

                setInitVtaPresupuestoGestion();
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
        
    }
</script>

    <div class="par">
        <div class="label"><?php Gral::_echoTxt("Tipo Cliente") ?>: </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_cli_tipo_cliente_id', Gral::getCmbFiltro(CliTipoCliente::getCliTipoClientesCmb(true), '...'), '', 'textbox ' . $error_input_css) ?>
            <div id="cmb_cli_tipo_cliente_id_error" class="label-error" ></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echoTxt("Tipo Personeria") ?>: </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_gral_tipo_personeria_id', Gral::getCmbFiltro(GralTipoPersoneria::getGralTipoPersoneriasCmb(true), '...'), '', 'textbox ' . $error_input_css) ?>
            <div id="cmb_gral_tipo_personeria_id_error" class="label-error" ></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echoTxt("Condicion IVA") ?>: </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_gral_condicion_iva_id', Gral::getCmbFiltro(GralCondicionIva::getGralCondicionIvasCmb(true), '...'), '', 'textbox ' . $error_input_css) ?>
            <div id="cmb_gral_condicion_iva_id_error" class="label-error" ></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echoTxt("Domicilio") ?>: </div>
        <div class="dato">
            <input id='txt_domicilio_legal' name='txt_domicilio_legal' type='text' class='textbox <?php echo $error_input_css ?> ' value='' size='40' />
            <div id="txt_domicilio_legal_error" class="label-error" ></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echoTxt("Nro Casa") ?>: </div>
        <div class="dato">
            <input id='txt_numero_casa' name='txt_numero_casa' type='text' class='textbox <?php echo $error_input_css ?> ' value='' size='10' />
            <div id="txt_numero_casa_error" class="label-error" ></div>
        </div>
    </div>
    
    <div class="par">
        <div class="label"><?php Gral::_echo("Cliente Email") ?>: </div>
        <div class="dato">
            <input  id="txt_persona_email" name="txt_persona_email" type="text" class="textbox" size="6" value="<?php Gral::_echo($vta_presupuesto->getPersonaEmail()) ?>" />
            <div class="label-error" id="txt_persona_email_error"></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echoTxt("Telefono") ?>: </div>
        <div class="dato">
            <input id='txt_telefono' name='txt_telefono' type='text' class='textbox <?php echo $error_input_css ?> ' value='' size='40' />
            <div id="txt_telefono_error" class="label-error" ></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Lang::_lang('Localidad') ?></div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_geo_localidad_id', Gral::getCmbFiltro(GeoLocalidad::getGeoLocalidadsFullCmb(true), '...'), $cmb_geo_localidad_id, 'textbox selective-input-filtro') ?>
            <div id="cmb_geo_localidad_id_error" class="label-error" ></div>
        </div>
    </div>

    <div class="par" style="display: none;">
        <div class="label"><?php Gral::_echoTxt("IVA Exceptuado") ?>: </div>
        <div class="dato">
            <?php Html::html_dib_select(1, 'cmb_iva_exceptuado', GralSiNo::getGralSiNosCmb(true), '', 'textbox ' . $error_input_css) ?>
            <div id="cmb_iva_exceptuado_error" class="label-error" ></div>
        </div>
    </div>

    <div class="botonera cliente-alta">
        <button id='btn_guardar_cliente' name='btn_guardar_cliente' type='button' class="boton"><?php Lang::_lang('Guardar Nuevo Cliente') ?></button>
    </div>

<?php } else { ?>

    <div class="par">
        <div class="label"><?php Gral::_echoTxt("Persona Descripcion") ?>: </div>
        <div class="dato">
            <input type="text" id="txt_persona_descripcion" name="txt_persona_descripcion" class="textbox" size="6" value="<?php Gral::_echo($vta_presupuesto->getPersonaDescripcion()) ?>" />
            <div class="label-error" id="txt_persona_descripcion_error"></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echo("Persona Tipo Documento") ?>: </div>
        <div class="dato">
            <?php
            $gral_tipo_documento_id = $vta_presupuesto->getGralTipoDocumentoId();
            Html::html_dib_select(1, 'cmb_gral_tipo_documento_id', $gral_tipo_documentos_cmb, $gral_tipo_documento_id, 'textbox ' . $error_input_css);
            ?>
            <div class="label-error" id="cmb_gral_tipo_documento_id_error"></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echo("Persona Documento") ?>: </div>
        <div class="dato">
            <input type="text" id="txt_persona_documento" name="txt_persona_documento" class="textbox" size="6" value="<?php Gral::_echo($vta_presupuesto->getPersonaDocumento()) ?>" />
            <div class="label-error" id="txt_persona_documento_error"></div>
        </div>
    </div>

    <div class="par">
        <div class="label"><?php Gral::_echo("Cliente Email") ?>: </div>
        <div class="dato">
            <input type="text" id="txt_persona_email" name="txt_persona_email" class="textbox" size="6" value="<?php Gral::_echo($vta_presupuesto->getPersonaEmail()) ?>" />
            <div class="label-error" id="txt_persona_email_error"></div>
        </div>
    </div>

<?php } ?>
