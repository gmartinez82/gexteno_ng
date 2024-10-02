
    <?php if(UsCredencial::getEsAcreditado('CTRL_SECTOR_ALTA_RELACION_CTRL_EQUIPO')){ ?>
        <?php if($ctrl_sector->getAltaMostrarBloqueRelacionCtrlEquipoCtrlSector()){ ?>
            <div class='relacion ctrl_equipo' clase='ctrl_equipo' padre='ctrl_sector' padre_clase='CtrlSector' relacion='CtrlEquipoCtrlSector'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('CtrlEquipos') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_ctrl_equipos = $ctrl_sector->getCantidadCtrlEquiposXCtrlEquipoCtrlSector();
                        echo ($cantidad_ctrl_equipos > 0) ? '('.$cantidad_ctrl_equipos.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_ctrl_sector_alta_relacion_ctrl_equipo_ctrl_sector_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='ctrl_equipo_txt_buscar' id='ctrl_equipo_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('CTRL_SECTOR_ALTA_RELACION_CTRL_EQUIPO_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/ctrl_equipo/ctrl_equipo_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ctrl_equipo', 'ctrl_sector', <?php Gral::_echo($ctrl_sector->getId()) ?>, 'CtrlSector', 'CtrlEquipoCtrlSector')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ctrl_equipo') ?>'>
                        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
                    </div>
                    <?php } ?>

                </div>

                <div class='datos'>
                    &nbsp;
                </div>

            </div>
        <?php } ?>
    <?php } ?>

