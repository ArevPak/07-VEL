<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php
        $connect = mysqli_connect('127.0.0.1','root','root','cootyara_hak');
        $query = mysqli_query($connect, 'SELECT * FROM zakazy');
         $summ = 0;
         $pak = 0;
        for ($i=0; $i < $query->num_rows; $i++) { 
         
          $res = mysqli_fetch_assoc($query);
          $summ = $res['price'] + $summ;
          $pak = $pak + 1;
        }
        ?>
        <!--Header-->
    <div style="position: absolute; width: 100vw; height: 70px; background-color: #84243b" class="row">
      <a href="enter.html" class="h-100"> <img src="logo.png" class="h-100" ></a>
      
      <button class="border-0" style="background-color: #84243b; margin-left: 10px; margin-top: 20px; height: 25px; padding-bottom: 30px;"><a href="aboutUs.html"><h4 class="px-2 text-light font-weight-light"> О нас</h4></a></button>
      <h4 class="px-2 text-light font-weight-light" style="background-color: #84243b; margin-left: 800px; margin-top: 20px; height: 25px; padding-bottom: 30px;"><?php echo $_GET['name'];?></h4>
      <h4 class="px-2 text-light font-weight-light" style="background-color: #84243b; margin-left: 0px; margin-top: 20px; height: 25px; padding-bottom: 30px;"><?php echo $_GET['surname'];?></h4>
      <button class="border-0 ml-auto mr-1" style="background-color: #84243b; margin-left: 10px; margin-top: 20px; height: 25px; padding-bottom: 30px;"><a href="shoper.php"><img src="shoper.png" style="height: 40px; "></a></button>
    </div>
  <!--Header1-->
    <div style="background-color: #84243b; padding-top: 70px;">
      <div class="row">
        <h4 class="font-weight-light text-light ml-4" style="margin-top: 50px;">Оформили заказ <?php echo $pak; ?> человек</h4>
        <div>
          <h3 class="text-center text-light pt-3" style="margin-left: 400px;">с. Аппаны</h3>
          <h4 class="font-weight-light text-light" style="margin-left: 100px;">Минимальная сумма :</h4>
          <div style="margin-left: 100px; height: 20px; width: 700px; background-color: #adadad; position: absolute;" class="grey"></div>
          <div style="margin-left: 100px; height: 20px; width: 0px; background-color:red ; position: absolute;" class="block"></div>
          <div style="margin-left: 100px; height: 20px; width: 700px; background-color: #03f994; position: absolute; display: none;" class="green"></div>
        </div>
      </div>
      <div class="row mt-5">
        <p style="margin-left: 370px;" class="text-light">0 руб</p>
        <p style="margin-left: 670px;" class="text-light">10 000 руб</p>
      </div>

      
        <?php
        if ($summ<='2000') {
          ?>
            <script>
              let bl = document.querySelector('.block');
              bl.style.width = '100px';
            </script>
          <?php
        }
         
         if ($summ<='5000') {
          ?>
            <script>
              let bl = document.querySelector('.block');
              bl.style.width = '300px';
            </script>
          <?php
        }
        if ($summ<='8000') {
          ?>
            <script>
              let bl = document.querySelector('.block');
              bl.style.width = '500px';
            </script>
          <?php
        }
        if ($summ<='10000') {
          ?>
            <script>
              let bl = document.querySelector('.block');
              bl.style.width = '700px';
            </script>
          <?php
        }
        else {
          ?>
            <script>
              let gr_bl = document.querySelector('.green');
              let gBl = document.querySelector('.grey');
              gBl.style.display = "none";
              gr_bl.style.display = "block";
            </script>
          <?php
        }
        ?>
      </div>
      <?php
        $query_kat = mysqli_query($connect, 'SELECT * FROM products');?>
        
      <!--Katalog-->
          
            <div class="row">
            <?php for ($i=0; $i < $query_kat->num_rows; $i++) { 
            $result = mysqli_fetch_assoc($query_kat);?>
            <div class="col-3" style="background-color: red; margin-left: 100px; margin-top: 20px;">
                <img src="<?php echo $result['img']?>.png" class="col-10 ml-4 mr-4">
              <div class=" col-10 mx-auto pb-2" style="background-color: green">
                <h3 class="text-left"><?php echo $result['name']; ?></h3>
                <p class="text-left"><?php echo $result['feature']; ?></p>
                <p class="text-right"><?php echo $end_price = $result['price']*0.15+$result['price']; ?> руб</p>
                <form method="GET" action="shoper_ent.php">
                  <input type="hidden" name="name" value="<?php echo $result['name']; ?>">
                  <input type="hidden" name="price" value="<?php echo $end_price; ?>">
                  <input type="hidden" name="feature" value="<?php echo $result['feature']; ?>">
                  <input type="hidden" name="img" value="<?php echo $result['img']; ?>">
                  <button>В корзину</button>
                </form>
              </div>
            </div>
            
          
       <?php } ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>