<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">		
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	body {
		background-image: url(back1.gif) ;
		background-size: cover;
		
	}
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
<body >
<div id="navbar" class=" " style="height: 60px; color: white;">
	<div class="d-flex">
		<div class="col-2  text-center">
			<h1 class="fw-bold bg-danger"></h1>
			<p class="color"></p>
		</div>
		<div class="col-8 pt-3">
			<a href="" class=" ms-3 textColor"></a>
			<a href="" class=" ms-3 textColor"></a>
		</div>
		
		<div class="col-2 text-left pt-3 ">
			<a href="index.php" class=" textColor">  </a>
		</div>
	</div>
</div>
	<div>
		<img src="">
	</div>
	<div class="col-5 mx-auto mt-4 ps-3 pe-3 pb-4 " style="background: #333; border-radius: 20px;">
		<form action="insert.php" method="GET"style=" text-align: center;">
			<input class="col-12 mt-4" placeholder="имя" type="" name="username">
			<input class="col-12 mt-2" placeholder="пароль" type="" name="pass">
			<button type="submit" class="btn-danger btn  mt-2" >Зарегистрироваться</button>
		</form>	
	</div>
</body>
</html>