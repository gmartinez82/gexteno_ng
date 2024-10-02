<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gen_arbol_tipo_id = Gral::getVars(2, 'id');
$gen_arbol_tipo = GenArbolTipo::getOxId($gen_arbol_tipo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gen_arbol_tipo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEN_ARBOL_TIPO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_arbol_tipo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gen_arbol_tipo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEN_ARBOL_TIPO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_arbol_tipo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gen_arbol_tipo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GEN_ARBOL_TIPO_MASINFO_GEN_ARBOL')){ ?>
            <li><a href="#tab_gen_arbol"><?php Lang::_lang('GenArbol') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GEN_ARBOL_TIPO_MASINFO_GEN_ARBOL')){ ?>
	<div id="tab_gen_arbol" class="bloque-relacion gen_arbol">
		
            <h4><?php Lang::_lang('GenArbol') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GenArbolTipo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gen_arbol_tipo->getGenArbolsParaBloqueMasInfo() as $gen_arbol){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gen_arbol->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gen_arbol->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gen_arbol->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_arbol->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gen_arbol->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_arbol->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gen_arbol->getId() ?>" archivo="ajax/modulos/gen_arbol/gen_arbol_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GenArbol') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GEN_ARBOL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenArbol') ?>">
                                <a href="gen_arbol_alta.php?id=<?php echo $gen_arbol->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEN_ARBOL_TIPO_MASINFO_GEN_ARBOL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gen_arbol){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GenArbol::getFiltrosArrGral() ?>&arr=<?php echo $gen_arbol->getFiltrosArrXCampo('GenArbolTipo', 'gen_arbol_tipo_id') ?>" >
                                <?php Lang::_lang('Ver GenArbols de ') ?> <strong><?php echo($gen_arbol_tipo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gen_arbol_alta.php" >
                            <?php Lang::_lang('Agregar GenArbol') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

