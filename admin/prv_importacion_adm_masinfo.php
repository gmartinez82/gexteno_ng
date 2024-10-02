<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prv_importacion_id = Gral::getVars(2, 'id');
$prv_importacion = PrvImportacion::getOxId($prv_importacion_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_importacion->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_importacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_IMPORTACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_importacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_IMPORTACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_importacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_MASINFO_INS_INSUMO_COSTO')){ ?>
            <li><a href="#tab_ins_insumo_costo"><?php Lang::_lang('InsInsumoCostos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_MASINFO_PRV_INSUMO_COSTO')){ ?>
            <li><a href="#tab_prv_insumo_costo"><?php Lang::_lang('PrvInsumoCosto') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_MASINFO_PRV_IMPORTACION_ESTADO')){ ?>
            <li><a href="#tab_prv_importacion_estado"><?php Lang::_lang('PrvImportacionEstados') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_MASINFO_PRV_IMPORTACION_RESULTADO')){ ?>
            <li><a href="#tab_prv_importacion_resultado"><?php Lang::_lang('PrvImportacionResultados') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_MASINFO_INS_INSUMO_COSTO')){ ?>
	<div id="tab_ins_insumo_costo" class="bloque-relacion ins_insumo_costo">
		
            <h4><?php Lang::_lang('InsInsumoCosto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvImportacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_importacion->getInsInsumoCostosParaBloqueMasInfo() as $ins_insumo_costo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_costo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_costo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_costo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_costo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_costo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_costo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_costo->getId() ?>" archivo="ajax/modulos/ins_insumo_costo/ins_insumo_costo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoCosto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_COSTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoCosto') ?>">
                                <a href="ins_insumo_costo_alta.php?id=<?php echo $ins_insumo_costo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_MASINFO_INS_INSUMO_COSTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_costo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoCosto::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_costo->getFiltrosArrXCampo('PrvImportacion', 'prv_importacion_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoCostos de ') ?> <strong><?php echo($prv_importacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_costo_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoCosto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_MASINFO_PRV_INSUMO_COSTO')){ ?>
	<div id="tab_prv_insumo_costo" class="bloque-relacion prv_insumo_costo">
		
            <h4><?php Lang::_lang('PrvInsumoCosto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvImportacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_importacion->getPrvInsumoCostosParaBloqueMasInfo() as $prv_insumo_costo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_insumo_costo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_insumo_costo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_insumo_costo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo_costo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_insumo_costo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_insumo_costo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_insumo_costo->getId() ?>" archivo="ajax/modulos/prv_insumo_costo/prv_insumo_costo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvInsumoCosto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_COSTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvInsumoCosto') ?>">
                                <a href="prv_insumo_costo_alta.php?id=<?php echo $prv_insumo_costo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_MASINFO_PRV_INSUMO_COSTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_insumo_costo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvInsumoCosto::getFiltrosArrGral() ?>&arr=<?php echo $prv_insumo_costo->getFiltrosArrXCampo('PrvImportacion', 'prv_importacion_id') ?>" >
                                <?php Lang::_lang('Ver PrvInsumoCostos de ') ?> <strong><?php echo($prv_importacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_insumo_costo_alta.php" >
                            <?php Lang::_lang('Agregar PrvInsumoCosto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_MASINFO_PRV_IMPORTACION_ESTADO')){ ?>
	<div id="tab_prv_importacion_estado" class="bloque-relacion prv_importacion_estado">
		
            <h4><?php Lang::_lang('PrvImportacionEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvImportacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_importacion->getPrvImportacionEstadosParaBloqueMasInfo() as $prv_importacion_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_importacion_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_importacion_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_importacion_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_importacion_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_importacion_estado->getId() ?>" archivo="ajax/modulos/prv_importacion_estado/prv_importacion_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvImportacionEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvImportacionEstado') ?>">
                                <a href="prv_importacion_estado_alta.php?id=<?php echo $prv_importacion_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_MASINFO_PRV_IMPORTACION_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_importacion_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvImportacionEstado::getFiltrosArrGral() ?>&arr=<?php echo $prv_importacion_estado->getFiltrosArrXCampo('PrvImportacion', 'prv_importacion_id') ?>" >
                                <?php Lang::_lang('Ver PrvImportacionEstados de ') ?> <strong><?php echo($prv_importacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_importacion_estado_alta.php" >
                            <?php Lang::_lang('Agregar PrvImportacionEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_MASINFO_PRV_IMPORTACION_RESULTADO')){ ?>
	<div id="tab_prv_importacion_resultado" class="bloque-relacion prv_importacion_resultado">
		
            <h4><?php Lang::_lang('PrvImportacionResultado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvImportacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_importacion->getPrvImportacionResultadosParaBloqueMasInfo() as $prv_importacion_resultado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_importacion_resultado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_importacion_resultado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_importacion_resultado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion_resultado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_importacion_resultado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion_resultado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_importacion_resultado->getId() ?>" archivo="ajax/modulos/prv_importacion_resultado/prv_importacion_resultado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvImportacionResultado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_RESULTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvImportacionResultado') ?>">
                                <a href="prv_importacion_resultado_alta.php?id=<?php echo $prv_importacion_resultado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_MASINFO_PRV_IMPORTACION_RESULTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_importacion_resultado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvImportacionResultado::getFiltrosArrGral() ?>&arr=<?php echo $prv_importacion_resultado->getFiltrosArrXCampo('PrvImportacion', 'prv_importacion_id') ?>" >
                                <?php Lang::_lang('Ver PrvImportacionResultados de ') ?> <strong><?php echo($prv_importacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_importacion_resultado_alta.php" >
                            <?php Lang::_lang('Agregar PrvImportacionResultado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

