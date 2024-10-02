<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_marca_id = Gral::getVars(2, 'id');
$ins_marca = InsMarca::getOxId($ins_marca_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_marca->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_MARCA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_marca->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_marca->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_MARCA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_marca->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_marca->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_INSUMO')){ ?>
            <li><a href="#tab_ins_insumo"><?php Lang::_lang('InsInsumos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_INSUMO_INS_MARCA')){ ?>
            <li><a href="#tab_ins_insumo_ins_marca"><?php Lang::_lang('InsInsumoInsMarcas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_MARCA_IMAGEN')){ ?>
            <li><a href="#tab_ins_marca_imagen"><?php Lang::_lang('InsMarcaImagens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_CATEGORIA_INS_MARCA')){ ?>
            <li><a href="#tab_ins_categoria_ins_marca"><?php Lang::_lang('InsCategoriaInsMarcas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_MATRIZ')){ ?>
            <li><a href="#tab_ins_matriz"><?php Lang::_lang('InsMatriz') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_PRV_PROVEEDOR_INS_MARCA')){ ?>
            <li><a href="#tab_prv_proveedor_ins_marca"><?php Lang::_lang('PrvProveedorInsMarcas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_PRV_INSUMO')){ ?>
            <li><a href="#tab_prv_insumo"><?php Lang::_lang('PrvInsumo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_PRV_IMPORTACION')){ ?>
            <li><a href="#tab_prv_importacion"><?php Lang::_lang('PrvImportacions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_ML_VALUE_INS_MARCA')){ ?>
            <li><a href="#tab_ml_value_ins_marca"><?php Lang::_lang('MlValueInsMarcas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_INSUMO')){ ?>
	<div id="tab_ins_insumo" class="bloque-relacion ins_insumo">
		
            <h4><?php Lang::_lang('InsInsumo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsMarca') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_marca->getInsInsumosParaBloqueMasInfo() as $ins_insumo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_INSUMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo->getFiltrosArrXCampo('InsMarca', 'ins_marca_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumos de ') ?> <strong><?php echo($ins_marca->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_INSUMO_INS_MARCA')){ ?>
	<div id="tab_ins_insumo_ins_marca" class="bloque-relacion ins_insumo_ins_marca">
		
            <h4><?php Lang::_lang('InsInsumoInsMarca') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsMarca') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_marca->getInsInsumoInsMarcasParaBloqueMasInfo() as $ins_insumo_ins_marca){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_ins_marca->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_ins_marca->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_ins_marca->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_ins_marca->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_ins_marca->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_ins_marca->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_ins_marca->getId() ?>" archivo="ajax/modulos/ins_insumo_ins_marca/ins_insumo_ins_marca_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoInsMarca') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_INS_MARCA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoInsMarca') ?>">
                                <a href="ins_insumo_ins_marca_alta.php?id=<?php echo $ins_insumo_ins_marca->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_INSUMO_INS_MARCA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_ins_marca){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoInsMarca::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_ins_marca->getFiltrosArrXCampo('InsMarca', 'ins_marca_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoInsMarcas de ') ?> <strong><?php echo($ins_marca->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_ins_marca_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoInsMarca') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_MARCA_IMAGEN')){ ?>
	<div id="tab_ins_marca_imagen" class="bloque-relacion ins_marca_imagen">
		
            <h4><?php Lang::_lang('InsMarcaImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsMarca') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_marca->getInsMarcaImagensParaBloqueMasInfo() as $ins_marca_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_marca_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($ins_marca_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($ins_marca_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_marca_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_marca_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_marca_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_marca_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_marca_imagen->getId() ?>" archivo="ajax/modulos/ins_marca_imagen/ins_marca_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsMarcaImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_MARCA_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsMarcaImagen') ?>">
                                <a href="ins_marca_imagen_alta.php?id=<?php echo $ins_marca_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_MARCA_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_marca_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsMarcaImagen::getFiltrosArrGral() ?>&arr=<?php echo $ins_marca_imagen->getFiltrosArrXCampo('InsMarca', 'ins_marca_id') ?>" >
                                <?php Lang::_lang('Ver InsMarcaImagens de ') ?> <strong><?php echo($ins_marca->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_marca_imagen_alta.php" >
                            <?php Lang::_lang('Agregar InsMarcaImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_CATEGORIA_INS_MARCA')){ ?>
	<div id="tab_ins_categoria_ins_marca" class="bloque-relacion ins_categoria_ins_marca">
		
            <h4><?php Lang::_lang('InsCategoriaInsMarca') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsMarca') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_marca->getInsCategoriaInsMarcasParaBloqueMasInfo() as $ins_categoria_ins_marca){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_categoria_ins_marca->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_categoria_ins_marca->getDescripcionVinculante('InsMarca')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_categoria_ins_marca->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_categoria_ins_marca->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_categoria_ins_marca->getId() ?>" archivo="ajax/modulos/ins_categoria_ins_marca/ins_categoria_ins_marca_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsCategoriaInsMarca') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_INS_MARCA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsCategoriaInsMarca') ?>">
                                <a href="ins_categoria_ins_marca_alta.php?id=<?php echo $ins_categoria_ins_marca->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_CATEGORIA_INS_MARCA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_categoria_ins_marca){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsCategoriaInsMarca::getFiltrosArrGral() ?>&arr=<?php echo $ins_categoria_ins_marca->getFiltrosArrXCampo('InsMarca', 'ins_marca_id') ?>" >
                                <?php Lang::_lang('Ver InsCategoriaInsMarcas de ') ?> <strong><?php echo($ins_marca->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_categoria_ins_marca_alta.php" >
                            <?php Lang::_lang('Agregar InsCategoriaInsMarca') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_MATRIZ')){ ?>
	<div id="tab_ins_matriz" class="bloque-relacion ins_matriz">
		
            <h4><?php Lang::_lang('InsMatriz') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsMarca') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_marca->getInsMatrizsParaBloqueMasInfo() as $ins_matriz){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_matriz->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_matriz->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_matriz->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_matriz->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_matriz->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_matriz->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_matriz->getId() ?>" archivo="ajax/modulos/ins_matriz/ins_matriz_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsMatriz') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_MATRIZ_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsMatriz') ?>">
                                <a href="ins_matriz_alta.php?id=<?php echo $ins_matriz->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_INS_MATRIZ_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_matriz){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsMatriz::getFiltrosArrGral() ?>&arr=<?php echo $ins_matriz->getFiltrosArrXCampo('InsMarca', 'ins_marca_id') ?>" >
                                <?php Lang::_lang('Ver InsMatrizs de ') ?> <strong><?php echo($ins_marca->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_matriz_alta.php" >
                            <?php Lang::_lang('Agregar InsMatriz') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_PRV_PROVEEDOR_INS_MARCA')){ ?>
	<div id="tab_prv_proveedor_ins_marca" class="bloque-relacion prv_proveedor_ins_marca">
		
            <h4><?php Lang::_lang('PrvProveedorInsMarca') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsMarca') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_marca->getPrvProveedorInsMarcasParaBloqueMasInfo() as $prv_proveedor_ins_marca){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_proveedor_ins_marca->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_proveedor_ins_marca->getDescripcionVinculante('InsMarca')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_proveedor_ins_marca->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor_ins_marca->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_proveedor_ins_marca->getId() ?>" archivo="ajax/modulos/prv_proveedor_ins_marca/prv_proveedor_ins_marca_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvProveedorInsMarca') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_INS_MARCA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvProveedorInsMarca') ?>">
                                <a href="prv_proveedor_ins_marca_alta.php?id=<?php echo $prv_proveedor_ins_marca->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_PRV_PROVEEDOR_INS_MARCA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_proveedor_ins_marca){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvProveedorInsMarca::getFiltrosArrGral() ?>&arr=<?php echo $prv_proveedor_ins_marca->getFiltrosArrXCampo('InsMarca', 'ins_marca_id') ?>" >
                                <?php Lang::_lang('Ver PrvProveedorInsMarcas de ') ?> <strong><?php echo($ins_marca->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_proveedor_ins_marca_alta.php" >
                            <?php Lang::_lang('Agregar PrvProveedorInsMarca') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_PRV_INSUMO')){ ?>
	<div id="tab_prv_insumo" class="bloque-relacion prv_insumo">
		
            <h4><?php Lang::_lang('PrvInsumo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsMarca') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_marca->getPrvInsumosParaBloqueMasInfo() as $prv_insumo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_PRV_INSUMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_insumo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvInsumo::getFiltrosArrGral() ?>&arr=<?php echo $prv_insumo->getFiltrosArrXCampo('InsMarca', 'ins_marca_id') ?>" >
                                <?php Lang::_lang('Ver PrvInsumos de ') ?> <strong><?php echo($ins_marca->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_PRV_IMPORTACION')){ ?>
	<div id="tab_prv_importacion" class="bloque-relacion prv_importacion">
		
            <h4><?php Lang::_lang('PrvImportacion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsMarca') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_marca->getPrvImportacionsParaBloqueMasInfo() as $prv_importacion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_importacion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_importacion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_importacion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_importacion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_importacion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_importacion->getId() ?>" archivo="ajax/modulos/prv_importacion/prv_importacion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvImportacion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_IMPORTACION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvImportacion') ?>">
                                <a href="prv_importacion_alta.php?id=<?php echo $prv_importacion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_PRV_IMPORTACION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_importacion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvImportacion::getFiltrosArrGral() ?>&arr=<?php echo $prv_importacion->getFiltrosArrXCampo('InsMarca', 'ins_marca_id') ?>" >
                                <?php Lang::_lang('Ver PrvImportacions de ') ?> <strong><?php echo($ins_marca->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_importacion_alta.php" >
                            <?php Lang::_lang('Agregar PrvImportacion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_ML_VALUE_INS_MARCA')){ ?>
	<div id="tab_ml_value_ins_marca" class="bloque-relacion ml_value_ins_marca">
		
            <h4><?php Lang::_lang('MlValueInsMarca') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsMarca') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_marca->getMlValueInsMarcasParaBloqueMasInfo() as $ml_value_ins_marca){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ml_value_ins_marca->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ml_value_ins_marca->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ml_value_ins_marca->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_value_ins_marca->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ml_value_ins_marca->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ml_value_ins_marca->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ml_value_ins_marca->getId() ?>" archivo="ajax/modulos/ml_value_ins_marca/ml_value_ins_marca_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('MlValueInsMarca') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('ML_VALUE_INS_MARCA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('MlValueInsMarca') ?>">
                                <a href="ml_value_ins_marca_alta.php?id=<?php echo $ml_value_ins_marca->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_MARCA_MASINFO_ML_VALUE_INS_MARCA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ml_value_ins_marca){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo MlValueInsMarca::getFiltrosArrGral() ?>&arr=<?php echo $ml_value_ins_marca->getFiltrosArrXCampo('InsMarca', 'ins_marca_id') ?>" >
                                <?php Lang::_lang('Ver MlValueInsMarcas de ') ?> <strong><?php echo($ins_marca->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ml_value_ins_marca_alta.php" >
                            <?php Lang::_lang('Agregar MlValueInsMarca') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

