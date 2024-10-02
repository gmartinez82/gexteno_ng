<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prv_rubro_id = Gral::getVars(2, 'id');
$prv_rubro = PrvRubro::getOxId($prv_rubro_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prv_rubro->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_RUBRO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_rubro->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_rubro->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRV_RUBRO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_rubro->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prv_rubro->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PRV_RUBRO_MASINFO_PRV_PROVEEDOR_PRV_RUBRO')){ ?>
            <li><a href="#tab_prv_proveedor_prv_rubro"><?php Lang::_lang('PrvProveedorPrvRubro') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PRV_RUBRO_MASINFO_PRV_PROVEEDOR_PRV_RUBRO')){ ?>
	<div id="tab_prv_proveedor_prv_rubro" class="bloque-relacion prv_proveedor_prv_rubro">
		
            <h4><?php Lang::_lang('PrvProveedorPrvRubro') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrvRubro') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prv_rubro->getPrvProveedorPrvRubrosParaBloqueMasInfo() as $prv_proveedor_prv_rubro){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_proveedor_prv_rubro->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_proveedor_prv_rubro->getDescripcionVinculante('PrvRubro')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_proveedor_prv_rubro->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_proveedor_prv_rubro->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_proveedor_prv_rubro->getId() ?>" archivo="ajax/modulos/prv_proveedor_prv_rubro/prv_proveedor_prv_rubro_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvProveedorPrvRubro') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_PROVEEDOR_PRV_RUBRO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvProveedorPrvRubro') ?>">
                                <a href="prv_proveedor_prv_rubro_alta.php?id=<?php echo $prv_proveedor_prv_rubro->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRV_RUBRO_MASINFO_PRV_PROVEEDOR_PRV_RUBRO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_proveedor_prv_rubro){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvProveedorPrvRubro::getFiltrosArrGral() ?>&arr=<?php echo $prv_proveedor_prv_rubro->getFiltrosArrXCampo('PrvRubro', 'prv_rubro_id') ?>" >
                                <?php Lang::_lang('Ver PrvProveedorPrvRubros de ') ?> <strong><?php echo($prv_rubro->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_proveedor_prv_rubro_alta.php" >
                            <?php Lang::_lang('Agregar PrvProveedorPrvRubro') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

