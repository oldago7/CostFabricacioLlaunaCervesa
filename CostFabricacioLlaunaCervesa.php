<?php
	
	class llauna {
		
		public function volum($radi,$longitud){
			$volum = M_PI * $radi**2 * $longitud; 
			return $volum;		
 		}
 		
 		public function cost($volum,$costpercm3){
			$cost = $volum * $costpercm3; 
			return $cost;			
 		}	
	}
		
	#Calcula
	$llauna_cervesa = new llauna();
	$volum_llauna_cervesa = $llauna_cervesa -> volum($_POST['radi'],$_POST['longitud']);
	$cost_llauna_cervesa = $llauna_cervesa -> cost($volum_llauna_cervesa,$_POST['costpercm3']);
	#Crea PDF
	require_once 'vendor/autoload.php';
	use Dompdf\Dompdf as Dompdf;
	$dompdf = new Dompdf(); 
	$textpdf = htmlspecialchars("El volum de la llauna és: ");
	$textpdf = $textpdf.htmlspecialchars($volum_llauna_cervesa);
	$textpdf = $textpdf."cm3<br>";
	$textpdf = $textpdf.htmlspecialchars("El cost de fabricació  de la llauna és: ");
	$textpdf = $textpdf.htmlspecialchars($cost_llauna_cervesa);
	$textpdf = $textpdf."€<br>";
	$dompdf->loadHtml($textpdf);
	$dompdf->setPaper('A4', 'landscape');
	$dompdf->render();
	$dompdf->stream("cost_llauna_cervesa.pdf");	
	
		
?>
	
	
