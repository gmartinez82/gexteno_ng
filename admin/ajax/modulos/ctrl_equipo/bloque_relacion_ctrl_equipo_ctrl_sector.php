
    <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_ALTA_RELACION_CTRL_SECTOR')){ ?>
        <?php if($ctrl_equipo->getAltaMostrarBloqueRelacionCtrlEquipoCtrlSector()){ ?>
            <div class='relacion ctrl_sector' clase='ctrl_sector' padre='ctrl_equipo' padre_clase='CtrlEquipo' relacion='CtrlEquipoCtrlSector'>

                <div class='titulo'>
                    <label class="titulo-entidad-vinculada"><?php Lang::_lang('CtrlSectors') ?></label>
                    <label class="titulo-entidad-cantidad">            
                        <?php 
                        $cantidad_ctrl_sectors = $ctrl_equipo->getCantidadCtrlSectorsXCtrlEquipoCtrlSector();
                        echo ($cantidad_ctrl_sectors > 0) ? '('.$cantidad_ctrl_sectors.')' : '' ;
                        ?>
                    </label>
                    <div class="titulo-entidad-comentarios">
                        <?php Lang::_lang('comentario_ctrl_equipo_alta_relacion_ctrl_equipo_ctrl_sector_titulo_comentarios', false, false, XmlLenguajeTipo::TIPO_COMENTARIO) ?>
                    </div>
                </div>

                <div class='buscador'>
                    <input name='ctrl_sector_txt_buscar' id='ctrl_sector_txt_buscar' type='text' />
                    <img src="<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png" align="absmiddle">

                    <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_ALTA_RELACION_CTRL_SECTOR_ACCIONES_ALTA')){ ?>
                    <div class="trigger wopenModal boton" archivo="ajax/modulos/ctrl_sector/ctrl_sector_alta.php" contenedor="div_modal" ancho="900" alto="600" tipo="formulario" post="buscarSetResultados(1, '', 'ctrl_sector', 'ctrl_equipo', <?php Gral::_echo($ctrl_equipo->getId()) ?>, 'CtrlEquipo', 'CtrlEquipoCtrlSector')" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('ctrl_sector') ?>'>
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

