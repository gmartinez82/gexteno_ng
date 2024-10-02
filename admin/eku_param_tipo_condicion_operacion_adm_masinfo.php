<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_tipo_condicion_operacion_id = Gral::getVars(2, 'id');
$eku_param_tipo_condicion_operacion = EkuParamTipoCondicionOperacion::getOxId($eku_param_tipo_condicion_operacion_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_tipo_condicion_operacion->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_tipo_condicion_operacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TIPO_CONDICION_OPERACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_condicion_operacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_tipo_condicion_operacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TIPO_CONDICION_OPERACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_condicion_operacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_tipo_condicion_operacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONDICION_OPERACION_MASINFO_EKU_PARAM_TIPO_CONDICION_OPERACION_GRAL_FP_FORMA_PAGO')){ ?>
            <li><a href="#tab_eku_param_tipo_condicion_operacion_gral_fp_forma_pago"><?php Lang::_lang('EkuParamTipoCondicionOperacionGralFpFormaPagos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONDICION_OPERACION_MASINFO_EKU_PARAM_TIPO_CONDICION_OPERACION_GRAL_FP_FORMA_PAGO')){ ?>
	<div id="tab_eku_param_tipo_condicion_operacion_gral_fp_forma_pago" class="bloque-relacion eku_param_tipo_condicion_operacion_gral_fp_forma_pago">
		
            <h4><?php Lang::_lang('EkuParamTipoCondicionOperacionGralFpFormaPago') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuParamTipoCondicionOperacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_param_tipo_condicion_operacion->getEkuParamTipoCondicionOperacionGralFpFormaPagosParaBloqueMasInfo() as $eku_param_tipo_condicion_operacion_gral_fp_forma_pago){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getDescripcionVinculante('EkuParamTipoCondicionOperacion')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getId() ?>" archivo="ajax/modulos/eku_param_tipo_condicion_operacion_gral_fp_forma_pago/eku_param_tipo_condicion_operacion_gral_fp_forma_pago_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamTipoCondicionOperacionGralFpFormaPago') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONDICION_OPERACION_GRAL_FP_FORMA_PAGO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoCondicionOperacionGralFpFormaPago') ?>">
                                <a href="eku_param_tipo_condicion_operacion_gral_fp_forma_pago_alta.php?id=<?php echo $eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_CONDICION_OPERACION_MASINFO_EKU_PARAM_TIPO_CONDICION_OPERACION_GRAL_FP_FORMA_PAGO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_tipo_condicion_operacion_gral_fp_forma_pago){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamTipoCondicionOperacionGralFpFormaPago::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_condicion_operacion_gral_fp_forma_pago->getFiltrosArrXCampo('EkuParamTipoCondicionOperacion', 'eku_param_tipo_condicion_operacion_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamTipoCondicionOperacionGralFpFormaPagos de ') ?> <strong><?php echo($eku_param_tipo_condicion_operacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_tipo_condicion_operacion_gral_fp_forma_pago_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamTipoCondicionOperacionGralFpFormaPago') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

