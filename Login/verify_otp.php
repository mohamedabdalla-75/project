<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['otp'];

    if (!isset($_SESSION['otp'])) {
        die("OTP lama helin, fadlan login samee mar kale.");
    }

    if (time() > $_SESSION['otp_expires']) {
        unset($_SESSION['otp']);
        die("OTP waa dhacay, fadlan login samee mar kale.");
    }

    if ($input == $_SESSION['otp']) {
        unset($_SESSION['otp']);
        unset($_SESSION['otp_expires']);

        // user waa la xaqiijiyay -> u dir index.php
        $index_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname(dirname($_SERVER['PHP_SELF'])) . '/index.php';
        header("Location: $index_url");
        exit();
    } else {
        echo "OTP khaldan, isku day mar kale.";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Verify OTP</title></head>
<body>
    <form method="post">
        <label>Geli OTP:</label>
        <input type="text" name="otp" required>
        <button type="submit">Verify</button>
    </form>
</body>
</html>
