<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$not_categoria_id = Gral::getVars(2, 'id');
$not_categoria = NotCategoria::getOxId($not_categoria_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($not_categoria->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_CATEGORIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_categoria->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_categoria->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'NOT_CATEGORIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_categoria->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($not_categoria->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('NOT_CATEGORIA_MASINFO_NOT_NOTICIA')){ ?>
            <li><a href="#tab_not_noticia"><?php Lang::_lang('NotNoticia') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('NOT_CATEGORIA_MASINFO_NOT_NOTICIA')){ ?>
	<div id="tab_not_noticia" class="bloque-relacion not_noticia">
		
            <h4><?php Lang::_lang('NotNoticia') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('NotCategoria') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($not_categoria->getNotNoticiasParaBloqueMasInfo() as $not_noticia){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($not_noticia->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($not_noticia->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($not_noticia->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_noticia->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($not_noticia->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($not_noticia->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $not_noticia->getId() ?>" archivo="ajax/modulos/not_noticia/not_noticia_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('NotNoticia') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('NOT_NOTICIA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('NotNoticia') ?>">
                                <a href="not_noticia_alta.php?id=<?php echo $not_noticia->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('NOT_CATEGORIA_MASINFO_NOT_NOTICIA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($not_noticia){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo NotNoticia::getFiltrosArrGral() ?>&arr=<?php echo $not_noticia->getFiltrosArrXCampo('NotCategoria', 'not_categoria_id') ?>" >
                                <?php Lang::_lang('Ver NotNoticias de ') ?> <strong><?php echo($not_categoria->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="not_noticia_alta.php" >
                            <?php Lang::_lang('Agregar NotNoticia') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

