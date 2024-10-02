<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pdi_tipo_estado_id = Gral::getVars(2, 'id');
$pdi_tipo_estado = PdiTipoEstado::getOxId($pdi_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pdi_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDI_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pdi_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDI_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pdi_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDI_TIPO_ESTADO_MASINFO_PDI_PEDIDO')){ ?>
            <li><a href="#tab_pdi_pedido"><?php Lang::_lang('PdiPedidos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDI_TIPO_ESTADO_MASINFO_PDI_ESTADO')){ ?>
            <li><a href="#tab_pdi_estado"><?php Lang::_lang('PdiEstados') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_TIPO_ESTADO_MASINFO_PDI_PEDIDO')){ ?>
	<div id="tab_pdi_pedido" class="bloque-relacion pdi_pedido">
		
            <h4><?php Lang::_lang('PdiPedido') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdiTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pdi_tipo_estado->getPdiPedidosParaBloqueMasInfo() as $pdi_pedido){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pdi_pedido->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pdi_pedido->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pdi_pedido->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pdi_pedido->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pdi_pedido->getId() ?>" archivo="ajax/modulos/pdi_pedido/pdi_pedido_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdiPedido') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiPedido') ?>">
                                <a href="pdi_pedido_alta.php?id=<?php echo $pdi_pedido->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDI_TIPO_ESTADO_MASINFO_PDI_PEDIDO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pdi_pedido){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdiPedido::getFiltrosArrGral() ?>&arr=<?php echo $pdi_pedido->getFiltrosArrXCampo('PdiTipoEstado', 'pdi_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver PdiPedidos de ') ?> <strong><?php echo($pdi_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pdi_pedido_alta.php" >
                            <?php Lang::_lang('Agregar PdiPedido') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDI_TIPO_ESTADO_MASINFO_PDI_ESTADO')){ ?>
	<div id="tab_pdi_estado" class="bloque-relacion pdi_estado">
		
            <h4><?php Lang::_lang('PdiEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdiTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pdi_tipo_estado->getPdiEstadosParaBloqueMasInfo() as $pdi_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pdi_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pdi_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pdi_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pdi_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pdi_estado->getId() ?>" archivo="ajax/modulos/pdi_estado/pdi_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdiEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDI_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdiEstado') ?>">
                                <a href="pdi_estado_alta.php?id=<?php echo $pdi_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDI_TIPO_ESTADO_MASINFO_PDI_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pdi_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdiEstado::getFiltrosArrGral() ?>&arr=<?php echo $pdi_estado->getFiltrosArrXCampo('PdiTipoEstado', 'pdi_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver PdiEstados de ') ?> <strong><?php echo($pdi_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pdi_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdiEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

