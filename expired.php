<?php
$expired = strtotime("2019/10/10"); 
$tglsekarang = strtotime("2019/10/11"); 

// hitung perbedaan  jatuh tempo dengan sekarang 
$beda = $expired - $tglsekarang; // unix time
// konversi $beda kedalam hari
$bedahari = ($beda/24/60/60);
 
$tt = 8;
// pastikan nilainya positif, kalo negatif berarti sudah lewat.
if ($beda > 0 )
{
	if ($bedahari > $tt )
	{
		echo "Aman";
	}
	else 
	{
        echo "Expired $bedahari Hari Lagi";
		
	}
}else{
	echo "Expired";
	}
 
?>