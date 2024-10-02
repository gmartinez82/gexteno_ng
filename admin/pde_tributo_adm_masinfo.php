<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_tributo_id = Gral::getVars(2, 'id');
$pde_tributo = PdeTributo::getOxId($pde_tributo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Formula') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_tributo->getFormula())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('CntbCuenta') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_tributo->getCntbCuenta()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Es Retencion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($pde_tributo->getEsRetencion())->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Es Percepcion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($pde_tributo->getEsPercepcion())->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_tributo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_TRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tributo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_tributo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_TRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tributo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_tributo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_TRIBUTO_EXENCION')){ ?>
            <li><a href="#tab_pde_tributo_exencion"><?php Lang::_lang('PdeTributoExencions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_FACTURA_PDE_TRIBUTO')){ ?>
            <li><a href="#tab_pde_factura_pde_tributo"><?php Lang::_lang('PdeFacturaPdeTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_NOTA_CREDITO_PDE_TRIBUTO')){ ?>
            <li><a href="#tab_pde_nota_credito_pde_tributo"><?php Lang::_lang('PdeNotaCreditoPdeTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_NOTA_DEBITO_PDE_TRIBUTO')){ ?>
            <li><a href="#tab_pde_nota_debito_pde_tributo"><?php Lang::_lang('PdeNotaDebitoPdeTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_RECIBO_PDE_TRIBUTO')){ ?>
            <li><a href="#tab_pde_recibo_pde_tributo"><?php Lang::_lang('PdeReciboPdeTributo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_ORDEN_PAGO_PDE_TRIBUTO')){ ?>
            <li><a href="#tab_pde_orden_pago_pde_tributo"><?php Lang::_lang('PdeOrdenPagoPdeTributo') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_TRIBUTO_EXENCION')){ ?>
	<div id="tab_pde_tributo_exencion" class="bloque-relacion pde_tributo_exencion">
		
            <h4><?php Lang::_lang('PdeTributoExencion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tributo->getPdeTributoExencionsParaBloqueMasInfo() as $pde_tributo_exencion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_tributo_exencion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_tributo_exencion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_tributo_exencion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tributo_exencion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_tributo_exencion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tributo_exencion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_tributo_exencion->getId() ?>" archivo="ajax/modulos/pde_tributo_exencion/pde_tributo_exencion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeTributoExencion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_EXENCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeTributoExencion') ?>">
                                <a href="pde_tributo_exencion_alta.php?id=<?php echo $pde_tributo_exencion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_TRIBUTO_EXENCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_tributo_exencion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeTributoExencion::getFiltrosArrGral() ?>&arr=<?php echo $pde_tributo_exencion->getFiltrosArrXCampo('PdeTributo', 'pde_tributo_id') ?>" >
                                <?php Lang::_lang('Ver PdeTributoExencions de ') ?> <strong><?php echo($pde_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_tributo_exencion_alta.php" >
                            <?php Lang::_lang('Agregar PdeTributoExencion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_FACTURA_PDE_TRIBUTO')){ ?>
	<div id="tab_pde_factura_pde_tributo" class="bloque-relacion pde_factura_pde_tributo">
		
            <h4><?php Lang::_lang('PdeFacturaPdeTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tributo->getPdeFacturaPdeTributosParaBloqueMasInfo() as $pde_factura_pde_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_pde_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_pde_tributo->getDescripcionVinculante('PdeTributo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_pde_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_pde_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_pde_tributo->getId() ?>" archivo="ajax/modulos/pde_factura_pde_tributo/pde_factura_pde_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaPdeTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaPdeTributo') ?>">
                                <a href="pde_factura_pde_tributo_alta.php?id=<?php echo $pde_factura_pde_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_FACTURA_PDE_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_pde_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeTributo::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_tributo->getFiltrosArrXCampo('PdeTributo', 'pde_tributo_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaPdeTributos de ') ?> <strong><?php echo($pde_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_pde_tributo_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaPdeTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_NOTA_CREDITO_PDE_TRIBUTO')){ ?>
	<div id="tab_pde_nota_credito_pde_tributo" class="bloque-relacion pde_nota_credito_pde_tributo">
		
            <h4><?php Lang::_lang('PdeNotaCreditoPdeTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tributo->getPdeNotaCreditoPdeTributosParaBloqueMasInfo() as $pde_nota_credito_pde_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_pde_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito_pde_tributo->getDescripcionVinculante('PdeTributo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_pde_tributo->getId() ?>" archivo="ajax/modulos/pde_nota_credito_pde_tributo/pde_nota_credito_pde_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoPdeTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoPdeTributo') ?>">
                                <a href="pde_nota_credito_pde_tributo_alta.php?id=<?php echo $pde_nota_credito_pde_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_NOTA_CREDITO_PDE_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_pde_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoPdeTributo::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_pde_tributo->getFiltrosArrXCampo('PdeTributo', 'pde_tributo_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoPdeTributos de ') ?> <strong><?php echo($pde_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_pde_tributo_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoPdeTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_NOTA_DEBITO_PDE_TRIBUTO')){ ?>
	<div id="tab_pde_nota_debito_pde_tributo" class="bloque-relacion pde_nota_debito_pde_tributo">
		
            <h4><?php Lang::_lang('PdeNotaDebitoPdeTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tributo->getPdeNotaDebitoPdeTributosParaBloqueMasInfo() as $pde_nota_debito_pde_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_debito_pde_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_debito_pde_tributo->getDescripcionVinculante('PdeTributo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_debito_pde_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_pde_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_debito_pde_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_debito_pde_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_debito_pde_tributo->getId() ?>" archivo="ajax/modulos/pde_nota_debito_pde_tributo/pde_nota_debito_pde_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaDebitoPdeTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_DEBITO_PDE_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaDebitoPdeTributo') ?>">
                                <a href="pde_nota_debito_pde_tributo_alta.php?id=<?php echo $pde_nota_debito_pde_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_NOTA_DEBITO_PDE_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_debito_pde_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaDebitoPdeTributo::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_debito_pde_tributo->getFiltrosArrXCampo('PdeTributo', 'pde_tributo_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaDebitoPdeTributos de ') ?> <strong><?php echo($pde_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_debito_pde_tributo_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaDebitoPdeTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_RECIBO_PDE_TRIBUTO')){ ?>
	<div id="tab_pde_recibo_pde_tributo" class="bloque-relacion pde_recibo_pde_tributo">
		
            <h4><?php Lang::_lang('PdeReciboPdeTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tributo->getPdeReciboPdeTributosParaBloqueMasInfo() as $pde_recibo_pde_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo_pde_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo_pde_tributo->getDescripcionVinculante('PdeTributo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo_pde_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_pde_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo_pde_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo_pde_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo_pde_tributo->getId() ?>" archivo="ajax/modulos/pde_recibo_pde_tributo/pde_recibo_pde_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeReciboPdeTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_PDE_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeReciboPdeTributo') ?>">
                                <a href="pde_recibo_pde_tributo_alta.php?id=<?php echo $pde_recibo_pde_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_RECIBO_PDE_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo_pde_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeReciboPdeTributo::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo_pde_tributo->getFiltrosArrXCampo('PdeTributo', 'pde_tributo_id') ?>" >
                                <?php Lang::_lang('Ver PdeReciboPdeTributos de ') ?> <strong><?php echo($pde_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_pde_tributo_alta.php" >
                            <?php Lang::_lang('Agregar PdeReciboPdeTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_ORDEN_PAGO_PDE_TRIBUTO')){ ?>
	<div id="tab_pde_orden_pago_pde_tributo" class="bloque-relacion pde_orden_pago_pde_tributo">
		
            <h4><?php Lang::_lang('PdeOrdenPagoPdeTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tributo->getPdeOrdenPagoPdeTributosParaBloqueMasInfo() as $pde_orden_pago_pde_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_orden_pago_pde_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_orden_pago_pde_tributo->getDescripcionVinculante('PdeTributo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_orden_pago_pde_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_pde_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_orden_pago_pde_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_orden_pago_pde_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_orden_pago_pde_tributo->getId() ?>" archivo="ajax/modulos/pde_orden_pago_pde_tributo/pde_orden_pago_pde_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOrdenPagoPdeTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_ORDEN_PAGO_PDE_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOrdenPagoPdeTributo') ?>">
                                <a href="pde_orden_pago_pde_tributo_alta.php?id=<?php echo $pde_orden_pago_pde_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TRIBUTO_MASINFO_PDE_ORDEN_PAGO_PDE_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_orden_pago_pde_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOrdenPagoPdeTributo::getFiltrosArrGral() ?>&arr=<?php echo $pde_orden_pago_pde_tributo->getFiltrosArrXCampo('PdeTributo', 'pde_tributo_id') ?>" >
                                <?php Lang::_lang('Ver PdeOrdenPagoPdeTributos de ') ?> <strong><?php echo($pde_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_orden_pago_pde_tributo_alta.php" >
                            <?php Lang::_lang('Agregar PdeOrdenPagoPdeTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

