<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_matriz_id = Gral::getVars(2, 'id');
$ins_matriz = InsMatriz::getOxId($ins_matriz_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_matriz->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_MATRIZ_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_matriz->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_matriz->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_MATRIZ_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_matriz->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_matriz->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('INS_MATRIZ_MASINFO_INS_INSUMO')){ ?>
            <li><a href="#tab_ins_insumo"><?php Lang::_lang('InsInsumos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_MATRIZ_MASINFO_PRV_INSUMO')){ ?>
            <li><a href="#tab_prv_insumo"><?php Lang::_lang('PrvInsumo') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('INS_MATRIZ_MASINFO_INS_INSUMO')){ ?>
	<div id="tab_ins_insumo" class="bloque-relacion ins_insumo">
		
            <h4><?php Lang::_lang('InsInsumo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsMatriz') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_matriz->getInsInsumosParaBloqueMasInfo() as $ins_insumo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo->getId() ?>" archivo="ajax/modulos/ins_insumo/ins_insumo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumo') ?>">
                                <a href="ins_insumo_alta.php?id=<?php echo $ins_insumo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_MATRIZ_MASINFO_INS_INSUMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo->getFiltrosArrXCampo('InsMatriz', 'ins_matriz_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumos de ') ?> <strong><?php echo($ins_matriz->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_MATRIZ_MASINFO_PRV_INSUMO')){ ?>
	<div id="tab_prv_insumo" class="bloque-relacion prv_insumo">
		
            <h4><?php Lang::_lang('PrvInsumo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsMatriz') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_matriz->getPrvInsumosParaBloqueMasInfo() as $prv_insumo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_insumo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_insumo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_insumo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_insumo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_insumo->getId() ?>" archivo="ajax/modulos/prv_insumo/prv_insumo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvInsumo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvInsumo') ?>">
                                <a href="prv_insumo_alta.php?id=<?php echo $prv_insumo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_MATRIZ_MASINFO_PRV_INSUMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_insumo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvInsumo::getFiltrosArrGral() ?>&arr=<?php echo $prv_insumo->getFiltrosArrXCampo('InsMatriz', 'ins_matriz_id') ?>" >
                                <?php Lang::_lang('Ver PrvInsumos de ') ?> <strong><?php echo($ins_matriz->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_insumo_alta.php" >
                            <?php Lang::_lang('Agregar PrvInsumo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

