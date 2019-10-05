<!DOCTYPE html>
<html>
<head>
<title>Bootstrap basic table example</title>
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
 </style>
</head>
<body>
<div class="container ">
<table class="table table-striped table-hover">
  <tr>
      <!-- <th>Product ID</th> -->
      <th>Имя пользователя</th>
      <th>E-mail</th>
      <th>Описание задачи</th>
      <th>Выполнено</th>
  </tr>
  <tr>
      <!-- <td>1</td> -->
      <td>User 1 Demo</td>
      <td>ValidUserDemo@example.com</td>
      <td>Desription of this task 1</td>
      <th>нет</th>
  </tr>
  <tr>
      <!-- <td>2</td> -->
      <td>User 2 Demo</td>
      <td>ValidUserDemo@example.com</td>
      <td>Desription of this task 2</td>
      <th>нет</th>
  </tr>
  <tr>
      <!-- <td>3</td> -->
      <td>User 3 Demo</td>
      <td>ValidUserDemo@example.com</td>
      <td>Desription of this task 3</td>
      <th>да</th>
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

</body>
</html>

