<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_caja_id = Gral::getVars(2, 'id');
$gral_caja = GralCaja::getOxId($gral_caja_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_caja->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_CAJA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_caja->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_caja->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_CAJA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_caja->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_caja->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_GRAL_SUCURSAL_GRAL_CAJA')){ ?>
            <li><a href="#tab_gral_sucursal_gral_caja"><?php Lang::_lang('GralSucursalGralCaja') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_FND_CAJA')){ ?>
            <li><a href="#tab_fnd_caja"><?php Lang::_lang('FndCajas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_FND_CAJERO_GRAL_CAJA')){ ?>
            <li><a href="#tab_fnd_cajero_gral_caja"><?php Lang::_lang('FndCajeroGralCaja') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_FND_CHQ_ESTADO')){ ?>
            <li><a href="#tab_fnd_chq_estado"><?php Lang::_lang('FndChqEstado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_FND_CHQ_CHEQUE')){ ?>
            <li><a href="#tab_fnd_chq_cheque"><?php Lang::_lang('FndChqCheque') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_GRAL_SUCURSAL_GRAL_CAJA')){ ?>
	<div id="tab_gral_sucursal_gral_caja" class="bloque-relacion gral_sucursal_gral_caja">
		
            <h4><?php Lang::_lang('GralSucursalGralCaja') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCaja') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_caja->getGralSucursalGralCajasParaBloqueMasInfo() as $gral_sucursal_gral_caja){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_sucursal_gral_caja->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_sucursal_gral_caja->getDescripcionVinculante('GralCaja')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_sucursal_gral_caja->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sucursal_gral_caja->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_sucursal_gral_caja->getId() ?>" archivo="ajax/modulos/gral_sucursal_gral_caja/gral_sucursal_gral_caja_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralSucursalGralCaja') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_SUCURSAL_GRAL_CAJA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralSucursalGralCaja') ?>">
                                <a href="gral_sucursal_gral_caja_alta.php?id=<?php echo $gral_sucursal_gral_caja->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_GRAL_SUCURSAL_GRAL_CAJA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_sucursal_gral_caja){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralSucursalGralCaja::getFiltrosArrGral() ?>&arr=<?php echo $gral_sucursal_gral_caja->getFiltrosArrXCampo('GralCaja', 'gral_caja_id') ?>" >
                                <?php Lang::_lang('Ver GralSucursalGralCajas de ') ?> <strong><?php echo($gral_caja->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_sucursal_gral_caja_alta.php" >
                            <?php Lang::_lang('Agregar GralSucursalGralCaja') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_FND_CAJA')){ ?>
	<div id="tab_fnd_caja" class="bloque-relacion fnd_caja">
		
            <h4><?php Lang::_lang('FndCaja') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCaja') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_caja->getFndCajasParaBloqueMasInfo() as $fnd_caja){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_caja->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_caja->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_caja->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_caja->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_caja->getId() ?>" archivo="ajax/modulos/fnd_caja/fnd_caja_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCaja') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCaja') ?>">
                                <a href="fnd_caja_alta.php?id=<?php echo $fnd_caja->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_FND_CAJA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_caja){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCaja::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja->getFiltrosArrXCampo('GralCaja', 'gral_caja_id') ?>" >
                                <?php Lang::_lang('Ver FndCajas de ') ?> <strong><?php echo($gral_caja->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_caja_alta.php" >
                            <?php Lang::_lang('Agregar FndCaja') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_FND_CAJERO_GRAL_CAJA')){ ?>
	<div id="tab_fnd_cajero_gral_caja" class="bloque-relacion fnd_cajero_gral_caja">
		
            <h4><?php Lang::_lang('FndCajeroGralCaja') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCaja') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_caja->getFndCajeroGralCajasParaBloqueMasInfo() as $fnd_cajero_gral_caja){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_cajero_gral_caja->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_cajero_gral_caja->getDescripcionVinculante('GralCaja')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_cajero_gral_caja->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_cajero_gral_caja->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_cajero_gral_caja->getId() ?>" archivo="ajax/modulos/fnd_cajero_gral_caja/fnd_cajero_gral_caja_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCajeroGralCaja') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJERO_GRAL_CAJA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajeroGralCaja') ?>">
                                <a href="fnd_cajero_gral_caja_alta.php?id=<?php echo $fnd_cajero_gral_caja->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_FND_CAJERO_GRAL_CAJA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_cajero_gral_caja){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCajeroGralCaja::getFiltrosArrGral() ?>&arr=<?php echo $fnd_cajero_gral_caja->getFiltrosArrXCampo('GralCaja', 'gral_caja_id') ?>" >
                                <?php Lang::_lang('Ver FndCajeroGralCajas de ') ?> <strong><?php echo($gral_caja->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_cajero_gral_caja_alta.php" >
                            <?php Lang::_lang('Agregar FndCajeroGralCaja') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_FND_CHQ_ESTADO')){ ?>
	<div id="tab_fnd_chq_estado" class="bloque-relacion fnd_chq_estado">
		
            <h4><?php Lang::_lang('FndChqEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCaja') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_caja->getFndChqEstadosParaBloqueMasInfo() as $fnd_chq_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_chq_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_chq_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_chq_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_chq_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_chq_estado->getId() ?>" archivo="ajax/modulos/fnd_chq_estado/fnd_chq_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndChqEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CHQ_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndChqEstado') ?>">
                                <a href="fnd_chq_estado_alta.php?id=<?php echo $fnd_chq_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_FND_CHQ_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqEstado::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_estado->getFiltrosArrXCampo('GralCaja', 'gral_caja_id') ?>" >
                                <?php Lang::_lang('Ver FndChqEstados de ') ?> <strong><?php echo($gral_caja->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_chq_estado_alta.php" >
                            <?php Lang::_lang('Agregar FndChqEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_FND_CHQ_CHEQUE')){ ?>
	<div id="tab_fnd_chq_cheque" class="bloque-relacion fnd_chq_cheque">
		
            <h4><?php Lang::_lang('FndChqCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCaja') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_caja->getFndChqChequesParaBloqueMasInfo() as $fnd_chq_cheque){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_MASINFO_FND_CHQ_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqCheque::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_cheque->getFiltrosArrXCampo('GralCaja', 'gral_caja_id') ?>" >
                                <?php Lang::_lang('Ver FndChqCheques de ') ?> <strong><?php echo($gral_caja->getDescripcion()) ?></strong>
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

