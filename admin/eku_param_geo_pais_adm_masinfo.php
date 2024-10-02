<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_geo_pais_id = Gral::getVars(2, 'id');
$eku_param_geo_pais = EkuParamGeoPais::getOxId($eku_param_geo_pais_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_geo_pais->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_geo_pais->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_GEO_PAIS_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_geo_pais->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_geo_pais->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_GEO_PAIS_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_geo_pais->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_geo_pais->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_MASINFO_EKU_PARAM_GEO_PAIS_GEO_PAIS')){ ?>
            <li><a href="#tab_eku_param_geo_pais_geo_pais"><?php Lang::_lang('EkuParamGeoPaisGeoPaiss') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_MASINFO_EKU_PARAM_GEO_PAIS_GEO_PAIS')){ ?>
	<div id="tab_eku_param_geo_pais_geo_pais" class="bloque-relacion eku_param_geo_pais_geo_pais">
		
            <h4><?php Lang::_lang('EkuParamGeoPaisGeoPais') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuParamGeoPais') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_param_geo_pais->getEkuParamGeoPaisGeoPaissParaBloqueMasInfo() as $eku_param_geo_pais_geo_pais){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_geo_pais_geo_pais->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_geo_pais_geo_pais->getDescripcionVinculante('EkuParamGeoPais')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_geo_pais_geo_pais->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_geo_pais_geo_pais->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_geo_pais_geo_pais->getId() ?>" archivo="ajax/modulos/eku_param_geo_pais_geo_pais/eku_param_geo_pais_geo_pais_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamGeoPaisGeoPais') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_GEO_PAIS_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamGeoPaisGeoPais') ?>">
                                <a href="eku_param_geo_pais_geo_pais_alta.php?id=<?php echo $eku_param_geo_pais_geo_pais->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_MASINFO_EKU_PARAM_GEO_PAIS_GEO_PAIS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_geo_pais_geo_pais){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamGeoPaisGeoPais::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_geo_pais_geo_pais->getFiltrosArrXCampo('EkuParamGeoPais', 'eku_param_geo_pais_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamGeoPaisGeoPaiss de ') ?> <strong><?php echo($eku_param_geo_pais->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_geo_pais_geo_pais_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamGeoPaisGeoPais') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

