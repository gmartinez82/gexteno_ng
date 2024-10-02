<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_tipo_imagen_id = Gral::getVars(2, 'id');
$ins_tipo_imagen = InsTipoImagen::getOxId($ins_tipo_imagen_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_tipo_imagen->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_TIPO_IMAGEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_tipo_imagen->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_tipo_imagen->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_TIPO_IMAGEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_tipo_imagen->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_tipo_imagen->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('INS_TIPO_IMAGEN_MASINFO_INS_INSUMO_IMAGEN')){ ?>
            <li><a href="#tab_ins_insumo_imagen"><?php Lang::_lang('InsInsumoImagens') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('INS_TIPO_IMAGEN_MASINFO_INS_INSUMO_IMAGEN')){ ?>
	<div id="tab_ins_insumo_imagen" class="bloque-relacion ins_insumo_imagen">
		
            <h4><?php Lang::_lang('InsInsumoImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsTipoImagen') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_tipo_imagen->getInsInsumoImagensParaBloqueMasInfo() as $ins_insumo_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($ins_insumo_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($ins_insumo_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_imagen->getId() ?>" archivo="ajax/modulos/ins_insumo_imagen/ins_insumo_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoImagen') ?>">
                                <a href="ins_insumo_imagen_alta.php?id=<?php echo $ins_insumo_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_TIPO_IMAGEN_MASINFO_INS_INSUMO_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoImagen::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_imagen->getFiltrosArrXCampo('InsTipoImagen', 'ins_tipo_imagen_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoImagens de ') ?> <strong><?php echo($ins_tipo_imagen->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_imagen_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

