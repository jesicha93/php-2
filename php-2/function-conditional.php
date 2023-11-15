<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>

    <?php
    // Soal No 1
    echo "<h3> Soal No 1 Greetings </h3>";

    // Function Greetings
    function greetings($name) {
        echo "Halo " . ucfirst($name) . ", Selamat Datang di Garuda Cyber Institute!";
        echo "<br>";
    }

    // Uncomment the lines below to run the function
    greetings("Bagas");
    greetings("Wahyu");
    greetings("jesicha");

    echo "<br>";

    // Soal No 2
    echo "<h3>Soal No 2 Reverse String</h3>";

    // Function Reverse String
    function reverseString($str) {
        $length = strlen($str);
        $reversedStr = '';

        for ($i = $length - 1; $i >= 0; $i--) {
            $reversedStr .= $str[$i];
        }

        echo $reversedStr;
       
    }

    // Uncomment the lines below to run the function
    reverseString("jesicha");
    reverseString("Garuda Cyber Institute");
    reverseString("We Are GC-Ins Developer");

    echo "<br>";

    // Soal No 3
    echo "<h3>Soal No 3 Palindrome </h3>";

    // Function Palindrome
    function palindrome($str) {
        $reversedStr = '';
        $length = strlen($str);

        for ($i = $length - 1; $i >= 0; $i--) {
            $reversedStr .= $str[$i];
        }

        if ($str == $reversedStr) {
            echo "true";
        } else {
            echo "false";
        }
        echo"<br>";
    }

    // Uncomment the lines below to run the function
    palindrome("civic"); // true
    palindrome("nababan"); // true
    palindrome("jambaban"); // false
    palindrome("racecar"); // true

    echo "<h3>Soal No 4 Tentukan Nilai </h3>";

    // Function Tentukan Nilai
    function tentukan_nilai($nilai) {
        if ($nilai >= 85 && $nilai <= 100) {
            return "Sangat Baik";
        } elseif ($nilai >= 70 && $nilai < 85) {
            return "Baik";
        } elseif ($nilai >= 60 && $nilai < 70) {
            return "Cukup";
        } else {
            return "Kurang";
        }
           
    }

    // Uncomment the lines below to run the function
    echo tentukan_nilai(98); // Sangat Baik
    echo tentukan_nilai(76); // Baik
    echo tentukan_nilai(67); // Cukup
    echo tentukan_nilai(43); // Kurang

    ?>
</body>
</html>
