<?php
require_once(Gral::getPathAbs() . 'comps/tcpdf/config/tcpdf_config.php');
require_once(Gral::getPathAbs() . 'comps/tcpdf/tcpdf.php');

class PDFTicketKude extends TCPDF {

    private $usuario;
    // ---------------------------------------------------
    //  Atributos de la Empresa
    // ---------------------------------------------------
    private $tipo;
    private $tipo_letra;
    private $codigo;
    private $fecha;
    private $vendedor;

    private $domicilio;
    private $telefono;
    private $email;
    private $actividad;
    private $timbrado;

    // ---------------------------------------------------
    //  Atributos del Cliente
    // ---------------------------------------------------
    private $receptor_razon_social;
    private $receptor_fecha_hora_emision;
    private $receptor_ruc;
    private $receptor_documento;
    private $receptor_condicion_operacion;
    
    private $cliente;
    private $localidad;
    private $provincia;
    private $condicion_iva;
    private $cuit;
    private $iibb;
        
    // ---------------------------------------------------
    //  Atributos del Comprobante
    // ---------------------------------------------------
    private $numero_comprobante;
    private $punto_venta_localidad;
    private $punto_venta_domicilio;

    private $sifen_comprobante_url_qr;
    private $sifen_cdc;

    // ---------------------------------------------------
    //  Metodos Getter
    // ---------------------------------------------------
    public function getUsuario() {
        return $this->usuario;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getTipoLetra() {
        return $this->tipo_letra;
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

    public function getCliente() {
        return $this->cliente;
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
    
    public function getEmail() {
        return $this->email;
    }

    public function getActividad() {
        return $this->actividad;
    }

    public function getTimbrado() {
        return $this->timbrado;
    }

    public function getReceptorFechaHoraEmision() {
        return $this->receptor_fecha_hora_emision;
    }
    
    public function getNumeroComprobante() {
        return $this->numero_comprobante;
    }

    public function getPuntoVentaLocalidad() {
        return $this->punto_venta_localidad;
    }

    public function getPuntoVentaDomicilio() {
        return $this->punto_venta_domicilio;
    }

    public function getReceptorRazonSocial() {
        return $this->receptor_razon_social;
    }

    public function getReceptorRuc() {
        return $this->receptor_ruc;
    }

    public function getReceptorDocumento() {
        return $this->receptor_documento;
    }

    public function getReceptorCondicionOperacion() {
        return $this->receptor_condicion_operacion;
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

    public function setTipo($v) {
        $this->tipo = $v;
    }

    public function setTipoLetra($v) {
        $this->tipo_letra = $v;
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

    public function setCliente($v) {
        $this->cliente = $v;
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

    public function setEmail($v) {
        $this->email = $v;
    }

    public function setActividad($v) {
        $this->actividad = $v;
    }

    public function setTimbrado($v) {
        $this->timbrado = $v;
    }

    public function setReceptorFechaHoraEmision($v) {
        $this->receptor_fecha_hora_emision = $v;
    }

    public function setNumeroComprobante($v) {
        $this->numero_comprobante = $v;
    }

    public function setPuntoVentaLocalidad($v) {
        $this->punto_venta_localidad = $v;
    }

    public function setPuntoVentaDomicilio($v) {
        $this->punto_venta_domicilio = $v;
    }

    public function setReceptorRuc($v) {
        $this->receptor_ruc = $v;
    }

    public function setReceptorDocumento($v) {
        $this->receptor_documento = $v;
    }

    public function setReceptorRazonSocial($v) {
        $this->receptor_razon_social = $v;
    }
    
    public function setReceptorCondicionOperacion($v) {
        $this->receptor_condicion_operacion = $v;
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
        $domicilio = $this->getDomicilio();
        $cuit = $this->getCUIT();
        $punto_venta_localidad = $this->getPuntoVentaLocalidad();
        $telefono = $this->getTelefono();
        $email = $this->getEmail();
        $actividad = $this->getActividad();
        $timbrado = $this->getTimbrado();
        $receptor_fecha_hora_emision = $this->getReceptorFechaHoraEmision();
        $numero_comprobante = $this->getNumeroComprobante();
        
        $punto_venta_localidad = $this->getPuntoVentaLocalidad();
        $fecha_inicio_vigencia = $this->getFecha();
        
        $this->HeaderComprobante($domicilio, $cuit, $punto_venta_localidad, $telefono, $email, $actividad, $timbrado, $receptor_fecha_hora_emision, $fecha_inicio_vigencia, $numero_comprobante);
        
        //$this->HeaderComprobanteDatosCliente($cliente, $domicilio, $localidad, $provincia, $condicion_iva, $cuit, $iibb, $telefono);
    }
    
    
    /**
     * -------------------------------------------------------------------------
     * Datos de Cabecera de Empresa
     * -------------------------------------------------------------------------
     */
    function HeaderComprobante($domicilio, $cuit, $punto_venta_localidad, $telefono, $email, $actividad, $timbrado, $receptor_fecha_hora_emision, $fecha_inicio_vigencia, $numero_comprobante)
    {
        // ---------------------------------------------------------------------
        // logo
        // ---------------------------------------------------------------------
        $this->Image(Gral::getPathAbs() . DbConfig::PATH_LOGO_EMPRESA_PDF, 5, 10, 70);
        
        $this->SetFont('Helvetica', '', 8);
        
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', '', 8);
        $this->SetFillColor(255, 255, 255);
        
        $x = 4;
        $y = 28;
        $y_alto = 4;
        $line_x = 3;
        $line_y = 70;
        
        
        $style_line = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
        // -------------------------------------------------------------------------------------------
        $this->Line($line_x, $y+= $y_alto, $x + $line_y, $y, 'D', array('all' => $style_line));
        
        // ---------------------------------------------------------------------
        // RUC
        // ---------------------------------------------------------------------        
        $this->setXY($x, $y+= $y_alto - 3);
        $this->Cell(1, 3, 'RUC: ' . $cuit, 0, 1, 'L', 1);
        
        // ---------------------------------------------------------------------
        // Texto
        // ---------------------------------------------------------------------        
        $this->setXY($x, $y+= $y_alto);
        $this->Cell(1, 3, 'Sistema integrado de facturación', 0, 1, 'L', 1);
        
        // ---------------------------------------------------------------------
        // Texto
        // ---------------------------------------------------------------------        
        $this->setXY($x, $y+= $y_alto);
        $this->Cell(1, 3, 'Electrónica Nacional', 0, 1, 'L', 1);
        
        // ---------------------------------------------------------------------
        // Domicilio
        // ---------------------------------------------------------------------        
        $this->setXY($x, $y+= $y_alto);
        $this->Cell(1, 3, $domicilio, 0, 1, 'L', 1);
        
        // ---------------------------------------------------------------------
        // Ciudad
        // ---------------------------------------------------------------------
        $this->setXY($x, $y+= $y_alto);
        $this->Cell(1, 3, 'Ciudad: ' . $punto_venta_localidad, 0, 1, 'L', 1);
        
        // ---------------------------------------------------------------------
        // Telefono
        // ---------------------------------------------------------------------
        $this->setXY($x, $y+= $y_alto);
        $this->Cell(1, 3, 'Teléfono: ' . $telefono, 0, 1, 'L', 1);
        
        // Email
        $this->setXY($x, $y+= $y_alto);
        $this->Cell(1, 3, $email, 0, 1, 'L', 1);
        
        // Actividad
        $this->setXY($x, $y+= $y_alto);
        $this->Cell(1, 3, 'Actividad: ' . substr($actividad, 0, 30), 0, 1, 'L', 1);
        
        // Timbrado
        $this->setXY($x, $y+= $y_alto + 2);
        $this->Cell(1, 3, 'Timbrado: ' . $timbrado, 0, 1, 'L', 1);
        
        // Fecha inicio vigencia
        $this->setXY($x, $y+= $y_alto);
        $this->Cell(1, 3, 'Inicio Vigencia: ' . $fecha_inicio_vigencia, 0, 1, 'L', 1);
        
        // Factura
        $this->setXY($x, $y+= $y_alto);
        $this->Cell(1, 3, 'KuDE de Factura electrónica: ' . $numero_comprobante, 0, 1, 'L', 1);
        
        // Fecha emision
        $this->setXY($x, $y+= $y_alto);
        $this->Cell(1, 3, "Fecha de Emisión: " . $receptor_fecha_hora_emision, 0, 1, 'L', 1);
    }
    
    
    /**
     * -------------------------------------------------------------------------
     * Datos de Cabecera de Cliente
     * -------------------------------------------------------------------------
     */
    function HeaderComprobanteDatosCliente($cliente, $domicilio, $localidad, $provincia, $condicion_iva, $cuit, $iibb, $telefono)
    {
        $x = 4;
        $y = 90;
        $y_alto = 4;
        $line_x = 3;
        $line_y = 70;
        
        
        $style_line = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
        // -------------------------------------------------------------------------------------------
        //$this->Line($line_x, $y+= $y_alto, $x + $line_y, $y, 'D', array('all' => $style_line));

        // ---------------------------------------------------------------------
        // cliente
        // ---------------------------------------------------------------------
        $this->setXY($x, $y = $y + $y_alto - 1);
        $this->Cell(1, 3, $cliente, 0, 1, 'L', 1);

        // ---------------------------------------------------------------------
        // cuit del cliente
        // ---------------------------------------------------------------------
        $this->setXY($x, $y = $y + $y_alto);
        $this->Cell(1, 3, $cuit, 0, 1, 'L', 1);

        // ---------------------------------------------------------------------
        // condicion iva del cliente
        // ---------------------------------------------------------------------
        $this->setXY($x, $y = $y + $y_alto);
        $this->Cell(1, 3, $condicion_iva, 0, 1, 'L', 1);

        // ---------------------------------------------------------------------
        // domicilio del cliente
        // ---------------------------------------------------------------------
        $this->setXY($x, $y = $y + $y_alto);
        $this->Cell(1, 3, $domicilio, 0, 1, 'L', 1);

        // ---------------------------------------------------------------------
        // localidad del cliente
        // ---------------------------------------------------------------------
        $this->setXY($x, $y = $y + $y_alto);
        if($localidad != ''){
            $this->Cell(1, 3, $localidad. ', '. $provincia, 0, 1, 'L', 1);
        }

        // ---------------------------------------------------------------------
        $this->Line($line_x, $y+= $y_alto + 2, $x + $line_y, $y, 'D', array('all' => $style_line));
        
    }

    //Pie de pagina
    function Footer()
    {
        /*$x = 4;
        $y = 150;
        $this->setXY($x, $y+ 4 - 3);
        $this->Cell(1, 3, 'X: ' . $this->GetX() + 1 . ' - Y: ' . $this->GetY() + 1, 0, 1, 'L', 1);*/ 
    }

}

?>