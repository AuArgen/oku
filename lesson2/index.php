<!-- METHOD POST and GET -->
<!-- POST - BUL MAALYMATTY SHIFIRLEP JIBERET JANA KOZGO KORUNBOIT BIR GANA IRET KOLDONULAT -->
<!-- GET - BUL MAALYMATTY OZGOTPOI JIBERET JE SSYLKA UCHUN KOLDONULAT -->
<!-- SABAKTA -->
<!-- ICONKA ULAIBYZ -->
<!-- FORM TUZOBUZ BOOTSTRAPTA -->
<!-- POST KOLDONOBUZ -->
<!-- GET KOLDONOBUZ -->
<!-- TAPSHYRMA -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST JANA GET</title>
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container pt-5">
        <form action="./post.php" method="post" class="form-control shadow-sm p-5">
            <h1>POST method</h1>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"> <i class="fa fa-user"></i> </span>
                <input type="text" class="form-control" name="at" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"> <i class="fa fa-envelope"></i> </span>
                <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
            </div>
            <input type="submit" name="sendNazgul" class=" btn btn-primary">
        </form>
    </div>
    <div class="container pt-5">
        <form action="get.php" method="get" class="form-control shadow-sm p-5">
            <h1>GET method</h1>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"> <i class="fa fa-user"></i> </span>
                <input type="text" class="form-control" name="at" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"> <i class="fa fa-envelope"></i> </span>
                <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
            </div>
            <select name="pol" class="form-select" id="" required>
                <option value="">Change your pol</option>
                <option value="1">Man</option>
                <option value="2">Woman</option>
            </select>
            <br>
            <input type="submit" name="sendNazgul" class=" btn btn-primary">
        </form>
    </div>
</body>
</html>