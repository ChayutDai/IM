<?php


for($i = 1; $i <= 100; $i++){ // divide 1-500
  if(is_int($i/3)){
      if(is_int($i/5)){
          echo "FizzBuzz";
      }else{
          echo "Fizz";
      }
      echo '</br>';
  }else if(is_int($i/5)){
      echo "Buzz";
      echo '</br>';
  }else{
      echo $i;
      echo '</br>';
  }
}




?>