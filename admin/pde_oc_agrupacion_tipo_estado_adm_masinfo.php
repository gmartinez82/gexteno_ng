<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_oc_agrupacion_tipo_estado_id = Gral::getVars(2, 'id');
$pde_oc_agrupacion_tipo_estado = PdeOcAgrupacionTipoEstado::getOxId($pde_oc_agrupacion_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_oc_agrupacion_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_OC_AGRUPACION_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_oc_agrupacion_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_OC_AGRUPACION_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_oc_agrupacion_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_TIPO_ESTADO_MASINFO_PDE_OC_AGRUPACION')){ ?>
            <li><a href="#tab_pde_oc_agrupacion"><?php Lang::_lang('PdeOcAgrupacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_TIPO_ESTADO_MASINFO_PDE_OC_AGRUPACION_ESTADO')){ ?>
            <li><a href="#tab_pde_oc_agrupacion_estado"><?php Lang::_lang('PdeOcAgrupacionEstados') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_TIPO_ESTADO_MASINFO_PDE_OC_AGRUPACION')){ ?>
	<div id="tab_pde_oc_agrupacion" class="bloque-relacion pde_oc_agrupacion">
		
            <h4><?php Lang::_lang('PdeOcAgrupacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOcAgrupacionTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_oc_agrupacion_tipo_estado->getPdeOcAgrupacionsParaBloqueMasInfo() as $pde_oc_agrupacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_agrupacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_agrupacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_agrupacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_agrupacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_agrupacion->getId() ?>" archivo="ajax/modulos/pde_oc_agrupacion/pde_oc_agrupacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcAgrupacion') ?>">
                                <a href="pde_oc_agrupacion_alta.php?id=<?php echo $pde_oc_agrupacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_TIPO_ESTADO_MASINFO_PDE_OC_AGRUPACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_agrupacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_agrupacion->getFiltrosArrXCampo('PdeOcAgrupacionTipoEstado', 'pde_oc_agrupacion_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcAgrupacions de ') ?> <strong><?php echo($pde_oc_agrupacion_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_agrupacion_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcAgrupacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_TIPO_ESTADO_MASINFO_PDE_OC_AGRUPACION_ESTADO')){ ?>
	<div id="tab_pde_oc_agrupacion_estado" class="bloque-relacion pde_oc_agrupacion_estado">
		
            <h4><?php Lang::_lang('PdeOcAgrupacionEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOcAgrupacionTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_oc_agrupacion_tipo_estado->getPdeOcAgrupacionEstadosParaBloqueMasInfo() as $pde_oc_agrupacion_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_agrupacion_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_agrupacion_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_agrupacion_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_agrupacion_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_agrupacion_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_agrupacion_estado->getId() ?>" archivo="ajax/modulos/pde_oc_agrupacion_estado/pde_oc_agrupacion_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcAgrupacionEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcAgrupacionEstado') ?>">
                                <a href="pde_oc_agrupacion_estado_alta.php?id=<?php echo $pde_oc_agrupacion_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_OC_AGRUPACION_TIPO_ESTADO_MASINFO_PDE_OC_AGRUPACION_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_agrupacion_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcAgrupacionEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_agrupacion_estado->getFiltrosArrXCampo('PdeOcAgrupacionTipoEstado', 'pde_oc_agrupacion_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcAgrupacionEstados de ') ?> <strong><?php echo($pde_oc_agrupacion_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_agrupacion_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcAgrupacionEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

