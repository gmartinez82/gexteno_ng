<?php
include_once 'control/seguridad.php';
include_once 'control/saneamiento.php';
include_once 'control/init.php';
include_once '_autoload.php';

$db_nombre_objeto = 'xml_traduccion_gestion';
$db_nombre_pagina = 'xml_traduccion_gestion';

$error = new DbError();

$criterio = new Criterio(XmlLenguajeCodigo::SES_CRITERIOS);
$criterio->addTabla('xml_lenguaje_codigo');
$criterio->addOrden('descripcion');
$criterio->setCriteriosInicial();

$hdn_pag_actual = Gral::getVars(1, 'hdn_pag_actual', 1);
XmlLenguajeCodigo::setSesPag($hdn_pag_actual);

$gral_lenguajes = GralLenguaje::getGralLenguajes();

if (Gral::esPost()) {
    
    $txt_buscador = Gral::getVars(1, 'txt_buscador');
    $cmb_filtro_xml_lenguaje_tipo_id = Gral::getVars(1, 'cmb_filtro_xml_lenguaje_tipo_id', 0);
    $cmb_filtro_xml_lenguaje_entorno_id = Gral::getVars(1, 'cmb_filtro_xml_lenguaje_entorno_id', 0);
    $cmb_filtro_xml_lenguaje_pagina_id = Gral::getVars(1, 'cmb_filtro_xml_lenguaje_pagina_id', 0);
    
    $criterio->add('descripcion', $txt_buscador, Criterio::LIKE);
    if($cmb_filtro_xml_lenguaje_tipo_id != 0){
        $criterio->add('xml_lenguaje_tipo_id', $cmb_filtro_xml_lenguaje_tipo_id, Criterio::IGUAL);
    }
    if($cmb_filtro_xml_lenguaje_entorno_id != 0){
        $criterio->add('xml_lenguaje_entorno_id', $cmb_filtro_xml_lenguaje_entorno_id, Criterio::IGUAL);
    }
    if($cmb_filtro_xml_lenguaje_pagina_id != 0){
        $criterio->add('xml_lenguaje_pagina_id', $cmb_filtro_xml_lenguaje_pagina_id, Criterio::IGUAL);
    }
    $criterio->setCriterios();

    $btn_buscar = Gral::getVars(1, 'btn_buscar');
    if (trim($btn_buscar) != '') {
        XmlLenguajeCodigo::setSesPag(1); /* Si se busca se reinicia paginador */
    }
}

$paginador = new Paginador(25, XmlLenguajeCodigo::getSesPag());
$xml_lenguaje_codigos = XmlLenguajeCodigo::getXmlLenguajeCodigos($paginador, $criterio);


if (Gral::esPost()) {
    $hdn_id = Gral::getVars(1, 'hdn_id');

    $btn_guardar = Gral::getVars(1, 'btn_guardar');

    $accion = '';
    $accion = 'guardar';
    //if(trim($btn_guardar)!= ''){ $accion = 'guardar'; }


    switch ($accion) {
        case 'guardar':

            if (count($xml_lenguaje_codigos) > 0) {
                foreach ($gral_lenguajes as $gral_lenguaje) {
                    eval("
				\$txa_" . $gral_lenguaje->getCodigo() . " = \$_POST['txa_" . $gral_lenguaje->getCodigo() . "'];
				\$hdn_txa_" . $gral_lenguaje->getCodigo() . " = \$_POST['hdn_txa_" . $gral_lenguaje->getCodigo() . "'];
				
				foreach(\$txa_" . $gral_lenguaje->getCodigo() . " as \$i => \$v){
					
					if(\$hdn_txa_" . $gral_lenguaje->getCodigo() . "[\$i] == 0) continue;
					
                                        \$xml_lenguaje_codigo = XmlLenguajeCodigo::getOxId(\$i);

					\$arr_cr = array(
						array('campo' => 'gral_lenguaje_id', 'valor' => '" . $gral_lenguaje->getId() . "'),
						array('campo' => 'xml_lenguaje_codigo_id', 'valor' => \$i),
					);
					\$xml_lenguaje_traduccion = XmlLenguajeTraduccion::getOxArray(\$arr_cr);
					
					if(\$xml_lenguaje_traduccion){
						\$xml_lenguaje_traduccion->setTraduccion(\$v);
						\$xml_lenguaje_traduccion->save();
						\$xml_lenguaje_traduccion->setArchivoXml();
					}else{
						\$xml_lenguaje_traduccion = new XmlLenguajeTraduccion();
						\$xml_lenguaje_traduccion->setGralLenguajeId(" . $gral_lenguaje->getId() . ");
						\$xml_lenguaje_traduccion->setXmlLenguajeCodigoId(\$i);
						\$xml_lenguaje_traduccion->setTraduccion(\$v);
						\$xml_lenguaje_traduccion->setEstado(1);
						\$xml_lenguaje_traduccion->save();
						\$xml_lenguaje_traduccion->setArchivoXml();
					}
                                        
                                        // se limpia la session
                                        unset(\$_SESSION['GEN_LANG']['" . $gral_lenguaje->getCodigo() . "'][\$xml_lenguaje_codigo->getCodigo()]);
				
				}
				
				");
                }
            }
            break;
    }
} else {
    $criterio->setCriterios();
}

// -----------------------------------------------------------------------------
// se recuperan todas las traducciones de todos los lenguajes para cargar en array para setear las cajas de texto
// -----------------------------------------------------------------------------
$arr_traducciones = array();
foreach ($gral_lenguajes as $gral_lenguaje) {
    $xml_traducciones = XmlLenguajeTraduccion::getOsxGralLenguajeId($gral_lenguaje->getId());
    foreach ($xml_traducciones as $xml_traduccion) {
        $arr_traducciones[$gral_lenguaje->getId()][$xml_traduccion->getXmlLenguajeCodigoId()] = $xml_traduccion->getTraduccion();
    }
}
?>
<?php include 'parciales/head.php' ?>

<body class="<?php echo Gral::getConfig('cont_entorno') ?>">
    <?php include 'parciales/encabezado.php' ?>
    <?php include 'parciales/user.php' ?>
    <?php include 'parciales/mensajes.php' ?>

        <div id='menu'><?php include 'parciales/menuh.php' ?></div>

        <div id='cuerpo'>
	    <form id='formu' name='formu' method='post' action=''>
            <div class='adm_cuerpo_titulo'><?php Lang::_lang('XmlLenguajeTraduccion') ?></div>
            <div class='contenedor central'>

                <?php include 'parciales/confirmacion.php'; ?>
                <?php include 'parciales/buscadores/activos/xml_lenguaje_traduccion.php'; ?>

                <div class="traductor-top">
                    <div class="comentario">A través del traductor puede realizar las traducciones de cada palabra del sistema/sitio a su correspondiente palabra en los demas idiomas.</div>


                    <div class="div_listado_buscador" modulo="xml_lenguaje_traduccion">


                        <div class="col tipo">
                            <div class="label"><?php Lang::_lang('Tipo') ?></div>
                            <div class="dato">
                                <?php Html::html_dib_select(1, 'cmb_filtro_xml_lenguaje_tipo_id', Gral::getCmbFiltro(XmlLenguajeTipo::getXmlLenguajeTiposCmb(true), '...'), $cmb_filtro_xml_lenguaje_tipo_id, 'textbox') ?>
                            </div>
                        </div>

                        <div class="col entorno">
                            <div class="label"><?php Lang::_lang('Entorno') ?></div>
                            <div class="dato">
                                <?php Html::html_dib_select(1, 'cmb_filtro_xml_lenguaje_entorno_id', Gral::getCmbFiltro(XmlLenguajeEntorno::getXmlLenguajeEntornosCmb(true), '...'), $cmb_filtro_xml_lenguaje_entorno_id, 'textbox') ?>
                            </div>
                        </div>

                        <div class="col entorno">
                            <div class="label"><?php Lang::_lang('Pagina') ?></div>
                            <div class="dato">
                                <?php Html::html_dib_select(1, 'cmb_filtro_xml_lenguaje_pagina_id', Gral::getCmbFiltro(XmlLenguajePagina::getXmlLenguajePaginasCmb(true), '...'), $cmb_filtro_xml_lenguaje_pagina_id, 'textbox') ?>
                            </div>
                        </div>

                        <div class="col">
                            <div class="label"><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
                            <input id="txt_buscador" name="txt_buscador" type="text" class="textbox" size="30" value="<?php Gral::_echoTxt($txt_buscador) ?>" placeholder="<?php Lang::_lang('Ingrese palabra a buscar') ?>" title="<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>" />
                        </div>

                        <div class="col">
                            <input type="submit" name="btn_buscar" id="btn_buscar" value="Buscar" class="textbox" />
                            <img class="img_btn_agregar_nuevo" elemento_id="xml_lenguaje_codigo" clase_id="xml_lenguaje_codigo" prefijo='' src='imgs/btn_add.png' border='0' width='18' align='absmiddle' title='<?php Lang::_lang('Agregar Nueva Palabra') ?>' />
                            <div class="div_modal_xml_lenguaje_codigo"></div>
                        </div>
                    </div>

                </div>

                <?php if (count($xml_lenguaje_codigos) > 0) { ?>
                    <table id="table_xml_traduccion" border='0' align='center'>
                        <tr>
                            <td width='300' align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Palabra a Traducir') ?></td>
                            <td width='100' align='center' class='adm_tbl_encabezado'><?php Lang::_lang('Tipo') ?></td>

                            <?php foreach ($gral_lenguajes as $gral_lenguaje) { ?>				
                                <td width='500' align='center' class='adm_tbl_encabezado'>&nbsp;<?php Gral::_echo($gral_lenguaje->getDescripcion()) ?></td>
                            <?php } ?>

                        </tr>
                        <?php
                        foreach ($xml_lenguaje_codigos as $xml_lenguaje_codigo) {
                            $xml_lenguaje_pagina = $xml_lenguaje_codigo->getXmlLenguajePagina();
                            $xml_lenguaje_tipo = $xml_lenguaje_codigo->getXmlLenguajeTipo();
                            $xml_lenguaje_entorno = $xml_lenguaje_codigo->getXmlLenguajeEntorno();
                            ?>
                            <tr>
                                <td align='left' class='adm_tbl_lineas'>
                                    <div class="xml-lenguaje-codigo">
                                        <?php Gral::_echo($xml_lenguaje_codigo->getDescripcion()) ?>
                                    </div>
                                    <div class="xml-lenguaje-info">
                                        <div class="xml-lenguaje-entorno">
                                            <?php Gral::_echo($xml_lenguaje_entorno->getDescripcion()) ?>
                                        </div>
                                        <div class="xml-lenguaje-pagina">
                                            <?php Gral::_echo($xml_lenguaje_pagina->getDescripcion()) ?>
                                        </div>
                                    </div>
                                </td>
                                <td align='center' class='adm_tbl_lineas'>&nbsp;<?php Gral::_echo($xml_lenguaje_tipo->getDescripcion()) ?></td>

                                <?php foreach ($gral_lenguajes as $gral_lenguaje) { ?>				
                                    <td align='left' class='adm_tbl_lineas'>
                                        <textarea class="textbox" name="txa_<?php Gral::_echo($gral_lenguaje->getCodigo()) ?>[<?php Gral::_echo($xml_lenguaje_codigo->getId()) ?>]" id="txa_<?php Gral::_echo($gral_lenguaje->getCodigo()) ?>_<?php Gral::_echo($xml_lenguaje_codigo->getId()) ?>"><?php Gral::_echoTxt($arr_traducciones[$gral_lenguaje->getId()][$xml_lenguaje_codigo->getId()]) ?></textarea>
                                        <input type="hidden" name="hdn_txa_<?php Gral::_echo($gral_lenguaje->getCodigo()) ?>[<?php Gral::_echo($xml_lenguaje_codigo->getId()) ?>]" id="hdn_txa_<?php Gral::_echo($gral_lenguaje->getCodigo()) ?>_<?php Gral::_echo($xml_lenguaje_codigo->getId()) ?>" size="1" value="0" />
                                    </td>
                                <?php } ?>

                            </tr>

                        <?php } ?>
                    </table>

                <?php } else { ?>
                    <table border='0' align='center'>
                        <tr>
                            <td width='450' class='adm_carga_datos_botones'>	
                                <?php Lang::_lang('No se encontraron resultados') ?>
                            </td>
                        </tr>
                    </table>    
                <?php } ?>        


                <table border='0' align='center'>
                    <tr>
                        <td width='450' class='adm_carga_datos_botones'>	
                            <?php include 'parciales/paginador.php'; ?>
                        </td>
                    </tr>
                </table>    

                <table border='0' align='center'>
                    <tr>
                        <td width='450' class='adm_carga_datos_botones'>	
                            <input name='btn_guardar' type='submit' id='btn_guardar' value='<?php Lang::_lang('Guardar') ?>' />
                        </td>
                    </tr>
                </table>

            </div>
	    </form>
        </div>
        <div id='pie'><?php include 'parciales/pie.php' ?></div>
</body>
</html>
<script type='text/javascript'>
<?php Gral::_echo($mi_hash) ?>
</script>

