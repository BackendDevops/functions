<?php
function convert($numbers,$aftercomma){
    if(is_numeric($numbers) && $numbers!=0){
        if(!$aftercomma){
            $ksrt = (int) explode(".", $numbers*1)[1];if(strlen($ksrt)==1){$ksrt.="0";}
            $numbers = (int) explode(".", $numbers*1)[0];
            $numbers = number_format($numbers,0,',','.').",".$ksrt;
        }else{
            $numbers = number_format($numbers,$aftercomma,',','.');            
        }
    }
    else{$numbers="";}
    return $numbers;
}
/* Usage*/
/* 
$total="1234567,12365";
echo convert($total,3);
returns
1.234.567,124

*/
?>
