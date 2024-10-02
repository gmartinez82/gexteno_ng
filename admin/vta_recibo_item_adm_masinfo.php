<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_recibo_item_id = Gral::getVars(2, 'id');
$vta_recibo_item = VtaReciboItem::getOxId($vta_recibo_item_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_recibo_item->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_RECIBO_ITEM_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_recibo_item->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_RECIBO_ITEM_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_recibo_item->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_MASINFO_VTA_RECIBO_ITEM_CONCILIADO')){ ?>
            <li><a href="#tab_vta_recibo_item_conciliado"><?php Lang::_lang('VtaReciboItemConciliado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_MASINFO_VTA_RECIBO_ITEM_CHEQUE')){ ?>
            <li><a href="#tab_vta_recibo_item_cheque"><?php Lang::_lang('VtaReciboItemCheque') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_MASINFO_VTA_RECIBO_ITEM_RETENCION')){ ?>
            <li><a href="#tab_vta_recibo_item_retencion"><?php Lang::_lang('VtaReciboItemRetencions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_MASINFO_FND_CHQ_CHEQUE')){ ?>
            <li><a href="#tab_fnd_chq_cheque"><?php Lang::_lang('FndChqCheque') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_MASINFO_VTA_RECIBO_ITEM_CONCILIADO')){ ?>
	<div id="tab_vta_recibo_item_conciliado" class="bloque-relacion vta_recibo_item_conciliado">
		
            <h4><?php Lang::_lang('VtaReciboItemConciliado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaReciboItem') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo_item->getVtaReciboItemConciliadosParaBloqueMasInfo() as $vta_recibo_item_conciliado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_item_conciliado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_item_conciliado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_item_conciliado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_conciliado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_item_conciliado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_conciliado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_item_conciliado->getId() ?>" archivo="ajax/modulos/vta_recibo_item_conciliado/vta_recibo_item_conciliado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboItemConciliado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_CONCILIADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboItemConciliado') ?>">
                                <a href="vta_recibo_item_conciliado_alta.php?id=<?php echo $vta_recibo_item_conciliado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_MASINFO_VTA_RECIBO_ITEM_CONCILIADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_item_conciliado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboItemConciliado::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_item_conciliado->getFiltrosArrXCampo('VtaReciboItem', 'vta_recibo_item_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboItemConciliados de ') ?> <strong><?php echo($vta_recibo_item->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_item_conciliado_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboItemConciliado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_MASINFO_VTA_RECIBO_ITEM_CHEQUE')){ ?>
	<div id="tab_vta_recibo_item_cheque" class="bloque-relacion vta_recibo_item_cheque">
		
            <h4><?php Lang::_lang('VtaReciboItemCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaReciboItem') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo_item->getVtaReciboItemChequesParaBloqueMasInfo() as $vta_recibo_item_cheque){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_item_cheque->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_item_cheque->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_item_cheque->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_cheque->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_item_cheque->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_cheque->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_item_cheque->getId() ?>" archivo="ajax/modulos/vta_recibo_item_cheque/vta_recibo_item_cheque_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboItemCheque') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_CHEQUE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboItemCheque') ?>">
                                <a href="vta_recibo_item_cheque_alta.php?id=<?php echo $vta_recibo_item_cheque->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_MASINFO_VTA_RECIBO_ITEM_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_item_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboItemCheque::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_item_cheque->getFiltrosArrXCampo('VtaReciboItem', 'vta_recibo_item_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboItemCheques de ') ?> <strong><?php echo($vta_recibo_item->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_item_cheque_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboItemCheque') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_MASINFO_VTA_RECIBO_ITEM_RETENCION')){ ?>
	<div id="tab_vta_recibo_item_retencion" class="bloque-relacion vta_recibo_item_retencion">
		
            <h4><?php Lang::_lang('VtaReciboItemRetencion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaReciboItem') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo_item->getVtaReciboItemRetencionsParaBloqueMasInfo() as $vta_recibo_item_retencion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_item_retencion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_item_retencion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_item_retencion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_retencion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_item_retencion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item_retencion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_item_retencion->getId() ?>" archivo="ajax/modulos/vta_recibo_item_retencion/vta_recibo_item_retencion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboItemRetencion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_RETENCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboItemRetencion') ?>">
                                <a href="vta_recibo_item_retencion_alta.php?id=<?php echo $vta_recibo_item_retencion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_MASINFO_VTA_RECIBO_ITEM_RETENCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_item_retencion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboItemRetencion::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_item_retencion->getFiltrosArrXCampo('VtaReciboItem', 'vta_recibo_item_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboItemRetencions de ') ?> <strong><?php echo($vta_recibo_item->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_item_retencion_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboItemRetencion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_MASINFO_FND_CHQ_CHEQUE')){ ?>
	<div id="tab_fnd_chq_cheque" class="bloque-relacion fnd_chq_cheque">
		
            <h4><?php Lang::_lang('FndChqCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaReciboItem') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo_item->getFndChqChequesParaBloqueMasInfo() as $fnd_chq_cheque){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_MASINFO_FND_CHQ_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqCheque::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_cheque->getFiltrosArrXCampo('VtaReciboItem', 'vta_recibo_item_id') ?>" >
                                <?php Lang::_lang('Ver FndChqCheques de ') ?> <strong><?php echo($vta_recibo_item->getDescripcion()) ?></strong>
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

