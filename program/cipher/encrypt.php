<?php
function encrypt($plainText, $key) {
    $length = strlen($plainText);
    $cipherText = array_fill(0, $length, '\0');
    $index = 0;

    for ($i = 0; $i < $key; $i++) {
        for ($j = $i; $j < $length; $j += $key) {
            if (ctype_alpha($plainText[$j])) {
                while (!ctype_alpha($plainText[$index % $length])) {
                    $index++;
                }
                $cipherText[$index % $length] = $plainText[$j];
                $index++;
            } else {
                $cipherText[$j] = $plainText[$j];
            }
        }
    }

    return implode('', $cipherText);
}

$username = $_POST["username"];
$password = $_POST["password"];
$key = 3; // Anda bisa mengubah ini sesuai kebutuhan

$encryptedPassword = encrypt($password, $key);
// Gunakan $encryptedPassword untuk sistem login Anda
?>
