<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cntb_cuenta_id = Gral::getVars(2, 'id');
$cntb_cuenta = CntbCuenta::getOxId($cntb_cuenta_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Familia Desc') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cntb_cuenta->getFamiliaDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cntb_cuenta->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cntb_cuenta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_CUENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_cuenta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_cuenta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_CUENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_cuenta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_cuenta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_TRIBUTO')){ ?>
            <li><a href="#tab_vta_tributo"><?php Lang::_lang('VtaTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_NOTA_CREDITO_CONCEPTO')){ ?>
            <li><a href="#tab_vta_nota_credito_concepto"><?php Lang::_lang('VtaNotaCreditoConcepto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_NOTA_DEBITO_CONCEPTO')){ ?>
            <li><a href="#tab_vta_nota_debito_concepto"><?php Lang::_lang('VtaNotaDebitoConcepto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_RECIBO_CONCEPTO')){ ?>
            <li><a href="#tab_vta_recibo_concepto"><?php Lang::_lang('VtaReciboConcepto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_FACTURA_CONCEPTO')){ ?>
            <li><a href="#tab_vta_factura_concepto"><?php Lang::_lang('VtaFacturaConceptos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_TRIBUTO')){ ?>
            <li><a href="#tab_pde_tributo"><?php Lang::_lang('PdeTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_FACTURA_CONCEPTO')){ ?>
            <li><a href="#tab_pde_factura_concepto"><?php Lang::_lang('PdeFacturaConceptos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_NOTA_CREDITO_CONCEPTO')){ ?>
            <li><a href="#tab_pde_nota_credito_concepto"><?php Lang::_lang('PdeNotaCreditoConcepto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_NOTA_DEBITO_CONCEPTO')){ ?>
            <li><a href="#tab_pde_nota_debito_concepto"><?php Lang::_lang('PdeNotaDebitoConcepto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_RECIBO_CONCEPTO')){ ?>
            <li><a href="#tab_pde_recibo_concepto"><?php Lang::_lang('PdeReciboConcepto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_CNTB_DIARIO_ASIENTO_CUENTA')){ ?>
            <li><a href="#tab_cntb_diario_asiento_cuenta"><?php Lang::_lang('CntbDiarioAsientoCuentas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_TRIBUTO')){ ?>
	<div id="tab_vta_tributo" class="bloque-relacion vta_tributo">
		
            <h4><?php Lang::_lang('VtaTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbCuenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_cuenta->getVtaTributosParaBloqueMasInfo() as $vta_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_tributo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_tributo->getId() ?>" archivo="ajax/modulos/vta_tributo/vta_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTributo') ?>">
                                <a href="vta_tributo_alta.php?id=<?php echo $vta_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_tributo->getFiltrosArrXCampo('CntbCuenta', 'cntb_cuenta_id') ?>" >
                                <?php Lang::_lang('Ver VtaTributos de ') ?> <strong><?php echo($cntb_cuenta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_tributo_alta.php" >
                            <?php Lang::_lang('Agregar VtaTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_NOTA_CREDITO_CONCEPTO')){ ?>
	<div id="tab_vta_nota_credito_concepto" class="bloque-relacion vta_nota_credito_concepto">
		
            <h4><?php Lang::_lang('VtaNotaCreditoConcepto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbCuenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_cuenta->getVtaNotaCreditoConceptosParaBloqueMasInfo() as $vta_nota_credito_concepto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_credito_concepto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_credito_concepto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_credito_concepto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_concepto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_credito_concepto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_concepto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_credito_concepto->getId() ?>" archivo="ajax/modulos/vta_nota_credito_concepto/vta_nota_credito_concepto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaCreditoConcepto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_CONCEPTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCreditoConcepto') ?>">
                                <a href="vta_nota_credito_concepto_alta.php?id=<?php echo $vta_nota_credito_concepto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_NOTA_CREDITO_CONCEPTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_concepto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoConcepto::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_concepto->getFiltrosArrXCampo('CntbCuenta', 'cntb_cuenta_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoConceptos de ') ?> <strong><?php echo($cntb_cuenta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_credito_concepto_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaCreditoConcepto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_NOTA_DEBITO_CONCEPTO')){ ?>
	<div id="tab_vta_nota_debito_concepto" class="bloque-relacion vta_nota_debito_concepto">
		
            <h4><?php Lang::_lang('VtaNotaDebitoConcepto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbCuenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_cuenta->getVtaNotaDebitoConceptosParaBloqueMasInfo() as $vta_nota_debito_concepto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_debito_concepto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_debito_concepto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_debito_concepto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_concepto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_debito_concepto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito_concepto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_debito_concepto->getId() ?>" archivo="ajax/modulos/vta_nota_debito_concepto/vta_nota_debito_concepto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaDebitoConcepto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_CONCEPTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaDebitoConcepto') ?>">
                                <a href="vta_nota_debito_concepto_alta.php?id=<?php echo $vta_nota_debito_concepto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_NOTA_DEBITO_CONCEPTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_debito_concepto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaDebitoConcepto::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito_concepto->getFiltrosArrXCampo('CntbCuenta', 'cntb_cuenta_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaDebitoConceptos de ') ?> <strong><?php echo($cntb_cuenta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_debito_concepto_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaDebitoConcepto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_RECIBO_CONCEPTO')){ ?>
	<div id="tab_vta_recibo_concepto" class="bloque-relacion vta_recibo_concepto">
		
            <h4><?php Lang::_lang('VtaReciboConcepto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbCuenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_cuenta->getVtaReciboConceptosParaBloqueMasInfo() as $vta_recibo_concepto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_concepto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_concepto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_concepto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_concepto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_concepto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_concepto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_concepto->getId() ?>" archivo="ajax/modulos/vta_recibo_concepto/vta_recibo_concepto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboConcepto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_CONCEPTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboConcepto') ?>">
                                <a href="vta_recibo_concepto_alta.php?id=<?php echo $vta_recibo_concepto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_RECIBO_CONCEPTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_concepto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboConcepto::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_concepto->getFiltrosArrXCampo('CntbCuenta', 'cntb_cuenta_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboConceptos de ') ?> <strong><?php echo($cntb_cuenta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_concepto_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboConcepto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_FACTURA_CONCEPTO')){ ?>
	<div id="tab_vta_factura_concepto" class="bloque-relacion vta_factura_concepto">
		
            <h4><?php Lang::_lang('VtaFacturaConcepto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbCuenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_cuenta->getVtaFacturaConceptosParaBloqueMasInfo() as $vta_factura_concepto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_factura_concepto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_factura_concepto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_factura_concepto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_concepto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_factura_concepto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_concepto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_factura_concepto->getId() ?>" archivo="ajax/modulos/vta_factura_concepto/vta_factura_concepto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaFacturaConcepto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_CONCEPTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaFacturaConcepto') ?>">
                                <a href="vta_factura_concepto_alta.php?id=<?php echo $vta_factura_concepto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_VTA_FACTURA_CONCEPTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_factura_concepto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaFacturaConcepto::getFiltrosArrGral() ?>&arr=<?php echo $vta_factura_concepto->getFiltrosArrXCampo('CntbCuenta', 'cntb_cuenta_id') ?>" >
                                <?php Lang::_lang('Ver VtaFacturaConceptos de ') ?> <strong><?php echo($cntb_cuenta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_factura_concepto_alta.php" >
                            <?php Lang::_lang('Agregar VtaFacturaConcepto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_TRIBUTO')){ ?>
	<div id="tab_pde_tributo" class="bloque-relacion pde_tributo">
		
            <h4><?php Lang::_lang('PdeTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbCuenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_cuenta->getPdeTributosParaBloqueMasInfo() as $pde_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_tributo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_tributo->getId() ?>" archivo="ajax/modulos/pde_tributo/pde_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeTributo') ?>">
                                <a href="pde_tributo_alta.php?id=<?php echo $pde_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeTributo::getFiltrosArrGral() ?>&arr=<?php echo $pde_tributo->getFiltrosArrXCampo('CntbCuenta', 'cntb_cuenta_id') ?>" >
                                <?php Lang::_lang('Ver PdeTributos de ') ?> <strong><?php echo($cntb_cuenta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_tributo_alta.php" >
                            <?php Lang::_lang('Agregar PdeTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_FACTURA_CONCEPTO')){ ?>
	<div id="tab_pde_factura_concepto" class="bloque-relacion pde_factura_concepto">
		
            <h4><?php Lang::_lang('PdeFacturaConcepto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbCuenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_cuenta->getPdeFacturaConceptosParaBloqueMasInfo() as $pde_factura_concepto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_concepto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_concepto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_concepto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_concepto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_concepto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_concepto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_concepto->getId() ?>" archivo="ajax/modulos/pde_factura_concepto/pde_factura_concepto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaConcepto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_CONCEPTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaConcepto') ?>">
                                <a href="pde_factura_concepto_alta.php?id=<?php echo $pde_factura_concepto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_FACTURA_CONCEPTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_concepto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaConcepto::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_concepto->getFiltrosArrXCampo('CntbCuenta', 'cntb_cuenta_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaConceptos de ') ?> <strong><?php echo($cntb_cuenta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_concepto_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaConcepto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_NOTA_CREDITO_CONCEPTO')){ ?>
	<div id="tab_pde_nota_credito_concepto" class="bloque-relacion pde_nota_credito_concepto">
		
            <h4><?php Lang::_lang('PdeNotaCreditoConcepto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbCuenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_cuenta->getPdeNotaCreditoConceptosParaBloqueMasInfo() as $pde_nota_credito_concepto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_concepto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito_concepto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_concepto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_concepto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_concepto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_concepto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_concepto->getId() ?>" archivo="ajax/modulos/pde_nota_credito_concepto/pde_nota_credito_concepto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoConcepto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_CONCEPTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoConcepto') ?>">
                                <a href="pde_nota_credito_concepto_alta.php?id=<?php echo $pde_nota_credito_concepto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_NOTA_CREDITO_CONCEPTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_concepto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoConcepto::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_concepto->getFiltrosArrXCampo('CntbCuenta', 'cntb_cuenta_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoConceptos de ') ?> <strong><?php echo($cntb_cuenta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_concepto_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoConcepto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_NOTA_DEBITO_CONCEPTO')){ ?>
	<div id="tab_pde_nota_debito_concepto" class="bloque-relacion pde_nota_debito_concepto">
		
            <h4><?php Lang::_lang('PdeNotaDebitoConcepto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbCuenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_cuenta->getPdeNotaDebitoConceptosParaBloqueMasInfo() as $pde_nota_debito_concepto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_debito_concepto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_debito_concepto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_debito_concepto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_concepto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_debito_concepto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_concepto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_debito_concepto->getId() ?>" archivo="ajax/modulos/pde_nota_debito_concepto/pde_nota_debito_concepto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaDebitoConcepto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_CONCEPTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebitoConcepto') ?>">
                                <a href="pde_nota_debito_concepto_alta.php?id=<?php echo $pde_nota_debito_concepto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_NOTA_DEBITO_CONCEPTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito_concepto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoConcepto::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_concepto->getFiltrosArrXCampo('CntbCuenta', 'cntb_cuenta_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitoConceptos de ') ?> <strong><?php echo($cntb_cuenta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_debito_concepto_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaDebitoConcepto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_RECIBO_CONCEPTO')){ ?>
	<div id="tab_pde_recibo_concepto" class="bloque-relacion pde_recibo_concepto">
		
            <h4><?php Lang::_lang('PdeReciboConcepto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbCuenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_cuenta->getPdeReciboConceptosParaBloqueMasInfo() as $pde_recibo_concepto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo_concepto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo_concepto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo_concepto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_concepto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo_concepto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_concepto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo_concepto->getId() ?>" archivo="ajax/modulos/pde_recibo_concepto/pde_recibo_concepto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeReciboConcepto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_CONCEPTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeReciboConcepto') ?>">
                                <a href="pde_recibo_concepto_alta.php?id=<?php echo $pde_recibo_concepto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_PDE_RECIBO_CONCEPTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo_concepto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeReciboConcepto::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo_concepto->getFiltrosArrXCampo('CntbCuenta', 'cntb_cuenta_id') ?>" >
                                <?php Lang::_lang('Ver PdeReciboConceptos de ') ?> <strong><?php echo($cntb_cuenta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_concepto_alta.php" >
                            <?php Lang::_lang('Agregar PdeReciboConcepto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_CNTB_DIARIO_ASIENTO_CUENTA')){ ?>
	<div id="tab_cntb_diario_asiento_cuenta" class="bloque-relacion cntb_diario_asiento_cuenta">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoCuenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbCuenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_cuenta->getCntbDiarioAsientoCuentasParaBloqueMasInfo() as $cntb_diario_asiento_cuenta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_cuenta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_cuenta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_cuenta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_cuenta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_cuenta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_cuenta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_cuenta->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_cuenta/cntb_diario_asiento_cuenta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoCuenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_CUENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoCuenta') ?>">
                                <a href="cntb_diario_asiento_cuenta_alta.php?id=<?php echo $cntb_diario_asiento_cuenta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_MASINFO_CNTB_DIARIO_ASIENTO_CUENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_cuenta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoCuenta::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_cuenta->getFiltrosArrXCampo('CntbCuenta', 'cntb_cuenta_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoCuentas de ') ?> <strong><?php echo($cntb_cuenta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_cuenta_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoCuenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

