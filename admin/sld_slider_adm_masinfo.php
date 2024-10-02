<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$sld_slider_id = Gral::getVars(2, 'id');
$sld_slider = SldSlider::getOxId($sld_slider_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($sld_slider->getInsInsumo()->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Url') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($sld_slider->getUrl())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($sld_slider->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'SLD_SLIDER_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($sld_slider->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($sld_slider->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'SLD_SLIDER_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($sld_slider->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($sld_slider->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('SLD_SLIDER_MASINFO_SLD_SLIDER_IMAGEN')){ ?>
            <li><a href="#tab_sld_slider_imagen"><?php Lang::_lang('SldSliderImagens') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('SLD_SLIDER_MASINFO_SLD_SLIDER_IMAGEN')){ ?>
	<div id="tab_sld_slider_imagen" class="bloque-relacion sld_slider_imagen">
		
            <h4><?php Lang::_lang('SldSliderImagen') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('SldSlider') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($sld_slider->getSldSliderImagensParaBloqueMasInfo() as $sld_slider_imagen){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($sld_slider_imagen->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <img src="<?php Gral::_echo($sld_slider_imagen->getPathImagen(true)) ?>" width="50" alt="<?php Gral::_echo($sld_slider_imagen->getDescripcion()) ?>">					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($sld_slider_imagen->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($sld_slider_imagen->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($sld_slider_imagen->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($sld_slider_imagen->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $sld_slider_imagen->getId() ?>" archivo="ajax/modulos/sld_slider_imagen/sld_slider_imagen_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('SldSliderImagen') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('SLD_SLIDER_IMAGEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('SldSliderImagen') ?>">
                                <a href="sld_slider_imagen_alta.php?id=<?php echo $sld_slider_imagen->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('SLD_SLIDER_MASINFO_SLD_SLIDER_IMAGEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($sld_slider_imagen){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo SldSliderImagen::getFiltrosArrGral() ?>&arr=<?php echo $sld_slider_imagen->getFiltrosArrXCampo('SldSlider', 'sld_slider_id') ?>" >
                                <?php Lang::_lang('Ver SldSliderImagens de ') ?> <strong><?php echo($sld_slider->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="sld_slider_imagen_alta.php" >
                            <?php Lang::_lang('Agregar SldSliderImagen') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

