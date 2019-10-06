<!DOCTYPE html>
<html>
<head>
<title>Приложение задачник</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.table-striped>tbody>tr:nth-child(odd)>td, 
.table-striped>tbody>tr:nth-child(odd)>th {
   background-color: #eeeeee;
}
.table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
}
ul.nav.navbar-left a{
  margin-left: -15px;
}
 </style>
</head>
<body>

<div class="container">
	<div class="page-header">
		<div class="text-center">
			<h1>Задачник</h1>      
		</div>
	</div>     
</div>

<div class="container ">
	<div class="collapse navbar-collapse" id="navcol-1">
		<ul class="nav navbar-nav navbar-left">
			<li role="presentation"><a href="<?php getenv('HTTP_HOST') ?>">Список задач</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li role="presentation"><a href="#">Вход для администратора</a></li>
		</ul>
	</div>
	<h1 class="well">Новая задача</h1>
</div>

<div class="container">
	<div class="col-lg-12 well">
		<div class="row">
			<form>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-6 form-group">
							<label>Имя пользователя*</label>
							<input type="text" placeholder="Введите имя пользователя сюда..." class="form-control">
						</div>
						<div class="col-sm-6 form-group">
							<label>email*</label>
							<input type="text" placeholder="Введите етектронную почту email сюда.." class="form-control">
						</div>
					</div>					
					<div class="form-group">
						<label>Задача*</label>
						<textarea placeholder="Напишите текст задачи сюда.." rows="3" class="form-control"></textarea>
					</div>	
					<button type="button" class="btn btn-lg btn-info">Создать</button>					
				</div>
			</form> 
		</div>
	</div>
</div>

</body>
</html>