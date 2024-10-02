<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_denominacion_tarjeta_id = Gral::getVars(2, 'id');
$eku_param_denominacion_tarjeta = EkuParamDenominacionTarjeta::getOxId($eku_param_denominacion_tarjeta_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_denominacion_tarjeta->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_denominacion_tarjeta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_DENOMINACION_TARJETA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_denominacion_tarjeta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_denominacion_tarjeta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_DENOMINACION_TARJETA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_denominacion_tarjeta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_denominacion_tarjeta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_MASINFO_EKU_PARAM_DENOMINACION_TARJETA_GRAL_FP_MEDIO_PAGO')){ ?>
            <li><a href="#tab_eku_param_denominacion_tarjeta_gral_fp_medio_pago"><?php Lang::_lang('EkuParamDenominacionTarjetaGralFpMedioPagos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_MASINFO_EKU_PARAM_DENOMINACION_TARJETA_GRAL_FP_MEDIO_PAGO')){ ?>
	<div id="tab_eku_param_denominacion_tarjeta_gral_fp_medio_pago" class="bloque-relacion eku_param_denominacion_tarjeta_gral_fp_medio_pago">
		
            <h4><?php Lang::_lang('EkuParamDenominacionTarjetaGralFpMedioPago') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuParamDenominacionTarjeta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_param_denominacion_tarjeta->getEkuParamDenominacionTarjetaGralFpMedioPagosParaBloqueMasInfo() as $eku_param_denominacion_tarjeta_gral_fp_medio_pago){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_denominacion_tarjeta_gral_fp_medio_pago->getDescripcionVinculante('EkuParamDenominacionTarjeta')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_DENOMINACION_TARJETA_MASINFO_EKU_PARAM_DENOMINACION_TARJETA_GRAL_FP_MEDIO_PAGO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_denominacion_tarjeta_gral_fp_medio_pago){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamDenominacionTarjetaGralFpMedioPago::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_denominacion_tarjeta_gral_fp_medio_pago->getFiltrosArrXCampo('EkuParamDenominacionTarjeta', 'eku_param_denominacion_tarjeta_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamDenominacionTarjetaGralFpMedioPagos de ') ?> <strong><?php echo($eku_param_denominacion_tarjeta->getDescripcion()) ?></strong>
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

