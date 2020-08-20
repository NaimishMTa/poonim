


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="anthor" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=divice-width,initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 mt-8 bg-transparent rounded">
        <h1 class="text-center font-weight-bold text-transparent ">For Query</h1>
        <hr class="bg-light">
        <h5 class="text-center text-success"></h5>
        <form  action="mail.php" method="post" id="form-box" class="p-2">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-mobile"></i></span>
            </div>
            <input type="text" pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number" name="contact" class="form-control" placeholder="Enter Your Contact Number" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
            </div>
            <textarea name="msg" id="msg" class="form-control" placeholder="Write Messages" cols="30" rows="4" required=""></textarea>
          </div>         
          <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary brn-block" value="send" style="width: 50%">
          </div>
        </form>
      </div>
    </div>
  </div>
 
</body>
</html>