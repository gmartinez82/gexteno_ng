<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gen_arbol_id = Gral::getVars(2, 'id');
$gen_arbol = GenArbol::getOxId($gen_arbol_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gen_arbol->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEN_ARBOL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_arbol->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gen_arbol->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEN_ARBOL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_arbol->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gen_arbol->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GEN_ARBOL_MASINFO_GEN_MENU_ITEM')){ ?>
            <li><a href="#tab_gen_menu_item"><?php Lang::_lang('GenMenuItem') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEN_ARBOL_MASINFO_INS_CATEGORIA')){ ?>
            <li><a href="#tab_ins_categoria"><?php Lang::_lang('InsCategorias') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GEN_ARBOL_MASINFO_GEN_MENU_ITEM')){ ?>
	<div id="tab_gen_menu_item" class="bloque-relacion gen_menu_item">
		
            <h4><?php Lang::_lang('GenMenuItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GenArbol') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gen_arbol->getGenMenuItemsParaBloqueMasInfo() as $gen_menu_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gen_menu_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gen_menu_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gen_menu_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_menu_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gen_menu_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_menu_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gen_menu_item->getId() ?>" archivo="ajax/modulos/gen_menu_item/gen_menu_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GenMenuItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GEN_MENU_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenMenuItem') ?>">
                                <a href="gen_menu_item_alta.php?id=<?php echo $gen_menu_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEN_ARBOL_MASINFO_GEN_MENU_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gen_menu_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GenMenuItem::getFiltrosArrGral() ?>&arr=<?php echo $gen_menu_item->getFiltrosArrXCampo('GenArbol', 'gen_arbol_id') ?>" >
                                <?php Lang::_lang('Ver GenMenuItems de ') ?> <strong><?php echo($gen_arbol->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gen_menu_item_alta.php" >
                            <?php Lang::_lang('Agregar GenMenuItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEN_ARBOL_MASINFO_INS_CATEGORIA')){ ?>
	<div id="tab_ins_categoria" class="bloque-relacion ins_categoria">
		
            <h4><?php Lang::_lang('InsCategoria') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GenArbol') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gen_arbol->getInsCategoriasParaBloqueMasInfo() as $ins_categoria){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_categoria->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_categoria->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_categoria->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_categoria->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_categoria->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_categoria->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_categoria->getId() ?>" archivo="ajax/modulos/ins_categoria/ins_categoria_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsCategoria') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_CATEGORIA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsCategoria') ?>">
                                <a href="ins_categoria_alta.php?id=<?php echo $ins_categoria->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEN_ARBOL_MASINFO_INS_CATEGORIA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_categoria){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsCategoria::getFiltrosArrGral() ?>&arr=<?php echo $ins_categoria->getFiltrosArrXCampo('GenArbol', 'gen_arbol_id') ?>" >
                                <?php Lang::_lang('Ver InsCategorias de ') ?> <strong><?php echo($gen_arbol->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_categoria_alta.php" >
                            <?php Lang::_lang('Agregar InsCategoria') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

