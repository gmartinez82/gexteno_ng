<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$afip_citi_prc_id = Gral::getVars(2, 'id');
$afip_citi_prc = AfipCitiPrc::getOxId($afip_citi_prc_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($afip_citi_prc->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'AFIP_CITI_PRC_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_prc->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($afip_citi_prc->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'AFIP_CITI_PRC_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_prc->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($afip_citi_prc->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_CABECERA')){ ?>
            <li><a href="#tab_afip_citi_cabecera"><?php Lang::_lang('AfipCitiCabeceras') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_VENTAS_CBTE')){ ?>
            <li><a href="#tab_afip_citi_ventas_cbte"><?php Lang::_lang('AfipCitiVentasCbtes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_VENTAS_ALICUOTAS')){ ?>
            <li><a href="#tab_afip_citi_ventas_alicuotas"><?php Lang::_lang('AfipCitiVentasAlicuotass') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_COMPRAS_CBTE')){ ?>
            <li><a href="#tab_afip_citi_compras_cbte"><?php Lang::_lang('AfipCitiComprasCbtes') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_COMPRAS_ALICUOTAS')){ ?>
            <li><a href="#tab_afip_citi_compras_alicuotas"><?php Lang::_lang('AfipCitiComprasAlicuotass') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_COMPRAS_IMPORTACIONES')){ ?>
            <li><a href="#tab_afip_citi_compras_importaciones"><?php Lang::_lang('AfipCitiComprasImportacioness') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_CABECERA')){ ?>
	<div id="tab_afip_citi_cabecera" class="bloque-relacion afip_citi_cabecera">
		
            <h4><?php Lang::_lang('AfipCitiCabecera') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('AfipCitiPrc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($afip_citi_prc->getAfipCitiCabecerasParaBloqueMasInfo() as $afip_citi_cabecera){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($afip_citi_cabecera->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($afip_citi_cabecera->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($afip_citi_cabecera->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_cabecera->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($afip_citi_cabecera->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_cabecera->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $afip_citi_cabecera->getId() ?>" archivo="ajax/modulos/afip_citi_cabecera/afip_citi_cabecera_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AfipCitiCabecera') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_CABECERA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AfipCitiCabecera') ?>">
                                <a href="afip_citi_cabecera_alta.php?id=<?php echo $afip_citi_cabecera->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_CABECERA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_cabecera){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiCabecera::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_cabecera->getFiltrosArrXCampo('AfipCitiPrc', 'afip_citi_prc_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiCabeceras de ') ?> <strong><?php echo($afip_citi_prc->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="afip_citi_cabecera_alta.php" >
                            <?php Lang::_lang('Agregar AfipCitiCabecera') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_VENTAS_CBTE')){ ?>
	<div id="tab_afip_citi_ventas_cbte" class="bloque-relacion afip_citi_ventas_cbte">
		
            <h4><?php Lang::_lang('AfipCitiVentasCbte') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('AfipCitiPrc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($afip_citi_prc->getAfipCitiVentasCbtesParaBloqueMasInfo() as $afip_citi_ventas_cbte){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($afip_citi_ventas_cbte->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($afip_citi_ventas_cbte->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($afip_citi_ventas_cbte->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_ventas_cbte->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($afip_citi_ventas_cbte->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_ventas_cbte->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $afip_citi_ventas_cbte->getId() ?>" archivo="ajax/modulos/afip_citi_ventas_cbte/afip_citi_ventas_cbte_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AfipCitiVentasCbte') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_CBTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AfipCitiVentasCbte') ?>">
                                <a href="afip_citi_ventas_cbte_alta.php?id=<?php echo $afip_citi_ventas_cbte->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_VENTAS_CBTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_ventas_cbte){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiVentasCbte::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_ventas_cbte->getFiltrosArrXCampo('AfipCitiPrc', 'afip_citi_prc_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiVentasCbtes de ') ?> <strong><?php echo($afip_citi_prc->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="afip_citi_ventas_cbte_alta.php" >
                            <?php Lang::_lang('Agregar AfipCitiVentasCbte') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_VENTAS_ALICUOTAS')){ ?>
	<div id="tab_afip_citi_ventas_alicuotas" class="bloque-relacion afip_citi_ventas_alicuotas">
		
            <h4><?php Lang::_lang('AfipCitiVentasAlicuotas') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('AfipCitiPrc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($afip_citi_prc->getAfipCitiVentasAlicuotassParaBloqueMasInfo() as $afip_citi_ventas_alicuotas){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($afip_citi_ventas_alicuotas->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($afip_citi_ventas_alicuotas->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($afip_citi_ventas_alicuotas->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_ventas_alicuotas->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($afip_citi_ventas_alicuotas->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_ventas_alicuotas->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $afip_citi_ventas_alicuotas->getId() ?>" archivo="ajax/modulos/afip_citi_ventas_alicuotas/afip_citi_ventas_alicuotas_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AfipCitiVentasAlicuotas') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_ALICUOTAS_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AfipCitiVentasAlicuotas') ?>">
                                <a href="afip_citi_ventas_alicuotas_alta.php?id=<?php echo $afip_citi_ventas_alicuotas->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_VENTAS_ALICUOTAS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_ventas_alicuotas){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiVentasAlicuotas::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_ventas_alicuotas->getFiltrosArrXCampo('AfipCitiPrc', 'afip_citi_prc_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiVentasAlicuotass de ') ?> <strong><?php echo($afip_citi_prc->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="afip_citi_ventas_alicuotas_alta.php" >
                            <?php Lang::_lang('Agregar AfipCitiVentasAlicuotas') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_COMPRAS_CBTE')){ ?>
	<div id="tab_afip_citi_compras_cbte" class="bloque-relacion afip_citi_compras_cbte">
		
            <h4><?php Lang::_lang('AfipCitiComprasCbte') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('AfipCitiPrc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($afip_citi_prc->getAfipCitiComprasCbtesParaBloqueMasInfo() as $afip_citi_compras_cbte){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($afip_citi_compras_cbte->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($afip_citi_compras_cbte->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($afip_citi_compras_cbte->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_cbte->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($afip_citi_compras_cbte->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_cbte->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $afip_citi_compras_cbte->getId() ?>" archivo="ajax/modulos/afip_citi_compras_cbte/afip_citi_compras_cbte_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AfipCitiComprasCbte') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_CBTE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AfipCitiComprasCbte') ?>">
                                <a href="afip_citi_compras_cbte_alta.php?id=<?php echo $afip_citi_compras_cbte->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_COMPRAS_CBTE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_compras_cbte){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiComprasCbte::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_compras_cbte->getFiltrosArrXCampo('AfipCitiPrc', 'afip_citi_prc_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiComprasCbtes de ') ?> <strong><?php echo($afip_citi_prc->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="afip_citi_compras_cbte_alta.php" >
                            <?php Lang::_lang('Agregar AfipCitiComprasCbte') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_COMPRAS_ALICUOTAS')){ ?>
	<div id="tab_afip_citi_compras_alicuotas" class="bloque-relacion afip_citi_compras_alicuotas">
		
            <h4><?php Lang::_lang('AfipCitiComprasAlicuotas') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('AfipCitiPrc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($afip_citi_prc->getAfipCitiComprasAlicuotassParaBloqueMasInfo() as $afip_citi_compras_alicuotas){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($afip_citi_compras_alicuotas->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($afip_citi_compras_alicuotas->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($afip_citi_compras_alicuotas->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_alicuotas->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($afip_citi_compras_alicuotas->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_alicuotas->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $afip_citi_compras_alicuotas->getId() ?>" archivo="ajax/modulos/afip_citi_compras_alicuotas/afip_citi_compras_alicuotas_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AfipCitiComprasAlicuotas') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_ALICUOTAS_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AfipCitiComprasAlicuotas') ?>">
                                <a href="afip_citi_compras_alicuotas_alta.php?id=<?php echo $afip_citi_compras_alicuotas->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_COMPRAS_ALICUOTAS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_compras_alicuotas){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiComprasAlicuotas::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_compras_alicuotas->getFiltrosArrXCampo('AfipCitiPrc', 'afip_citi_prc_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiComprasAlicuotass de ') ?> <strong><?php echo($afip_citi_prc->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="afip_citi_compras_alicuotas_alta.php" >
                            <?php Lang::_lang('Agregar AfipCitiComprasAlicuotas') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_COMPRAS_IMPORTACIONES')){ ?>
	<div id="tab_afip_citi_compras_importaciones" class="bloque-relacion afip_citi_compras_importaciones">
		
            <h4><?php Lang::_lang('AfipCitiComprasImportaciones') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('AfipCitiPrc') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($afip_citi_prc->getAfipCitiComprasImportacionessParaBloqueMasInfo() as $afip_citi_compras_importaciones){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($afip_citi_compras_importaciones->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($afip_citi_compras_importaciones->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($afip_citi_compras_importaciones->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_importaciones->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($afip_citi_compras_importaciones->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($afip_citi_compras_importaciones->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $afip_citi_compras_importaciones->getId() ?>" archivo="ajax/modulos/afip_citi_compras_importaciones/afip_citi_compras_importaciones_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AfipCitiComprasImportaciones') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_IMPORTACIONES_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AfipCitiComprasImportaciones') ?>">
                                <a href="afip_citi_compras_importaciones_alta.php?id=<?php echo $afip_citi_compras_importaciones->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('AFIP_CITI_PRC_MASINFO_AFIP_CITI_COMPRAS_IMPORTACIONES_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($afip_citi_compras_importaciones){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AfipCitiComprasImportaciones::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_compras_importaciones->getFiltrosArrXCampo('AfipCitiPrc', 'afip_citi_prc_id') ?>" >
                                <?php Lang::_lang('Ver AfipCitiComprasImportacioness de ') ?> <strong><?php echo($afip_citi_prc->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="afip_citi_compras_importaciones_alta.php" >
                            <?php Lang::_lang('Agregar AfipCitiComprasImportaciones') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

