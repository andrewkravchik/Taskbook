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
   /*background-color: #C49F0F;*/
   /*background-color: #D1D0CE;*/
   background-color: #eeeeee;
}

.table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
  /*background-color: #FF9F9F;*/
  /*background-color: #98AFC7;*/
}
ul.nav.navbar-left a{
  margin-left: -15px;
}
 </style>
<!-- } -->
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

<!-- header menu 1 -->
<!-- <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="active" href="#">Администратор вход</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Disclaimer</a></li>
            <li><a href="#">Contact Us</a></li>
            
          </ul>
          
        </div> -->
<!-- header menu 1 -->

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
      <!-- <th>Product ID</th> -->
      <th>Имя пользователя</th>
      <th>E-mail</th>
      <th>Описание задачи</th>
      <th>Отредактированно администратором</th>
      <th></th>
  </tr>
  <tr>
      <!-- <td>1</td> -->
      <td>User 1 Demo</td>
      <td>ValidUserDemo@example.com</td>
      <td>Desription of this task 1 Desription of this task 1 Desription of this task 1 Desription of this task 1</td>
      <td>нет</td>
      <!-- <td><button type="button" class="btn btn-default">Редактировать</button></td> -->
      <td><button type="button" class="btn btn-primary">Редактировать</button></td>
  </tr>
  <tr>
      <!-- <td>2</td> -->
      <td>User 2 Demo</td>
      <td>ValidUserDemo@example.com</td>
      <td>Desription of this task 2</td>
      <td>да</td>
      <!-- <td><button type="button" class="btn btn-default">Редактировать</button></td> -->
      <td><button type="button" class="btn btn-primary">Редактировать</button></td>
  </tr>
  <tr>
      <!-- <td>3</td> -->
      <td>User 3 Demo</td>
      <td>ValidUserDemo@example.com</td>
      <td>Desription of this task 3</td>
      <td>нет</td>
      <!-- <td><button type="button" class="btn btn-default">Редактировать</button></td> -->
      <td><button type="button" class="btn btn-primary">Редактировать</button></td>
  </tr>  
  <tr>
      <!-- <td>3</td> -->
      <!-- <td>Sugar</td>
      <td>Good</td>
      <td>200 Bags</td>
  </tr> 
  <tr> -->
      <!-- <td>3</td> -->
      <!-- <td>Sugar</td>
      <td>Good</td>
      <td>200 Bags</td>
  </tr> -->
</table>
</div><br /><br />

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

