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
   /*background-color: #C49F0F;*/
   background-color: #D1D0CE;
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

	<div class="collapse navbar-collapse" id="navcol-1">
  
  <ul class="nav navbar-nav navbar-left">
  	<?php
    	 //$parsedUrl = parse_url($_SERVER['DOCUMENT_ROOT']);
		 //$root      = $parsedUrl['scheme'] . '://' . $parsedUrl['host'] . '/';
  		//$hostname = getenv('HTTP_HOST');
    ?>
    <li role="presentation"><a href="<?php getenv('HTTP_HOST') ?>">Список задач</a></li>
  </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li role="presentation"><a href="#">Вход для администратора</a></li>
                        
                    </ul>
                </div>

                <h1 class="well">Новая задача</h1>

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
						<!-- <div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" placeholder="Enter State Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text" placeholder="Enter Zip Code Here.." class="form-control">
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Title</label>
								<input type="text" placeholder="Enter Designation Here.." class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Company</label>
								<input type="text" placeholder="Enter Company Name Here.." class="form-control">
							</div>	
						</div>						
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" placeholder="Enter Phone Number Here.." class="form-control">
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="text" placeholder="Enter Email Address Here.." class="form-control">
					</div>	
					<div class="form-group">
						<label>Website</label>
						<input type="text" placeholder="Enter Website Name Here.." class="form-control">
					</div> -->
					<button type="button" class="btn btn-lg btn-info">Создать</button>					
					</div>
				</form> 
				</div>
	</div>