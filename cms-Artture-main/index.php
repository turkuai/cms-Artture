<?php
$data = json_decode(file_get_contents("data/footer.json"), true);
?>

<!DOCTYPE html>
<html>
<body>

<footer>
    <h3><?php echo $data["company"]; ?></h3>
    <p><?php echo $data["description"]; ?></p>
    <p><?php echo $data["copyright"]; ?></p>

    <img src="uploads/logo.png" width="150">
</footer>

</body>
</html>