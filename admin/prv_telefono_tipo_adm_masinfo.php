<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prv_telefono_tipo_id = Gral::getVars(2, 'id');
$prv_telefono_tipo = PrvTelefonoTipo::getOxId($prv_telefono_tipo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_telefono_tipo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_TELEFONO_TIPO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_telefono_tipo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_telefono_tipo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_TELEFONO_TIPO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_telefono_tipo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_telefono_tipo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PRV_TELEFONO_TIPO_MASINFO_PRV_TELEFONO')){ ?>
            <li><a href="#tab_prv_telefono"><?php Lang::_lang('PrvTelefono') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_TELEFONO_TIPO_MASINFO_PRV_TELEFONO')){ ?>
	<div id="tab_prv_telefono" class="bloque-relacion prv_telefono">
		
            <h4><?php Lang::_lang('PrvTelefono') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvTelefonoTipo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_telefono_tipo->getPrvTelefonosParaBloqueMasInfo() as $prv_telefono){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_telefono->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_telefono->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_telefono->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_telefono->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_telefono->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_telefono->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_telefono->getId() ?>" archivo="ajax/modulos/prv_telefono/prv_telefono_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvTelefono') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_TELEFONO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvTelefono') ?>">
                                <a href="prv_telefono_alta.php?id=<?php echo $prv_telefono->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_TELEFONO_TIPO_MASINFO_PRV_TELEFONO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_telefono){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvTelefono::getFiltrosArrGral() ?>&arr=<?php echo $prv_telefono->getFiltrosArrXCampo('PrvTelefonoTipo', 'prv_telefono_tipo_id') ?>" >
                                <?php Lang::_lang('Ver PrvTelefonos de ') ?> <strong><?php echo($prv_telefono_tipo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_telefono_alta.php" >
                            <?php Lang::_lang('Agregar PrvTelefono') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

