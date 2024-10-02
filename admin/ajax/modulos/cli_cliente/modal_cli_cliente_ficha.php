<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$cli_cliente = CliCliente::getOxId($id);
//Gral::prr($cli_cliente);
?>

<div class="tabs ficha-cli_cliente" identificador="<?php echo $cli_cliente->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

        <li><a href="#tab_cli_cliente_estado"><?php Lang::_lang(CliClienteEstado) ?></a></li>
        <li><a href="#tab_cli_cliente_estado_venta"><?php Lang::_lang(CliClienteEstadoVenta) ?></a></li>
        <li><a href="#tab_cli_cliente_estado_cobro"><?php Lang::_lang(CliClienteEstadoCobro) ?></a></li>
        <li><a href="#tab_cli_cliente_estado_cuenta"><?php Lang::_lang(CliClienteEstadoCuenta) ?></a></li>
        <li><a href="#tab_cli_cliente_estado_satisfaccion"><?php Lang::_lang(CliClienteEstadoSatisfaccion) ?></a></li>
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par cli_cliente id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getId()) ?>
            </div>
        </div>

	
        <div class="par cli_cliente descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente gral_tipo_personeria_id">
            <div class="label"><?php Lang::_lang('GralTipoPersoneria') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getGralTipoPersoneria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente gral_condicion_iva_id">
            <div class="label"><?php Lang::_lang('GralCondicionIva') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getGralCondicionIva()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente cli_tipo_cliente_id">
            <div class="label"><?php Lang::_lang('CliTipoCliente') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getCliTipoCliente()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente razon_social">
            <div class="label"><?php Lang::_lang('Razon Social') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getRazonSocial()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente gral_tipo_documento_id">
            <div class="label"><?php Lang::_lang('GralTipoDocumento') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getGralTipoDocumento()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente cuit">
            <div class="label"><?php Lang::_lang('Documento') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getCuit()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente domicilio_legal">
            <div class="label"><?php Lang::_lang('Domicilio Legal') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getDomicilioLegal()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente numero_casa">
            <div class="label"><?php Lang::_lang('Nro Casa') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getNumeroCasa()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente telefono_whatsapp">
            <div class="label"><?php Lang::_lang('Whatsapp') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getTelefonoWhatsapp()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente email">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getEmail()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente codigo_postal">
            <div class="label"><?php Lang::_lang('Codigo Postal') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getCodigoPostal()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente geo_localidad_id">
            <div class="label"><?php Lang::_lang('GeoLocalidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getGeoLocalidad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente geo_zona_id">
            <div class="label"><?php Lang::_lang('GeoZona') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getGeoZona()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente cli_grupo_id">
            <div class="label"><?php Lang::_lang('CliGrupo') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getCliGrupo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente gral_empresa_transportadora_id">
            <div class="label"><?php Lang::_lang('GralEmpresaTransportadora') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getGralEmpresaTransportadora()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente cli_categoria_id">
            <div class="label"><?php Lang::_lang('CliCategoria') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getCliCategoria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente cli_subcategoria_id">
            <div class="label"><?php Lang::_lang('CliSubcategoria') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getCliSubcategoria()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente limite_ctacte_importe">
            <div class="label"><?php Lang::_lang('Limite Ctacte Imp') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getLimiteCtacteImporte()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente limite_ctacte_dias">
            <div class="label"><?php Lang::_lang('Limite Ctacte Dias') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getLimiteCtacteDias()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente cli_cliente_tipo_gestion_id">
            <div class="label"><?php Lang::_lang('Tipo Gestion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getCliClienteTipoGestion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente cli_cliente_periodicidad_gestion_id">
            <div class="label"><?php Lang::_lang('Periodicidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getCliClientePeriodicidadGestion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente cli_cliente_tipo_estado_id">
            <div class="label"><?php Lang::_lang('Tipo Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getCliClienteTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente cli_cliente_tipo_estado_venta_id">
            <div class="label"><?php Lang::_lang('Tipo Estado Venta') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getCliClienteTipoEstadoVenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente cli_cliente_tipo_estado_cobro_id">
            <div class="label"><?php Lang::_lang('Tipo Estado Cobro') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getCliClienteTipoEstadoCobro()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente cli_cliente_tipo_estado_cuenta_id">
            <div class="label"><?php Lang::_lang('Tipo Estado Cuenta') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getCliClienteTipoEstadoCuenta()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente cli_cliente_tipo_estado_satisfaccion_id">
            <div class="label"><?php Lang::_lang('Tipo Estado Satisfaccion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getCliClienteTipoEstadoSatisfaccion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente iva_exceptuado">
            <div class="label"><?php Lang::_lang('IVA Exceptuado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_cliente->getIvaExceptuado())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente datos_migracion">
            <div class="label"><?php Lang::_lang('Datos Migracion') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getDatosMigracion()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente claves">
            <div class="label"><?php Lang::_lang('Claves') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getClaves()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($cli_cliente->getOrden()) ?>
            </div>
        </div>
		
        <div class="par cli_cliente estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($cli_cliente->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

    <!-- Tab CliClienteEstado -->
    <div id="tab_cli_cliente_estado" class="datos">

        <div class="titulo"><?php Lang::_lang('Historial de CliClienteEstado del CliCliente') ?></div>

        <div class="bloque-historial-estados">

            <table border="0" class="tabla-modal">
                <tr>
                    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Fecha"); ?></td>
                    <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Estado"); ?></td>
                    <td class="adm_tbl_encabezado" width="450" align='center'><?php Lang::_lang("Observaciones"); ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Creado por"); ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Actual"); ?></td>
                </tr>
                <?php
                $cli_cliente_estados = $cli_cliente->getCliClienteEstados(null, null, null, array(array('campo' => 'id', 'orden' => 'desc')));
                $cont = 0;
                foreach ($cli_cliente_estados as $cli_cliente_estado) {
                    $cont++;
                    $strong = ($cont == 1) ? 'strong' : '';
                    ?>
                    <tr class="uno cli_cliente_estado_id_<?php echo $cli_cliente_estado->getId() ?>" identificador="<?php echo $cli_cliente_estado->getId() ?>">
                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="fecha">
                                <?php Gral::_echo(Gral::getFechaHoraToWEB($cli_cliente_estado->getCreado())); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="tipo-estado">
                                <img src="imgs/cli_cliente_tipo_estado/<?php Gral::_echo($cli_cliente_estado->getCliClienteTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                                <?php Gral::_echo($cli_cliente_estado->getCliClienteTipoEstado()->getDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="observacion">
                                <?php Gral::_echo($cli_cliente_estado->getObservacion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="creado-por-descripcion">
                                <?php Gral::_echo($cli_cliente_estado->getCreadoPorDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="actual">
                                <img src="imgs/btn_estado_<?php echo $cli_cliente_estado->getActual(); ?>.gif" width="15" alt="hab" />
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <br />
        
    </div>    

    <!-- Tab CliClienteEstadoVenta -->
    <div id="tab_cli_cliente_estado_venta" class="datos">

        <div class="titulo"><?php Lang::_lang('Historial de CliClienteEstadoVenta del CliCliente') ?></div>

        <div class="bloque-historial-estados">

            <table border="0" class="tabla-modal">
                <tr>
                    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Fecha"); ?></td>
                    <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Estado"); ?></td>
                    <td class="adm_tbl_encabezado" width="450" align='center'><?php Lang::_lang("Observaciones"); ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Creado por"); ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Actual"); ?></td>
                </tr>
                <?php
                $cli_cliente_estado_ventas = $cli_cliente->getCliClienteEstadoVentas(null, null, null, array(array('campo' => 'id', 'orden' => 'desc')));
                $cont = 0;
                foreach ($cli_cliente_estado_ventas as $cli_cliente_estado_venta) {
                    $cont++;
                    $strong = ($cont == 1) ? 'strong' : '';
                    ?>
                    <tr class="uno cli_cliente_estado_venta_id_<?php echo $cli_cliente_estado_venta->getId() ?>" identificador="<?php echo $cli_cliente_estado_venta->getId() ?>">
                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="fecha">
                                <?php Gral::_echo(Gral::getFechaHoraToWEB($cli_cliente_estado_venta->getCreado())); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="tipo-estado">
                                <img src="imgs/cli_cliente_tipo_estado_venta/<?php Gral::_echo($cli_cliente_estado_venta->getCliClienteTipoEstadoVenta()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                                <?php Gral::_echo($cli_cliente_estado_venta->getCliClienteTipoEstadoVenta()->getDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="observacion">
                                <?php Gral::_echo($cli_cliente_estado_venta->getObservacion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="creado-por-descripcion">
                                <?php Gral::_echo($cli_cliente_estado_venta->getCreadoPorDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="actual">
                                <img src="imgs/btn_estado_<?php echo $cli_cliente_estado_venta->getActual(); ?>.gif" width="15" alt="hab" />
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <br />
        
    </div>    

    <!-- Tab CliClienteEstadoCobro -->
    <div id="tab_cli_cliente_estado_cobro" class="datos">

        <div class="titulo"><?php Lang::_lang('Historial de CliClienteEstadoCobro del CliCliente') ?></div>

        <div class="bloque-historial-estados">

            <table border="0" class="tabla-modal">
                <tr>
                    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Fecha"); ?></td>
                    <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Estado"); ?></td>
                    <td class="adm_tbl_encabezado" width="450" align='center'><?php Lang::_lang("Observaciones"); ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Creado por"); ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Actual"); ?></td>
                </tr>
                <?php
                $cli_cliente_estado_cobros = $cli_cliente->getCliClienteEstadoCobros(null, null, null, array(array('campo' => 'id', 'orden' => 'desc')));
                $cont = 0;
                foreach ($cli_cliente_estado_cobros as $cli_cliente_estado_cobro) {
                    $cont++;
                    $strong = ($cont == 1) ? 'strong' : '';
                    ?>
                    <tr class="uno cli_cliente_estado_cobro_id_<?php echo $cli_cliente_estado_cobro->getId() ?>" identificador="<?php echo $cli_cliente_estado_cobro->getId() ?>">
                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="fecha">
                                <?php Gral::_echo(Gral::getFechaHoraToWEB($cli_cliente_estado_cobro->getCreado())); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="tipo-estado">
                                <img src="imgs/cli_cliente_tipo_estado_cobro/<?php Gral::_echo($cli_cliente_estado_cobro->getCliClienteTipoEstadoCobro()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                                <?php Gral::_echo($cli_cliente_estado_cobro->getCliClienteTipoEstadoCobro()->getDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="observacion">
                                <?php Gral::_echo($cli_cliente_estado_cobro->getObservacion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="creado-por-descripcion">
                                <?php Gral::_echo($cli_cliente_estado_cobro->getCreadoPorDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="actual">
                                <img src="imgs/btn_estado_<?php echo $cli_cliente_estado_cobro->getActual(); ?>.gif" width="15" alt="hab" />
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <br />
        
    </div>    

    <!-- Tab CliClienteEstadoCuenta -->
    <div id="tab_cli_cliente_estado_cuenta" class="datos">

        <div class="titulo"><?php Lang::_lang('Historial de CliClienteEstadoCuenta del CliCliente') ?></div>

        <div class="bloque-historial-estados">

            <table border="0" class="tabla-modal">
                <tr>
                    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Fecha"); ?></td>
                    <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Estado"); ?></td>
                    <td class="adm_tbl_encabezado" width="450" align='center'><?php Lang::_lang("Observaciones"); ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Creado por"); ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Actual"); ?></td>
                </tr>
                <?php
                $cli_cliente_estado_cuentas = $cli_cliente->getCliClienteEstadoCuentas(null, null, null, array(array('campo' => 'id', 'orden' => 'desc')));
                $cont = 0;
                foreach ($cli_cliente_estado_cuentas as $cli_cliente_estado_cuenta) {
                    $cont++;
                    $strong = ($cont == 1) ? 'strong' : '';
                    ?>
                    <tr class="uno cli_cliente_estado_cuenta_id_<?php echo $cli_cliente_estado_cuenta->getId() ?>" identificador="<?php echo $cli_cliente_estado_cuenta->getId() ?>">
                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="fecha">
                                <?php Gral::_echo(Gral::getFechaHoraToWEB($cli_cliente_estado_cuenta->getCreado())); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="tipo-estado">
                                <img src="imgs/cli_cliente_tipo_estado_cuenta/<?php Gral::_echo($cli_cliente_estado_cuenta->getCliClienteTipoEstadoCuenta()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                                <?php Gral::_echo($cli_cliente_estado_cuenta->getCliClienteTipoEstadoCuenta()->getDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="observacion">
                                <?php Gral::_echo($cli_cliente_estado_cuenta->getObservacion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="creado-por-descripcion">
                                <?php Gral::_echo($cli_cliente_estado_cuenta->getCreadoPorDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="actual">
                                <img src="imgs/btn_estado_<?php echo $cli_cliente_estado_cuenta->getActual(); ?>.gif" width="15" alt="hab" />
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <br />
        
    </div>    

    <!-- Tab CliClienteEstadoSatisfaccion -->
    <div id="tab_cli_cliente_estado_satisfaccion" class="datos">

        <div class="titulo"><?php Lang::_lang('Historial de CliClienteEstadoSatisfaccion del CliCliente') ?></div>

        <div class="bloque-historial-estados">

            <table border="0" class="tabla-modal">
                <tr>
                    <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Fecha"); ?></td>
                    <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Estado"); ?></td>
                    <td class="adm_tbl_encabezado" width="450" align='center'><?php Lang::_lang("Observaciones"); ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Creado por"); ?></td>
                    <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Actual"); ?></td>
                </tr>
                <?php
                $cli_cliente_estado_satisfaccions = $cli_cliente->getCliClienteEstadoSatisfaccions(null, null, null, array(array('campo' => 'id', 'orden' => 'desc')));
                $cont = 0;
                foreach ($cli_cliente_estado_satisfaccions as $cli_cliente_estado_satisfaccion) {
                    $cont++;
                    $strong = ($cont == 1) ? 'strong' : '';
                    ?>
                    <tr class="uno cli_cliente_estado_satisfaccion_id_<?php echo $cli_cliente_estado_satisfaccion->getId() ?>" identificador="<?php echo $cli_cliente_estado_satisfaccion->getId() ?>">
                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="fecha">
                                <?php Gral::_echo(Gral::getFechaHoraToWEB($cli_cliente_estado_satisfaccion->getCreado())); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="tipo-estado">
                                <img src="imgs/cli_cliente_tipo_estado_satisfaccion/<?php Gral::_echo($cli_cliente_estado_satisfaccion->getCliClienteTipoEstadoSatisfaccion()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                                <?php Gral::_echo($cli_cliente_estado_satisfaccion->getCliClienteTipoEstadoSatisfaccion()->getDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                            <div class="observacion">
                                <?php Gral::_echo($cli_cliente_estado_satisfaccion->getObservacion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="creado-por-descripcion">
                                <?php Gral::_echo($cli_cliente_estado_satisfaccion->getCreadoPorDescripcion()); ?>
                            </div>
                        </td>

                        <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                            <div class="actual">
                                <img src="imgs/btn_estado_<?php echo $cli_cliente_estado_satisfaccion->getActual(); ?>.gif" width="15" alt="hab" />
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <br />
        
    </div>    

    <!-- Tab  -->
    <div id="tab_" class="datos">

        <div class="titulo"><?php Lang::_lang('') ?></div>

        <div class="bloque-">
            <?php if(file_exists('modal_ficha_bloque_.php')){ ?>
                <?php include 'modal_ficha_bloque_.php' ?>
            <?php }else{ ?>
                Debe incluir el bloque HTML en el archivo 'modal_ficha_bloque_.php'
            <?php } ?>
        </div>
        
    </div>
        
</div>

