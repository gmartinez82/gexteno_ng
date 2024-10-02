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
    // ---------------------------------------------------
    //  Atributos del Cliente
    // ---------------------------------------------------
    private $cliente;
    private $domicilio;
    private $localidad;
    private $provincia;
    private $condicion_iva;
    private $cuit;
    private $iibb;
    private $telefono;
    
    // ---------------------------------------------------
    //  Atributos del Comprobante
    // ---------------------------------------------------
    private $numero_comprobante;
    private $punto_venta_localidad;
    private $punto_venta_domicilio;

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

    public function getNumeroComprobante() {
        return $this->numero_comprobante;
    }

    public function getPuntoVentaLocalidad() {
        return $this->punto_venta_localidad;
    }

    public function getPuntoVentaDomicilio() {
        return $this->punto_venta_domicilio;
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

    public function setNumeroComprobante($v) {
        $this->numero_comprobante = $v;
    }

    public function setPuntoVentaLocalidad($v) {
        $this->punto_venta_localidad = $v;
    }

    public function setPuntoVentaDomicilio($v) {
        $this->punto_venta_domicilio = $v;
    }

    //Cabecera de pagina
    function Header() {

        $tipo = $this->getTipo();
        $tipo_letra = $this->getTipoLetra();
        $codigo = $this->getNumeroComprobante();
        $punto_venta_localidad = $this->getPuntoVentaLocalidad();
        $punto_venta_domicilio = $this->getPuntoVentaDomicilio();
        $fecha = $this->getFecha();
        $vendedor = $this->getVendedor();

        $cliente = $this->getCliente();
        $domicilio = $this->getDomicilio();
        $localidad = $this->getLocalidad();
        $provincia = $this->getProvincia();
        $condicion_iva = $this->getCondicionIva();
        $cuit = $this->getCUIT();
        $iibb = $this->getIIBB();
        $telefono = $this->getTelefono();

        $this->HeaderComprobante($tipo, $tipo_letra, $codigo, $fecha, $vendedor, $punto_venta_localidad, $punto_venta_domicilio);
        $this->HeaderComprobanteDatosCliente($cliente, $domicilio, $localidad, $provincia, $condicion_iva, $cuit, $iibb, $telefono);
    }

    /**
     * -------------------------------------------------------------------------
     * Datos de Cabecera de Empresa
     * -------------------------------------------------------------------------
     */
    function HeaderComprobante($tipo, $tipo_letra, $codigo, $fecha, $vendedor, $punto_venta_localidad, $punto_venta_domicilio, $codigo_tipo_comprobante = 'X') {
        
        // ---------------------------------------------------------------------
        // logo
        // ---------------------------------------------------------------------
        $this->Image(Gral::getPathAbs() . DbConfig::PATH_LOGO_EMPRESA_PDF, 5, 10, 70);
        
        $this->SetFont('Helvetica', '', 10);

        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', '', 9);
        $this->SetFillColor(255, 255, 255);

        $x = 4;
        $y = 35;
        $y_alto = 4;
        $line_x = 3;
        $line_y = 70;
        
        
        $style_line = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
        // -------------------------------------------------------------------------------------------
        $this->Line($line_x, $y+= $y_alto, $x + $line_y, $y, 'D', array('all' => $style_line));
        
        // ---------------------------------------------------------------------
        // razon social
        // ---------------------------------------------------------------------        
        $this->setXY($x, $y+= $y_alto - 3);
        $this->Cell(1, 3, DbConfig::CONFIG_GRAL_RAZON_SOCIAL, 0, 1, 'L', 1);
        
        // ---------------------------------------------------------------------
        // condicion iva
        // ---------------------------------------------------------------------
        $this->setXY($x, $y = $y + $y_alto);
        $this->Cell(1, 3, DbConfig::CONFIG_GRAL_CLIENTE_CONDICION_IVA, 0, 1, 'L', 1);
        
        // ---------------------------------------------------------------------
        // cuit
        // ---------------------------------------------------------------------
        $this->setXY($x, $y+= $y_alto);
        $this->Cell(1, 3, "CUIT: " . DbConfig::CONFIG_GRAL_CLIENTE_CUIT, 0, 1, 'L', 1);

        // ---------------------------------------------------------------------
        // iibb
        // ---------------------------------------------------------------------
        $this->setXY($x, $y+= $y_alto);
        $this->Cell(1, 3, "IIBB: " . DbConfig::CONFIG_GRAL_CLIENTE_IIBB, 0, 1, 'L', 1);
                
        // -------------------------------------------------------------------------------------------
        //$this->Line($line_x, $y+= $y_alto + 2, $x + $line_y, $y, 'D', array('all' => $style_line));
        
        
        // ---------------------------------------------------------------------
        // domicilio
        // ---------------------------------------------------------------------
        $this->setXY($x, $y = $y + $y_alto);
        $this->Cell(1, 3, $punto_venta_domicilio, 0, 1, 'L', 1);

        // ---------------------------------------------------------------------
        // localidad
        // ---------------------------------------------------------------------
        $this->setXY($x, $y = $y + $y_alto);
        $this->Cell(1, 3, 'CP '.DbConfig::CONFIG_GRAL_CLIENTE_CODIGO_POSTAL.' - '.$punto_venta_localidad, 0, 1, 'L', 1);
        
        // ---------------------------------------------------------------------
        // inicio de actividades
        // ---------------------------------------------------------------------
        $this->setXY($x, $y = $y + $y_alto);
        $this->Cell(1, 3, "Inicio de Actividades: " . DbConfig::CONFIG_GRAL_CLIENTE_FECHA_INICIO, 0, 1, 'L', 1);
        
        // ---------------------------------------------------------------------
        // telefono
        // ---------------------------------------------------------------------
        $this->setXY($x, $y = $y + $y_alto);
        $this->Cell(1, 3, 'Teléfonos: ' . DbConfig::CONFIG_GRAL_CLIENTE_TELEFONOS, 0, 1, 'L', 1);

        // ---------------------------------------------------------------------
        // celular
        // ---------------------------------------------------------------------
        $this->setXY($x, $y = $y + $y_alto);
        $this->Cell(1, 3, 'Celular: ' . DbConfig::CONFIG_GRAL_CLIENTE_CELULARES, 0, 1, 'L', 1);

        // -------------------------------------------------------------------------------------------
        $this->Line($line_x, $y+= $y_alto + 2, $x + $line_y, $y, 'D', array('all' => $style_line));
        
        $this->SetFont('Helvetica', 'B', 11);
        
        // ---------------------------------------------------------------------
        // tipo
        // ---------------------------------------------------------------------
        $this->setXY($x, $y = $y + $y_alto - 2);
        $this->Cell(1, 3, 'No valido como factura', 0, 1, 'L', 1);            

        $this->SetFont('Helvetica', '', 9);            
        
        // ---------------------------------------------------------------------
        // fecha
        // ---------------------------------------------------------------------
        $this->setXY($x, $y = $y + $y_alto + 2);
        $this->Cell(1, 3, 'Fecha: ' . $fecha, 0, 1, 'L', 1);

        // ---------------------------------------------------------------------
        // codigo
        // ---------------------------------------------------------------------
        $this->setXY($x + 30, $y);
        $this->Cell(1, 3, 'Nro: '.$codigo, 0, 1, 'L', 1);
        
    }

    /**
     * -------------------------------------------------------------------------
     * Datos de Cabecera de Cliente
     * -------------------------------------------------------------------------
     */
    function HeaderComprobanteDatosCliente($cliente, $domicilio, $localidad, $provincia, $condicion_iva, $cuit, $iibb, $telefono) {
        
        $x = 4;
        $y = 90;
        $y_alto = 4;
        $line_x = 3;
        $line_y = 70;
        
        
        $style_line = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
        // -------------------------------------------------------------------------------------------
        $this->Line($line_x, $y+= $y_alto, $x + $line_y, $y, 'D', array('all' => $style_line));

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
    function Footer() {

        
    }

}

?>
