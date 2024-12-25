<html>
    <head>
        <title>lap 1</title>
    </head>
    <body>
        <h1>Hallo php</h1>
    
         <?php
 $_name = "mohammed ";
 echo"الاسم :$_name \n";
 $_agee = 50;
 echo "العمر :$_agee \n";
 $floot = 100.20;
 echo"الراتب :$floot";
 $is_student = true;
 echo"$is_student";
 $_colors = ["احمر","ازرق","اخضر"];
 echo "$_colors";

 $array = [10, 20, 30, 40, 50];
 
 echo "استخدام حلقة for:\n";
 for ($i = 0; $i < count($array); $i++) {
     $value = $array[$i]; 
     echo "العنصر $i: $value\n";
 }
 
 
 echo "\nاستخدام حلقة foreach:\n";
 foreach ($array as $index => $value) {
   
     echo "العنصر في الفهرس $index: $value\n";
 }
 
 
 echo "\nاستخدام حلقة while:\n";
 $i = 0; 
 while ($i < count($array)) {
     $value = $array[$i]; 
     echo "العنصر $i: $value\n";
     $i++; 
 }
 
 echo "\nاستخدام حلقة do-while:\n";
 $i = 0;
 do {
     $value = $array[$i]; 
     echo "العنصر $i: $value\n";
     $i++;
 } while ($i < count($array));
 ?>
    

   
    </body>
    
</html>