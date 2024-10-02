<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ins_categoria_id = Gral::getVars(2, 'id');
$ins_categoria = InsCategoria::getOxId($ins_categoria_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Familia Desc') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_categoria->getFamiliaDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ins_categoria->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_CATEGORIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_categoria->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_categoria->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'INS_CATEGORIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_categoria->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ins_categoria->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_MASINFO_INS_INSUMO')){ ?>
            <li><a href="#tab_ins_insumo"><?php Lang::_lang('InsInsumos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_MASINFO_INS_CATEGORIA_INS_MARCA')){ ?>
            <li><a href="#tab_ins_categoria_ins_marca"><?php Lang::_lang('InsCategoriaInsMarcas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_MASINFO_VTA_POLITICA_DESCUENTO_INS_CATEGORIA')){ ?>
            <li><a href="#tab_vta_politica_descuento_ins_categoria"><?php Lang::_lang('VtaPoliticaDescuentoInsCategorias') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_MASINFO_INS_INSUMO')){ ?>
	<div id="tab_ins_insumo" class="bloque-relacion ins_insumo">
		
            <h4><?php Lang::_lang('InsInsumo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsCategoria') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_categoria->getInsInsumosParaBloqueMasInfo() as $ins_insumo){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_MASINFO_INS_INSUMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo->getFiltrosArrXCampo('InsCategoria', 'ins_categoria_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumos de ') ?> <strong><?php echo($ins_categoria->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_MASINFO_INS_CATEGORIA_INS_MARCA')){ ?>
	<div id="tab_ins_categoria_ins_marca" class="bloque-relacion ins_categoria_ins_marca">
		
            <h4><?php Lang::_lang('InsCategoriaInsMarca') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsCategoria') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_categoria->getInsCategoriaInsMarcasParaBloqueMasInfo() as $ins_categoria_ins_marca){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_categoria_ins_marca->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_categoria_ins_marca->getDescripcionVinculante('InsCategoria')) ?>					
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


                    <?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_MASINFO_INS_CATEGORIA_INS_MARCA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_categoria_ins_marca){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsCategoriaInsMarca::getFiltrosArrGral() ?>&arr=<?php echo $ins_categoria_ins_marca->getFiltrosArrXCampo('InsCategoria', 'ins_categoria_id') ?>" >
                                <?php Lang::_lang('Ver InsCategoriaInsMarcas de ') ?> <strong><?php echo($ins_categoria->getDescripcion()) ?></strong>
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
	
	<?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_MASINFO_VTA_POLITICA_DESCUENTO_INS_CATEGORIA')){ ?>
	<div id="tab_vta_politica_descuento_ins_categoria" class="bloque-relacion vta_politica_descuento_ins_categoria">
		
            <h4><?php Lang::_lang('VtaPoliticaDescuentoInsCategoria') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('InsCategoria') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ins_categoria->getVtaPoliticaDescuentoInsCategoriasParaBloqueMasInfo() as $vta_politica_descuento_ins_categoria){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_politica_descuento_ins_categoria->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_politica_descuento_ins_categoria->getDescripcionVinculante('InsCategoria')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_politica_descuento_ins_categoria->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_politica_descuento_ins_categoria->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_politica_descuento_ins_categoria->getId() ?>" archivo="ajax/modulos/vta_politica_descuento_ins_categoria/vta_politica_descuento_ins_categoria_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsCategoria') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_POLITICA_DESCUENTO_INS_CATEGORIA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPoliticaDescuentoInsCategoria') ?>">
                                <a href="vta_politica_descuento_ins_categoria_alta.php?id=<?php echo $vta_politica_descuento_ins_categoria->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_MASINFO_VTA_POLITICA_DESCUENTO_INS_CATEGORIA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_politica_descuento_ins_categoria){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPoliticaDescuentoInsCategoria::getFiltrosArrGral() ?>&arr=<?php echo $vta_politica_descuento_ins_categoria->getFiltrosArrXCampo('InsCategoria', 'ins_categoria_id') ?>" >
                                <?php Lang::_lang('Ver VtaPoliticaDescuentoInsCategorias de ') ?> <strong><?php echo($ins_categoria->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_politica_descuento_ins_categoria_alta.php" >
                            <?php Lang::_lang('Agregar VtaPoliticaDescuentoInsCategoria') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

