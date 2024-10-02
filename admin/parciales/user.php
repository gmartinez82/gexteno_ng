<div class="user">
    
    <div class="datos fechahora"><?php Lang::_lang('Ahora') ?>: <?php echo date('d/m/Y H:i:s') ?></div>

    <?php if($gral_sucursal_autenticada){ ?>
        <div class="datos sucursal">
            <label class="label"><?php Lang::_lang('Sucursal') ?>: </label>
            <label class="dato"><?php Gral::_echo($gral_sucursal_autenticada->getDescripcion()) ?></label>
            
            <?php if (UsCredencial::getEsAcreditado('CAMBIAR_SUCURSAL')) { ?>
                <label class="boton" title="<?php Lang::_lang('Cambiar Sucursal') ?>">
                    <a href="cambiar_sucursal.php">
                        <img id="btn_user_cambiar_sucursal" src="imgs/icn_sucursal.png" width="18" align="absmiddle" border="0" />
                    </a>
                </label>
            <?php } ?>
        </div>
    <?php } ?>
    
    <div class="datos">
        <label class="label"><?php Lang::_lang('Usuario') ?>: </label>
        <label class="dato"><?php Gral::_echo($user->getDescripcion()) ?></label>
        
        <?php if (UsCredencial::getEsAcreditado('US_USUARIO_CLAVE')) { ?>
            <label class="boton" title="<?php Lang::_lang('Actualizar Clave') ?>">
                <a href="us_usuario_clave.php?id=<?php echo $user->getId() ?>">
                    <img id="btn_user_actualizar_clave" src="imgs/btn_clave.png" width="14" align="absmiddle" border="0" />
                </a>
            </label>
        <?php } ?>
        
        <label class="boton" title="<?php Lang::_lang('Actualizar Credenciales') ?>">
            <a href="index.php?refresh_credenciales=1">
                <img id="btn_user_actualizar_credenciales" src="imgs/btn_refresh.png" width="14" align="absmiddle" border="0" />
            </a>
        </label>
    </div>
    
    <div class="logout"><a href="?logout=logout"><?php Lang::_lang('Salir') ?></a></div>
    
</div>