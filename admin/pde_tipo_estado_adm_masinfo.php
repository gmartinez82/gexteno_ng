<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_tipo_estado_id = Gral::getVars(2, 'id');
$pde_tipo_estado = PdeTipoEstado::getOxId($pde_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_tipo_estado->getDescripcionPublica())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_tipo_estado->getObservacionPublica())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_ESTADO_MASINFO_PDE_PEDIDO')){ ?>
            <li><a href="#tab_pde_pedido"><?php Lang::_lang('PdePedidos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_ESTADO_MASINFO_PDE_ESTADO')){ ?>
            <li><a href="#tab_pde_estado"><?php Lang::_lang('PdeEstados') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_ESTADO_MASINFO_PDE_PEDIDO')){ ?>
	<div id="tab_pde_pedido" class="bloque-relacion pde_pedido">
		
            <h4><?php Lang::_lang('PdePedido') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_estado->getPdePedidosParaBloqueMasInfo() as $pde_pedido){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_pedido->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_pedido->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_pedido->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_pedido->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_pedido->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_pedido->getId() ?>" archivo="ajax/modulos/pde_pedido/pde_pedido_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdePedido') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_PEDIDO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdePedido') ?>">
                                <a href="pde_pedido_alta.php?id=<?php echo $pde_pedido->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_ESTADO_MASINFO_PDE_PEDIDO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_pedido){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdePedido::getFiltrosArrGral() ?>&arr=<?php echo $pde_pedido->getFiltrosArrXCampo('PdeTipoEstado', 'pde_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver PdePedidos de ') ?> <strong><?php echo($pde_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_pedido_alta.php" >
                            <?php Lang::_lang('Agregar PdePedido') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_ESTADO_MASINFO_PDE_ESTADO')){ ?>
	<div id="tab_pde_estado" class="bloque-relacion pde_estado">
		
            <h4><?php Lang::_lang('PdeEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_estado->getPdeEstadosParaBloqueMasInfo() as $pde_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_estado->getId() ?>" archivo="ajax/modulos/pde_estado/pde_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeEstado') ?>">
                                <a href="pde_estado_alta.php?id=<?php echo $pde_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_ESTADO_MASINFO_PDE_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeEstado::getFiltrosArrGral() ?>&arr=<?php echo $pde_estado->getFiltrosArrXCampo('PdeTipoEstado', 'pde_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver PdeEstados de ') ?> <strong><?php echo($pde_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_estado_alta.php" >
                            <?php Lang::_lang('Agregar PdeEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

