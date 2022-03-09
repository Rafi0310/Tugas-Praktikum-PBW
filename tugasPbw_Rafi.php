<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Tugas Pertemuan 3</h4>
    <?php
    // Tipe data ===========================================
    echo "<h5>Tipe Data</h5>";
    // interger
    $interger = 50;
    echo "Interger = $interger <br>";
    
    // Floating point
    $float = 3.11;
    echo "Floating Point = $float <br>";

    // String 
    $string = "Hallo World";
    echo "String = $string <br>";

    // Boolean
   echo "Boolean = ";
    var_dump(true);
    var_dump(false);
    echo "<br>";

    // Array
    $array = ["Rafi", "Santosa"];
    echo "Array = $array[0] $array[1]  <br>";

    // Konstanta
    const prodi = "Teknik Informatika";
    echo "Konstanta = ". prodi ."<br><br>";
    // =====================================================


    // Operator ============================================
    echo "<h5>Operator</h5>";
    // Operator Assignment
    echo "<p>Assignment</p>";
    $a = 5; $b = 10; $c = 10 ;$d = 10 ; $e = 10 ; $f = 10;
    $a += 10;
    echo"Pengisian dan Penambahan = $a <br>";
    $b -= 5;
    echo"Pengisian dan Pengurangan = $b <br>";
    $c *= 2;
    echo"Pengisian dan Perkalian = $c <br>";
    $d /= 2;
    echo"Pengisian dan Pembagian = $d <br>";
    $c %= 2;
    echo"Pengisian dan Modulus = $e <br>";
    $b++;
    echo"Menaikan Nilai sebeser 1 = $b <br>";
    $b--;
    echo"Pengisian dan Pembagian = $b <br><br>";

    // Operator aritmatika
    echo "<p>Aritmatika</p>";
    $number = 5;
    $number = $number + 5;
    echo"Pertambahan 5 + 5 = $number <br>";
    $number = $number - 5;
    echo"Pengurangan 10 + 5 = $number <br>";
    $number = $number * 4;
    echo"Perkalian 5 * 4 = $number <br>";
    $number = $number / 2;
    echo"Pembagian 20 / 2 = $number <br>";
    $number = $number % 3;
    echo"Modulus 10 % 3 = $number <br>";
    $number++;
    echo"Menaikan 1 nilai = $number <br>";
    $number--;
    echo"Menurunkan 1 nilai = $number <br><br>";

    // Operator Rasional
    echo "<p>Rasional</p>";
    echo "Hasil dari 5 == 5 adalah ";
    var_dump(5==5);
    echo "<br>Hasil dari 5 != 2 adalah ";
    var_dump(5 != 2);
    echo "<br>Hasil dari 5 < 10 adalah ";
    var_dump(5 < 10);
    echo "<br>Hasil dari 5 > 3 adalah ";
    var_dump(5 > 3);
    echo "<br>Hasil dari 5 <= 5 adalah ";
    var_dump(5 <= 5);
    echo "Karna ada = jadinya True";
    echo "<br>Hasil dari 5 >= 5 adalah ";
    var_dump(5 >= 5);
    echo "Karna ada = jadinya True";

    // =====================================================
    
    // Operator Logika =====================================
    echo "<h5>Operator Logika</h5>";
    // Logika END &&
    echo "<p>Operator Logika END (&&)</p>";
    echo "true && true = ";
    var_dump(true && true);
    echo "<br> true && false = ";
    var_dump(true && false);
    echo "<br> false && true = ";
    var_dump(false && true);
    echo "<br> false && false = ";
    var_dump(false && false);   

    echo "<p>Operator Logika OR (||)</p>";
    echo "true || true = ";
    var_dump(true || true);
    echo "<br> true || false = ";
    var_dump(true || false);
    echo "<br> false || true = ";
    var_dump(false || true);
    echo "<br> false || false = ";
    var_dump(false || false);

    echo "<p>Operator Logika NOT (!)</p>";
    echo "!true = ";
    var_dump(!true);
    echo "<br>!false = ";
    var_dump(!false);


    // =====================================================
    
    ?>
</body>
</html>