<?php


$image = imagecreatefromjpeg("img/frozen4.jpg");

$fonteTamferine = "fonts".DIRECTORY_SEPARATOR."Tangerine".DIRECTORY_SEPARATOR."Tangerine-Bold.ttf";
//$fonteAssinatura = "fonts".DIRECTORY_SEPARATOR."Sacramento".DIRECTORY_SEPARATOR."Sacramento-Regular.ttf";
$fonteAssinaturaParisienne = "fonts".DIRECTORY_SEPARATOR."Parisienne".DIRECTORY_SEPARATOR."Parisienne-Regular.ttf";
//$fonteAssinaturaAlex_Brush = "fonts".DIRECTORY_SEPARATOR."Alex_Brush".DIRECTORY_SEPARATOR."AlexBrush-Regular.ttf";
//$fonteAssinaturaAllura = "fonts".DIRECTORY_SEPARATOR."Allura".DIRECTORY_SEPARATOR."Allura-Regular.ttf";
//$fonteAssinaturaHerr_Von_Muellerhoff = "fonts".DIRECTORY_SEPARATOR."Herr_Von_Muellerhoff".DIRECTORY_SEPARATOR."HerrVonMuellerhoff-Regular.ttf";


$titleColor = imagecolorallocate($image, 228, 12, 167);//Rosa
//$titleColor = imagecolorallocate($image, 12, 12, 228); //Azul

//$titleColor = imagecolorallocate($image,134, 78, 198); //roxo claro.
//$titleColor = imagecolorallocate($image,72, 1, 147); //roxo escuro.

$gray = imagecolorallocate($image, 100, 100, 100);
    
	imagettftext($image, 22, 0, 450, 150, $titleColor, $fonteTamferine , utf8_decode("Você quer brincar na neve!"));
	imagettftext($image, 18, 0, 405, 210, $titleColor, $fonteTamferine , utf8_decode("Então venha comigo comemorar meus 03 aninhos"));

	imagettftext($image, 18, 0, 450, 240, $titleColor, $fonteTamferine , utf8_decode("no  dia 08/06/2019 as 19:30 horas."));
	imagettftext($image, 20, 0, 405, 300, $titleColor, $fonteTamferine , utf8_decode("Local:"));

	imagettftext($image, 18, 0, 460, 300, $titleColor, $fonteTamferine , utf8_decode(" Rua Carmelito Moreira dos Reis,"));

	imagettftext($image, 18, 0, 470, 330, $titleColor, $fonteTamferine , utf8_decode(" 195, Kátia (Justinópolis)"));

	imagettftext($image, 18, 0, 470, 360, $titleColor, $fonteTamferine , utf8_decode("Ribeirão das Neves"));


	imagettftext($image, 25, 0, 450, 440, $titleColor, $fonteAssinaturaParisienne , utf8_decode("Maria Eduarda"));


	header("Content-Type: image/png");

	imagepng($image);

	imagedestroy($image);                
   



?>