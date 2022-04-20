<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <h1 style = " background: url(https://images.unsplash.com/photo-1487700160041-babef9c3cb55?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1152&q=80);
    height: 100%;
    background-position: right;
    background-size: cover ">
    <style>
      button{
        color: Black;
        border-radius: 20px;
      }
      .container{
        height: 500px;
        width:700px;

      }
      .center {
        display: flex;
        justify-content: left;
        position: absolute;
        left: 60%;
        bottom: 31%;
      }
      .data{
        height: 25vh;
        width: 30vh;
        display: grid;
        position: absolute;
        right: 0vh;
        top: 71vh;


      }
      .item{
        text-align: center;
        margin-left auto;
        margin-right: auto;
      }
      .auto{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 150px;
      }


    </style>

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">

      <h1 class="container">            
        <div class="center">
          <div style ="display: table-cell; background: transparent;">
          <div style = " width: 100%; background-colour: white" >

              <div style = "width: 100%; font-size: 30px">
              <a> Get access to your account from your home</a>
              <br>
              <div style = "width: 50%; font-size: 20px">
              <a> Get all the facilities on your finger tips</a>
              <div 
              <br>
              <a href="createuser.php"><button style="background-color : #72dc8a;" style="border-radius:23px">Register Now</button></a>
                  </div></h1><br><br><br><br><br>
    </div>
        <div class = "data"style=" position: right ;width: 40%; display: table;">
        <div class = "item" style="display: table-row; height: 100px;">
            <div style="width: 50%; display: table-cell; background: coral;">
             
              <a class="btn btn-default btn-lg" href="transfermoney.php" role="button">DO TRANSACTION</a>
               
               <br>
         <img src="https://www.cms.gov/files/image/transactions.png" class = "auto">
     
                
                 
            </div>
            <div class="item" style="display: table-cell; background: #db7693;"> 
              
               <a class="btn btn-default btn-lg" href="transactionhistory.php" role="button">VIEW HISTORY</a>
               <br>
                <img src="https://www.pinclipart.com/picdir/big/363-3632294_money-bag-comments-simple-money-outline-clipart.png" class= "auto" style="height:143px;width:auto">
                 
            </div>
        </div>
    </div>

    



     <footer class="text-center mt-5 py-2" style = "font-size:15px">
        <p>&copy 2022 Made by <b>ADITYA</b></p>
      </footer>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>