<?php

require_once(Gral::getPathAbs() . 'comps/tcpdf/config/tcpdf_config.php');
require_once(Gral::getPathAbs() . 'comps/tcpdf/tcpdf.php');

class PDFComprobanteKude extends TCPDF {

    const ALINEACION_HORIZONTAL = 'P';
    const ALINEACION_APAISADO = 'L';

    private $usuario;
    // ---------------------------------------------------
    //  Atributos de la Empresa
    // ---------------------------------------------------
    private $tipo_comprobante_descripcion;
    private $tipo_comprobante_codigo;
    private $codigo;
    private $fecha;
    private $vendedor;
    private $actividad;
    private $timbrado;
    private $email;
    private $serie;
    private $comprobante;
    
    // ---------------------------------------------------
    //  Atributos del Cliente
    // ---------------------------------------------------
    private $cliente;
    private $emisor_nombre_fantasia;

    private $domicilio;
    private $localidad;
    private $provincia;
    private $condicion_iva;
    private $cuit;
    private $iibb;
    private $telefono;

    private $receptor_ruc;
    private $receptor_documento;
    private $receptor_razon_social;
    private $receptor_domicilio;
    private $receptor_telefono;
    private $receptor_email;
    private $receptor_fecha_hora_emision;
    private $receptor_moneda_operacion;
    private $receptor_tipo_cambio;
    private $receptor_condicion_operacion;
    private $receptor_tipo_transaccion;
    
    private $tipo_documento_asociado;
    private $motivo_emision;
    

    // ---------------------------------------------------
    //  Atributos del Comprobante
    // ---------------------------------------------------
    private $sifen_codigo_barra;
    private $sifen_cae;
    private $sifen_cae_vencimiento;
    private $sifen_numero_comprobante;
    private $sifen_codigo_tipo_comprobante;
    private $sifen_punto_venta_localidad;
    private $sifen_punto_venta_domicilio;
    private $sifen_comprobante_url_qr;
    private $sifen_cdc;

    // ---------------------------------------------------
    //  Metodos Getter
    // ---------------------------------------------------
    public function getUsuario() {
        return $this->usuario;
    }

    public function getTipoComprobanteDescripcion() {
        return $this->tipo_comprobante_descripcion;
    }

    public function getTipoComprobanteCodigo() {
        return $this->tipo_comprobante_codigo;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getVendedor() {
        return $this->vendedor;
    }

    public function getActividad() {
        return $this->actividad;
    }

    public function getTimbrado() {
        return $this->timbrado;
    }

    public function getSerie() {
        return $this->serie;
    }

    public function getComprobante() {
        return $this->comprobante;
    }


    // receptor
    
    public function getReceptorRuc() {
        return $this->receptor_ruc;
    }

    public function getReceptorDocumento() {
        return $this->receptor_documento;
    }

    public function getReceptorRazonSocial() {
        return $this->receptor_razon_social;
    }

    public function getReceptorDomicilio() {
        return $this->receptor_domicilio;
    }

    public function getReceptorTelefono() {
        return $this->receptor_telefono;
    }

    public function getReceptorEmail() {
        return $this->receptor_email;
    }

    public function getReceptorFechaHoraEmision() {
        return $this->receptor_fecha_hora_emision;
    }

    public function getReceptorMonedaOperacion() {
        return $this->receptor_moneda_operacion;
    }

    public function getReceptorTipoCambio() {
        return $this->receptor_tipo_cambio;
    }

    public function getReceptorCondicionOperacion() {
        return $this->receptor_condicion_operacion;
    }

    public function getReceptorTipoTransaccion() {
        return $this->receptor_tipo_transaccion;
    }

    public function getTipoDocumentoAsociado() {
        return $this->tipo_documento_asociado;
    }

    public function getMotivoEmision() {
        return $this->motivo_emision;
    }
    



    public function getCliente() {
        return $this->cliente;
    }

    public function getEmisorNombreFantasia()
    {
        return $this->emisor_nombre_fantasia;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDomicilio() {
        return $this->domicilio;
    }

    public function getLocalidad() {
        return $this->localidad;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function getCondicionIva() {
        return $this->condicion_iva;
    }

    public function getCUIT() {
        return $this->cuit;
    }

    public function getIIBB() {
        return $this->iibb;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getSifenCodigoBarra() {
        return $this->sifen_codigo_barra;
    }

    public function getSifenCae() {
        return $this->sifen_cae;
    }

    public function getSifenCaeVencimiento() {
        return $this->sifen_cae_vencimiento;
    }

    public function getNumeroComprobante() {
        return $this->sifen_numero_comprobante;
    }

    public function getSifenCodigoTipoComprobante() {
        return $this->sifen_codigo_tipo_comprobante;
    }

    public function getPuntoVentaLocalidad() {
        return $this->sifen_punto_venta_localidad;
    }

    public function getPuntoVentaDomicilio() {
        return $this->sifen_punto_venta_domicilio;
    }

    public function getSifenComprobanteUrlQR() {
        return $this->sifen_comprobante_url_qr;
    }

    public function getSifenCdc() {
        return $this->sifen_cdc;
    }
    
    // ---------------------------------------------------
    //  Metodos Setter
    // ---------------------------------------------------
    public function setUsuario($v) {
        $this->usuario = $v;
    }

    public function setTipoComprobanteDescripcion($v) {
        $this->tipo_comprobante_descripcion = $v;
    }

    public function setTipoComprobanteCodigo($v) {
        $this->tipo_comprobante_codigo = $v;
    }

    public function setCodigo($v) {
        $this->codigo = $v;
    }

    public function setFecha($v) {
        $this->fecha = $v;
    }

    public function setVendedor($v) {
        $this->vendedor = $v;
    }

    public function setActividad($v) {
        $this->actividad = $v;
    }

    public function setTimbrado($v) {
        $this->timbrado = $v;
    }

    public function setSerie($v) {
        $this->serie = $v;
    }

    public function setComprobante($v)
    {
        $this->comprobante = $v;
    }


    // receptor

    public function setReceptorRuc($v) {
        $this->receptor_ruc = $v;
    }

    public function setReceptorDocumento($v) {
        $this->receptor_documento = $v;
    }

    public function setReceptorRazonSocial($v) {
        $this->receptor_razon_social = $v;
    }

    public function setReceptorDomicilio($v) {
        $this->receptor_domicilio = $v;
    }

    public function setReceptorTelefono($v) {
        $this->receptor_telefono = $v;
    }

    public function setReceptorEmail($v) {
        $this->receptor_email = $v;
    }
    
    public function setReceptorFechaHoraEmision($v) {
        $this->receptor_fecha_hora_emision = $v;
    }

    public function setReceptorMonedaOperacion($v) {
        $this->receptor_moneda_operacion = $v;
    }

    public function setReceptorTipoCambio($v) {
        $this->receptor_tipo_cambio = $v;
    }

    public function setReceptorCondicionOperacion($v) {
        $this->receptor_condicion_operacion = $v;
    }

    public function setReceptorTipoTransaccion($v) {
        $this->receptor_tipo_transaccion = $v;
    }
        
    
    public function setTipoDocumentoAsociado($v) {
        $this->tipo_documento_asociado = $v;
    }
    
    public function setMotivoEmision($v) {
        $this->motivo_emision = $v;
    }


    public function setCliente($v) {
        $this->cliente = $v;
    }

    public function setEmisorNombreFantasia($v)
    {
        $this->emisor_nombre_fantasia = $v;
    }

    public function setEmail($v)
    {
        $this->email = $v;
    }
    
    public function setDomicilio($v) {
        $this->domicilio = $v;
    }

    public function setLocalidad($v) {
        $this->localidad = $v;
    }

    public function setProvincia($v) {
        $this->provincia = $v;
    }

    public function setCondicionIva($v) {
        $this->condicion_iva = $v;
    }

    public function setCUIT($v) {
        $this->cuit = $v;
    }

    public function setIIBB($v) {
        $this->iibb = $v;
    }

    public function setTelefono($v) {
        $this->telefono = $v;
    }

    public function setSifenCodigoBarra($v) {
        $this->sifen_codigo_barra = $v;
    }

    public function setSifenCae($v) {
        $this->sifen_cae = $v;
    }

    public function setSifenCaeVencimiento($v) {
        $this->sifen_cae_vencimiento = $v;
    }

    public function setNumeroComprobante($v) {
        $this->sifen_numero_comprobante = $v;
    }

    public function setSifenCodigoTipoComprobante($v) {
        $this->sifen_codigo_tipo_comprobante = $v;
    }

    public function setPuntoVentaLocalidad($v) {
        $this->sifen_punto_venta_localidad = $v;
    }

    public function setPuntoVentaDomicilio($v) {
        $this->sifen_punto_venta_domicilio = $v;
    }

    public function setSifenComprobanteUrlQR($v) {
        $this->sifen_comprobante_url_qr = $v;
    }

    public function setSifenCdc($v) {
        $this->sifen_cdc = $v;
    }
    
    //Cabecera de pagina
    function Header()
    {
        // Emisor
        $tipo_comprobante_descripcion = $this->getTipoComprobanteDescripcion();
        $tipo_comprobante_codigo = $this->getTipoComprobanteCodigo();
        $numero_comprobante = $this->getNumeroComprobante();
        $punto_venta_localidad = $this->getPuntoVentaLocalidad();
        $punto_venta_domicilio = $this->getPuntoVentaDomicilio();
        $fecha = $this->getFecha();
        $vendedor = $this->getVendedor();
        $actividad = $this->getActividad();
        $timbrado = $this->getTimbrado();
        $serie = $this->getSerie();
        $cliente = $this->getCliente();
        $telefono = $this->getTelefono();
        $email = $this->getEmail();
        $cuit = $this->getCUIT();
        $emisor_nombre_fantasia = $this->getEmisorNombreFantasia();
        
        $this->HeaderComprobante($tipo_comprobante_descripcion, $tipo_comprobante_codigo, $cliente, $emisor_nombre_fantasia, $telefono, $email, $cuit, $serie, $numero_comprobante, $fecha, $vendedor, $punto_venta_localidad, $punto_venta_domicilio, $codigo_tipo_comprobante, $actividad, $timbrado);
        
        //Receptor
        $receptor_razon_social = $this->getReceptorRazonSocial();
        $receptor_ruc = $this->getReceptorRuc();
        $receptor_documento = $this->getReceptorDocumento();
        $receptor_domicilio = $this->getReceptorDomicilio();
        $receptor_telefono = $this->getReceptorTelefono();
        $receptor_email = $this->getReceptorEmail();
        $receptor_fecha_hora_emision = $this->getReceptorFechaHoraEmision();
        $receptor_moneda_operacion = $this->getReceptorMonedaOperacion();
        $receptor_tipo_cambio = $this->getReceptorTipoCambio();
        $receptor_condicion_operacion = $this->getReceptorCondicionOperacion();
        $receptor_tipo_transaccion = $this->getReceptorTipoTransaccion();

        $localidad = $this->getLocalidad();
        $provincia = $this->getProvincia();
        $condicion_iva = $this->getCondicionIva();
        
        $iibb = $this->getIIBB();
        
        $tipo_documento_asociado = $this->getTipoDocumentoAsociado();
        $motivo_emision = $this->getMotivoEmision();
        
        $this->HeaderComprobanteDatosCliente($tipo_comprobante_descripcion, $tipo_comprobante_codigo, $receptor_razon_social, $receptor_ruc, $receptor_documento, $receptor_domicilio, $localidad, $provincia, $condicion_iva, $cuit, $iibb, $receptor_telefono, $receptor_email, $receptor_fecha_hora_emision, $receptor_moneda_operacion, $receptor_tipo_cambio, $receptor_condicion_operacion, $receptor_tipo_transaccion, $tipo_documento_asociado, $motivo_emision);
    }

    /**
     * -------------------------------------------------------------------------
     * Datos de Cabecera de Empresa
     * -------------------------------------------------------------------------
     */
    function HeaderComprobante($tipo_comprobante_descripcion, $tipo_comprobante_codigo, $cliente, $emisor_nombre_fantasia, $telefono, $email, $cuit, $serie, $numero_comprobante, $fecha, $vendedor, $punto_venta_localidad, $punto_venta_domicilio, $codigo_tipo_comprobante, $actividad, $timbrado) {

        // --------------------------------------------------------------------
        // Rectangulo
        // --------------------------------------------------------------------
        $style_rect = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
        $this->Rect(10, 5, 190, 46, 'D', array('all' => $style_rect));

        // logo
        $this->Image(Gral::getPathAbs() . Gral::getPath('path_logo_empresa_pdf'), 16, 5, 60);
        
        //Helvetica bold 15
        $this->SetFont('Helvetica', 'B', 8);
        
        if ($this->CurOrientation == 'L') {
            $this->Ln(20);
        } else {
            $this->Ln(15);
        }
        
        // --------------------------------------------------------------------
        // Columna 1
        // --------------------------------------------------------------------
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', '', 8);
        $this->SetFillColor(255, 255, 255);

        // razon social
        $this->setXY($x = 18, $y = 21);
        $this->Cell(1, 3, $cliente . ' ' . $emisor_nombre_fantasia, 0, 1, 'L', 1);

        // calle
        $this->setXY($x = 18, $y = 25);
        $this->Cell(1, 3, $punto_venta_domicilio, 0, 1, 'L', 1);

        // localidad
        $this->setXY($x = 18, $y = 29);
        $this->Cell(1, 3, 'Ciudad: ' . $punto_venta_localidad, 0, 1, 'L', 1);

        // telefono
        $this->setXY($x = 18, $y = 33);
        $this->Cell(1, 3, 'Teléfonos: ' . $telefono, 0, 1, 'L', 1);

        // celular
        $this->setXY($x = 18, $y = 37);
        $this->Cell(1, 3, 'Celular: ' . Gral::getConfig('gral_cliente_celulares'), 0, 1, 'L', 1);

        // email
        $this->setXY($x = 18, $y = 41);
        $this->Cell(1, 3, $email, 0, 1, 'L', 1);

        // actividad
        $this->setXY($x = 18, $y = 45);
        $this->Cell(1, 3, 'Actividad: ' . $actividad, 0, 1, 'L', 1);
        
        // --------------------------------------------------------------------
        // Columna 2
        // --------------------------------------------------------------------
        //$this->SetTextColor(0, 0, 0);
        //$this->SetFont('Helvetica', 'B', 20);
        //$this->SetFillColor(255, 255, 255);

        //$this->Rect(95, 17, 18, 20, 'DF', "", array(230, 230, 230));

        // tipo
        //$this->setXY($x = 103, $y = 20);
        ///$this->Cell(1, 3, $tipo_letra, 0, 1, 'C', 1);

        //$this->SetFont('Helvetica', '', 7);
        //$this->setXY($x = 103, $y = 29);
        //$this->Cell(1, 3, 'Codigo ' . str_pad($codigo_tipo_comprobante, 2, 0, STR_PAD_LEFT), 0, 1, 'C', 1);

        //$this->SetFont('Helvetica', '', 7);
        //$this->setXY($x = 103, $y = 32);
        //$this->Cell(1, 3, 'ORIGINAL', 0, 1, 'C', 1);

        // --------------------------------------------------------------------
        // Columna 3
        // --------------------------------------------------------------------
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', '', 8);
        $this->SetFillColor(255, 255, 255);

        // tipo
        //$this->setXY($x = 125, $y = 10);
        //$this->Cell(1, 3, $tipo, 0, 1, 'L', 1);

        //$this->SetFont('Helvetica', 'B', 11);

        // codigo
        //$this->setXY($x = 165, $y = 10);
        //$this->Cell(1, 3, $codigo, 0, 1, 'L', 1);


        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', '', 9);
        $this->SetFillColor(255, 255, 255);

        // tipo comprobante
        $this->setXY($x = 125, $y = 10);
        $this->Cell(1, 3, 'KuDE de '.$tipo_comprobante_descripcion, 0, 1, 'L', 1);

        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', 'B', 12);
        $this->SetFillColor(255, 255, 255);
        
        // tipo comprobante
        $this->setXY($x = 125, $y = 14);
        $this->Cell(1, 3, $numero_comprobante, 0, 1, 'L', 1);
        
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', '', 8);
        $this->SetFillColor(255, 255, 255);

        // RUC
        $this->setXY($x = 125, $y = 25);
        $this->Cell(1, 3, "RUC: " . $cuit, 0, 1, 'L', 1);

        // timbrado
        $this->setXY($x = 125, $y = 29);
        $this->Cell(1, 3, 'Timbrado N: ' . $timbrado, 0, 1, 'L', 1);

        //Inicio
        $this->setXY($x = 125, $y = 33);
        $this->Cell(1, 3, "Fecha de inicio de Vigencia: " . $fecha, 0, 1, 'L', 1);

        // iibb
        $this->setXY($x = 125, $y = 37);
        $this->Cell(1, 3, "Serie: " . $serie, 0, 1, 'L', 1);

    }


    /**
     * -------------------------------------------------------------------------
     * Datos de Cabecera de Cliente
     * -------------------------------------------------------------------------
     */
    function HeaderComprobanteDatosCliente($tipo_comprobante_descripcion, $tipo_comprobante_codigo, $receptor_razon_social, $receptor_ruc, $receptor_documento, $receptor_domicilio, $localidad, $provincia, $condicion_iva, $cuit, $iibb, $receptor_telefono, $receptor_email, $receptor_fecha_hora_emision, $receptor_moneda_operacion, $receptor_tipo_cambio, $receptor_condicion_operacion, $receptor_tipo_transaccion, $tipo_documento_asociado, $motivo_emision)
    {
        
        $receptor_razon_social = substr($receptor_razon_social, 0, 40);
        $receptor_domicilio = substr($receptor_domicilio, 0, 40);
        
        // --------------------------------------------------------------------
        // Rectangulo
        // --------------------------------------------------------------------
        $style_rect = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
        $this->Rect(10, 51, 190, 33, 'D', array('all' => $style_rect));
        
        // --------------------------------------------------------------------
        // Columna 1
        // --------------------------------------------------------------------
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', '', 9);
        $this->SetFillColor(255, 255, 255);
        
        // cliente
        $this->setXY($x = 18, $y = 55);
        $this->Cell(1, 3, "Nombre / Razón Social: " . $receptor_razon_social, 0, 1, 'L', 1);
        
        // RUC / Documento
        $this->setXY($x = 18, $y = 60);
        $this->Cell(1, 3, "RUC / Documento: " . $receptor_ruc . '' . $receptor_documento, 0, 1, 'L', 1);
        
        // domicilio
        $this->setXY($x = 18, $y = 65);
        $this->Cell(1, 3, "Dirección: " . $receptor_domicilio, 0, 1, 'L', 1);

        // telefono
        $this->setXY($x = 18, $y = 70);
        $this->Cell(1, 3, "Teléfono: " . $receptor_telefono, 0, 1, 'L', 1);

        // email
        $this->setXY($x = 18, $y = 75);
        $this->Cell(1, 3, "Email: " . $receptor_email, 0, 1, 'L', 1);

        // localidad
        //$this->setXY($x = 18, $y = 70);
        //$this->Cell(1, 3, $localidad, 0, 1, 'L', 1);

        // provincia
        //$this->setXY($x = 18, $y = 75);
        //$this->Cell(1, 3, $provincia, 0, 1, 'L', 1);
        

        // --------------------------------------------------------------------
        // Columna 2
        // --------------------------------------------------------------------
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', '', 9);
        $this->SetFillColor(255, 255, 255);

        // fecha emision
        $this->setXY($x = 125, $y = 60);
        $this->Cell(1, 3, "Fecha de Emisión: " . $receptor_fecha_hora_emision, 0, 1, 'L', 1);

        // moneda
        $this->setXY($x = 125, $y = 65);
        $this->Cell(1, 3, "Moneda: " . $receptor_moneda_operacion . ' - Tipo de Cambio: ' . $receptor_tipo_cambio, 0, 1, 'L', 1);

        if($tipo_comprobante_codigo == EkuParamTipoDe::TIPO_FACTURA_ELECTRONICA){
            
            // condicion operacion
            $this->setXY($x = 125, $y = 70);
            $this->Cell(1, 3, "Condición de Venta: " . $receptor_condicion_operacion, 0, 1, 'L', 1);

            // tipo transaccion
            $this->setXY($x = 125, $y = 75);
            $this->Cell(1, 3, "Tipo de Transacción: " . $receptor_tipo_transaccion, 0, 1, 'L', 1);
            
        }elseif ($tipo_comprobante_codigo == EkuParamTipoDe::TIPO_NOTA_DE_CREDITO_ELECTRONICA) {
            
            // tipo documento asociado
            $this->setXY($x = 125, $y = 70);
            $this->Cell(1, 3, "Tipo Doc Asoc: " . $tipo_documento_asociado, 0, 1, 'L', 1);

            // motivo emision
            $this->setXY($x = 125, $y = 75);
            $this->Cell(1, 3, "Motivo: " . $motivo_emision, 0, 1, 'L', 1);    
            
        }
        
    }

    //Pie de pagina
    function Footer() {

        // recuadro de fondo
        $this->Rect(10, 245, 190, 27, 'DF', array(0, 0, 0), array(255, 255, 255));
        
        // linea top de footer
        $style_line = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
        $this->Line(10, 245, 200, 245, 'D', array('all' => $style_line));

        
        // -------------------------------------------------------------------------
        // consulte la vlaidez 
        // -------------------------------------------------------------------------
        $this->SetFont('dejavusans', '', 8);    
        $this->setXY(50, 250);
        $this->Cell(10, 4, 'Consulte la validez de este Documento Electrónico con el número de CDC impreso abajo en:', 0, 1, 'L', false);
        
        $this->setXY(50, 253);
        $this->SetTextColor(0, 0, 255);
        $this->Write(5, 'https://ekuatia.set.gov.py/consultas', 'https://ekuatia.set.gov.py/consultas', false, 'L', true);

        $this->SetTextColor(0, 0, 0);
       
        
        $this->SetY(-17);
        $this->write2DBarcode($this->getSifenComprobanteUrlQR(), 'QRCODE,L', 10, 250, 30, 30, $style, 'N');
        
        // -------------------------------------------------------------------------
        // enlace
        // -------------------------------------------------------------------------
        $this->Link(10, 250, 30, 30, rawurldecode($this->getSifenComprobanteUrlQR()));
        
        // -------------------------------------------------------------------------
        // CDC
        // -------------------------------------------------------------------------
        $this->SetFont('dejavusans', '', 10);    
        $this->setXY(50, 260);
        $this->Cell(10, 4, 'CDC:', 0, 1, 'L', false); 
        
        $this->SetFont('dejavusans', 'B', 10);    
        $this->setXY(60, 260);
        $this->Cell(10, 4, $this->getSifenCdc(), 0, 1, 'L', false);    
        
        // -------------------------------------------------------------------------
        // ESTE DOCUMENTO ES UN ...
        // -------------------------------------------------------------------------
        $this->SetFont('dejavusans', 'B', 8);    
        $this->setXY(10, 282);
        $this->Cell(10, 4, 'ESTE DOCUMENTO ES UNA REPRESENTACIÓN GRÁFICA DE UN DOCUMENTO ELECTRÓNICO (XML)', 0, 1, 'L', false);    
        
        // -------------------------------------------------------------------------
        // Información de interés ...
        // -------------------------------------------------------------------------
        $this->SetFont('dejavusans', '', 7);    
        $this->setXY(10, 285);
        $this->Cell(10, 4, 'Información de interés del facturador electrónico emisor.', 0, 1, 'L', false);    

        // -------------------------------------------------------------------------
        // Si su documento electrónico presenta algún error ...
        // -------------------------------------------------------------------------
        $this->SetFont('dejavusans', '', 7);    
        $this->setXY(10, 288);
        $this->Cell(10, 4, 'Si su documento electrónico presenta algún error, podrá solicitar la modificación dentro de las 72 horas siguientes de la emisión de este comprobante.', 0, 1, 'L', false);    
        
    }

}

?>