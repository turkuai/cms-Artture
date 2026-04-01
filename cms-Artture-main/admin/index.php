<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $data = [
        "company" => $_POST["company"],
        "description" => $_POST["description"],
        "copyright" => $_POST["copyright"]
    ];

    file_put_contents("../data/footer.json", json_encode($data, JSON_PRETTY_PRINT));

    // Logo upload
    if (isset($_FILES["logo"]) && $_FILES["logo"]["tmp_name"]) {
        move_uploaded_file($_FILES["logo"]["tmp_name"], "../uploads/logo.png");
    }

    echo "Tallennettu!";
}
?>

<h2>Admin</h2>

<form method="POST" enctype="multipart/form-data">
    <input name="company" placeholder="Yritys"><br>
    <textarea name="description" placeholder="Kuvaus"></textarea><br>
    <input name="copyright" placeholder="Copyright"><br><br>

    <input type="file" name="logo"><br><br>

    <button type="submit">Tallenna</button>
</form>