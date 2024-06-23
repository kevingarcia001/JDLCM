<?php

// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf.php');
require('models/conexiondb.php');
require('models/matricula.model.php');

// Obtener los datos de matrícula usando el modelo
$modelo = new mdlMatricula();
$datosMatricula = $modelo->getMatriculados();

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    protected $studentData;

    public function __construct($studentData, $orientation = 'P', $unit = 'mm', $format = 'A4', $unicode = true, $encoding = 'UTF-8', $diskcache = false) {
        parent::__construct($orientation, $unit, $format, $unicode, $encoding, $diskcache);
        $this->studentData = $studentData;
    }

    // Page header
    public function Header() {
        $image_file = K_PATH_IMAGES.'banner2.png';
        $this->Image($image_file, 10, 5, 50, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

        $this->SetFont('helvetica', 'I', 12);
        $this->SetTextColor(0, 0, 0);
        $this->SetY(14);

        $this->SetX(30);
        $this->Cell(0, 15, 'Comprometidos con la excelencia y el desarrollo', 0, false, 'R', 0, '', 0, false, 'M', 'M');
        $this->setY(20);
        $this->Cell(0, 15, ' integral de nuestros estudiantes.', 0, false, 'R', 0, '', 0, false, 'M', 'M');

        $this->SetLineWidth(0.5);
        $this->SetDrawColor(0, 0, 0);
        $this->Line(10, 30, $this->getPageWidth() - 10, 30);

        // Conditionally add special header content only on the first page
        if ($this->getPage() == 1) {
            $this->SetY(40);
            $this->SetFont('helvetica', 'B', 12);
            $this->Cell(0, 10, 'CENTRO ESCOLAR PUBLICO JOSÉ DE LA CRUZ MENA', 0, false, 'C', 0, '', 0, false, 'M', 'M');

            $this->SetY(50);
            $this->SetFont('helvetica', 'B', 12);
            $this->Cell(0, 10, 'Reporte de Matriculados', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        }
    }

    // Custom table
    public function Table() {
       
            $this->Ln(40);
      

        $this->SetFont('helvetica', 'B', 10);
        $this->SetFillColor(238, 238, 238);
        
        // Headers
        $this->Cell(40, 10, 'COD. MATRICULA', 1, 0, 'C', true);
        $this->Cell(58, 10, 'NOMBRES Y APELLIDOS', 1, 0, 'C', true);
        $this->Cell(20, 10, 'GRADO', 1, 0, 'C', true);
        $this->Cell(25, 10, 'SECCIÓN', 1, 0, 'C', true);
        $this->Cell(35, 10, 'AÑO ACADEMICO', 1, 0, 'C', true);
        $this->Ln();

        $this->SetFont('helvetica', '', 10);

        // Populate table rows
        foreach ($this->studentData as $row) {
            $this->Cell(40, 10, $row['Código de matrícula'], 1, 0, 'C');
            $this->Cell(58, 10, $row['Alumno'], 1, 0, 'C');
            $this->Cell(20, 10, $row['Grado'], 1, 0, 'C');
            $this->Cell(25, 10, $row['Sección'], 1, 0, 'C');
            $this->Cell(35, 10, $row['Año académico'], 1, 0, 'C');
            $this->Ln();
        }
    }

    // Page footer
    public function Footer() {
        $this->SetFont('helvetica', '', 10);

        $this->SetY(-30);

        $this->SetY(-15);
        $this->SetFont('helvetica', 'I', 8);
        $this->Cell(0, 10, 'Página '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    } 
    
    // Page background (watermark)
    public function AddWatermark() {
        $pageWidth = $this->getPageWidth();
        $pageHeight = $this->getPageHeight();
        $watermarkImage = K_PATH_IMAGES.'icono.png';
        $this->SetAlpha(0.1);
        $this->Image($watermarkImage, ($pageWidth / 2) - 50, ($pageHeight / 2) - 50, 90, 100, '', '', '', false, 300, '', false, false, 0);
        $this->SetAlpha(1);
    }   
}

// Create new PDF document
$pdf = new MYPDF($datosMatricula, PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Erian y Kevin');
$pdf->SetTitle('MATRICULA JDLM');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

$pdf->SetFont('times', 'BI', 12);
$pdf->AddPage();
$pdf->AddWatermark();
$pdf->Table();

$pdf->Output('reporte_matriculados.pdf', 'I');

?>
