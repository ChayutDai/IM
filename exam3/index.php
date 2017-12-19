<?php

function print_diamond($end){
    $top = range('A', $end);
    if(ctype_lower($end)){
        echo "กรุณาพิมพ์ใหญ่";
        return 0;
    }
    if(count($top)<3){
        echo "ใส่ระยะให้มากกว่า 2 ตัวอักษรขึ้นไป";
        return 0;
    }else{
        $count_diamond = count($top);
        print_top($top,$count_diamond);
        print_bottom($top,$count_diamond);
    }
    
}

function print_top($top,$count_diamond){
    
    for($i=$count_diamond;$i>0;$i--){  
            for($j=0;$j<$i;$j++){ 
                echo "&nbsp;&nbsp;";                                            
            }
            
            if($count_diamond-$i>0){ 
                echo $top[$count_diamond-$i];
                echo "&nbsp;&nbsp;"; 
                for($k=1;$k<((($count_diamond-$i)*2)-1);$k++){
                    echo "&nbsp;&nbsp;"; 
                }
                echo $top[$count_diamond-$i];
            }else{
                echo $top[0];
            }       
        echo '</br>';
    }
}

function print_bottom($top,$count_diamond){
    
    for($i=1;$i<$count_diamond;$i++){  
            for($j=0;$j<=$i;$j++){ 
                echo "&nbsp;&nbsp;";                                            
            }
       
            if(($count_diamond-1)-$i>0){ 
                echo $top[($count_diamond-1)-$i];
                echo "&nbsp;&nbsp;"; 
                for($k=1;$k<(((($count_diamond-1)-$i)*2)-1);$k++){
                    echo "&nbsp;&nbsp;"; 
                }
                echo $top[($count_diamond-1)-$i];
                
            }else{
                echo $top[0];
            }       
        echo '</br>';
    }
}
    
    
print_diamond('Z');


?>