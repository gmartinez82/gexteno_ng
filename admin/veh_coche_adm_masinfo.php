<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$veh_coche_id = Gral::getVars(2, 'id');
$veh_coche = VehCoche::getOxId($veh_coche_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Modelo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($veh_coche->getVehModelo()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Version') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($veh_coche->getVersion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($veh_coche->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($veh_coche->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VEH_COCHE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_coche->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($veh_coche->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VEH_COCHE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_coche->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($veh_coche->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VEH_COCHE_MASINFO_VEH_COCHE_IMAGEN')){ ?>
            <li><a href="#tab_veh_coche_imagen"><?php Lang::_lang('VehCocheImagens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VEH_COCHE_MASINFO_VTA_PRESUPUESTO_VEH_COCHE')){ ?>
            <li><a href="#tab_vta_presupuesto_veh_coche"><?php Lang::_lang('VtaPresupuestoVehCoches') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VEH_COCHE_MASINFO_VEH_COCHE_IMAGEN')){ ?>
	<div id="tab_veh_coche_imagen" class="bloque-relacion veh_coche_imagen">
		
            <h4><?php Lang::_lang('VehCocheImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VehCoche') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($veh_coche->getVehCocheImagensParaBloqueMasInfo() as $veh_coche_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($veh_coche_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($veh_coche_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($veh_coche_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($veh_coche_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_coche_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($veh_coche_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_coche_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $veh_coche_imagen->getId() ?>" archivo="ajax/modulos/veh_coche_imagen/veh_coche_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VehCocheImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VEH_COCHE_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VehCocheImagen') ?>">
                                <a href="veh_coche_imagen_alta.php?id=<?php echo $veh_coche_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VEH_COCHE_MASINFO_VEH_COCHE_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($veh_coche_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VehCocheImagen::getFiltrosArrGral() ?>&arr=<?php echo $veh_coche_imagen->getFiltrosArrXCampo('VehCoche', 'veh_coche_id') ?>" >
                                <?php Lang::_lang('Ver VehCocheImagens de ') ?> <strong><?php echo($veh_coche->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="veh_coche_imagen_alta.php" >
                            <?php Lang::_lang('Agregar VehCocheImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VEH_COCHE_MASINFO_VTA_PRESUPUESTO_VEH_COCHE')){ ?>
	<div id="tab_vta_presupuesto_veh_coche" class="bloque-relacion vta_presupuesto_veh_coche">
		
            <h4><?php Lang::_lang('VtaPresupuestoVehCoche') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VehCoche') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($veh_coche->getVtaPresupuestoVehCochesParaBloqueMasInfo() as $vta_presupuesto_veh_coche){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_presupuesto_veh_coche->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_presupuesto_veh_coche->getDescripcionVinculante('VehCoche')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_presupuesto_veh_coche->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_veh_coche->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_presupuesto_veh_coche->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto_veh_coche->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_presupuesto_veh_coche->getId() ?>" archivo="ajax/modulos/vta_presupuesto_veh_coche/vta_presupuesto_veh_coche_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPresupuestoVehCoche') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_VEH_COCHE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPresupuestoVehCoche') ?>">
                                <a href="vta_presupuesto_veh_coche_alta.php?id=<?php echo $vta_presupuesto_veh_coche->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VEH_COCHE_MASINFO_VTA_PRESUPUESTO_VEH_COCHE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_presupuesto_veh_coche){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPresupuestoVehCoche::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto_veh_coche->getFiltrosArrXCampo('VehCoche', 'veh_coche_id') ?>" >
                                <?php Lang::_lang('Ver VtaPresupuestoVehCoches de ') ?> <strong><?php echo($veh_coche->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_presupuesto_veh_coche_alta.php" >
                            <?php Lang::_lang('Agregar VtaPresupuestoVehCoche') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

