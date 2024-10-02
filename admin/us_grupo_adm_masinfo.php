<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$us_grupo_id = Gral::getVars(2, 'id');
$us_grupo = UsGrupo::getOxId($us_grupo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_grupo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_GRUPO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_grupo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_grupo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_GRUPO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_grupo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_grupo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('US_GRUPO_MASINFO_US_AGRUPADOR')){ ?>
            <li><a href="#tab_us_agrupador"><?php Lang::_lang('UsAgrupador') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_GRUPO_MASINFO_US_AGRUPADO')){ ?>
            <li><a href="#tab_us_agrupado"><?php Lang::_lang('UsAgrupado') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_GRUPO_MASINFO_NOV_NOVEDAD_US_GRUPO')){ ?>
            <li><a href="#tab_nov_novedad_us_grupo"><?php Lang::_lang('NovNovedadUsGrupos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_GRUPO_MASINFO_ALT_CONTROL_US_GRUPO')){ ?>
            <li><a href="#tab_alt_control_us_grupo"><?php Lang::_lang('AltControlUsGrupo') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('US_GRUPO_MASINFO_US_AGRUPADOR')){ ?>
	<div id="tab_us_agrupador" class="bloque-relacion us_agrupador">
		
            <h4><?php Lang::_lang('UsAgrupador') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsGrupo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_grupo->getUsAgrupadorsParaBloqueMasInfo() as $us_agrupador){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_agrupador->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_agrupador->getDescripcionVinculante('UsGrupo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_agrupador->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_agrupador->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_agrupador->getId() ?>" archivo="ajax/modulos/us_agrupador/us_agrupador_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsAgrupador') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_AGRUPADOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsAgrupador') ?>">
                                <a href="us_agrupador_alta.php?id=<?php echo $us_agrupador->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_GRUPO_MASINFO_US_AGRUPADOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_agrupador){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsAgrupador::getFiltrosArrGral() ?>&arr=<?php echo $us_agrupador->getFiltrosArrXCampo('UsGrupo', 'us_grupo_id') ?>" >
                                <?php Lang::_lang('Ver UsAgrupadors de ') ?> <strong><?php echo($us_grupo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_agrupador_alta.php" >
                            <?php Lang::_lang('Agregar UsAgrupador') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_GRUPO_MASINFO_US_AGRUPADO')){ ?>
	<div id="tab_us_agrupado" class="bloque-relacion us_agrupado">
		
            <h4><?php Lang::_lang('UsAgrupado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsGrupo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_grupo->getUsAgrupadosParaBloqueMasInfo() as $us_agrupado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_agrupado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_agrupado->getDescripcionVinculante('UsGrupo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_agrupado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_agrupado->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_agrupado->getId() ?>" archivo="ajax/modulos/us_agrupado/us_agrupado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsAgrupado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_AGRUPADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsAgrupado') ?>">
                                <a href="us_agrupado_alta.php?id=<?php echo $us_agrupado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_GRUPO_MASINFO_US_AGRUPADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_agrupado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsAgrupado::getFiltrosArrGral() ?>&arr=<?php echo $us_agrupado->getFiltrosArrXCampo('UsGrupo', 'us_grupo_id') ?>" >
                                <?php Lang::_lang('Ver UsAgrupados de ') ?> <strong><?php echo($us_grupo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_agrupado_alta.php" >
                            <?php Lang::_lang('Agregar UsAgrupado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_GRUPO_MASINFO_NOV_NOVEDAD_US_GRUPO')){ ?>
	<div id="tab_nov_novedad_us_grupo" class="bloque-relacion nov_novedad_us_grupo">
		
            <h4><?php Lang::_lang('NovNovedadUsGrupo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsGrupo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_grupo->getNovNovedadUsGruposParaBloqueMasInfo() as $nov_novedad_us_grupo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($nov_novedad_us_grupo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($nov_novedad_us_grupo->getDescripcionVinculante('UsGrupo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($nov_novedad_us_grupo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_us_grupo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($nov_novedad_us_grupo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($nov_novedad_us_grupo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $nov_novedad_us_grupo->getId() ?>" archivo="ajax/modulos/nov_novedad_us_grupo/nov_novedad_us_grupo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NovNovedadUsGrupo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOV_NOVEDAD_US_GRUPO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NovNovedadUsGrupo') ?>">
                                <a href="nov_novedad_us_grupo_alta.php?id=<?php echo $nov_novedad_us_grupo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_GRUPO_MASINFO_NOV_NOVEDAD_US_GRUPO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($nov_novedad_us_grupo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NovNovedadUsGrupo::getFiltrosArrGral() ?>&arr=<?php echo $nov_novedad_us_grupo->getFiltrosArrXCampo('UsGrupo', 'us_grupo_id') ?>" >
                                <?php Lang::_lang('Ver NovNovedadUsGrupos de ') ?> <strong><?php echo($us_grupo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="nov_novedad_us_grupo_alta.php" >
                            <?php Lang::_lang('Agregar NovNovedadUsGrupo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_GRUPO_MASINFO_ALT_CONTROL_US_GRUPO')){ ?>
	<div id="tab_alt_control_us_grupo" class="bloque-relacion alt_control_us_grupo">
		
            <h4><?php Lang::_lang('AltControlUsGrupo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsGrupo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_grupo->getAltControlUsGruposParaBloqueMasInfo() as $alt_control_us_grupo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($alt_control_us_grupo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($alt_control_us_grupo->getDescripcionVinculante('UsGrupo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($alt_control_us_grupo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($alt_control_us_grupo->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $alt_control_us_grupo->getId() ?>" archivo="ajax/modulos/alt_control_us_grupo/alt_control_us_grupo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('AltControlUsGrupo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ALT_CONTROL_US_GRUPO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('AltControlUsGrupo') ?>">
                                <a href="alt_control_us_grupo_alta.php?id=<?php echo $alt_control_us_grupo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_GRUPO_MASINFO_ALT_CONTROL_US_GRUPO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($alt_control_us_grupo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo AltControlUsGrupo::getFiltrosArrGral() ?>&arr=<?php echo $alt_control_us_grupo->getFiltrosArrXCampo('UsGrupo', 'us_grupo_id') ?>" >
                                <?php Lang::_lang('Ver AltControlUsGrupos de ') ?> <strong><?php echo($us_grupo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="alt_control_us_grupo_alta.php" >
                            <?php Lang::_lang('Agregar AltControlUsGrupo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

