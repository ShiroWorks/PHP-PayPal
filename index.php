<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2 class="center-align">Pay for something</h2>

        <form action="checkout.php" method="post" autocomplete="off">
        <div class="row">
        <div class="input-field col s6 offset-s3">
          <input id="product" name="product" type="text" class="validate">
          <label for="product">Product</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 offset-s3">
          <input id="price" type="number" name="price" class="validate">
          <label for="price">Price</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 offset-s3">
      <button class="btn waves-effect waves-light" type="submit" name="action">Pay
  </button>
  </div>
  </div>
        </form>
    
    
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
</body>
</html>