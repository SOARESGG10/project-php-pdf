<?php

include_once "../classes/fpdf185/fpdf.php";
include_once "./readFile.php";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->setFont("Arial", "B", 16);
$pdf->Cell(190, 10,"Relatório dos Alunos",0, 0, "C");
$pdf->Ln(15);

$pdf->setFont("Arial", "B", 12);
$pdf->Cell(40, 7,"Nome",1, 0, "C");
$pdf->Cell(40, 7,"Curso",1, 0, "C");
$pdf->Cell(90, 7,"Disciplina",1, 0, "C");
$pdf->Cell(20, 7,"Média",1, 0, "C");
$pdf->Ln();


foreach ($alunos as $aluno) {
        $pdf->setFont("Arial", "B", 10);
        $pdf->Cell(40, 7,$aluno["Nome"],1, 0, "C");
        $pdf->Cell(40, 7,$aluno["Curso"],1, 0, "C");
        $pdf->Cell(90, 7,$aluno["Disciplina"],1, 0, "C");
        $pdf->Cell(20, 7,$aluno["Média"],1, 0, "C");
        $pdf->Ln();    
}
$pdf->Output();