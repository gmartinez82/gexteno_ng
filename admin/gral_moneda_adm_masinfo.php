<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_moneda_id = Gral::getVars(2, 'id');
$gral_moneda = GralMoneda::getOxId($gral_moneda_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_moneda->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_MONEDA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_moneda->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_moneda->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_MONEDA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_moneda->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_moneda->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_MASINFO_GRAL_MONEDA_TIPO_CAMBIO')){ ?>
            <li><a href="#tab_gral_moneda_tipo_cambio"><?php Lang::_lang('GralMonedaTipoCambios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_MASINFO_GRAL_BILLETE')){ ?>
            <li><a href="#tab_gral_billete"><?php Lang::_lang('GralBilletes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_MASINFO_VTA_RECIBO_ITEM')){ ?>
            <li><a href="#tab_vta_recibo_item"><?php Lang::_lang('VtaReciboItem') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_MASINFO_GRAL_MONEDA_TIPO_CAMBIO')){ ?>
	<div id="tab_gral_moneda_tipo_cambio" class="bloque-relacion gral_moneda_tipo_cambio">
		
            <h4><?php Lang::_lang('GralMonedaTipoCambio') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralMoneda') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_moneda->getGralMonedaTipoCambiosParaBloqueMasInfo() as $gral_moneda_tipo_cambio){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_moneda_tipo_cambio->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_moneda_tipo_cambio->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_moneda_tipo_cambio->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_moneda_tipo_cambio->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_moneda_tipo_cambio->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_moneda_tipo_cambio->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_moneda_tipo_cambio->getId() ?>" archivo="ajax/modulos/gral_moneda_tipo_cambio/gral_moneda_tipo_cambio_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralMonedaTipoCambio') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_TIPO_CAMBIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralMonedaTipoCambio') ?>">
                                <a href="gral_moneda_tipo_cambio_alta.php?id=<?php echo $gral_moneda_tipo_cambio->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_MASINFO_GRAL_MONEDA_TIPO_CAMBIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_moneda_tipo_cambio){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralMonedaTipoCambio::getFiltrosArrGral() ?>&arr=<?php echo $gral_moneda_tipo_cambio->getFiltrosArrXCampo('GralMoneda', 'gral_moneda_id') ?>" >
                                <?php Lang::_lang('Ver GralMonedaTipoCambios de ') ?> <strong><?php echo($gral_moneda->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_moneda_tipo_cambio_alta.php" >
                            <?php Lang::_lang('Agregar GralMonedaTipoCambio') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_MASINFO_GRAL_BILLETE')){ ?>
	<div id="tab_gral_billete" class="bloque-relacion gral_billete">
		
            <h4><?php Lang::_lang('GralBillete') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralMoneda') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_moneda->getGralBilletesParaBloqueMasInfo() as $gral_billete){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_billete->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_billete->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_billete->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_billete->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_billete->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_billete->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_billete->getId() ?>" archivo="ajax/modulos/gral_billete/gral_billete_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralBillete') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_BILLETE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralBillete') ?>">
                                <a href="gral_billete_alta.php?id=<?php echo $gral_billete->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_MASINFO_GRAL_BILLETE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_billete){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralBillete::getFiltrosArrGral() ?>&arr=<?php echo $gral_billete->getFiltrosArrXCampo('GralMoneda', 'gral_moneda_id') ?>" >
                                <?php Lang::_lang('Ver GralBilletes de ') ?> <strong><?php echo($gral_moneda->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_billete_alta.php" >
                            <?php Lang::_lang('Agregar GralBillete') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_MASINFO_VTA_RECIBO_ITEM')){ ?>
	<div id="tab_vta_recibo_item" class="bloque-relacion vta_recibo_item">
		
            <h4><?php Lang::_lang('VtaReciboItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralMoneda') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_moneda->getVtaReciboItemsParaBloqueMasInfo() as $vta_recibo_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_item->getId() ?>" archivo="ajax/modulos/vta_recibo_item/vta_recibo_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboItem') ?>">
                                <a href="vta_recibo_item_alta.php?id=<?php echo $vta_recibo_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_MONEDA_MASINFO_VTA_RECIBO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_item->getFiltrosArrXCampo('GralMoneda', 'gral_moneda_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboItems de ') ?> <strong><?php echo($gral_moneda->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_item_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

