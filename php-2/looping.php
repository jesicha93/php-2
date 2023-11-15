<?php
// Soal No 1
echo "<h3>Soal No 1 Looping I Love PHP</h3>";

// Looping Pertama (Ascending)
echo "LOOPING PERTAMA<br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " - I Love PHP<br>";
}

// Looping Kedua (Descending)
echo "LOOPING KEDUA<br>";
for ($i = 20; $i >= 2; $i -= 2) {
    echo $i . " - I Love PHP<br>";
}

// Soal No 2
echo "<h3>Soal No 2 Looping Array Modulo </h3>";
$numbers = [18, 45, 29, 61, 47, 34];
echo "array numbers: ";
print_r($numbers);
echo "<br>";

// Lakukan Looping Array Modulo di sini
$rest = [];
foreach ($numbers as $number) {
    $rest[] = $number % 5;
}
echo "Array sisa baginya adalah: ";
print_r($rest);
echo "<br>";

// Soal No 3
echo "<h3> Soal No 3 Looping Asociative Array </h3>";
$items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
];

// Lakukan Looping Asociative Array di sini
foreach ($items as $item) {
    $itemAssoc = [
        'id' => $item[0],
        'name' => $item[1],
        'price' => $item[2],
        'description' => $item[3],
        'source' => $item[4]
    ];
    print_r($itemAssoc);
    echo "<br>";
}

// Soal No 4
echo "<h3>Soal No 4 Asterix </h3>";

// Tampilkan pola asterisk
echo "Asterix: <br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>
