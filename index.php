<?php
  $catches =["İnsan", "Kedi", "Comer"];
  $data = [
    ["question" => "aklında tuttuğun şey canlımı ?",
      "answers" => [
        "Evet" => "?nextQuestion=1",
        "Hayır" => "?nextQuestion=3"
      ]
    ],
    [
      "question" => "bu şey düşünebilirmi?",
      "answers" => [
        "Evet" => "?writeAnswer=".$catches[0],
        "Hayır" => "?nextQuestion=2"
      ]
    ],
    [
      "question" => "bu şey miyavlarmı ?",
      "answers" => [
        "Evet" => "?writeAnswer=".$catches[1],
        "Hayır" => "index.php"
      ]
    ],
    [
      "question" => "bu şey bir yazılım mı?",
      "answers" => [
        "Evet" => "?writeAnswer=".$catches[2],
        "Hayır" => "index.php"
      ]
    ]
  ];
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

<?php if (isset($_GET["writeAnswer"])) { ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">İşte cevabım <b><?php echo $_GET["writeAnswer"]; ?></b></h5>
            <div class="mt-2 d-flex justify-content-evenly align-items-center">
                <a href="index.php" class="btn btn-primary">Yeniden Başla</a>
            </div>
        </div>
    </div>

<?php } else {
  $index = isset($_GET["nextQuestion"]) ? $_GET["nextQuestion"] : 0;
  ?>
    <div class="card">
      <?php if ($index == 0) : ?>
          <h5 class="card-header text-center">
              Şunlardan birini aklında tut
              <div class="mt-4 w-100 d-flex justify-content-between">
                <?php foreach ($catches as $catch): ?>
                    <button type="button" disabled class="btn btn-primary"><?=$catch?></button>
                <?php endforeach; ?>
              </div>
          </h5>
      <?php endif; ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $data[$index]["question"] ?></h5>
            <div class="mt-2 d-flex justify-content-evenly align-items-center">
              <?php foreach ($data[$index]["answers"] as $answerKey => $answerValue) { ?>
                  <a href="<?= $answerValue ?>" class="btn btn-primary"><?= $answerKey ?></a>
              <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>