<?php  
include("connect.config.php");
require('fpdf17/fpdf.php');
session_start();
$invoiceId = $_POST["invoiceId"];

  $date = date('Y-m-d');
//create pdf object
$pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130 ,5,'LIGHTVEND.CO',0,0);
$pdf->Cell(59 ,5,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'222 Senator Gil Puyat Avenue',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(130 ,5,'Makati City, Philippines, 1550',0,0);
$pdf->Cell(25 ,5,'Date',0,0);
$pdf->Cell(34 ,5,$date,0,1);//end of line




  $xQx_clientId = "SELECT * FROM invoices WHERE invoiceId = '$invoiceId'";
  $query_clientId=mysqli_query($conn,$xQx_clientId);         


                      while($row=mysqli_fetch_array($query_clientId))

{

					$clientId = $row["clientId"];
}



  $xQx_clientInfo = "SELECT * FROM clients WHERE clientId = '$clientId'";
  $query_clientInfo=mysqli_query($conn,$xQx_clientInfo);         


                      while($row=mysqli_fetch_array($query_clientInfo))

{
						$clientName = $row["clientName"];
						$contactPerson = $row["contactPerson"];
						$address = $row["address"];
						$email = $row["email"];	

					
}





$pdf->Cell(130 ,5,'Phone [+12345678]',0,0);
$pdf->Cell(25 ,5,'Invoice #',0,0);
$pdf->Cell(34 ,5,$invoiceId,0,1);//end of line

$pdf->Cell(130 ,5,'Fax [+12345678]',0,0);
$pdf->Cell(25 ,5,'Customer ID',0,0);
$pdf->Cell(34 ,5,$clientId,0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//billing address
$pdf->Cell(100 ,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$clientName,0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$contactPerson,0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$address,0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$email,0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130 ,5,'Description',1,0);
$pdf->Cell(25 ,5,'Taxable',1,0);
$pdf->Cell(34 ,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter


  $xQx_items = "SELECT * FROM 	items_ordered WHERE invoiceId = '$invoiceId'";
  $query_items=mysqli_query($conn,$xQx_items);         


                      while($row=mysqli_fetch_array($query_items))

{

$pdf->Cell(130 ,5,$row["assetName"],1,0);
$pdf->Cell(25 ,5,'-',1,0);
$pdf->Cell(34 ,5,$row["sellPrice"],1,1,'R');//end of line

}




//summary
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Subtotal',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'4,450',1,1,'R');//end of line



$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Tax Rate',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'10%',1,1,'R');//end of line

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Total Due',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,'4,450',1,1,'R');//end of line
//output the result
$pdf->Output();
?>