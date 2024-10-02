<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$veh_marca_id = Gral::getVars(2, 'id');
$veh_marca = VehMarca::getOxId($veh_marca_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($veh_marca->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VEH_MARCA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_marca->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($veh_marca->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VEH_MARCA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_marca->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($veh_marca->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VEH_MARCA_MASINFO_VEH_MARCA_IMAGEN')){ ?>
            <li><a href="#tab_veh_marca_imagen"><?php Lang::_lang('VehMarcaImagens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VEH_MARCA_MASINFO_VEH_MODELO')){ ?>
            <li><a href="#tab_veh_modelo"><?php Lang::_lang('VehModelos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VEH_MARCA_MASINFO_VEH_MARCA_IMAGEN')){ ?>
	<div id="tab_veh_marca_imagen" class="bloque-relacion veh_marca_imagen">
		
            <h4><?php Lang::_lang('VehMarcaImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VehMarca') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($veh_marca->getVehMarcaImagensParaBloqueMasInfo() as $veh_marca_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($veh_marca_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($veh_marca_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($veh_marca_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($veh_marca_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_marca_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($veh_marca_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_marca_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $veh_marca_imagen->getId() ?>" archivo="ajax/modulos/veh_marca_imagen/veh_marca_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VehMarcaImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VEH_MARCA_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VehMarcaImagen') ?>">
                                <a href="veh_marca_imagen_alta.php?id=<?php echo $veh_marca_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VEH_MARCA_MASINFO_VEH_MARCA_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($veh_marca_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VehMarcaImagen::getFiltrosArrGral() ?>&arr=<?php echo $veh_marca_imagen->getFiltrosArrXCampo('VehMarca', 'veh_marca_id') ?>" >
                                <?php Lang::_lang('Ver VehMarcaImagens de ') ?> <strong><?php echo($veh_marca->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="veh_marca_imagen_alta.php" >
                            <?php Lang::_lang('Agregar VehMarcaImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VEH_MARCA_MASINFO_VEH_MODELO')){ ?>
	<div id="tab_veh_modelo" class="bloque-relacion veh_modelo">
		
            <h4><?php Lang::_lang('VehModelo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VehMarca') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($veh_marca->getVehModelosParaBloqueMasInfo() as $veh_modelo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($veh_modelo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($veh_modelo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($veh_modelo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_modelo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($veh_modelo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_modelo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $veh_modelo->getId() ?>" archivo="ajax/modulos/veh_modelo/veh_modelo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VehModelo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VEH_MODELO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VehModelo') ?>">
                                <a href="veh_modelo_alta.php?id=<?php echo $veh_modelo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VEH_MARCA_MASINFO_VEH_MODELO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($veh_modelo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VehModelo::getFiltrosArrGral() ?>&arr=<?php echo $veh_modelo->getFiltrosArrXCampo('VehMarca', 'veh_marca_id') ?>" >
                                <?php Lang::_lang('Ver VehModelos de ') ?> <strong><?php echo($veh_marca->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="veh_modelo_alta.php" >
                            <?php Lang::_lang('Agregar VehModelo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

