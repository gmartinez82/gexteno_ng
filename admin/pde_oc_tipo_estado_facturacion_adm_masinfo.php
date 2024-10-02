<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_oc_tipo_estado_facturacion_id = Gral::getVars(2, 'id');
$pde_oc_tipo_estado_facturacion = PdeOcTipoEstadoFacturacion::getOxId($pde_oc_tipo_estado_facturacion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_oc_tipo_estado_facturacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_OC_TIPO_ESTADO_FACTURACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_tipo_estado_facturacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_oc_tipo_estado_facturacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_OC_TIPO_ESTADO_FACTURACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_tipo_estado_facturacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_oc_tipo_estado_facturacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_OC_TIPO_ESTADO_FACTURACION_MASINFO_PDE_OC')){ ?>
            <li><a href="#tab_pde_oc"><?php Lang::_lang('PdeOcs') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_OC_TIPO_ESTADO_FACTURACION_MASINFO_PDE_OC_ESTADO_FACTURACION')){ ?>
            <li><a href="#tab_pde_oc_estado_facturacion"><?php Lang::_lang('PdeOcEstadoFacturacion') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_TIPO_ESTADO_FACTURACION_MASINFO_PDE_OC')){ ?>
	<div id="tab_pde_oc" class="bloque-relacion pde_oc">
		
            <h4><?php Lang::_lang('PdeOc') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOcTipoEstadoFacturacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_oc_tipo_estado_facturacion->getPdeOcsParaBloqueMasInfo() as $pde_oc){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc->getId() ?>" archivo="ajax/modulos/pde_oc/pde_oc_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOc') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOc') ?>">
                                <a href="pde_oc_alta.php?id=<?php echo $pde_oc->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_OC_TIPO_ESTADO_FACTURACION_MASINFO_PDE_OC_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc->getFiltrosArrXCampo('PdeOcTipoEstadoFacturacion', 'pde_oc_tipo_estado_facturacion_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcs de ') ?> <strong><?php echo($pde_oc_tipo_estado_facturacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_alta.php" >
                            <?php Lang::_lang('Agregar PdeOc') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_TIPO_ESTADO_FACTURACION_MASINFO_PDE_OC_ESTADO_FACTURACION')){ ?>
	<div id="tab_pde_oc_estado_facturacion" class="bloque-relacion pde_oc_estado_facturacion">
		
            <h4><?php Lang::_lang('PdeOcEstadoFacturacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOcTipoEstadoFacturacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_oc_tipo_estado_facturacion->getPdeOcEstadoFacturacionsParaBloqueMasInfo() as $pde_oc_estado_facturacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_estado_facturacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_estado_facturacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_estado_facturacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_estado_facturacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_estado_facturacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_estado_facturacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_estado_facturacion->getId() ?>" archivo="ajax/modulos/pde_oc_estado_facturacion/pde_oc_estado_facturacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcEstadoFacturacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_ESTADO_FACTURACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcEstadoFacturacion') ?>">
                                <a href="pde_oc_estado_facturacion_alta.php?id=<?php echo $pde_oc_estado_facturacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_OC_TIPO_ESTADO_FACTURACION_MASINFO_PDE_OC_ESTADO_FACTURACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_estado_facturacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcEstadoFacturacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_estado_facturacion->getFiltrosArrXCampo('PdeOcTipoEstadoFacturacion', 'pde_oc_tipo_estado_facturacion_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcEstadoFacturacions de ') ?> <strong><?php echo($pde_oc_tipo_estado_facturacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_estado_facturacion_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcEstadoFacturacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

