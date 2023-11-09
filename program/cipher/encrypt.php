<!-- <?php

//   $username = ($_POST["username"]);
//   $password = ($_POST["password"]);
//   $key = "tugas";

//   function vigenere($src, $key, $is_encode){
//       $key = strtoupper($key);
//       $src = strtoupper($src);
//       $dest = '';

//       /* strip out non-letters */
//       for($i = 0; $i <= strlen($src); $i++) {
//           $char = substr($src, $i, 1);
//           if(ctype_upper($char)) {
//               $dest .= $char;
//           }
//       }

//       for($i = 0; $i <= strlen($dest); $i++) {
//           $char = substr($dest, $i, 1);
//           if(!ctype_upper($char)) {
//               continue;
//           }
//           $dest = substr_replace($dest,
//               chr (
//                   ord('A') +
//                   ($is_encode
//                   ? ord($char) - ord('A') + ord($key[$i % strlen($key)]) - ord('A')
//                   : ord($char) - ord($key[$i % strlen($key)]) + 26
//                   ) % 26
//               )
//           , $i, 1);
//       }
//       return $dest;
//     }


function encrypt($plainText, $key) {
    $length = strlen($plainText);
    $rail = array_fill(0, $key, '');
    
    $index = 0;
    $down = false;

    for ($i = 0; $i < $length; $i++) {
        $rail[$index] .= $plainText[$i];

        if ($index == 0 || $index == $key - 1) {
            $down = !$down;
        }

        $down ? $index++ : $index--;
    }

    $result = '';
    for ($i = 0; $i < $key; $i++) {
        $result .= $rail[$i];
    }

    return $result;
}

$username = $_POST["username"];
$password = $_POST["password"];
$key = 3; // Anda bisa mengubah ini sesuai kebutuhan

$encryptedPassword = encrypt($password, $key);

// Gunakan $encryptedPassword untuk sistem login Anda


?>
