<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Корзина</title>
  </head>
  <body>
    <h2 class="text-center">Корзина</h2>
    <?php
      $connect = mysqli_connect("127.0.0.1","root","root","user_1");
      $query = mysqli_query($connect,'SELECT * FROM shoper'); 
      $itog = 0;
      for ($i=0; $i < $query->num_rows; $i++) { 
        $result = mysqli_fetch_assoc($query); ?>
        <div class="container">
          <div class="" style="background-color: #adadad; display: flex;">
            <div class="col-5 pt-3 pb-3" style="background-color: #84243b;">
              <img src="<?php echo $result['img'];?>.png" class="ml-3 col-11">
            </div>
            <h4 style="margin-left: 300px; margin-top: 50px;"><?php echo $result['feature'];?></h4>
            <h4 style="margin-left: 30px; margin-top: 50px;"><?php echo $result['price'];?></h4>
          </div>
        </div>

           
        <?php
         $itog = $itog + $result['price'];

       } 
       ?>
       <div class="container">
          <div class="" style="background-color: #adadad; display: flex;">
            <div class="col-5 pt-3 pb-3" style="background-color: #84243b;">
              <h3 class="ml-3 col-11">Стоимость товаров: </h3>
            </div>
            <h4 style="margin-left: 500px; margin-top: 50px;"><?php echo $itog?> руб</h4>
          </div>
        </div>
        <?php
          $conn = mysqli_connect("127.0.0.1","root","root","cootyara_hak");
          $quer = mysqli_query($conn,'SELECT * FROM zakazy'); 
          $pak = 0;
          for ($i=0; $i < $quer->num_rows; $i++) { 
            $res = mysqli_fetch_assoc($query); 
            $pak = $pak + 1;
          }
          $pak = $pak + 1;?>
          <div class="container">
          <div class="" style="background-color: #adadad; display: flex;">
            <div class="col-5 pt-3 pb-3" style="background-color: #84243b;">
              <h3 class="ml-3 col-11">Стоимость доставки: </h3>
            </div>
            <h4 style="margin-left: 500px; margin-top: 50px;"><?php echo $deliv = round(2200/$pak);?> руб</h4>
          </div>
        </div>
        <div class="container">
          <div class="" style="background-color: #adadad; display: flex;">
            <div class="col-5 pt-3 pb-3" style="background-color: #84243b;">
              <h3 class="ml-3 col-11">Итого: </h3>
            </div>
            <h4 style="margin-left: 500px; margin-top: 50px;"><?php echo $del = $itog + $deliv;?> руб</h4>
          </div>
        </div>
         <form method="GET" action="zakaz_deliv.php" style="margin-left: 700px; margin-top: 100px; padding-bottom: 100px;">
           <input type="hidden" name="id_pak" value="<?php echo $result['id_user'];?>">
           <input type="hidden" name="price" value="<?php echo $deliv;?>">
           <input type="text" name="adress" placeholder="adress">
           <input type="hidden" name="del" value="<?php echo $del;?>">
           <button>Отправить</button>
         </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>