<?php
function generatePassword($length) {
   
    $lowercaseCharacters = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseCharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberCharacters = '0123456789';
    $specialCharacters = '!@#$%^&*()_+';

   
    $combinedAllCharacters = $lowercaseCharacters . $uppercaseCharacters . $numberCharacters . $specialCharacters;

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        
        $randomChar = $combinedAllCharacters[rand(0, strlen($combinedAllCharacters) - 1)];

        $password .= $randomChar;
    }

    return $password;
}

$generatedPassword = generatePassword(12);

echo "Generated Password: $generatedPassword\n";
?>