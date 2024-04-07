<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        #navbar {
        background-color: #333;
        position: fixed;
        top: 0;
        display:block;

        width: 100%;
        height: 60px;

        transition: top 0.3s;

    }
    input::placeholder {
        text-align: center;
    }
    .textColor{transition: 0.1s; color: white;}
    .textColor:hover {
        color: #8F8F8F;

    }
    </style>
</head>
<body>

<div id="navbar" class=" " style="height: 60px; color: white;">
    <div class="d-flex">
        <div class="col-2  text-center">
            <h1 class="fw-bold bg-danger col-12 ">Урожай контроль</h1>
            <p class="color"></p>
        </div>
        <div class="col-8 pt-3">
            <a href="" class=" ms-3 textColor">Профиль</a>
            <a href="/kar.php" class=" ms-3 textColor">карточки полей</a>
        </div>

        <div class="col-2 text-left pt-3 ">
            <a href="index.php" class=" textColor"> Вернуться </a>
        </div>
    </div>
</div>
<div class="mge">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4770cfc928e9b114f2e75cbbe157269566da20502ae707becacc7a13d597638b&amp;width=1162&amp;height=701&amp;lang=ru_RU&amp;scroll=true"></script>
</div>
</body>
</html>