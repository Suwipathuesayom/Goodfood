
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/tracker.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>goodfood</title>


  </head>
<style>
  body{
    font-family: 'Kanit', 'Roboto', sans-serif;
  }
</style>
  <body>



<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-warning">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
  <div class="collapse navbar-collapse float-right" id="navbarNavAltMarkup">
  <a class="navbar-brand" style="color: red; " href="index.php"><h3><B>GOODFOOD</B></h3></a>
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="welcome.php">โปรโมชั่น |<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="#">เมนูเพิ่มเติม |</a>
      <a class="nav-item nav-link active" href="#">เครื่องดื่ม |</a>
      <a class="nav-item nav-link  active" href="#">เมนูจัดเลี้ยง</a>
    </div>
    <div class="Signin ml-auto">
    <a class="login-item login-link active float-right" href="signin.php"><i class="fas fa-user-circle"></i>เข้าสู่ระบบ</a>
    </div>
    </div>
  </div>
</nav><BR>

<div class="container">

<div class="row justify-content-center use-my-location">
    <div class="col-12 d-none d-md-block">
        <div class="margin-top-10">
                <p class="text-right">
                    <span>
                        <a class="auth-link float-right" href="/myaccount">สุวิภา</a>
                    </span>
                </p>
        </div>
    </div>
    <div class="col-12 col-md-8 col-lg-8 col-xl-6 locationStartOrdering margin-top-50">
        <div class="text-center margin-bottom-15 umlpage-title">
            <h2 class="text-center margin-bottom-0">ระบุตำแหน่งในการจัดส่ง</h2>
            
        </div>
        <div class="align-self-center text-center uml-btn">
            <a href="javascript:void(0);" class="btn btn-block mobile margin-top-5 margin-bottom-15" onclick="showLocationDialogContent();">ใช้ตำแหน่งปัจจุบัน</a>
            <p onclick="showsearchbyown(this,'searchbyown');" class="margin-bottom-30">หรือ <a href="javascript:void(0);">ค้นหาสถานที่ใกล้เคียง</a></p>
            <div class="row">
                <div id="searchbyown" class="d-none col-12  searchbyown">
                    <div class="input-wrapper">
                        <input class="ui-autocomplete-input pac-target-input" data-val="true" data-val-requiredif="Please set a street, city or postcode ." data-val-requiredif-dependentproperty="SelectedOrderMode" data-val-requiredif-desiredvalue="Carryout" id="RestaurantSearchKeyword" name="RestaurantSearchKeyword" placeholder="ค้นหาสถานที่ใกล้เคียง" type="text" value="" autocomplete="off">
                    </div>
                    <input name="__RequestVerificationToken" type="hidden" value="08Dx7t9kuh-tNqNUC2CJmIAKNbqCEhanicFiXu9OI2KgYUaLCqS88vuKRZA_TkAE4RMr7joA0C5aK7vvPUU7Hs8m966V9pZQl93q6yNuZk3L82KiNpMePBy-pETwQ5mN0">
                    <span class="field-validation-valid text-danger help-block" data-valmsg-for="RestaurantSearchKeyword" data-valmsg-replace="true"></span>
                </div>
            </div>
        </div>
        <div class="align-self-center margin-top-10 uml-cancel">
            <a href="/menu" class="btn block white margin-bottom-30"><span>ยกเลิก</span></a>
            
        </div>
    </div>
    <div class="w-100"></div>
</div>
</div>
<!--footer-->
<div class="footer">
  <!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

      <!-- Content -->
      <h5 class="font-weight-bold text-uppercase mb-4">บริการลูกค้า</h5>
      <a class="text-footer" href="">คำถามที่พบบ่อย</a><br>
      <a class="text-footer" href="ordertracker.php">ติดตามคำสั่งซื้อ</a><br>
      <a class="text-footer" href="">ติดต่อเรา</a>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mb-4">นโยบาย</h5>

      <ul class="list-unstyled">
        <li>
          <p>
            <a href="#!">เงื่อนไขการใช้บริการ</a>
          </p>
        </li>
        <li>
          <p>
            <a href="#!">คำชี้แจงความเป็นส่วนบุคคล</a>
          </p>
        </li>
        <li>

      </ul>

    </div>

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

      <!-- Social buttons -->
      <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

      <!-- Facebook -->
      <a type="button" class="btn-floating btn-fb" href="#">
      <i class="fab fa-facebook"></i>
      </a>
      <!-- Twitter -->
      <a type="button" class="btn-floating btn-tw" href="#">
        <i class="fab fa-twitter"></i>
      </a>
      <!-- Google +-->
      <a type="button" class="btn-floating btn-gplus" href="#">
        <i class="fab fa-google-plus-g"></i>
      </a>
      <!-- Dribbble -->
      <a type="button" class="btn-floating btn-dribbble" href="#">
        <i class="fab fa-dribbble"></i>
      </a>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright
  <a href="https://mdbootstrap.com/">By: Wittawat,Suwipa</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

