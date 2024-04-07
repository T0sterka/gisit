<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поля</title>
    <style type="text/css">
        #navbar {
        background-color: #333;
        top: 0;
        display:block;

        width: 100%;
        height: 60px;

        transition: top 0.3s;
        }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
<body>
<div id="navbar" class="" style="height: 100px; color: white;">
    <div class="d-flex">
        <div class="col-2  text-center">
            <h1 class="fw-bold bg-danger">Урожай контроль</h1>
            <p class="color"></p>
        </div>
        <div class="col-8 pt-3">
        </div>

        <div class="col-2 text-left pt-3 ">
            <a href="main.php" class=" textColor"> Вернуться </a>
        </div>
        <!-- <div class="col-5 mx-auto mt-5 ps-3 pe-3 pb-4 " style="background: #333; border-radius: 20px;">
            <form action="insertp.php" method="GET"style=" text-align: center;">
                <input class="col-12 mt-2" placeholder="ава" type="" name="img">
                <input class="col-12 mt-2" placeholder="название" type="" name="title">
                <input class="col-12 mt-2" placeholder="описание" type="" name="comment">
                <button type="submit" class="btn-danger btn  mt-2" >Найти</button>
            </form>	
        </div> -->
    </div>
</div>
<?
$con = mysqli_connect("127.0.0.1", "root", "", "gisit"); 

$query = mysqli_query($con, "SELECT * FROM pol ORDER BY id DESC");

$num = mysqli_num_rows($query);


?>

<div class="d-flex mt-2 flex-wrap ">
			<!--карточка проекта-->
		<?
			for($i=0; $i<$num; $i++) {
				$result = mysqli_fetch_assoc($query);
		?>	
			<div class="col-3 p-3 mt-2 ms-5 text-light" style="background-color: #333;" >
				<div class="col-12 box rounded-3 p-3" >
					<div class="" style="background-image: url(<? echo $result['img'] ?>); background-size: cover; background-position: center; height:250px">				
					</div>
					<div>
						<h3><?echo $result['title']; ?><!--Заголовок проекта--></h3>
						<p><?echo $result['comment']; ?><!--Описание проекта--></p>
					</div>
				</div>
			</div>	
	    <?	
			}
        ?>  
        </div>
</body>
</html>