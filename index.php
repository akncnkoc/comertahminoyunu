<?php
$catch = ["insan", "kedi", "comer"];
$questions = ["bu şey düşünebilirmi?", "bu şey miyavlarmı ?", "bu şey bir yazılım mı?"];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comer Tahmin Oyunu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body, html {
            width: 100%;
            height: 100%;
            display: grid;
            place-items: center;
            background: darkgray;
        }
    </style>
</head>
<body>
<?php
if (!isset($_GET["nextQuestion"]) && !isset($_GET["writeAnswer"])) {
    ?>
    <div class="card">
        <h5 class="card-header text-center">
            Şunlardan birini aklında tut
            <div class="mt-4 w-100 d-flex justify-content-between">
                <button type="button" disabled class="btn btn-primary">İNSAN</button>
                <button type="button" disabled class="btn btn-primary">KEDİ</button>
                <button type="button" disabled class="btn btn-primary">COMER</button>
            </div>
        </h5>
        <div class="card-body">
            <h5 class="card-title">Aklında tuttuğun şey canlımı ?</h5>
            <div class="mt-2 d-flex justify-content-evenly align-items-center">
                <a href="?nextQuestion=1" class="btn btn-primary">Evet</a>
                <a href="?nextQuestion=3" class="btn btn-primary">Hayır</a>
            </div>
        </div>
    </div>
<?php } else if (@$_GET["nextQuestion"] == 1) { ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $questions[0]; ?></h5>
            <div class="mt-2 d-flex justify-content-evenly align-items-center">
                <a href="?writeAnswer=İnsan" class="btn btn-primary">Evet</a>
                <a href="?nextQuestion=2" class="btn btn-primary">Hayır</a>
            </div>
        </div>
    </div>
<?php } else if (@$_GET["nextQuestion"] == 2) { ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $questions[1]; ?></h5>
            <div class="mt-2 d-flex justify-content-evenly align-items-center">
                <a href="?writeAnswer=Kedi" class="btn btn-primary">Evet</a>
                <a href="index.php" class="btn btn-primary">Hayır</a>
            </div>
        </div>
    </div>
<?php } else if (@$_GET["nextQuestion"] == 3) { ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $questions[2]; ?></h5>
            <div class="mt-2 d-flex justify-content-evenly align-items-center">
                <a href="?writeAnswer=COMER" class="btn btn-primary">Evet</a>
                <a href="index.php" class="btn btn-primary">Hayır</a>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (isset($_GET["writeAnswer"]) && trim($_GET["writeAnswer"]) !== "") { ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">İşte cevabım <b><?php echo $_GET["writeAnswer"]; ?></b></h5>
            <div class="mt-2 d-flex justify-content-evenly align-items-center">
                <a href="index.php" class="btn btn-primary">Yeniden Başla</a>
            </div>
        </div>
    </div>
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>