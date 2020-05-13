<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Личный кабинет</title>
  </head>
  <body>
<!--Header-->
    <div style="position: absolute; width: 100vw; height: 70px; background-color: #84243b" class="row">
      <a href="enter.php" class="h-100"> <img src="logo.png" class="h-100" ></a>
      
      <button class="border-0" style="background-color: #84243b; margin-left: 10px; margin-top: 20px; height: 25px; padding-bottom: 30px;"><a href="aboutUs.html"><h4 class="px-2 text-light font-weight-light"> О нас</h4></a></button>
      <h4 class="px-2 text-light font-weight-light" style="background-color: #84243b; margin-left: 800px; margin-top: 20px; height: 25px; padding-bottom: 30px;"><?php echo $_GET['name'];?></h4>
      <h4 class="px-2 text-light font-weight-light" style="background-color: #84243b; margin-left: 0px; margin-top: 20px; height: 25px; padding-bottom: 30px;"><?php echo $_GET['surname'];?></h4>
      <button class="border-0 ml-auto mr-1" style="background-color: #84243b; margin-left: 10px; margin-top: 20px; height: 25px; padding-bottom: 30px;"><a href="shoper.php"><img src="shoper.png" style="height: 40px; "></a></button>
    </div>
<!--Sale-->
    <div class=" shadow-lg" style="position: absolute; background-image: url(ykt.jpg); background-size: 100%; height: 450px; width: 100vw; position: absolute; margin-top: 70px;">
    <!--Choose village-->
      <div class="dropdown mx-auto" style="margin-top: 170px;">
        <button  class="btn rounded-pill col-6" style="background-color: #84243b; margin-left: 370px; height: 25px; width: 50vw; padding-bottom: 50px; margin-top: 50px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <h2 class="px-2 text-light font-weight-normal" style="text-shadow:  0 0 1em black" href="zakaz_form.php">Выберите населенный пункт</h2>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <form method="GET" action="zakaz_form.php"  name="chooseVillage">
            <input type="hidden" name="village" value="Аппаны">
            <button class="dropdown-item">Аппаны</button>
          </form>
            <a class="dropdown-item" href="#">...</a>
            <a class="dropdown-item" href="#">...</a>
          
        </div>
      </div>
    </div>
      <div class="container">
        <table style="position: absolute; margin-top: 700px;" class="container" >
          <tr>
            <td class="border col-4" ><h3 class="border col-" >Активный заказ</h3></td>
            <td class="border col-6" ><h3><?php echo $_GET['del'];?> руб.</h3></td>
          </tr>
        </table>
      </div>
           
       

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>