<?php
$a = array();
$result = array();

for($i = 1; $i <= 5; $i++){
    array_push($a,rand(0,10)); 
}
echo implode(',', $a);
echo "  Scores ";

$dup =null; 
if(array_diff_assoc($a,array_unique($a))){
    
    $dup = array_diff_assoc($a,array_unique($a));
    if(array_diff_assoc($dup ,array_unique($dup ))){
        $dup2 = array_diff_assoc($dup ,array_unique($dup ));
        $undup = array_diff($dup, $dup2);
        $max=  max($undup);
        echo  $max+$max. ' ===>  {'.$max.'+'.$max.'}';
    }else{
        $max=  max(array_diff_assoc($a,array_unique($a)));
        echo  $max+$max. ' ===>  {'.$max.'+'.$max.'}';
    }
    
}else{
    echo "    scores 0";
}

?>