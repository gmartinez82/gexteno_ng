<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cntb_periodo_id = Gral::getVars(2, 'id');
$cntb_periodo = CntbPeriodo::getOxId($cntb_periodo_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha Inicio') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaToWeb($cntb_periodo->getFechaInicio()))) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha Fin') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaToWeb($cntb_periodo->getFechaFin()))) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cntb_periodo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_PERIODO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_periodo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_periodo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_PERIODO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_periodo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_periodo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO')){ ?>
            <li><a href="#tab_cntb_diario_asiento"><?php Lang::_lang('CntbDiarioAsientos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_FACTURA')){ ?>
            <li><a href="#tab_cntb_diario_asiento_vta_factura"><?php Lang::_lang('CntbDiarioAsientoVtaFacturas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_NOTA_CREDITO')){ ?>
            <li><a href="#tab_cntb_diario_asiento_vta_nota_credito"><?php Lang::_lang('CntbDiarioAsientoVtaNotaCreditos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_NOTA_DEBITO')){ ?>
            <li><a href="#tab_cntb_diario_asiento_vta_nota_debito"><?php Lang::_lang('CntbDiarioAsientoVtaNotaDebitos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_RECIBO')){ ?>
            <li><a href="#tab_cntb_diario_asiento_vta_recibo"><?php Lang::_lang('CntbDiarioAsientoVtaRecibos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_FACTURA')){ ?>
            <li><a href="#tab_cntb_diario_asiento_pde_factura"><?php Lang::_lang('CntbDiarioAsientoPdeFacturas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_NOTA_CREDITO')){ ?>
            <li><a href="#tab_cntb_diario_asiento_pde_nota_credito"><?php Lang::_lang('CntbDiarioAsientoPdeNotaCreditos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_NOTA_DEBITO')){ ?>
            <li><a href="#tab_cntb_diario_asiento_pde_nota_debito"><?php Lang::_lang('CntbDiarioAsientoPdeNotaDebitos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_RECIBO')){ ?>
            <li><a href="#tab_cntb_diario_asiento_pde_recibo"><?php Lang::_lang('CntbDiarioAsientoPdeRecibos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO')){ ?>
	<div id="tab_cntb_diario_asiento" class="bloque-relacion cntb_diario_asiento">
		
            <h4><?php Lang::_lang('CntbDiarioAsiento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbPeriodo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_periodo->getCntbDiarioAsientosParaBloqueMasInfo() as $cntb_diario_asiento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento/cntb_diario_asiento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsiento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsiento') ?>">
                                <a href="cntb_diario_asiento_alta.php?id=<?php echo $cntb_diario_asiento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsiento::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento->getFiltrosArrXCampo('CntbPeriodo', 'cntb_periodo_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientos de ') ?> <strong><?php echo($cntb_periodo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsiento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_FACTURA')){ ?>
	<div id="tab_cntb_diario_asiento_vta_factura" class="bloque-relacion cntb_diario_asiento_vta_factura">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoVtaFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbPeriodo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_periodo->getCntbDiarioAsientoVtaFacturasParaBloqueMasInfo() as $cntb_diario_asiento_vta_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_vta_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_vta_factura->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_vta_factura->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_vta_factura/cntb_diario_asiento_vta_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoVtaFactura') ?>">
                                <a href="cntb_diario_asiento_vta_factura_alta.php?id=<?php echo $cntb_diario_asiento_vta_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_vta_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoVtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_vta_factura->getFiltrosArrXCampo('CntbPeriodo', 'cntb_periodo_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoVtaFacturas de ') ?> <strong><?php echo($cntb_periodo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_vta_factura_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoVtaFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_NOTA_CREDITO')){ ?>
	<div id="tab_cntb_diario_asiento_vta_nota_credito" class="bloque-relacion cntb_diario_asiento_vta_nota_credito">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoVtaNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbPeriodo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_periodo->getCntbDiarioAsientoVtaNotaCreditosParaBloqueMasInfo() as $cntb_diario_asiento_vta_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_vta_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_vta_nota_credito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_vta_nota_credito->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_vta_nota_credito/cntb_diario_asiento_vta_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoVtaNotaCredito') ?>">
                                <a href="cntb_diario_asiento_vta_nota_credito_alta.php?id=<?php echo $cntb_diario_asiento_vta_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_vta_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoVtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_vta_nota_credito->getFiltrosArrXCampo('CntbPeriodo', 'cntb_periodo_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoVtaNotaCreditos de ') ?> <strong><?php echo($cntb_periodo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_vta_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoVtaNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_NOTA_DEBITO')){ ?>
	<div id="tab_cntb_diario_asiento_vta_nota_debito" class="bloque-relacion cntb_diario_asiento_vta_nota_debito">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoVtaNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbPeriodo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_periodo->getCntbDiarioAsientoVtaNotaDebitosParaBloqueMasInfo() as $cntb_diario_asiento_vta_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_vta_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_vta_nota_debito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_nota_debito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_nota_debito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_nota_debito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_nota_debito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_vta_nota_debito->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_vta_nota_debito/cntb_diario_asiento_vta_nota_debito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaNotaDebito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_NOTA_DEBITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoVtaNotaDebito') ?>">
                                <a href="cntb_diario_asiento_vta_nota_debito_alta.php?id=<?php echo $cntb_diario_asiento_vta_nota_debito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_vta_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoVtaNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_vta_nota_debito->getFiltrosArrXCampo('CntbPeriodo', 'cntb_periodo_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoVtaNotaDebitos de ') ?> <strong><?php echo($cntb_periodo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_vta_nota_debito_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoVtaNotaDebito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_RECIBO')){ ?>
	<div id="tab_cntb_diario_asiento_vta_recibo" class="bloque-relacion cntb_diario_asiento_vta_recibo">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoVtaRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbPeriodo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_periodo->getCntbDiarioAsientoVtaRecibosParaBloqueMasInfo() as $cntb_diario_asiento_vta_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_vta_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_vta_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_vta_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_vta_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_vta_recibo->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_vta_recibo/cntb_diario_asiento_vta_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoVtaRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_VTA_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoVtaRecibo') ?>">
                                <a href="cntb_diario_asiento_vta_recibo_alta.php?id=<?php echo $cntb_diario_asiento_vta_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_VTA_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_vta_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoVtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_vta_recibo->getFiltrosArrXCampo('CntbPeriodo', 'cntb_periodo_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoVtaRecibos de ') ?> <strong><?php echo($cntb_periodo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_vta_recibo_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoVtaRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_FACTURA')){ ?>
	<div id="tab_cntb_diario_asiento_pde_factura" class="bloque-relacion cntb_diario_asiento_pde_factura">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoPdeFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbPeriodo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_periodo->getCntbDiarioAsientoPdeFacturasParaBloqueMasInfo() as $cntb_diario_asiento_pde_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_pde_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_pde_factura->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_pde_factura->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_pde_factura/cntb_diario_asiento_pde_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoPdeFactura') ?>">
                                <a href="cntb_diario_asiento_pde_factura_alta.php?id=<?php echo $cntb_diario_asiento_pde_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_pde_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoPdeFactura::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_pde_factura->getFiltrosArrXCampo('CntbPeriodo', 'cntb_periodo_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoPdeFacturas de ') ?> <strong><?php echo($cntb_periodo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_pde_factura_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoPdeFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_NOTA_CREDITO')){ ?>
	<div id="tab_cntb_diario_asiento_pde_nota_credito" class="bloque-relacion cntb_diario_asiento_pde_nota_credito">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoPdeNotaCredito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbPeriodo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_periodo->getCntbDiarioAsientoPdeNotaCreditosParaBloqueMasInfo() as $cntb_diario_asiento_pde_nota_credito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_pde_nota_credito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_pde_nota_credito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_nota_credito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_nota_credito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_nota_credito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_nota_credito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_pde_nota_credito->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_pde_nota_credito/cntb_diario_asiento_pde_nota_credito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaCredito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_NOTA_CREDITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaCredito') ?>">
                                <a href="cntb_diario_asiento_pde_nota_credito_alta.php?id=<?php echo $cntb_diario_asiento_pde_nota_credito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_NOTA_CREDITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_pde_nota_credito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoPdeNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_pde_nota_credito->getFiltrosArrXCampo('CntbPeriodo', 'cntb_periodo_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoPdeNotaCreditos de ') ?> <strong><?php echo($cntb_periodo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_pde_nota_credito_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoPdeNotaCredito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_NOTA_DEBITO')){ ?>
	<div id="tab_cntb_diario_asiento_pde_nota_debito" class="bloque-relacion cntb_diario_asiento_pde_nota_debito">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoPdeNotaDebito') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbPeriodo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_periodo->getCntbDiarioAsientoPdeNotaDebitosParaBloqueMasInfo() as $cntb_diario_asiento_pde_nota_debito){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_pde_nota_debito->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_pde_nota_debito->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_nota_debito->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_nota_debito->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_nota_debito->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_nota_debito->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_pde_nota_debito->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_pde_nota_debito/cntb_diario_asiento_pde_nota_debito_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaDebito') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_NOTA_DEBITO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoPdeNotaDebito') ?>">
                                <a href="cntb_diario_asiento_pde_nota_debito_alta.php?id=<?php echo $cntb_diario_asiento_pde_nota_debito->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_NOTA_DEBITO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_pde_nota_debito){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoPdeNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_pde_nota_debito->getFiltrosArrXCampo('CntbPeriodo', 'cntb_periodo_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoPdeNotaDebitos de ') ?> <strong><?php echo($cntb_periodo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_pde_nota_debito_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoPdeNotaDebito') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_RECIBO')){ ?>
	<div id="tab_cntb_diario_asiento_pde_recibo" class="bloque-relacion cntb_diario_asiento_pde_recibo">
		
            <h4><?php Lang::_lang('CntbDiarioAsientoPdeRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbPeriodo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_periodo->getCntbDiarioAsientoPdeRecibosParaBloqueMasInfo() as $cntb_diario_asiento_pde_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento_pde_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento_pde_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento_pde_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento_pde_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento_pde_recibo->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento_pde_recibo/cntb_diario_asiento_pde_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsientoPdeRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_PDE_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsientoPdeRecibo') ?>">
                                <a href="cntb_diario_asiento_pde_recibo_alta.php?id=<?php echo $cntb_diario_asiento_pde_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_MASINFO_CNTB_DIARIO_ASIENTO_PDE_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento_pde_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsientoPdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento_pde_recibo->getFiltrosArrXCampo('CntbPeriodo', 'cntb_periodo_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientoPdeRecibos de ') ?> <strong><?php echo($cntb_periodo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_pde_recibo_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsientoPdeRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

