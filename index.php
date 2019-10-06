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
      <li role="presentation"><a href="/admin.php">Вход для администратора</a></li>
    </ul>
  </div>
  <table class="table table-striped table-hover">
    <tr>
      <th>Имя пользователя</th>
      <th>E-mail</th>
      <th>Описание задачи</th>
      <th>Отредактированно администратором</th>
      <th></th>
    </tr>
      <tr>
        <td>User 1 Demo</td>
        <td>ValidUserDemo@example.com</td>
        <td>Desription of this task 1 Desription of this task 1 Desription of this task 1 Desription of this task 1</td>
        <td>нет</td>
        <td><button type="button" class="btn btn-primary">Редактировать</button></td>
      </tr>
    <tr>
      <td>User 2 Demo</td>
      <td>ValidUserDemo@example.com</td>
      <td>Desription of this task 2</td>
      <td>да</td>
      <td><button type="button" class="btn btn-primary">Редактировать</button></td>
    </tr>
    <tr>
      <td>User 3 Demo</td>
      <td>ValidUserDemo@example.com</td>
      <td>Desription of this task 3</td>
      <td>нет</td>
      <td><button type="button" class="btn btn-primary">Редактировать</button></td>
    </tr>  
  </table>
</div>

<br /><br />

<div class="container ">
  <div class="text-center">
    <nav>
      <ul class="pagination">
        <li>
        <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        </a>
        </li>
        <li class="active"><a href="#" >1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li>
          <a href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
        </ul>
    </nav>
  </div>
</div>

</body>
</html>

