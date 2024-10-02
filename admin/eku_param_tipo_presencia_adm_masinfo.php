<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_tipo_presencia_id = Gral::getVars(2, 'id');
$eku_param_tipo_presencia = EkuParamTipoPresencia::getOxId($eku_param_tipo_presencia_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_tipo_presencia->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_tipo_presencia->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TIPO_PRESENCIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_presencia->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_tipo_presencia->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TIPO_PRESENCIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_presencia->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_tipo_presencia->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_MASINFO_EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO')){ ?>
            <li><a href="#tab_eku_param_tipo_presencia_gral_escenario"><?php Lang::_lang('EkuParamTipoPresenciaGralEscenarios') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_MASINFO_EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO')){ ?>
	<div id="tab_eku_param_tipo_presencia_gral_escenario" class="bloque-relacion eku_param_tipo_presencia_gral_escenario">
		
            <h4><?php Lang::_lang('EkuParamTipoPresenciaGralEscenario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuParamTipoPresencia') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_param_tipo_presencia->getEkuParamTipoPresenciaGralEscenariosParaBloqueMasInfo() as $eku_param_tipo_presencia_gral_escenario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_tipo_presencia_gral_escenario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_tipo_presencia_gral_escenario->getDescripcionVinculante('EkuParamTipoPresencia')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_tipo_presencia_gral_escenario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_presencia_gral_escenario->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_tipo_presencia_gral_escenario->getId() ?>" archivo="ajax/modulos/eku_param_tipo_presencia_gral_escenario/eku_param_tipo_presencia_gral_escenario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamTipoPresenciaGralEscenario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoPresenciaGralEscenario') ?>">
                                <a href="eku_param_tipo_presencia_gral_escenario_alta.php?id=<?php echo $eku_param_tipo_presencia_gral_escenario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_PRESENCIA_MASINFO_EKU_PARAM_TIPO_PRESENCIA_GRAL_ESCENARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_tipo_presencia_gral_escenario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamTipoPresenciaGralEscenario::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_presencia_gral_escenario->getFiltrosArrXCampo('EkuParamTipoPresencia', 'eku_param_tipo_presencia_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamTipoPresenciaGralEscenarios de ') ?> <strong><?php echo($eku_param_tipo_presencia->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_tipo_presencia_gral_escenario_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamTipoPresenciaGralEscenario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

