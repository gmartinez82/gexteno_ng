<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$os_tipo_resolucion_id = Gral::getVars(2, 'id');
$os_tipo_resolucion = OsTipoResolucion::getOxId($os_tipo_resolucion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($os_tipo_resolucion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'OS_TIPO_RESOLUCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_tipo_resolucion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($os_tipo_resolucion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'OS_TIPO_RESOLUCION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_tipo_resolucion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($os_tipo_resolucion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('OS_TIPO_RESOLUCION_MASINFO_OS_RESOLUCION')){ ?>
            <li><a href="#tab_os_resolucion"><?php Lang::_lang('OsResolucion') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('OS_TIPO_RESOLUCION_MASINFO_OS_RESOLUCION')){ ?>
	<div id="tab_os_resolucion" class="bloque-relacion os_resolucion">
		
            <h4><?php Lang::_lang('OsResolucion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('OsTipoResolucion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($os_tipo_resolucion->getOsResolucionsParaBloqueMasInfo() as $os_resolucion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($os_resolucion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($os_resolucion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($os_resolucion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_resolucion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($os_resolucion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($os_resolucion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $os_resolucion->getId() ?>" archivo="ajax/modulos/os_resolucion/os_resolucion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('OsResolucion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('OS_RESOLUCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('OsResolucion') ?>">
                                <a href="os_resolucion_alta.php?id=<?php echo $os_resolucion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('OS_TIPO_RESOLUCION_MASINFO_OS_RESOLUCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($os_resolucion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo OsResolucion::getFiltrosArrGral() ?>&arr=<?php echo $os_resolucion->getFiltrosArrXCampo('OsTipoResolucion', 'os_tipo_resolucion_id') ?>" >
                                <?php Lang::_lang('Ver OsResolucions de ') ?> <strong><?php echo($os_tipo_resolucion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="os_resolucion_alta.php" >
                            <?php Lang::_lang('Agregar OsResolucion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

