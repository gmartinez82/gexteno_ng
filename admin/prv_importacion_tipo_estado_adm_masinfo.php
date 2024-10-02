<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prv_importacion_tipo_estado_id = Gral::getVars(2, 'id');
$prv_importacion_tipo_estado = PrvImportacionTipoEstado::getOxId($prv_importacion_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_importacion_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_IMPORTACION_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_importacion_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_IMPORTACION_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_importacion_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_TIPO_ESTADO_MASINFO_PRV_IMPORTACION')){ ?>
            <li><a href="#tab_prv_importacion"><?php Lang::_lang('PrvImportacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_TIPO_ESTADO_MASINFO_PRV_IMPORTACION_ESTADO')){ ?>
            <li><a href="#tab_prv_importacion_estado"><?php Lang::_lang('PrvImportacionEstados') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_TIPO_ESTADO_MASINFO_PRV_IMPORTACION')){ ?>
	<div id="tab_prv_importacion" class="bloque-relacion prv_importacion">
		
            <h4><?php Lang::_lang('PrvImportacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvImportacionTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_importacion_tipo_estado->getPrvImportacionsParaBloqueMasInfo() as $prv_importacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_importacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_importacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_importacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_importacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_importacion->getId() ?>" archivo="ajax/modulos/prv_importacion/prv_importacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvImportacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvImportacion') ?>">
                                <a href="prv_importacion_alta.php?id=<?php echo $prv_importacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_TIPO_ESTADO_MASINFO_PRV_IMPORTACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_importacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvImportacion::getFiltrosArrGral() ?>&arr=<?php echo $prv_importacion->getFiltrosArrXCampo('PrvImportacionTipoEstado', 'prv_importacion_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver PrvImportacions de ') ?> <strong><?php echo($prv_importacion_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_importacion_alta.php" >
                            <?php Lang::_lang('Agregar PrvImportacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_TIPO_ESTADO_MASINFO_PRV_IMPORTACION_ESTADO')){ ?>
	<div id="tab_prv_importacion_estado" class="bloque-relacion prv_importacion_estado">
		
            <h4><?php Lang::_lang('PrvImportacionEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvImportacionTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_importacion_tipo_estado->getPrvImportacionEstadosParaBloqueMasInfo() as $prv_importacion_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_importacion_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_importacion_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_importacion_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_importacion_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_importacion_estado->getId() ?>" archivo="ajax/modulos/prv_importacion_estado/prv_importacion_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvImportacionEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvImportacionEstado') ?>">
                                <a href="prv_importacion_estado_alta.php?id=<?php echo $prv_importacion_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_TIPO_ESTADO_MASINFO_PRV_IMPORTACION_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_importacion_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvImportacionEstado::getFiltrosArrGral() ?>&arr=<?php echo $prv_importacion_estado->getFiltrosArrXCampo('PrvImportacionTipoEstado', 'prv_importacion_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver PrvImportacionEstados de ') ?> <strong><?php echo($prv_importacion_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_importacion_estado_alta.php" >
                            <?php Lang::_lang('Agregar PrvImportacionEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

