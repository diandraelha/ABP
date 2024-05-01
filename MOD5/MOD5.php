<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODUL 5 - PHP, XML, JSON, AJAX</title>
</head>
<body style="background-color: #E0F4FF;">

    <?php 
    $name = "Diandra Lintang Hanintya";
    $nim = "1301213072";
    $class = "IF 45 05";
    ?>

    <h1>Nama : <?php echo $name ?></h1>
    <p>NIM : <?php echo $nim ?></p>
    <p>Kelas : <?php echo $class ?></p>

    <br>
    <h2>Struktur Kondisi</h2>
    <!-- Menggunakan If Else Statement -->

    <?php
    $score = 72;
    switch  ($score) {
        case ($score > 80 && $score <= 100):
            $grade = 'A';
            break;
        case ($score > 75 && $score <= 80):
            $grade = 'AB';
            break;
        case ($score > 70 && $score <= 75):
            $grade = 'B';
            break;
        case ($score > 80 && $score <= 100):
            $grade = 'BC';
            break;
        case ($score > 80 && $score <= 100):
            $grade = 'C';
            break;
        case ($score > 80 && $score <= 100):
            $grade = 'D';
            break;
        default:
            $grade = 'E';
            break;
    }

    if ($grade == 'E'){
        echo "Index anda ", $grade, " dengan nilai ", $score;
        echo " Anda dinyatakan tidak lulus";
    } else {
        echo "Index anda ", $grade, " dengan nilai ", $score;
        echo " Anda dinyatakan lulus";
    }
    ?>

    <br>
    <h2>Perulangan</h2>
    <!-- Menggunakan For Loop dan While Loop -->

    <?php
    echo "Menggunakan For Loop<br>";
    for($i=1;$i<=10;$i++){
        echo "$i ";
    }
    echo "<br><br>";

    echo "Menggunakan While Loop<br>";
    $j=1;
    while($j<=10){
        echo "$j ";
        $j++;
    }
    echo "<br><br>";
    ?>

    <h2>Function</h2>
    <!-- Mendefinisikan Function di PHP -->
    
    <?php
    function isPrime($number) {
        if ($number <= 1) {
            echo $number, " is not a prime number.";
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                echo $number, " is not a prime number.";
            }
        }
        echo  $number, " is a prime number.";
    }
    // Memanggil Function
    echo isPrime(7);
    ?>
    
    <br>
    <h2>Arrays</h2>
    <!-- Mendefinisikan Array di PHP -->
    <?php
    $fruits = array("apple", "banana", "cherry");
    print_r($fruits);
    ?>

    <p>Untuk melihat data yang ada didalam array, gunakan perulangan seperti For dan Foreach.</p>
    <?php
    foreach ($fruits as $value) {
        echo $value . "\n";
    }
    ?>
    
</body>
</html>