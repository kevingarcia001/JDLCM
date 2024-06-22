<?php

// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf.php');
require('models/conexiondb.php');
require('models/alumnos.models.php');

// Obtener los datos del estudiante usando el modelo
$modelo = new mdlAlumnos();
$datosEstudiante = $modelo->mdlGetStudentInfoById(8);

// var_dump($datosEstudiante);

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    protected $studentData;

    public function __construct($studentData, $orientation = 'P', $unit = 'mm', $format = 'A4', $unicode = true, $encoding = 'UTF-8', $diskcache = false) {
        parent::__construct($orientation, $unit, $format, $unicode, $encoding, $diskcache);
        $this->studentData = $studentData;
    }


    // Page header
    public function Header() {
        // Set background color
        // $this->SetFillColor(20, 23, 61); // Color RGB
        // // $this->Rect(0, 0, $this->getPageWidth(), 20, 'F'); // Rectángulo para el fondo del encabezado

        // Logo
        $image_file = K_PATH_IMAGES.'banner2.png';
        $this->Image($image_file, 10, 5, 50, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        

        // Set font
        $this->SetFont('helvetica', 'A', 12);
        // Color al titulo
        $this->SetTextColor(0, 0, 0);
        $this->SetY(14); // Ajusta la posición vertical del título

        // Title
        $this->SetX(30); // Ajusta la posición horizontal del título para no superponerlo con el logo
        $this->Cell(0, 15, 'Comprometidos con la excelencia y el desarrollo', 0, false, 'R', 0, '', 0, false, 'M', 'M');
        $this->setY(20);
        $this->Cell(0, 15, ' integral de nuestros estudiantes.', 0, false, 'R', 0, '', 0, false, 'M', 'M');
      
    


        // Línea debajo del encabezado
        $this->SetLineWidth(0.5);
        $this->SetDrawColor(0, 0, 0);
        $this->Line(10, 30, $this->getPageWidth() - 10, 30);

        // Move to the next line
        $this->SetY(40);

        // Subtitulo
        $this->SetFont('helvetica', 'B', 12);
        $this->Cell(0, 10, 'CENTRO ESCOLAR PUBLICO JOSÉ DE LA CRUZ MENA', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    
        $this->SetY(50);

        // Subtitulo
        $this->SetFont('helvetica', 'B', 12);
        $this->Cell(0, 10, 'Reporte de Matriculados', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    
    }

     // Body
    public function body() {
        $this->SetY(60);
        $this->SetFont('helvetica', '', 10);
        
        if (!empty($this->studentData)) {
            $row = $this->studentData[0];

            // Datos del estudiante
            $this->SetX(15);
            $this->Cell(35, 10, 'Código de Matrícula: ', 0, 0);
            $this->Cell(50, 10, $row['Código de matrícula'], 0, 1);

            $this->SetX(15);
            $this->Cell(15, 10, 'Nombre: ', 0, 0);
            $this->Cell(40, 10, $row['Alumno'], 0, 1);

            $this->SetX(15);
            $this->Cell(35, 10, 'Fecha de Nacimiento: ', 0, 0);
            $this->Cell(50, 10, $row['Fecha de nacimiento'], 0, 1);

            // columna derecha
            $this->SetY(60);
            $this->SetX(110);
            $this->Cell(10, 10, 'Sexo: ', 0, 0);
            $this->Cell(50, 10, $row['Sexo'], 0, 1);

            $this->SetX(110);
            $this->Cell(10, 10, 'Tutor: ', 0, 0);
            $this->Cell(50, 10, $row['Tutor'], 0, 1);

            $this->SetX(110);
            $this->Cell(17, 10, 'Telefono: ', 0, 0);
            $this->Cell(50, 10, $row['Teléfono'], 0, 1);
        }
       
    }

    

    // Custom table
   // Table
   public function Table() {
    $this->Ln(10); // Add some space before the table

    $this->SetFont('helvetica', 'B', 10);

    // Headers
    $this->Cell(20, 10, 'TURNO', 1, 0, 'C');
    $this->Cell(40, 10, 'GRADO', 1, 0, 'C');
    $this->Cell(40, 10, 'SECCIÓN', 1, 0, 'C');
    $this->Cell(40, 10, 'ASIGNATURAS', 1, 0, 'C');
    $this->Cell(40, 10, 'NOTAS', 1, 0, 'C');
    $this->Ln();

    $this->SetFont('helvetica', '', 10);


    // Populate table rows with centered text
    foreach ($this->studentData as $row) {
        $this->Cell(20, 10, $row['Turno'], 1, 0, 'C');
        $this->Cell(40, 10, $row['Grado'], 1, 0, 'C');
        $this->Cell(40, 10, $row['Sección'], 1, 0, 'C');
        $this->Cell(40, 10, $row['Asignatura'], 1, 0, 'C');
        $this->Cell(40, 10, $row['Notas'], 1, 0, 'C');
        $this->Ln();
    }
}

    // Page footer
     // Page footer
     public function Footer() {
        // Set font
        $this->SetFont('helvetica', '', 10);

        // Position at 30 mm from bottom
        $this->SetY(-30);

        // Signature line - Left side
        $this->SetX(15);
        $this->Cell(40, 0, '', 'T'); // Draw the line
        $this->Ln(5);
        $this->SetX(20);
        $this->Cell(60, 5, 'Firma del Secretario', 0, 0, 'L');

        // Signature line - Right side
        $this->SetY(-30);
        $this->SetX(145);
        $this->Cell(40, 0, '', 'T'); // Draw the line
        $this->Ln(5);
        $this->SetX(110);
        $this->Cell(70, 5, 'Firma del Director', 0, 0, 'R');

        // Page number
        $this->SetY(-15);
        $this->SetFont('helvetica', 'I', 8);
        $this->Cell(0, 10, 'Página '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    } 
    
    // Page background (watermark)
    public function AddWatermark() {
        // Get the page width and height
        $pageWidth = $this->getPageWidth();
        $pageHeight = $this->getPageHeight();
        // Path to the watermark image
        $watermarkImage = K_PATH_IMAGES.'icono.png';
        // Set the alpha transparency for the image
        $this->SetAlpha(0.1);
        // Add the image in the center of the page
        $this->Image($watermarkImage, ($pageWidth / 2) - 50, ($pageHeight / 2) - 50, 90, 100, '', '', '', false, 300, '', false, false, 0);
        // Reset the alpha transparency
        $this->SetAlpha(1);
    }   
}

// Create new PDF document
$pdf = new MYPDF($datosEstudiante, PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Erian y Kevin');
$pdf->SetTitle('MATRICULA JDLM');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// Set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// Set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// Set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// Set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// Set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// Set font
$pdf->SetFont('times', 'BI', 12);

// Add a page
$pdf->AddPage();

// Add the watermark image
$pdf->AddWatermark();

// Add student data and curricular components
$pdf->body();
$pdf->Table();


// Set some text to print
// $txt = <<<EOD
// Copyright © 2024 José de la Cruz Mena.
// EOD;

// // Print a block of text using Write()
// $pdf->Write(100, $txt, '', 0, 'C', true, 0, false, false, 0);

// ---------------------------------------------------------

// Close and output PDF document
$pdf->Output('example_003.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
