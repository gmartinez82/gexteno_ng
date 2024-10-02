<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$fnd_chq_cheque_id = Gral::getVars(2, 'id');
$fnd_chq_cheque = FndChqCheque::getOxId($fnd_chq_cheque_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha Emision') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaToWeb($fnd_chq_cheque->getFechaEmision()))) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha Cobro') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaToWeb($fnd_chq_cheque->getFechaCobro()))) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha Acreditacion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaToWeb($fnd_chq_cheque->getFechaAcreditacion()))) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha Vencimiento') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaToWeb($fnd_chq_cheque->getFechaVencimiento()))) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($fnd_chq_cheque->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CHQ_CHEQUE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_cheque->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_chq_cheque->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CHQ_CHEQUE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_chq_cheque->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_chq_cheque->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_MASINFO_FND_CHQ_ESTADO')){ ?>
            <li><a href="#tab_fnd_chq_estado"><?php Lang::_lang('FndChqEstado') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_MASINFO_FND_CHQ_ESTADO')){ ?>
	<div id="tab_fnd_chq_estado" class="bloque-relacion fnd_chq_estado">
		
            <h4><?php Lang::_lang('FndChqEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndChqCheque') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_chq_cheque->getFndChqEstadosParaBloqueMasInfo() as $fnd_chq_estado){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('FND_CHQ_CHEQUE_MASINFO_FND_CHQ_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_chq_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndChqEstado::getFiltrosArrGral() ?>&arr=<?php echo $fnd_chq_estado->getFiltrosArrXCampo('FndChqCheque', 'fnd_chq_cheque_id') ?>" >
                                <?php Lang::_lang('Ver FndChqEstados de ') ?> <strong><?php echo($fnd_chq_cheque->getDescripcion()) ?></strong>
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
	
</div>

