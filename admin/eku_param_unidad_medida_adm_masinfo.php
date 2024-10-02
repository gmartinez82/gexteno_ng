<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_unidad_medida_id = Gral::getVars(2, 'id');
$eku_param_unidad_medida = EkuParamUnidadMedida::getOxId($eku_param_unidad_medida_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_unidad_medida->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_unidad_medida->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_UNIDAD_MEDIDA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_unidad_medida->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_unidad_medida->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_UNIDAD_MEDIDA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_unidad_medida->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_unidad_medida->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_UNIDAD_MEDIDA_MASINFO_EKU_PARAM_UNIDAD_MEDIDA_INS_UNIDAD_MEDIDA')){ ?>
            <li><a href="#tab_eku_param_unidad_medida_ins_unidad_medida"><?php Lang::_lang('EkuParamUnidadMedidaInsUnidadMedidas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_UNIDAD_MEDIDA_MASINFO_EKU_PARAM_UNIDAD_MEDIDA_INS_UNIDAD_MEDIDA')){ ?>
	<div id="tab_eku_param_unidad_medida_ins_unidad_medida" class="bloque-relacion eku_param_unidad_medida_ins_unidad_medida">
		
            <h4><?php Lang::_lang('EkuParamUnidadMedidaInsUnidadMedida') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuParamUnidadMedida') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_param_unidad_medida->getEkuParamUnidadMedidaInsUnidadMedidasParaBloqueMasInfo() as $eku_param_unidad_medida_ins_unidad_medida){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_unidad_medida_ins_unidad_medida->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_unidad_medida_ins_unidad_medida->getDescripcionVinculante('EkuParamUnidadMedida')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_unidad_medida_ins_unidad_medida->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_unidad_medida_ins_unidad_medida->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_unidad_medida_ins_unidad_medida->getId() ?>" archivo="ajax/modulos/eku_param_unidad_medida_ins_unidad_medida/eku_param_unidad_medida_ins_unidad_medida_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamUnidadMedidaInsUnidadMedida') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_UNIDAD_MEDIDA_INS_UNIDAD_MEDIDA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamUnidadMedidaInsUnidadMedida') ?>">
                                <a href="eku_param_unidad_medida_ins_unidad_medida_alta.php?id=<?php echo $eku_param_unidad_medida_ins_unidad_medida->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_UNIDAD_MEDIDA_MASINFO_EKU_PARAM_UNIDAD_MEDIDA_INS_UNIDAD_MEDIDA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_unidad_medida_ins_unidad_medida){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamUnidadMedidaInsUnidadMedida::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_unidad_medida_ins_unidad_medida->getFiltrosArrXCampo('EkuParamUnidadMedida', 'eku_param_unidad_medida_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamUnidadMedidaInsUnidadMedidas de ') ?> <strong><?php echo($eku_param_unidad_medida->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_unidad_medida_ins_unidad_medida_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamUnidadMedidaInsUnidadMedida') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

