<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_comision_id = Gral::getVars(2, 'id');
$vta_comision = VtaComision::getOxId($vta_comision_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_comision->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_COMISION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_comision->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_COMISION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_comision->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_ESTADO')){ ?>
            <li><a href="#tab_vta_comision_estado"><?php Lang::_lang('VtaComisionEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_ENVIADO')){ ?>
            <li><a href="#tab_vta_comision_enviado"><?php Lang::_lang('VtaComisionEnviados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_VTA_FACTURA')){ ?>
            <li><a href="#tab_vta_comision_vta_factura"><?php Lang::_lang('VtaComisionVtaFactura') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_GRAL_FP_FORMA_PAGO')){ ?>
            <li><a href="#tab_vta_comision_gral_fp_forma_pago"><?php Lang::_lang('VtaComisionGralFpFormaPago') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_GRAL_FP_FORMA_PAGO_CHEQUE')){ ?>
            <li><a href="#tab_vta_comision_gral_fp_forma_pago_cheque"><?php Lang::_lang('VtaComisionGralFpFormaPagoCheques') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_FND_CHQ_CHEQUE')){ ?>
            <li><a href="#tab_fnd_chq_cheque"><?php Lang::_lang('FndChqCheque') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_ESTADO')){ ?>
	<div id="tab_vta_comision_estado" class="bloque-relacion vta_comision_estado">
		
            <h4><?php Lang::_lang('VtaComisionEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaComision') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_comision->getVtaComisionEstadosParaBloqueMasInfo() as $vta_comision_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_comision_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_comision_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_comision_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_comision_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_comision_estado->getId() ?>" archivo="ajax/modulos/vta_comision_estado/vta_comision_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaComisionEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComisionEstado') ?>">
                                <a href="vta_comision_estado_alta.php?id=<?php echo $vta_comision_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_comision_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaComisionEstado::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision_estado->getFiltrosArrXCampo('VtaComision', 'vta_comision_id') ?>" >
                                <?php Lang::_lang('Ver VtaComisionEstados de ') ?> <strong><?php echo($vta_comision->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_comision_estado_alta.php" >
                            <?php Lang::_lang('Agregar VtaComisionEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_ENVIADO')){ ?>
	<div id="tab_vta_comision_enviado" class="bloque-relacion vta_comision_enviado">
		
            <h4><?php Lang::_lang('VtaComisionEnviado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaComision') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_comision->getVtaComisionEnviadosParaBloqueMasInfo() as $vta_comision_enviado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_comision_enviado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_comision_enviado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_comision_enviado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_enviado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_comision_enviado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_enviado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_comision_enviado->getId() ?>" archivo="ajax/modulos/vta_comision_enviado/vta_comision_enviado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaComisionEnviado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_ENVIADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComisionEnviado') ?>">
                                <a href="vta_comision_enviado_alta.php?id=<?php echo $vta_comision_enviado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_ENVIADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_comision_enviado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaComisionEnviado::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision_enviado->getFiltrosArrXCampo('VtaComision', 'vta_comision_id') ?>" >
                                <?php Lang::_lang('Ver VtaComisionEnviados de ') ?> <strong><?php echo($vta_comision->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_comision_enviado_alta.php" >
                            <?php Lang::_lang('Agregar VtaComisionEnviado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_VTA_FACTURA')){ ?>
	<div id="tab_vta_comision_vta_factura" class="bloque-relacion vta_comision_vta_factura">
		
            <h4><?php Lang::_lang('VtaComisionVtaFactura') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaComision') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_comision->getVtaComisionVtaFacturasParaBloqueMasInfo() as $vta_comision_vta_factura){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_comision_vta_factura->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_comision_vta_factura->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_comision_vta_factura->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_vta_factura->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_comision_vta_factura->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_vta_factura->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_comision_vta_factura->getId() ?>" archivo="ajax/modulos/vta_comision_vta_factura/vta_comision_vta_factura_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaComisionVtaFactura') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_VTA_FACTURA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComisionVtaFactura') ?>">
                                <a href="vta_comision_vta_factura_alta.php?id=<?php echo $vta_comision_vta_factura->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_VTA_FACTURA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_comision_vta_factura){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaComisionVtaFactura::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision_vta_factura->getFiltrosArrXCampo('VtaComision', 'vta_comision_id') ?>" >
                                <?php Lang::_lang('Ver VtaComisionVtaFacturas de ') ?> <strong><?php echo($vta_comision->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_comision_vta_factura_alta.php" >
                            <?php Lang::_lang('Agregar VtaComisionVtaFactura') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_GRAL_FP_FORMA_PAGO')){ ?>
	<div id="tab_vta_comision_gral_fp_forma_pago" class="bloque-relacion vta_comision_gral_fp_forma_pago">
		
            <h4><?php Lang::_lang('VtaComisionGralFpFormaPago') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaComision') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_comision->getVtaComisionGralFpFormaPagosParaBloqueMasInfo() as $vta_comision_gral_fp_forma_pago){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_comision_gral_fp_forma_pago->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_comision_gral_fp_forma_pago->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_comision_gral_fp_forma_pago->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_gral_fp_forma_pago->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_comision_gral_fp_forma_pago->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_gral_fp_forma_pago->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_comision_gral_fp_forma_pago->getId() ?>" archivo="ajax/modulos/vta_comision_gral_fp_forma_pago/vta_comision_gral_fp_forma_pago_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaComisionGralFpFormaPago') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_GRAL_FP_FORMA_PAGO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComisionGralFpFormaPago') ?>">
                                <a href="vta_comision_gral_fp_forma_pago_alta.php?id=<?php echo $vta_comision_gral_fp_forma_pago->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_GRAL_FP_FORMA_PAGO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_comision_gral_fp_forma_pago){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaComisionGralFpFormaPago::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision_gral_fp_forma_pago->getFiltrosArrXCampo('VtaComision', 'vta_comision_id') ?>" >
                                <?php Lang::_lang('Ver VtaComisionGralFpFormaPagos de ') ?> <strong><?php echo($vta_comision->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_comision_gral_fp_forma_pago_alta.php" >
                            <?php Lang::_lang('Agregar VtaComisionGralFpFormaPago') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_GRAL_FP_FORMA_PAGO_CHEQUE')){ ?>
	<div id="tab_vta_comision_gral_fp_forma_pago_cheque" class="bloque-relacion vta_comision_gral_fp_forma_pago_cheque">
		
            <h4><?php Lang::_lang('VtaComisionGralFpFormaPagoCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaComision') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_comision->getVtaComisionGralFpFormaPagoChequesParaBloqueMasInfo() as $vta_comision_gral_fp_forma_pago_cheque){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_VTA_COMISION_GRAL_FP_FORMA_PAGO_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_comision_gral_fp_forma_pago_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaComisionGralFpFormaPagoCheque::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision_gral_fp_forma_pago_cheque->getFiltrosArrXCampo('VtaComision', 'vta_comision_id') ?>" >
                                <?php Lang::_lang('Ver VtaComisionGralFpFormaPagoCheques de ') ?> <strong><?php echo($vta_comision->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_FND_CHQ_CHEQUE')){ ?>
	<div id="tab_fnd_chq_cheque" class="bloque-relacion fnd_chq_cheque">
		
            <h4><?php Lang::_lang('FndChqCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaComision') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_comision->getFndChqChequesParaBloqueMasInfo() as $fnd_chq_cheque){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_MASINFO_FND_CHQ_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqCheque::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_cheque->getFiltrosArrXCampo('VtaComision', 'vta_comision_id') ?>" >
                                <?php Lang::_lang('Ver FndChqCheques de ') ?> <strong><?php echo($vta_comision->getDescripcion()) ?></strong>
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

