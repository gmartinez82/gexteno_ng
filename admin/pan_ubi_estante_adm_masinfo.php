<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pan_ubi_estante_id = Gral::getVars(2, 'id');
$pan_ubi_estante = PanUbiEstante::getOxId($pan_ubi_estante_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pan_ubi_estante->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PAN_UBI_ESTANTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_ubi_estante->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pan_ubi_estante->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PAN_UBI_ESTANTE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pan_ubi_estante->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pan_ubi_estante->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PAN_UBI_ESTANTE_MASINFO_INS_INSUMO_PAN_PANOL')){ ?>
            <li><a href="#tab_ins_insumo_pan_panol"><?php Lang::_lang('InsInsumoPanPanols') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PAN_UBI_ESTANTE_MASINFO_INS_INSUMO_PAN_PANOL')){ ?>
	<div id="tab_ins_insumo_pan_panol" class="bloque-relacion ins_insumo_pan_panol">
		
            <h4><?php Lang::_lang('InsInsumoPanPanol') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PanUbiEstante') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pan_ubi_estante->getInsInsumoPanPanolsParaBloqueMasInfo() as $ins_insumo_pan_panol){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ins_insumo_pan_panol->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ins_insumo_pan_panol->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ins_insumo_pan_panol->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_pan_panol->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ins_insumo_pan_panol->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_pan_panol->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ins_insumo_pan_panol->getId() ?>" archivo="ajax/modulos/ins_insumo_pan_panol/ins_insumo_pan_panol_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('InsInsumoPanPanol') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('INS_INSUMO_PAN_PANOL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoPanPanol') ?>">
                                <a href="ins_insumo_pan_panol_alta.php?id=<?php echo $ins_insumo_pan_panol->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PAN_UBI_ESTANTE_MASINFO_INS_INSUMO_PAN_PANOL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ins_insumo_pan_panol){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo InsInsumoPanPanol::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_pan_panol->getFiltrosArrXCampo('PanUbiEstante', 'pan_ubi_estante_id') ?>" >
                                <?php Lang::_lang('Ver InsInsumoPanPanols de ') ?> <strong><?php echo($pan_ubi_estante->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ins_insumo_pan_panol_alta.php" >
                            <?php Lang::_lang('Agregar InsInsumoPanPanol') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

