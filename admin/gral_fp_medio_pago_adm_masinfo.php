<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_fp_medio_pago_id = Gral::getVars(2, 'id');
$gral_fp_medio_pago = GralFpMedioPago::getOxId($gral_fp_medio_pago_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_fp_medio_pago->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_FP_MEDIO_PAGO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_fp_medio_pago->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_fp_medio_pago->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_FP_MEDIO_PAGO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_fp_medio_pago->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_fp_medio_pago->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_FP_MEDIO_PAGO_MASINFO_GRAL_FP_CUOTA')){ ?>
            <li><a href="#tab_gral_fp_cuota"><?php Lang::_lang('GralFpCuota') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_FP_MEDIO_PAGO_MASINFO_EKU_PARAM_CONDICION_CREDITO_GRAL_FP_MEDIO_PAGO')){ ?>
            <li><a href="#tab_eku_param_condicion_credito_gral_fp_medio_pago"><?php Lang::_lang('EkuParamCondicionCreditoGralFpMedioPagos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_FP_MEDIO_PAGO_MASINFO_EKU_PARAM_DENOMINACION_TARJETA_GRAL_FP_MEDIO_PAGO')){ ?>
            <li><a href="#tab_eku_param_denominacion_tarjeta_gral_fp_medio_pago"><?php Lang::_lang('EkuParamDenominacionTarjetaGralFpMedioPagos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_FP_MEDIO_PAGO_MASINFO_GRAL_FP_CUOTA')){ ?>
	<div id="tab_gral_fp_cuota" class="bloque-relacion gral_fp_cuota">
		
            <h4><?php Lang::_lang('GralFpCuota') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralFpMedioPago') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_fp_medio_pago->getGralFpCuotasParaBloqueMasInfo() as $gral_fp_cuota){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_fp_cuota->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_fp_cuota->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_fp_cuota->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_fp_cuota->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_fp_cuota->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_fp_cuota->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_fp_cuota->getId() ?>" archivo="ajax/modulos/gral_fp_cuota/gral_fp_cuota_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralFpCuota') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_FP_CUOTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralFpCuota') ?>">
                                <a href="gral_fp_cuota_alta.php?id=<?php echo $gral_fp_cuota->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_FP_MEDIO_PAGO_MASINFO_GRAL_FP_CUOTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_fp_cuota){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralFpCuota::getFiltrosArrGral() ?>&arr=<?php echo $gral_fp_cuota->getFiltrosArrXCampo('GralFpMedioPago', 'gral_fp_medio_pago_id') ?>" >
                                <?php Lang::_lang('Ver GralFpCuotas de ') ?> <strong><?php echo($gral_fp_medio_pago->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_fp_cuota_alta.php" >
                            <?php Lang::_lang('Agregar GralFpCuota') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_FP_MEDIO_PAGO_MASINFO_EKU_PARAM_CONDICION_CREDITO_GRAL_FP_MEDIO_PAGO')){ ?>
	<div id="tab_eku_param_condicion_credito_gral_fp_medio_pago" class="bloque-relacion eku_param_condicion_credito_gral_fp_medio_pago">
		
            <h4><?php Lang::_lang('EkuParamCondicionCreditoGralFpMedioPago') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralFpMedioPago') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_fp_medio_pago->getEkuParamCondicionCreditoGralFpMedioPagosParaBloqueMasInfo() as $eku_param_condicion_credito_gral_fp_medio_pago){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_condicion_credito_gral_fp_medio_pago->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_condicion_credito_gral_fp_medio_pago->getDescripcionVinculante('GralFpMedioPago')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_condicion_credito_gral_fp_medio_pago->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_condicion_credito_gral_fp_medio_pago->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_condicion_credito_gral_fp_medio_pago->getId() ?>" archivo="ajax/modulos/eku_param_condicion_credito_gral_fp_medio_pago/eku_param_condicion_credito_gral_fp_medio_pago_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamCondicionCreditoGralFpMedioPago') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_CONDICION_CREDITO_GRAL_FP_MEDIO_PAGO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamCondicionCreditoGralFpMedioPago') ?>">
                                <a href="eku_param_condicion_credito_gral_fp_medio_pago_alta.php?id=<?php echo $eku_param_condicion_credito_gral_fp_medio_pago->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_FP_MEDIO_PAGO_MASINFO_EKU_PARAM_CONDICION_CREDITO_GRAL_FP_MEDIO_PAGO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_condicion_credito_gral_fp_medio_pago){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamCondicionCreditoGralFpMedioPago::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_condicion_credito_gral_fp_medio_pago->getFiltrosArrXCampo('GralFpMedioPago', 'gral_fp_medio_pago_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamCondicionCreditoGralFpMedioPagos de ') ?> <strong><?php echo($gral_fp_medio_pago->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_condicion_credito_gral_fp_medio_pago_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamCondicionCreditoGralFpMedioPago') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_FP_MEDIO_PAGO_MASINFO_EKU_PARAM_DENOMINACION_TARJETA_GRAL_FP_MEDIO_PAGO')){ ?>
	<div id="tab_eku_param_denominacion_tarjeta_gral_fp_medio_pago" class="bloque-relacion eku_param_denominacion_tarjeta_gral_fp_medio_pago">
		
            <h4><?php Lang::_lang('EkuParamDenominacionTarjetaGralFpMedioPago') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralFpMedioPago') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_fp_medio_pago->getEkuParamDenominacionTarjetaGralFpMedioPagosParaBloqueMasInfo() as $eku_param_denominacion_tarjeta_gral_fp_medio_pago){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getDescripcionVinculante('GralFpMedioPago')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_denominacion_tarjeta_gral_fp_medio_pago->getId() ?>" archivo="ajax/modulos/eku_param_denominacion_tarjeta_gral_fp_medio_pago/eku_param_denominacion_tarjeta_gral_fp_medio_pago_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamDenominacionTarjetaGralFpMedioPago') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_GRAL_FP_MEDIO_PAGO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamDenominacionTarjetaGralFpMedioPago') ?>">
                                <a href="eku_param_denominacion_tarjeta_gral_fp_medio_pago_alta.php?id=<?php echo $eku_param_denominacion_tarjeta_gral_fp_medio_pago->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_FP_MEDIO_PAGO_MASINFO_EKU_PARAM_DENOMINACION_TARJETA_GRAL_FP_MEDIO_PAGO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_denominacion_tarjeta_gral_fp_medio_pago){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamDenominacionTarjetaGralFpMedioPago::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_denominacion_tarjeta_gral_fp_medio_pago->getFiltrosArrXCampo('GralFpMedioPago', 'gral_fp_medio_pago_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamDenominacionTarjetaGralFpMedioPagos de ') ?> <strong><?php echo($gral_fp_medio_pago->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_denominacion_tarjeta_gral_fp_medio_pago_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamDenominacionTarjetaGralFpMedioPago') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

