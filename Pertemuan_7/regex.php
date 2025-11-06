<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text 123!';

if(preg_match($pattern, $text)){
    echo "Teks mengandung huruf kecil";
}else{
    echo "Teks tidak mengandung huruf kecil";
}

$pattern = '/[0-9]+/'; //cocokkan satu atau lebih digit
$text = 'There are 123 apples.';

if(preg_match($pattern, $text, $matches)){
    echo "Cocokkan: " . $matches[0];
}else{
    echo "Tidak ada yang cocok!";
}

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; //Output "i like banana pie"

$pattern = '/go*d/'; // Cocokkan "god", "good", "goood", dll.
$text = 'god is good.';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

$pattern = '/go?d/';
$text = 'gd god good';

if(preg_match_all($pattern, $text, $matches)){
    echo "Ditemukan kecocokan: " . implode(", ", $matches[0]) . "<br>";
} else {
    echo "Tidak ada kecocokan ditemukan.";
}

$pattern = '/go{1,2}d/';
$text = 'gd god good goood';

if(preg_match_all($pattern, $text, $matches)){
    echo "Ditemukan kecocokan: " . implode(", ", $matches[0]) . "<br>";
} else {
    echo "Tidak ada kecocokan ditemukan.";
}
?>
