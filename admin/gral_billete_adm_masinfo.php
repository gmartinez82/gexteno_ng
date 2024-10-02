<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_billete_id = Gral::getVars(2, 'id');
$gral_billete = GralBillete::getOxId($gral_billete_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_billete->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_BILLETE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_billete->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_billete->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_BILLETE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_billete->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_billete->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_BILLETE_MASINFO_FND_CAJA_GRAL_BILLETE')){ ?>
            <li><a href="#tab_fnd_caja_gral_billete"><?php Lang::_lang('FndCajaGralBilletes') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_BILLETE_MASINFO_FND_CAJA_GRAL_BILLETE')){ ?>
	<div id="tab_fnd_caja_gral_billete" class="bloque-relacion fnd_caja_gral_billete">
		
            <h4><?php Lang::_lang('FndCajaGralBillete') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralBillete') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_billete->getFndCajaGralBilletesParaBloqueMasInfo() as $fnd_caja_gral_billete){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_caja_gral_billete->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_caja_gral_billete->getDescripcionVinculante('GralBillete')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_caja_gral_billete->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_gral_billete->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_caja_gral_billete->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_gral_billete->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_caja_gral_billete->getId() ?>" archivo="ajax/modulos/fnd_caja_gral_billete/fnd_caja_gral_billete_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCajaGralBillete') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_GRAL_BILLETE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaGralBillete') ?>">
                                <a href="fnd_caja_gral_billete_alta.php?id=<?php echo $fnd_caja_gral_billete->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_BILLETE_MASINFO_FND_CAJA_GRAL_BILLETE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_caja_gral_billete){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCajaGralBillete::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja_gral_billete->getFiltrosArrXCampo('GralBillete', 'gral_billete_id') ?>" >
                                <?php Lang::_lang('Ver FndCajaGralBilletes de ') ?> <strong><?php echo($gral_billete->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_caja_gral_billete_alta.php" >
                            <?php Lang::_lang('Agregar FndCajaGralBillete') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

