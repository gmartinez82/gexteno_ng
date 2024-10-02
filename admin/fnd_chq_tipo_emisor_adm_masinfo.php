<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$fnd_chq_tipo_emisor_id = Gral::getVars(2, 'id');
$fnd_chq_tipo_emisor = FndChqTipoEmisor::getOxId($fnd_chq_tipo_emisor_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($fnd_chq_tipo_emisor->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CHQ_TIPO_EMISOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_tipo_emisor->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_chq_tipo_emisor->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CHQ_TIPO_EMISOR_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_tipo_emisor->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_chq_tipo_emisor->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_MASINFO_FND_CHQ_CHEQUE')){ ?>
            <li><a href="#tab_fnd_chq_cheque"><?php Lang::_lang('FndChqCheque') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_MASINFO_FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO')){ ?>
            <li><a href="#tab_fnd_chq_tipo_emisor_fnd_chq_tipo_estado"><?php Lang::_lang('FndChqTipoEmisorFndChqTipoEstado') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_MASINFO_FND_CHQ_CHEQUE')){ ?>
	<div id="tab_fnd_chq_cheque" class="bloque-relacion fnd_chq_cheque">
		
            <h4><?php Lang::_lang('FndChqCheque') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndChqTipoEmisor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_chq_tipo_emisor->getFndChqChequesParaBloqueMasInfo() as $fnd_chq_cheque){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_MASINFO_FND_CHQ_CHEQUE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_cheque){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqCheque::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_cheque->getFiltrosArrXCampo('FndChqTipoEmisor', 'fnd_chq_tipo_emisor_id') ?>" >
                                <?php Lang::_lang('Ver FndChqCheques de ') ?> <strong><?php echo($fnd_chq_tipo_emisor->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_MASINFO_FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO')){ ?>
	<div id="tab_fnd_chq_tipo_emisor_fnd_chq_tipo_estado" class="bloque-relacion fnd_chq_tipo_emisor_fnd_chq_tipo_estado">
		
            <h4><?php Lang::_lang('FndChqTipoEmisorFndChqTipoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndChqTipoEmisor') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_chq_tipo_emisor->getFndChqTipoEmisorFndChqTipoEstadosParaBloqueMasInfo() as $fnd_chq_tipo_emisor_fnd_chq_tipo_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getDescripcionVinculante('FndChqTipoEmisor')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId() ?>" archivo="ajax/modulos/fnd_chq_tipo_emisor_fnd_chq_tipo_estado/fnd_chq_tipo_emisor_fnd_chq_tipo_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndChqTipoEmisorFndChqTipoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndChqTipoEmisorFndChqTipoEstado') ?>">
                                <a href="fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta.php?id=<?php echo $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CHQ_TIPO_EMISOR_MASINFO_FND_CHQ_TIPO_EMISOR_FND_CHQ_TIPO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_tipo_emisor_fnd_chq_tipo_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqTipoEmisorFndChqTipoEstado::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_tipo_emisor_fnd_chq_tipo_estado->getFiltrosArrXCampo('FndChqTipoEmisor', 'fnd_chq_tipo_emisor_id') ?>" >
                                <?php Lang::_lang('Ver FndChqTipoEmisorFndChqTipoEstados de ') ?> <strong><?php echo($fnd_chq_tipo_emisor->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_chq_tipo_emisor_fnd_chq_tipo_estado_alta.php" >
                            <?php Lang::_lang('Agregar FndChqTipoEmisorFndChqTipoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

