<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_recibo_tipo_estado_id = Gral::getVars(2, 'id');
$pde_recibo_tipo_estado = PdeReciboTipoEstado::getOxId($pde_recibo_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_recibo_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_RECIBO_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_recibo_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_RECIBO_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_recibo_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_TIPO_ESTADO_MASINFO_PDE_RECIBO')){ ?>
            <li><a href="#tab_pde_recibo"><?php Lang::_lang('PdeRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_TIPO_ESTADO_MASINFO_PDE_RECIBO_ESTADO')){ ?>
            <li><a href="#tab_pde_recibo_estado"><?php Lang::_lang('PdeReciboEstado') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_TIPO_ESTADO_MASINFO_PDE_RECIBO')){ ?>
	<div id="tab_pde_recibo" class="bloque-relacion pde_recibo">
		
            <h4><?php Lang::_lang('PdeRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeReciboTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recibo_tipo_estado->getPdeRecibosParaBloqueMasInfo() as $pde_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo->getId() ?>" archivo="ajax/modulos/pde_recibo/pde_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecibo') ?>">
                                <a href="pde_recibo_alta.php?id=<?php echo $pde_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_TIPO_ESTADO_MASINFO_PDE_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo->getFiltrosArrXCampo('PdeReciboTipoEstado', 'pde_recibo_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecibos de ') ?> <strong><?php echo($pde_recibo_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_TIPO_ESTADO_MASINFO_PDE_RECIBO_ESTADO')){ ?>
	<div id="tab_pde_recibo_estado" class="bloque-relacion pde_recibo_estado">
		
            <h4><?php Lang::_lang('PdeReciboEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeReciboTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_recibo_tipo_estado->getPdeReciboEstadosParaBloqueMasInfo() as $pde_recibo_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo_estado->getId() ?>" archivo="ajax/modulos/pde_recibo_estado/pde_recibo_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeReciboEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeReciboEstado') ?>">
                                <a href="pde_recibo_estado_alta.php?id=<?php echo $pde_recibo_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_TIPO_ESTADO_MASINFO_PDE_RECIBO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeReciboEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo_estado->getFiltrosArrXCampo('PdeReciboTipoEstado', 'pde_recibo_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver PdeReciboEstados de ') ?> <strong><?php echo($pde_recibo_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdeReciboEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

