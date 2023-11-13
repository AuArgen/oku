<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Шарттуу операторлор</title>
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container pt-2">
        <h1 class="text-center">IF or ELSE, ELSE IF</h1>
        <div class="row justify-content-center">
            <?
                if (isset($_POST["jiberuu"])) {
                    $fio = $_POST["fio"];
                    $email = $_POST["email"];
                    if ($fio == '') {
                        echo 'Маалымат туура эмес';
                    }
                }
            ?>
            <div class="col-md-5 col-12">
                <form action="" class="form-control shadow-sm p-2" method="post">
                    <label for="a" class="form-label">Аты-жонунуз:</label>
                    <input type="text" id="a" name="fio" class="form-control" placeholder="Адрей Иванович">
                    <br>
                    <label for="b" class="form-label">Емайл дарек:</label>
                    <input type="email" id="b" name="email" class="form-control" placeholder="andreiivanovich@gmail.com">
                    <br>
                    <input type="reset" class="form-control">
                    <br>
                    <input type="submit" name="jiberuu" class="form-control">
                </form>
            </div>
        </div>
    </div>
</body>
</html>