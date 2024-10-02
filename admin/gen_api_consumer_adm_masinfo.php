<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gen_api_consumer_id = Gral::getVars(2, 'id');
$gen_api_consumer = GenApiConsumer::getOxId($gen_api_consumer_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gen_api_consumer->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEN_API_CONSUMER_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_api_consumer->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gen_api_consumer->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEN_API_CONSUMER_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_api_consumer->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gen_api_consumer->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GEN_API_CONSUMER_MASINFO_GEN_API_TOKEN')){ ?>
            <li><a href="#tab_gen_api_token"><?php Lang::_lang('GenApiTokens') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GEN_API_CONSUMER_MASINFO_GEN_API_TOKEN')){ ?>
	<div id="tab_gen_api_token" class="bloque-relacion gen_api_token">
		
            <h4><?php Lang::_lang('GenApiToken') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GenApiConsumer') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gen_api_consumer->getGenApiTokensParaBloqueMasInfo() as $gen_api_token){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gen_api_token->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gen_api_token->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gen_api_token->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_api_token->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gen_api_token->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_api_token->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gen_api_token->getId() ?>" archivo="ajax/modulos/gen_api_token/gen_api_token_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GenApiToken') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GEN_API_TOKEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenApiToken') ?>">
                                <a href="gen_api_token_alta.php?id=<?php echo $gen_api_token->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEN_API_CONSUMER_MASINFO_GEN_API_TOKEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gen_api_token){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GenApiToken::getFiltrosArrGral() ?>&arr=<?php echo $gen_api_token->getFiltrosArrXCampo('GenApiConsumer', 'gen_api_consumer_id') ?>" >
                                <?php Lang::_lang('Ver GenApiTokens de ') ?> <strong><?php echo($gen_api_consumer->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gen_api_token_alta.php" >
                            <?php Lang::_lang('Agregar GenApiToken') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

