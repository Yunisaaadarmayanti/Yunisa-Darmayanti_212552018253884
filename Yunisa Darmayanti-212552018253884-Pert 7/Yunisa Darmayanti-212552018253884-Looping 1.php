<html>
  <head>
    <title>PHP Looping</title>
  </head>
  <body>
    <?php
    $bidang = ['Segitiga','Bulat','Trapesium','Lingkaran'];
    echo "<h4>For Loop pada PHP</h1>";
    for($i=0; $i <5; $i++)
      {
        echo "-----------";
        echo "Yunisa Darmayanti $i";
        echo "-----------<br>";
      }
    echo "<h4>Mengeluarkan Hasil Array</h4>";
    for($i=0; $i < count($bidang) -1; $i++)
        {
        echo "-----------";
        echo $bidang[$i];
        echo "-----------<br>";
      }
    echo "<h3>Foreach Untuk Array</h3>";
    foreach($bidang as $b)
      {
       echo "-----------";
       echo $b;
        echo "-----------<br>";
     }
    echo "<h3>Foreach Untuk Assosiatif Array</h3>";
    $data = ['nama' => 'Yunisa Darmayanti',
            'umur' =>20,
            'sifat'=>'malas'];
    foreach($data as $key => $value){
      echo $value. "<br>";
    }
    echo "<h3> while dan do while</h3>";
    $i = 0;
    // while($i < count($bidang)){
    //  echo $bidang[$i]. "<br>";
    //  $i++;
    // }
    do{
      echo '----------';
      echo $bidang[$i]. "<br>";
      $i++;
    }while( $i < count($bidang));


?>
  </body>
</html>