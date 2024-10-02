<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_tributo_id = Gral::getVars(2, 'id');
$vta_tributo = VtaTributo::getOxId($vta_tributo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Formula') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_tributo->getFormula())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CntbCuenta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_tributo->getCntbCuenta()->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_tributo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tributo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tributo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_TRIBUTO_WS_FE_PARAM_TIPO_TRIBUTO')){ ?>
            <li><a href="#tab_vta_tributo_ws_fe_param_tipo_tributo"><?php Lang::_lang('VtaTributoWsFeParamTipoTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_TRIBUTO_EXENCION')){ ?>
            <li><a href="#tab_vta_tributo_exencion"><?php Lang::_lang('VtaTributoExencions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_NOTA_CREDITO_VTA_TRIBUTO')){ ?>
            <li><a href="#tab_vta_nota_credito_vta_tributo"><?php Lang::_lang('VtaNotaCreditoVtaTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_NOTA_DEBITO_VTA_TRIBUTO')){ ?>
            <li><a href="#tab_vta_nota_debito_vta_tributo"><?php Lang::_lang('VtaNotaDebitoVtaTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_RECIBO_VTA_TRIBUTO')){ ?>
            <li><a href="#tab_vta_recibo_vta_tributo"><?php Lang::_lang('VtaReciboVtaTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_FACTURA_VTA_TRIBUTO')){ ?>
            <li><a href="#tab_vta_factura_vta_tributo"><?php Lang::_lang('VtaFacturaVtaTributo') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_TRIBUTO_WS_FE_PARAM_TIPO_TRIBUTO')){ ?>
	<div id="tab_vta_tributo_ws_fe_param_tipo_tributo" class="bloque-relacion vta_tributo_ws_fe_param_tipo_tributo">
		
            <h4><?php Lang::_lang('VtaTributoWsFeParamTipoTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tributo->getVtaTributoWsFeParamTipoTributosParaBloqueMasInfo() as $vta_tributo_ws_fe_param_tipo_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getDescripcionVinculante('VtaTributo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo_ws_fe_param_tipo_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_tributo_ws_fe_param_tipo_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo_ws_fe_param_tipo_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_tributo_ws_fe_param_tipo_tributo->getId() ?>" archivo="ajax/modulos/vta_tributo_ws_fe_param_tipo_tributo/vta_tributo_ws_fe_param_tipo_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaTributoWsFeParamTipoTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_WS_FE_PARAM_TIPO_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTributoWsFeParamTipoTributo') ?>">
                                <a href="vta_tributo_ws_fe_param_tipo_tributo_alta.php?id=<?php echo $vta_tributo_ws_fe_param_tipo_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_TRIBUTO_WS_FE_PARAM_TIPO_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_tributo_ws_fe_param_tipo_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaTributoWsFeParamTipoTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_tributo_ws_fe_param_tipo_tributo->getFiltrosArrXCampo('VtaTributo', 'vta_tributo_id') ?>" >
                                <?php Lang::_lang('Ver VtaTributoWsFeParamTipoTributos de ') ?> <strong><?php echo($vta_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_tributo_ws_fe_param_tipo_tributo_alta.php" >
                            <?php Lang::_lang('Agregar VtaTributoWsFeParamTipoTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_TRIBUTO_EXENCION')){ ?>
	<div id="tab_vta_tributo_exencion" class="bloque-relacion vta_tributo_exencion">
		
            <h4><?php Lang::_lang('VtaTributoExencion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tributo->getVtaTributoExencionsParaBloqueMasInfo() as $vta_tributo_exencion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_tributo_exencion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_tributo_exencion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_tributo_exencion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo_exencion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_tributo_exencion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo_exencion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_tributo_exencion->getId() ?>" archivo="ajax/modulos/vta_tributo_exencion/vta_tributo_exencion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaTributoExencion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_EXENCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTributoExencion') ?>">
                                <a href="vta_tributo_exencion_alta.php?id=<?php echo $vta_tributo_exencion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_TRIBUTO_EXENCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_tributo_exencion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaTributoExencion::getFiltrosArrGral() ?>&arr=<?php echo $vta_tributo_exencion->getFiltrosArrXCampo('VtaTributo', 'vta_tributo_id') ?>" >
                                <?php Lang::_lang('Ver VtaTributoExencions de ') ?> <strong><?php echo($vta_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_tributo_exencion_alta.php" >
                            <?php Lang::_lang('Agregar VtaTributoExencion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_NOTA_CREDITO_VTA_TRIBUTO')){ ?>
	<div id="tab_vta_nota_credito_vta_tributo" class="bloque-relacion vta_nota_credito_vta_tributo">
		
            <h4><?php Lang::_lang('VtaNotaCreditoVtaTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tributo->getVtaNotaCreditoVtaTributosParaBloqueMasInfo() as $vta_nota_credito_vta_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_credito_vta_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_credito_vta_tributo->getDescripcionVinculante('VtaTributo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_credito_vta_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_vta_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_credito_vta_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_vta_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_credito_vta_tributo->getId() ?>" archivo="ajax/modulos/vta_nota_credito_vta_tributo/vta_nota_credito_vta_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaCreditoVtaTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCreditoVtaTributo') ?>">
                                <a href="vta_nota_credito_vta_tributo_alta.php?id=<?php echo $vta_nota_credito_vta_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_NOTA_CREDITO_VTA_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_vta_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoVtaTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_vta_tributo->getFiltrosArrXCampo('VtaTributo', 'vta_tributo_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoVtaTributos de ') ?> <strong><?php echo($vta_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_credito_vta_tributo_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaCreditoVtaTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_NOTA_DEBITO_VTA_TRIBUTO')){ ?>
	<div id="tab_vta_nota_debito_vta_tributo" class="bloque-relacion vta_nota_debito_vta_tributo">
		
            <h4><?php Lang::_lang('VtaNotaDebitoVtaTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tributo->getVtaNotaDebitoVtaTributosParaBloqueMasInfo() as $vta_nota_debito_vta_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_debito_vta_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_debito_vta_tributo->getDescripcionVinculante('VtaTributo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_debito_vta_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_vta_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_debito_vta_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_vta_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_debito_vta_tributo->getId() ?>" archivo="ajax/modulos/vta_nota_debito_vta_tributo/vta_nota_debito_vta_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaDebitoVtaTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_VTA_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaDebitoVtaTributo') ?>">
                                <a href="vta_nota_debito_vta_tributo_alta.php?id=<?php echo $vta_nota_debito_vta_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_NOTA_DEBITO_VTA_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito_vta_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebitoVtaTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito_vta_tributo->getFiltrosArrXCampo('VtaTributo', 'vta_tributo_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitoVtaTributos de ') ?> <strong><?php echo($vta_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_debito_vta_tributo_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaDebitoVtaTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_RECIBO_VTA_TRIBUTO')){ ?>
	<div id="tab_vta_recibo_vta_tributo" class="bloque-relacion vta_recibo_vta_tributo">
		
            <h4><?php Lang::_lang('VtaReciboVtaTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tributo->getVtaReciboVtaTributosParaBloqueMasInfo() as $vta_recibo_vta_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_vta_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_vta_tributo->getDescripcionVinculante('VtaTributo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_vta_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_vta_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_vta_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_vta_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_vta_tributo->getId() ?>" archivo="ajax/modulos/vta_recibo_vta_tributo/vta_recibo_vta_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboVtaTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_VTA_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboVtaTributo') ?>">
                                <a href="vta_recibo_vta_tributo_alta.php?id=<?php echo $vta_recibo_vta_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_RECIBO_VTA_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_vta_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboVtaTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_vta_tributo->getFiltrosArrXCampo('VtaTributo', 'vta_tributo_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboVtaTributos de ') ?> <strong><?php echo($vta_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_vta_tributo_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboVtaTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_FACTURA_VTA_TRIBUTO')){ ?>
	<div id="tab_vta_factura_vta_tributo" class="bloque-relacion vta_factura_vta_tributo">
		
            <h4><?php Lang::_lang('VtaFacturaVtaTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tributo->getVtaFacturaVtaTributosParaBloqueMasInfo() as $vta_factura_vta_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura_vta_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura_vta_tributo->getDescripcionVinculante('VtaTributo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_factura_vta_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_factura_vta_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_factura_vta_tributo->getId() ?>" archivo="ajax/modulos/vta_factura_vta_tributo/vta_factura_vta_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaFacturaVtaTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFacturaVtaTributo') ?>">
                                <a href="vta_factura_vta_tributo_alta.php?id=<?php echo $vta_factura_vta_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_MASINFO_VTA_FACTURA_VTA_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_vta_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaVtaTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_vta_tributo->getFiltrosArrXCampo('VtaTributo', 'vta_tributo_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaVtaTributos de ') ?> <strong><?php echo($vta_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_factura_vta_tributo_alta.php" >
                            <?php Lang::_lang('Agregar VtaFacturaVtaTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

