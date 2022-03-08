<?php 
$gelenveri= $_GET["sayi"];

if($gelenveri%3==0){
    echo "$gelenveri 3 e tam bölünebilir";
}else if($gelenveri==NULL){
    echo "gelen veri boş olamaz";

}else{
    $ilksayi=$gelenveri-($gelenveri%3);
    echo "$gelenveri üçe  tam bölünemez bölünebilen en büyük sayi $ilksayi ";
}


?>