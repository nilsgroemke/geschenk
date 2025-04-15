<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Geheimcode</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            text-align: center;
            padding: 50px;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            display: inline-block;
        }
        .code-input {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .code-input input {
            width: 40px;
            height: 40px;
            text-align: center;
            font-size: 24px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }
        .submit-btn {
            margin-top: 30px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background: #0077cc;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background: #005fa3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gib das geheime Wort ein</h1>
        <form method="post" action="">
            <div class="code-input">
                <?php
                    for ($i = 0; $i < 7; $i++) {
                        echo '<input type="text" name="char' . $i . '" maxlength="1" required>';
                    }
                ?>
            </div>
            <button type="submit" class="submit-btn">Prüfen</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $eingabe = '';
            for ($i = 0; $i < 7; $i++) {
                $eingabe .= strtoupper($_POST['char' . $i]);
            }

            if ($eingabe === strtoupper("Tauchen")) {
                header("Location: geheim.php");
                exit();
            } else {
                echo "<p style='color:red; margin-top:15px;'>Falsches Wort. Versuch es nochmal!</p>";
            }
        }
        ?>
    </div>
</body>
</html>
