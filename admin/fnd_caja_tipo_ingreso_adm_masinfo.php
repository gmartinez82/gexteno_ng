<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$fnd_caja_tipo_ingreso_id = Gral::getVars(2, 'id');
$fnd_caja_tipo_ingreso = FndCajaTipoIngreso::getOxId($fnd_caja_tipo_ingreso_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($fnd_caja_tipo_ingreso->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CAJA_TIPO_INGRESO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_tipo_ingreso->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_caja_tipo_ingreso->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'FND_CAJA_TIPO_INGRESO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_tipo_ingreso->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($fnd_caja_tipo_ingreso->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_TIPO_INGRESO_MASINFO_FND_CAJA_INGRESO')){ ?>
            <li><a href="#tab_fnd_caja_ingreso"><?php Lang::_lang('FndCajaIngreso') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('FND_CAJA_TIPO_INGRESO_MASINFO_FND_CAJA_INGRESO')){ ?>
	<div id="tab_fnd_caja_ingreso" class="bloque-relacion fnd_caja_ingreso">
		
            <h4><?php Lang::_lang('FndCajaIngreso') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('FndCajaTipoIngreso') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($fnd_caja_tipo_ingreso->getFndCajaIngresosParaBloqueMasInfo() as $fnd_caja_ingreso){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($fnd_caja_ingreso->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($fnd_caja_ingreso->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($fnd_caja_ingreso->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_ingreso->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($fnd_caja_ingreso->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($fnd_caja_ingreso->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $fnd_caja_ingreso->getId() ?>" archivo="ajax/modulos/fnd_caja_ingreso/fnd_caja_ingreso_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('FndCajaIngreso') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('FND_CAJA_INGRESO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaIngreso') ?>">
                                <a href="fnd_caja_ingreso_alta.php?id=<?php echo $fnd_caja_ingreso->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('FND_CAJA_TIPO_INGRESO_MASINFO_FND_CAJA_INGRESO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($fnd_caja_ingreso){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo FndCajaIngreso::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja_ingreso->getFiltrosArrXCampo('FndCajaTipoIngreso', 'fnd_caja_tipo_ingreso_id') ?>" >
                                <?php Lang::_lang('Ver FndCajaIngresos de ') ?> <strong><?php echo($fnd_caja_tipo_ingreso->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="fnd_caja_ingreso_alta.php" >
                            <?php Lang::_lang('Agregar FndCajaIngreso') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

