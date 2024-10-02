<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_tipo_documento_id = Gral::getVars(2, 'id');
$eku_param_tipo_documento = EkuParamTipoDocumento::getOxId($eku_param_tipo_documento_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_tipo_documento->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_tipo_documento->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TIPO_DOCUMENTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_documento->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_tipo_documento->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_TIPO_DOCUMENTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_documento->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_tipo_documento->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_DOCUMENTO_MASINFO_EKU_PARAM_TIPO_DOCUMENTO_GRAL_TIPO_DOCUMENTO')){ ?>
            <li><a href="#tab_eku_param_tipo_documento_gral_tipo_documento"><?php Lang::_lang('EkuParamTipoDocumentoGralTipoDocumentos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_DOCUMENTO_MASINFO_EKU_PARAM_TIPO_DOCUMENTO_GRAL_TIPO_DOCUMENTO')){ ?>
	<div id="tab_eku_param_tipo_documento_gral_tipo_documento" class="bloque-relacion eku_param_tipo_documento_gral_tipo_documento">
		
            <h4><?php Lang::_lang('EkuParamTipoDocumentoGralTipoDocumento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuParamTipoDocumento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_param_tipo_documento->getEkuParamTipoDocumentoGralTipoDocumentosParaBloqueMasInfo() as $eku_param_tipo_documento_gral_tipo_documento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_tipo_documento_gral_tipo_documento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_tipo_documento_gral_tipo_documento->getDescripcionVinculante('EkuParamTipoDocumento')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_tipo_documento_gral_tipo_documento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_tipo_documento_gral_tipo_documento->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_tipo_documento_gral_tipo_documento->getId() ?>" archivo="ajax/modulos/eku_param_tipo_documento_gral_tipo_documento/eku_param_tipo_documento_gral_tipo_documento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamTipoDocumentoGralTipoDocumento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_DOCUMENTO_GRAL_TIPO_DOCUMENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamTipoDocumentoGralTipoDocumento') ?>">
                                <a href="eku_param_tipo_documento_gral_tipo_documento_alta.php?id=<?php echo $eku_param_tipo_documento_gral_tipo_documento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_DOCUMENTO_MASINFO_EKU_PARAM_TIPO_DOCUMENTO_GRAL_TIPO_DOCUMENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_tipo_documento_gral_tipo_documento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamTipoDocumentoGralTipoDocumento::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_tipo_documento_gral_tipo_documento->getFiltrosArrXCampo('EkuParamTipoDocumento', 'eku_param_tipo_documento_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamTipoDocumentoGralTipoDocumentos de ') ?> <strong><?php echo($eku_param_tipo_documento->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_tipo_documento_gral_tipo_documento_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamTipoDocumentoGralTipoDocumento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

