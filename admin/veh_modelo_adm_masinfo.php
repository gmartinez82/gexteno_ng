<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$veh_modelo_id = Gral::getVars(2, 'id');
$veh_modelo = VehModelo::getOxId($veh_modelo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($veh_modelo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VEH_MODELO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_modelo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($veh_modelo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VEH_MODELO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_modelo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($veh_modelo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VEH_MODELO_MASINFO_INS_INSUMO_VEH_MODELO')){ ?>
            <li><a href="#tab_ins_insumo_veh_modelo"><?php Lang::_lang('InsInsumoVehModelos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VEH_MODELO_MASINFO_VEH_COCHE')){ ?>
            <li><a href="#tab_veh_coche"><?php Lang::_lang('VehCoches') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VEH_MODELO_MASINFO_INS_INSUMO_VEH_MODELO')){ ?>
	<div id="tab_ins_insumo_veh_modelo" class="bloque-relacion ins_insumo_veh_modelo">
		
            <h4><?php Lang::_lang('InsInsumoVehModelo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VehModelo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($veh_modelo->getInsInsumoVehModelosParaBloqueMasInfo() as $ins_insumo_veh_modelo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_veh_modelo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_veh_modelo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_veh_modelo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_veh_modelo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_veh_modelo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_veh_modelo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_veh_modelo->getId() ?>" archivo="ajax/modulos/ins_insumo_veh_modelo/ins_insumo_veh_modelo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoVehModelo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_VEH_MODELO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoVehModelo') ?>">
                                <a href="ins_insumo_veh_modelo_alta.php?id=<?php echo $ins_insumo_veh_modelo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VEH_MODELO_MASINFO_INS_INSUMO_VEH_MODELO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_veh_modelo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoVehModelo::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_veh_modelo->getFiltrosArrXCampo('VehModelo', 'veh_modelo_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoVehModelos de ') ?> <strong><?php echo($veh_modelo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_veh_modelo_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoVehModelo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VEH_MODELO_MASINFO_VEH_COCHE')){ ?>
	<div id="tab_veh_coche" class="bloque-relacion veh_coche">
		
            <h4><?php Lang::_lang('VehCoche') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VehModelo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($veh_modelo->getVehCochesParaBloqueMasInfo() as $veh_coche){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($veh_coche->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($veh_coche->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($veh_coche->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_coche->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($veh_coche->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($veh_coche->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $veh_coche->getId() ?>" archivo="ajax/modulos/veh_coche/veh_coche_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VehCoche') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VEH_COCHE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VehCoche') ?>">
                                <a href="veh_coche_alta.php?id=<?php echo $veh_coche->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VEH_MODELO_MASINFO_VEH_COCHE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($veh_coche){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VehCoche::getFiltrosArrGral() ?>&arr=<?php echo $veh_coche->getFiltrosArrXCampo('VehModelo', 'veh_modelo_id') ?>" >
                                <?php Lang::_lang('Ver VehCoches de ') ?> <strong><?php echo($veh_modelo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="veh_coche_alta.php" >
                            <?php Lang::_lang('Agregar VehCoche') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

