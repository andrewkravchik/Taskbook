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
  background-color: #98AFC7;
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
                        <li role="presentation"><a href="#">Вход для администратора</a></li>
                        
                    </ul>
                </div>

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
  <!-- <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div> -->
  <button type="submit" class="btn btn-primary">Войти</button>
</form>