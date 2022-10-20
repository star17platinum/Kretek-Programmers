<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST & GET</title>
</head>
<body>
    <h1>Belajar GET & POST</h1>

    <form method="POST" action="">
        <input type="text" name="nama">
        <input type="text" name="alamat">
        <input type="submit" value="submit">
    </form>

    <p><?php echo "nama : ". $_POST["nama"] ?></p>
    <p><?php echo "alamat". $_POST["alamat"] ?></p>
</body>
</html>