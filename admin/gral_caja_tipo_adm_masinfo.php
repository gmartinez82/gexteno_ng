<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_caja_tipo_id = Gral::getVars(2, 'id');
$gral_caja_tipo = GralCajaTipo::getOxId($gral_caja_tipo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_caja_tipo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_CAJA_TIPO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_caja_tipo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_caja_tipo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_CAJA_TIPO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_caja_tipo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_caja_tipo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_TIPO_MASINFO_GRAL_CAJA')){ ?>
            <li><a href="#tab_gral_caja"><?php Lang::_lang('GralCajas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_TIPO_MASINFO_GRAL_CAJA')){ ?>
	<div id="tab_gral_caja" class="bloque-relacion gral_caja">
		
            <h4><?php Lang::_lang('GralCaja') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralCajaTipo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_caja_tipo->getGralCajasParaBloqueMasInfo() as $gral_caja){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_caja->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_caja->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_caja->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_caja->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_caja->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_caja->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_caja->getId() ?>" archivo="ajax/modulos/gral_caja/gral_caja_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCaja') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCaja') ?>">
                                <a href="gral_caja_alta.php?id=<?php echo $gral_caja->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_CAJA_TIPO_MASINFO_GRAL_CAJA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_caja){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCaja::getFiltrosArrGral() ?>&arr=<?php echo $gral_caja->getFiltrosArrXCampo('GralCajaTipo', 'gral_caja_tipo_id') ?>" >
                                <?php Lang::_lang('Ver GralCajas de ') ?> <strong><?php echo($gral_caja_tipo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_caja_alta.php" >
                            <?php Lang::_lang('Agregar GralCaja') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

