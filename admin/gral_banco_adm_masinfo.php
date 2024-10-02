<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_banco_id = Gral::getVars(2, 'id');
$gral_banco = GralBanco::getOxId($gral_banco_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_banco->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_BANCO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_banco->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_banco->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_BANCO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_banco->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_banco->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_VTA_RECIBO_ITEM_CHEQUE')){ ?>
            <li><a href="#tab_vta_recibo_item_cheque"><?php Lang::_lang('VtaReciboItemCheque') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_VTA_COMISION_GRAL_FP_FORMA_PAGO_CHEQUE')){ ?>
            <li><a href="#tab_vta_comision_gral_fp_forma_pago_cheque"><?php Lang::_lang('VtaComisionGralFpFormaPagoCheques') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_PDE_RECIBO_ITEM_CHEQUE')){ ?>
            <li><a href="#tab_pde_recibo_item_cheque"><?php Lang::_lang('PdeReciboItemCheque') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_CHEQUE')){ ?>
            <li><a href="#tab_pde_orden_pago_gral_fp_forma_pago_cheque"><?php Lang::_lang('PdeOrdenPagoGralFpFormaPagoCheques') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_FND_CHQ_CHEQUERA')){ ?>
            <li><a href="#tab_fnd_chq_chequera"><?php Lang::_lang('FndChqChequera') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_FND_CHQ_CHEQUE')){ ?>
            <li><a href="#tab_fnd_chq_cheque"><?php Lang::_lang('FndChqCheque') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_VTA_RECIBO_ITEM_CHEQUE')){ ?>
	<div id="tab_vta_recibo_item_cheque" class="bloque-relacion vta_recibo_item_cheque">
		
            <h4><?php Lang::_lang('VtaReciboItemCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralBanco') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_banco->getVtaReciboItemChequesParaBloqueMasInfo() as $vta_recibo_item_cheque){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_VTA_RECIBO_ITEM_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_item_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboItemCheque::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_item_cheque->getFiltrosArrXCampo('GralBanco', 'gral_banco_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboItemCheques de ') ?> <strong><?php echo($gral_banco->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_VTA_COMISION_GRAL_FP_FORMA_PAGO_CHEQUE')){ ?>
	<div id="tab_vta_comision_gral_fp_forma_pago_cheque" class="bloque-relacion vta_comision_gral_fp_forma_pago_cheque">
		
            <h4><?php Lang::_lang('VtaComisionGralFpFormaPagoCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralBanco') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_banco->getVtaComisionGralFpFormaPagoChequesParaBloqueMasInfo() as $vta_comision_gral_fp_forma_pago_cheque){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_gral_fp_forma_pago_cheque->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_comision_gral_fp_forma_pago_cheque->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_gral_fp_forma_pago_cheque->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_comision_gral_fp_forma_pago_cheque->getId() ?>" archivo="ajax/modulos/vta_comision_gral_fp_forma_pago_cheque/vta_comision_gral_fp_forma_pago_cheque_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaComisionGralFpFormaPagoCheque') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_GRAL_FP_FORMA_PAGO_CHEQUE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComisionGralFpFormaPagoCheque') ?>">
                                <a href="vta_comision_gral_fp_forma_pago_cheque_alta.php?id=<?php echo $vta_comision_gral_fp_forma_pago_cheque->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_VTA_COMISION_GRAL_FP_FORMA_PAGO_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_comision_gral_fp_forma_pago_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaComisionGralFpFormaPagoCheque::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision_gral_fp_forma_pago_cheque->getFiltrosArrXCampo('GralBanco', 'gral_banco_id') ?>" >
                                <?php Lang::_lang('Ver VtaComisionGralFpFormaPagoCheques de ') ?> <strong><?php echo($gral_banco->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_comision_gral_fp_forma_pago_cheque_alta.php" >
                            <?php Lang::_lang('Agregar VtaComisionGralFpFormaPagoCheque') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_PDE_RECIBO_ITEM_CHEQUE')){ ?>
	<div id="tab_pde_recibo_item_cheque" class="bloque-relacion pde_recibo_item_cheque">
		
            <h4><?php Lang::_lang('PdeReciboItemCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralBanco') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_banco->getPdeReciboItemChequesParaBloqueMasInfo() as $pde_recibo_item_cheque){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo_item_cheque->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo_item_cheque->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo_item_cheque->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_item_cheque->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo_item_cheque->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_item_cheque->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo_item_cheque->getId() ?>" archivo="ajax/modulos/pde_recibo_item_cheque/pde_recibo_item_cheque_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeReciboItemCheque') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ITEM_CHEQUE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeReciboItemCheque') ?>">
                                <a href="pde_recibo_item_cheque_alta.php?id=<?php echo $pde_recibo_item_cheque->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_PDE_RECIBO_ITEM_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo_item_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeReciboItemCheque::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo_item_cheque->getFiltrosArrXCampo('GralBanco', 'gral_banco_id') ?>" >
                                <?php Lang::_lang('Ver PdeReciboItemCheques de ') ?> <strong><?php echo($gral_banco->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_item_cheque_alta.php" >
                            <?php Lang::_lang('Agregar PdeReciboItemCheque') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_CHEQUE')){ ?>
	<div id="tab_pde_orden_pago_gral_fp_forma_pago_cheque" class="bloque-relacion pde_orden_pago_gral_fp_forma_pago_cheque">
		
            <h4><?php Lang::_lang('PdeOrdenPagoGralFpFormaPagoCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralBanco') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_banco->getPdeOrdenPagoGralFpFormaPagoChequesParaBloqueMasInfo() as $pde_orden_pago_gral_fp_forma_pago_cheque){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago_cheque->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago_cheque->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago_cheque->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_gral_fp_forma_pago_cheque->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_orden_pago_gral_fp_forma_pago_cheque->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_gral_fp_forma_pago_cheque->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_orden_pago_gral_fp_forma_pago_cheque->getId() ?>" archivo="ajax/modulos/pde_orden_pago_gral_fp_forma_pago_cheque/pde_orden_pago_gral_fp_forma_pago_cheque_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOrdenPagoGralFpFormaPagoCheque') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_CHEQUE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOrdenPagoGralFpFormaPagoCheque') ?>">
                                <a href="pde_orden_pago_gral_fp_forma_pago_cheque_alta.php?id=<?php echo $pde_orden_pago_gral_fp_forma_pago_cheque->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_PDE_ORDEN_PAGO_GRAL_FP_FORMA_PAGO_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago_gral_fp_forma_pago_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPagoGralFpFormaPagoCheque::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago_gral_fp_forma_pago_cheque->getFiltrosArrXCampo('GralBanco', 'gral_banco_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagoGralFpFormaPagoCheques de ') ?> <strong><?php echo($gral_banco->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_orden_pago_gral_fp_forma_pago_cheque_alta.php" >
                            <?php Lang::_lang('Agregar PdeOrdenPagoGralFpFormaPagoCheque') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_FND_CHQ_CHEQUERA')){ ?>
	<div id="tab_fnd_chq_chequera" class="bloque-relacion fnd_chq_chequera">
		
            <h4><?php Lang::_lang('FndChqChequera') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralBanco') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_banco->getFndChqChequerasParaBloqueMasInfo() as $fnd_chq_chequera){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_chq_chequera->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_chq_chequera->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_chq_chequera->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_chequera->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_chq_chequera->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_chequera->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_chq_chequera->getId() ?>" archivo="ajax/modulos/fnd_chq_chequera/fnd_chq_chequera_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndChqChequera') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUERA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndChqChequera') ?>">
                                <a href="fnd_chq_chequera_alta.php?id=<?php echo $fnd_chq_chequera->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_FND_CHQ_CHEQUERA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_chequera){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqChequera::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_chequera->getFiltrosArrXCampo('GralBanco', 'gral_banco_id') ?>" >
                                <?php Lang::_lang('Ver FndChqChequeras de ') ?> <strong><?php echo($gral_banco->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_chq_chequera_alta.php" >
                            <?php Lang::_lang('Agregar FndChqChequera') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_FND_CHQ_CHEQUE')){ ?>
	<div id="tab_fnd_chq_cheque" class="bloque-relacion fnd_chq_cheque">
		
            <h4><?php Lang::_lang('FndChqCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralBanco') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_banco->getFndChqChequesParaBloqueMasInfo() as $fnd_chq_cheque){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_BANCO_MASINFO_FND_CHQ_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqCheque::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_cheque->getFiltrosArrXCampo('GralBanco', 'gral_banco_id') ?>" >
                                <?php Lang::_lang('Ver FndChqCheques de ') ?> <strong><?php echo($gral_banco->getDescripcion()) ?></strong>
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

