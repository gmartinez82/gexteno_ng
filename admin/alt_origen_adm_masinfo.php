<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$alt_origen_id = Gral::getVars(2, 'id');
$alt_origen = AltOrigen::getOxId($alt_origen_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($alt_origen->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ALT_ORIGEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_origen->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($alt_origen->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'ALT_ORIGEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_origen->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($alt_origen->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('ALT_ORIGEN_MASINFO_ALT_ALERTA')){ ?>
            <li><a href="#tab_alt_alerta"><?php Lang::_lang('AltAlerta') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('ALT_ORIGEN_MASINFO_ALT_ALERTA')){ ?>
	<div id="tab_alt_alerta" class="bloque-relacion alt_alerta">
		
            <h4><?php Lang::_lang('AltAlerta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('AltOrigen') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($alt_origen->getAltAlertasParaBloqueMasInfo() as $alt_alerta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($alt_alerta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($alt_alerta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($alt_alerta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_alerta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($alt_alerta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_alerta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $alt_alerta->getId() ?>" archivo="ajax/modulos/alt_alerta/alt_alerta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AltAlerta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ALT_ALERTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AltAlerta') ?>">
                                <a href="alt_alerta_alta.php?id=<?php echo $alt_alerta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('ALT_ORIGEN_MASINFO_ALT_ALERTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($alt_alerta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AltAlerta::getFiltrosArrGral() ?>&arr=<?php echo $alt_alerta->getFiltrosArrXCampo('AltOrigen', 'alt_origen_id') ?>" >
                                <?php Lang::_lang('Ver AltAlertas de ') ?> <strong><?php echo($alt_origen->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="alt_alerta_alta.php" >
                            <?php Lang::_lang('Agregar AltAlerta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

