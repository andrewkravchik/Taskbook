<!DOCTYPE html>
<html>
<head>
<title>Приложение-задачник</title>
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
      <li role="presentation"><a href="/add-task.php">Создать новую задачу</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li role="presentation"><a href="#">Вход для администратора</a></li>
    </ul>
  </div>
</div>

<div class="container"
  <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Логин*</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Логин">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Пароль*</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Пароль">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Войти</button>
  </form>
</div>

</body>
</html>