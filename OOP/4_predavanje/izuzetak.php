<?php


// primjer1
$broj1 = 5;
$broj2 = 0;

try {
    $rezultat = $broj1 / $broj2;
    echo $rezultat;
} catch(DivisionByZeroError $e) {
    echo $e->getMessage() . "\n";
} finally {
    echo "Sada smo na kraju programa. \n";
}

echo "\n";

// primjer 2
$email = "domagoj.brilligmail.com";

try {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email je ispravan \n";
    } else {
        throw new Exception("Email nije ispravan \n");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
