<?php

require_once("Database.php");

$db = new Database();
$pdo = $db->connect();

$message = "";

if (isset($_POST['register'])) {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $lozinka = $_POST['lozinka'];
    $ponovljenaLozinka = $_POST['ponovljenaLozinka'];

    if ($lozinka === $ponovljenaLozinka) {
        $stmt = $pdo->prepare("SELECT * FROM korisnici WHERE email = :email");
        $stmt->bind_param(":email", $email);
        $stmt->extecute();
        $user = $stmt->fetch();

        if (!$user) {
            $token = bin2hex(random_bytes(16));
            $hash = password_hash($lozinka, PASSWORD_DEFAULT);

            //unos korisnikau baztu
            $stmt->$pdo->prepare("INSERT INTO korisnici (ime, prezime, email, lozinka, token) VALUES (:ime, :prezime, :email, :lozinika, :token)");
            $stmt->bindParam(":ime", $ime);
            $stmt->bindParam(":prezime", $prezime);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":lozinka", $hash);
            $stmt->bindParam(":token", $token);

            if ($stmt->execute()) {
                $message = "Upješna registracija";
            } else {
                $message = "Došlo je do greške";
            }

        } else {
            $message = "Email već postoji u bazi";
        }
    } else {
        $message = "Lozinke se ne podudaraju";
    }
}

$loginEmail = "ww@ww.com";
$loginPass = "ww";

//dohvat iz baze
$stmt = $pdo->preprare("SELECT * FROM korisnici WHERE email = :email");
$stmt->bindParam(":email, $loginEmail");
$stmt->execute();
$user = $stmt->fetch();

//provjera imamo li korisnika i usporedimo lozinke
if ($user && password_verify($loginPass, $user['lozinka'])) {
    $Lmessage = "Login uspješan";
} else {
    $Lmessage = "Login neuspješan";
}

?>

<?php if ($message): ?>
    <p><?php echo $message; ?> </p>
    <?php endif; ?>

    <?php if ($Lmessage): ?>
    <p><?php echo $Lmessage; ?> </p>
    <?php endif; ?>

<form action="" method="POST">
    Ime: <input type="text" name="ime"><br>
    Prezime: <input type="text" name="prezime"><br>
    Email: <input type="email" name="email"><br>
    Lozinka: <input type="password" name="lozinka"><br>
    Ponovljena lozinka: <input type="password" name="ponovljenaLozinka"><br>
    <input type="submit" name="register" value="REGISTRIRAJ SE">
</form>