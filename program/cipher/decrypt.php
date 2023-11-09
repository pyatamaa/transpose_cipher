<?php
//  if(isset($_POST["submit"])) {
//     // process form data, send email, output message


//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     $key = "tugas";

//     $user = encipher($username, $key, false); 
//     $pass = encipher($password, $key, false);

//  }

//  function encipher($src, $key, $is_encode)
//     {
//         $key = strtoupper($key);
//         $src = strtoupper($src);
//         $dest = '';
    
//         /* strip out non-letters */
//         for($i = 0; $i <= strlen($src); $i++) {
//             $char = substr($src, $i, 1);
//             if(ctype_upper($char)) {
//                 $dest .= $char;
//             }
//         }
    
//         for($i = 0; $i <= strlen($dest); $i++) {
//             $char = substr($dest, $i, 1);
//             if(!ctype_upper($char)) {
//                 continue;
//             }
//             $dest = substr_replace($dest,
//                 chr (
//                     ord('A') +
//                     ($is_encode
//                     ? ord($char) - ord('A') + ord($key[$i % strlen($key)]) - ord('A')
//                     : ord($char) - ord($key[$i % strlen($key)]) + 26
//                     ) % 26
//                 )
//             , $i, 1);
//         }
    
//         return $dest;
//     }
 

function decrypt($cipherText, $key) {
    $length = strlen($cipherText);
    $rail = array_fill(0, $key, array_fill(0, $length, '\0'));

    $index = 0;
    $down = false;

    for ($i = 0; $i < $length; $i++) {
        $rail[$index][$i] = '*';

        if ($index == 0 || $index == $key - 1) {
            $down = !$down;
        }

        $down ? $index++ : $index--;
    }

    $result = '';
    $counter = 0;

    for ($num = 0; $num < $key; $num++) {
        for ($i = 0; $i < $length; $i++) {
            if ($rail[$num][$i] == '*' && $counter < $length) {
                $rail[$num][$i] = $cipherText[$counter++];
            }
        }
    }

    $index = 0;
    $down = false;

    for ($i = 0; $i < $length; $i++) {
        $result .= $rail[$index][$i];

        if ($index == 0 || $index == $key - 1) {
            $down = !$down;
        }

        $down ? $index++ : $index--;
    }

    return $result;
}

$encryptedPassword = $_POST["password"];
$key = 3; // Anda bisa mengubah ini sesuai kebutuhan

$decryptedPassword = decrypt($encryptedPassword, $key);

// Gunakan $decryptedPassword untuk sistem login Anda


?>
