<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$fnd_caja_movimiento_id = Gral::getVars(2, 'id');
$fnd_caja_movimiento = FndCajaMovimiento::getOxId($fnd_caja_movimiento_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($fnd_caja_movimiento->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CAJA_MOVIMIENTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_movimiento->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_caja_movimiento->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CAJA_MOVIMIENTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_movimiento->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_caja_movimiento->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_MASINFO_FND_CAJA_MOVIMIENTO_ITEM')){ ?>
            <li><a href="#tab_fnd_caja_movimiento_item"><?php Lang::_lang('FndCajaMovimientoItems') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_MASINFO_FND_CAJA_MOVIMIENTO_ESTADO')){ ?>
            <li><a href="#tab_fnd_caja_movimiento_estado"><?php Lang::_lang('FndCajaMovimientoEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_MASINFO_FND_CHQ_CHEQUE')){ ?>
            <li><a href="#tab_fnd_chq_cheque"><?php Lang::_lang('FndChqCheque') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_MASINFO_FND_CAJA_MOVIMIENTO_ITEM')){ ?>
	<div id="tab_fnd_caja_movimiento_item" class="bloque-relacion fnd_caja_movimiento_item">
		
            <h4><?php Lang::_lang('FndCajaMovimientoItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCajaMovimiento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja_movimiento->getFndCajaMovimientoItemsParaBloqueMasInfo() as $fnd_caja_movimiento_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_caja_movimiento_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_caja_movimiento_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_caja_movimiento_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_movimiento_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_caja_movimiento_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_movimiento_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_caja_movimiento_item->getId() ?>" archivo="ajax/modulos/fnd_caja_movimiento_item/fnd_caja_movimiento_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCajaMovimientoItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaMovimientoItem') ?>">
                                <a href="fnd_caja_movimiento_item_alta.php?id=<?php echo $fnd_caja_movimiento_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_MASINFO_FND_CAJA_MOVIMIENTO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_caja_movimiento_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCajaMovimientoItem::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja_movimiento_item->getFiltrosArrXCampo('FndCajaMovimiento', 'fnd_caja_movimiento_id') ?>" >
                                <?php Lang::_lang('Ver FndCajaMovimientoItems de ') ?> <strong><?php echo($fnd_caja_movimiento->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_caja_movimiento_item_alta.php" >
                            <?php Lang::_lang('Agregar FndCajaMovimientoItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_MASINFO_FND_CAJA_MOVIMIENTO_ESTADO')){ ?>
	<div id="tab_fnd_caja_movimiento_estado" class="bloque-relacion fnd_caja_movimiento_estado">
		
            <h4><?php Lang::_lang('FndCajaMovimientoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCajaMovimiento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja_movimiento->getFndCajaMovimientoEstadosParaBloqueMasInfo() as $fnd_caja_movimiento_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_caja_movimiento_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_caja_movimiento_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_caja_movimiento_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_movimiento_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_caja_movimiento_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_movimiento_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_caja_movimiento_estado->getId() ?>" archivo="ajax/modulos/fnd_caja_movimiento_estado/fnd_caja_movimiento_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCajaMovimientoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaMovimientoEstado') ?>">
                                <a href="fnd_caja_movimiento_estado_alta.php?id=<?php echo $fnd_caja_movimiento_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_MASINFO_FND_CAJA_MOVIMIENTO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_caja_movimiento_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCajaMovimientoEstado::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja_movimiento_estado->getFiltrosArrXCampo('FndCajaMovimiento', 'fnd_caja_movimiento_id') ?>" >
                                <?php Lang::_lang('Ver FndCajaMovimientoEstados de ') ?> <strong><?php echo($fnd_caja_movimiento->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_caja_movimiento_estado_alta.php" >
                            <?php Lang::_lang('Agregar FndCajaMovimientoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_MASINFO_FND_CHQ_CHEQUE')){ ?>
	<div id="tab_fnd_chq_cheque" class="bloque-relacion fnd_chq_cheque">
		
            <h4><?php Lang::_lang('FndChqCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCajaMovimiento') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja_movimiento->getFndChqChequesParaBloqueMasInfo() as $fnd_chq_cheque){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_chq_cheque->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_chq_cheque->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_chq_cheque->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_cheque->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_chq_cheque->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_cheque->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_chq_cheque->getId() ?>" archivo="ajax/modulos/fnd_chq_cheque/fnd_chq_cheque_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndChqCheque') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndChqCheque') ?>">
                                <a href="fnd_chq_cheque_alta.php?id=<?php echo $fnd_chq_cheque->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_MASINFO_FND_CHQ_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqCheque::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_cheque->getFiltrosArrXCampo('FndCajaMovimiento', 'fnd_caja_movimiento_id') ?>" >
                                <?php Lang::_lang('Ver FndChqCheques de ') ?> <strong><?php echo($fnd_caja_movimiento->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_chq_cheque_alta.php" >
                            <?php Lang::_lang('Agregar FndChqCheque') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

