<?php
$strings = [
    "Hello",
    "World",
    "PHP",
    "Programming"
];

foreach ($strings as $string) {
    $vowelCount = 0;
    $lowerStr = strtolower($string);
    // foreach (str_split($lowerStr) as $char) {
    //     if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
    //         $vowelCount++;
    //     }
    // }

    for ($i = 0; $i < strlen($lowerStr); $i++) {
        if (in_array($lowerStr[$i], ['a', 'e', 'i', 'o', 'u'])) {
            $vowelCount++;
        }
    }

    $reversedString = '';
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }
    echo "Original String: " . $string . ", Vowel Count: " . $vowelCount . ", Reversed String: " . $reversedString . "\n";	
}



?>