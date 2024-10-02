<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_sexo_id = Gral::getVars(2, 'id');
$gral_sexo = GralSexo::getOxId($gral_sexo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_sexo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_SEXO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sexo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_sexo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_SEXO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_sexo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_sexo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_SEXO_MASINFO_PER_PERSONA')){ ?>
            <li><a href="#tab_per_persona"><?php Lang::_lang('PerPersonas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_SEXO_MASINFO_PER_PERSONA')){ ?>
	<div id="tab_per_persona" class="bloque-relacion per_persona">
		
            <h4><?php Lang::_lang('PerPersona') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralSexo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_sexo->getPerPersonasParaBloqueMasInfo() as $per_persona){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($per_persona->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($per_persona->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($per_persona->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($per_persona->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_persona->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $per_persona->getId() ?>" archivo="ajax/modulos/per_persona/per_persona_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PerPersona') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PER_PERSONA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerPersona') ?>">
                                <a href="per_persona_alta.php?id=<?php echo $per_persona->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_SEXO_MASINFO_PER_PERSONA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_persona){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerPersona::getFiltrosArrGral() ?>&arr=<?php echo $per_persona->getFiltrosArrXCampo('GralSexo', 'gral_sexo_id') ?>" >
                                <?php Lang::_lang('Ver PerPersonas de ') ?> <strong><?php echo($gral_sexo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="per_persona_alta.php" >
                            <?php Lang::_lang('Agregar PerPersona') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

