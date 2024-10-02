<?php
header("Content-Type: text/xml");

include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

$vta_nota_credito_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_credito_id', 0, Gral::TIPO_INTEGER);
$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);


//$array_datos_sifen = $vta_nota_credito->getConsultarEventosEnSIFEN();
$array_datos_sifen = $vta_nota_credito->setImportarEventosEnSIFEN();
//Gral::prr($array_datos_sifen);

if($array_datos_sifen){
    $dCDC = $array_datos_sifen['dCDC'];
    $dFecProc = $array_datos_sifen['dFecProc'];
    $dCodRes = $array_datos_sifen['dCodRes'];
    $dMsgRes = $array_datos_sifen['dMsgRes'];
}

?>
    <div class="datos comprobante" >       
        
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getCodigo()); ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getPersonaDescripcion()); ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Nro Factura') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_nota_credito->getNumeroComprobanteCompleto()); ?>
            </div>
        </div>

        <div class="par">
            <div class="label">SIFEN - <?php Lang::_lang('CDC') ?></div>
            <div class="dato">
                <?php Gral::_echo($dCDC); ?>
            </div>
        </div>
        
        <div class="par">
            <div class="label">SIFEN - <?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($dCodRes); ?>
            </div>
        </div>

        <div class="par">
            <div class="label">SIFEN - <?php Lang::_lang('Mensaje') ?></div>
            <div class="dato">
                <?php Gral::_echo($dMsgRes); ?>
            </div>
        </div>
        
        <?php 
        foreach($array_datos_sifen['eventos'] as $i => $array_datos_sifen_evento){ 
            $eku_eve_tipo_evento_codigo = $array_datos_sifen_evento['eku_eve_tipo_evento_codigo'];
            $xml_xContEv_rEve_Id = $array_datos_sifen_evento['id'];
            $xml_xContEv_gGroupTiEvt_rGeVeCan_mOtEve = $array_datos_sifen_evento['mOtEve'];
            $xml_xContEv_rEve_dFecFirma = $array_datos_sifen_evento['dFecFirma'];
            
            $eku_eve_tipo_evento = EkuEveTipoEvento::getOxCodigo($eku_eve_tipo_evento_codigo);
            ?>
            <div class="par">
                <div class="label"><?php Gral::_echo($eku_eve_tipo_evento->getDescripcion()) ?></div>
                <div class="dato">
                    
                    <div class="par">
                        <div class="label">Id</div>
                        <div class="dato"><?php Gral::_echo($xml_xContEv_rEve_Id) ?></div>
                    </div>
                    <div class="par">
                        <div class="label">Motivo</div>
                        <div class="dato"><?php Gral::_echo($xml_xContEv_gGroupTiEvt_rGeVeCan_mOtEve) ?></div>
                    </div>
                    <div class="par">
                        <div class="label">Fecha de la Firma</div>
                        <div class="dato"><?php Gral::_echo($xml_xContEv_rEve_dFecFirma) ?></div>
                    </div>
                    
                </div>
            </div>
        <?php } ?>        

    </div>
