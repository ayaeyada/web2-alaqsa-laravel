<?php
//  $materials = array(80,90,76,91,85);
//   echo"<table border = '1'>";
//    echo"<tr>";
//     for($i=1 ; $i<=count($materials) ; $i++){
//        echo "<td> $i th </td>" ;
//     }  
//      echo "</tr>";
      
//      echo"<tr>";
//      foreach($materials as $value){
//        echo "<td> $value </td>";
//      }
//      echo"</tr>";
 
//  echo"</table>";

//  $asd = print_r($materials ,true) ;
//  echo $asd;
//  echo"<br>";
//  echo "hi";


// $asd = array("fisrt"=>"one","second"=>"two","third"=>"three");
// while($name = current($asd)){
//   // if($name =="three"){
//     echo key($asd)."<br/>";
//   // }
//    next($asd);
// }


// $car = array(
//   array("one",1,2),
//   array("two",1,3),
//   array("three",1,4),
//   array("four",1,5)
// );

//   for ( $row = 0; $row<4 ; $row++){
//     echo "<p><b> Row number $row </b></p>";
//     echo "ul";
//     for($col = 0 ; $col <3 ; $col++){
//       echo "<li>".$car[$row][$col]."/<li>";
//     }
//     echo"/ul";
// }


// $car = array("name"=>"toyota","type"=>"hilux","color"=>"black");

// print("<h1> my car details </h1>");
// for(reset($car) ; $r=key($car) ; next($car))
// print("<p> $r: $car[$r] </p>");

// echo date_default_timezone_get();

//  date_default_timezone_set('Asia/Gaza');
//  echo date_default_timezone_get();
//  echo date ("y:m:d h:i:s";

$t= strtotime("2 weeks");
echo date("y/m/d" ,$t );

?>