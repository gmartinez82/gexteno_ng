<?php
include "_autoload.php";

$vta_hoja_ruta_id = Gral::getVars(Gral::VARS_GET, 'identificador', 0, Gral::TIPO_INTEGER);

$vta_hoja_ruta = VtaHojaRuta::getOxId($vta_hoja_ruta_id);

$arr_comprobantes = $vta_hoja_ruta->getComprobantesOrdenados();
//Gral::prr($arr_comprobantes);
?>
<form id='form_hoja_ruta' name='form_hoja_ruta' method='post' action='' vta_hoja_ruta_id=<?php echo $vta_hoja_ruta->getId(); ?> >
    <div class='datos hoja_ruta ordenar' >

        <div id='error_general_error' class='label-error'></div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($vta_hoja_ruta->getDescripcion()); ?>
            </div>
        </div>

        <ul class="bloque-comprobantes">
            <?php 
            foreach ($arr_comprobantes as $geo_localidad_id => $arr_comprobantes_x_localidad){
                $geo_localidad = GeoLocalidad::getOxId($geo_localidad_id);
            ?>
                <?php if($geo_localidad){ ?>

                    <li id="localidad_<?php echo $geo_localidad_id ?>" class="geo-localidad" identificador="<?php Gral::_echo($geo_localidad_id); ?>">
                        
                        <div class="localidad-ordenar" geo_localidad_id="<?php echo $geo_localidad_id ?>">
                            <img src='imgs/btn_ordenar_arrows.png' width='18' title="Ordenar" />
                        </div>
                        
                        <div class="localidad-info" ><?php Gral::_echo($geo_localidad->getDescripcionFull(false)) ?> (<?php Gral::_echo(count($arr_comprobantes_x_localidad)); ?>)</div>
                        
                <?php }else{ ?>
                        
                    <li class="geo-localidad">
                        <div class="descripcion">Sin Localidad</div>
                        
                <?php } ?>
                        
                        <ul id="bloque_comprobantes_x_localidad_<?php echo $geo_localidad_id ?>" class="bloque-comprobantes-x-localidad">
                            <?php foreach ($arr_comprobantes_x_localidad as $centro_recepcion_id => $arr_centro_recepcion) { ?>
                                <li id="item_<?php echo str_replace('-', '', $centro_recepcion_id) ?>">
                                    <div class="uno comprobante" codigo="<?php echo $centro_recepcion_id ?>">
                                        
                                        <!--<div class="comprobante-ordenar" codigo="<?php //echo $centro_recepcion_id; ?>">
                                            <img src='imgs/btn_ordenar_arrows.png' width='18' title="Ordenar" />
                                        </div>-->
                                        
                                        <?php foreach ($arr_centro_recepcion as $key => $arr_comprobante) { ?>
                                        
                                        <div class="comprobante-ordenar" codigo="<?php echo $centro_recepcion_id; ?>">
                                            <img src='imgs/btn_ordenar_arrows.png' width='18' title="Ordenar" />
                                        </div>
                                        
                                        <div class="comprobante-info" >
                                            <div class="comprobante-codigo">
                                                <?php Gral::_echo($arr_comprobante->getVtaComprobante()->getCodigo()) ?>
                                            </div>
                                            
                                            <div class="comprobante-cliente">
                                                <?php Gral::_echo($arr_comprobante->getVtaComprobante()->getCliCliente()->getDescripcion()) ?>
                                            </div>
                                            
                                            <div class="comprobante-centro-recepcion">
                                                <?php Gral::_echo($arr_comprobante->getVtaComprobante()->getCliCentroRecepcion()->getDescripcion()) ?>
                                                (<?php Gral::_echo($arr_comprobante->getVtaComprobante()->getCliCentroRecepcion()->getId()) ?>)

                                            </div>
                                            
                                            <div class="comprobante-domicilio">
                                                <?php Gral::_echo($arr_comprobante->getVtaComprobante()->getCliCentroRecepcion()->getDomicilio()) ?>
                                            </div>
                                        </div>
                                        
                                        <?php } ?>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>

                    </li>
            
            <?php } ?>
        </ul>

    </div>
</form>
<script>
    setInit();
    setInitVtaHojaRutaGestion();

    $('.bloque-comprobantes-x-localidad').hide();
</script>