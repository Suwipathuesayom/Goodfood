<?php

    session_start();

    if ($_SESSION['id'] == "") {
        header("location: signin.php");
    } else {


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/menu.css">
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
      <a class="nav-item nav-link active" href="menu.php">เมนูเพิ่มเติม |</a>
      <a class="nav-item nav-link active" href="menu2.php">เครื่องดื่ม |</a>
      <a class="nav-item nav-link  active" href="#">เมนูจัดเลี้ยง</a>
    </div>
    <div class="navbar-nav ml-auto">
    <div class="dropdown show">
  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-user-circle"></i><?php echo $_SESSION['fname']; ?>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">ดูเมนูโปรด</a>
    <a class="dropdown-item" href="#">ที่อยู่ในการจัดส่ง</a>
    <a class="dropdown-item" href="signin.php">ออกจากระบบ<i class="fas fa-sign-out-alt"></i></a>
  </div>
</div>
</nav>

<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1587033649720-6850605eb2f1?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1018&q=80" alt="Second slide" alt="Third slide" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1586816001966-79b736744398?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80">
      <div class="carousel-caption d-none d-md-block">

  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1579871493788-211b9c3c090e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80">
      <div class="carousel-caption d-none d-md-block">

  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><BR>


<div class="content row content-padding ng-scope">
    <aside class="col-md-3 col-12 d-none d-lg-block" ng-class="ismobilecatopen?'open':''">
        <div class="left-panel">
            <p class="margin-bottom-12 ng-binding">
                เมนูเพิ่มเติม:
            </p>
            <ul class="asideSubcat" ng-show="itemsList.SelectedCategory.SubCategories.length > 1">
                <!-- ngRepeat: subCat in itemsList.SelectedCategory.SubCategories track by $index --><li ng-repeat="subCat in itemsList.SelectedCategory.SubCategories track by $index" ng-class="{'active':(subCat.Id == selectedSubCategory)}" ng-init="$parent.selectedSubCategory = $parent.selectedSubCategory ? $parent.selectedSubCategory : itemsList.SelectedCategory.SubCategories[0].Id;" class="ng-scope active">
                    <a ng-click="$parent.selectedSubCategory = subCat.Id;selectSubCategory(subCat);scrollToPos();showsubmenumobile();" class="ng-binding" href="#">
                        ไก่
                    </a>
                </li><!-- end ngRepeat: subCat in itemsList.SelectedCategory.SubCategories track by $index --><li ng-repeat="subCat in itemsList.SelectedCategory.SubCategories track by $index" ng-class="{'active':(subCat.Id == selectedSubCategory)}" ng-init="$parent.selectedSubCategory = $parent.selectedSubCategory ? $parent.selectedSubCategory : itemsList.SelectedCategory.SubCategories[0].Id;" class="ng-scope">
                    <a ng-click="$parent.selectedSubCategory = subCat.Id;selectSubCategory(subCat);scrollToPos();showsubmenumobile();" class="ng-binding" href="#">
                        เซ็ตกับข้าว
                    </a>
                </li><!-- end ngRepeat: subCat in itemsList.SelectedCategory.SubCategories track by $index --><li ng-repeat="subCat in itemsList.SelectedCategory.SubCategories track by $index" ng-class="{'active':(subCat.Id == selectedSubCategory)}" ng-init="$parent.selectedSubCategory = $parent.selectedSubCategory ? $parent.selectedSubCategory : itemsList.SelectedCategory.SubCategories[0].Id;" class="ng-scope">
                    <a ng-click="$parent.selectedSubCategory = subCat.Id;selectSubCategory(subCat);scrollToPos();showsubmenumobile();" class="ng-binding" href="#">
                        เบอร์เกอร์
                    </a>
                </li><!-- end ngRepeat: subCat in itemsList.SelectedCategory.SubCategories track by $index --><li ng-repeat="subCat in itemsList.SelectedCategory.SubCategories track by $index" ng-class="{'active':(subCat.Id == selectedSubCategory)}" ng-init="$parent.selectedSubCategory = $parent.selectedSubCategory ? $parent.selectedSubCategory : itemsList.SelectedCategory.SubCategories[0].Id;" class="ng-scope">
                    <a ng-click="$parent.selectedSubCategory = subCat.Id;selectSubCategory(subCat);scrollToPos();showsubmenumobile();" class="ng-binding" href="#">
                        ทานเล่น
                    </a>
                </li><!-- end ngRepeat: subCat in itemsList.SelectedCategory.SubCategories track by $index --><li ng-repeat="subCat in itemsList.SelectedCategory.SubCategories track by $index" ng-class="{'active':(subCat.Id == selectedSubCategory)}" ng-init="$parent.selectedSubCategory = $parent.selectedSubCategory ? $parent.selectedSubCategory : itemsList.SelectedCategory.SubCategories[0].Id;" class="ng-scope">
                    <a ng-click="$parent.selectedSubCategory = subCat.Id;selectSubCategory(subCat);scrollToPos();showsubmenumobile();" class="ng-binding" href="#">
                        เครื่องเคียง และเครื่องดื่ม
                    </a>
                </li><!-- end ngRepeat: subCat in itemsList.SelectedCategory.SubCategories track by $index -->
            </ul>
        </div>
    </aside>
    <div class="menu-wrapper col-lg-9 col-12">
        <!--<span class="showcategory-icon d-md-none" ng-click="showsubmenumobile();" ng-class=" ismobilecatopen?'active':''">{{ismobilecatopen?'less':'more'}}<span class="showmoreCaret"></span></span>-->
        <aside class="row d-lg-none" ng-class="ismobilecatopen?'open':''">
            <div class="left-panel">
                <!--<p class="margin-bottom-12">
                    {{::itemsList.SelectedCategory.CategoryUIName}}:
                </p>-->
                <ul class="asideSubcatmob" ng-show="itemsList.SelectedCategory.SubCategories.length > 1">
                    <!-- ngRepeat: subCat in itemsList.SelectedCategory.SubCategories track by $index --><li ng-repeat="subCat in itemsList.SelectedCategory.SubCategories track by $index" ng-class="{'active':(subCat.Id == selectedSubCategory)}" ng-init="$parent.selectedSubCategory = $parent.selectedSubCategory ? $parent.selectedSubCategory : itemsList.SelectedCategory.SubCategories[0].Id;" class="ng-scope">
                        <a ng-click="$parent.selectedSubCategory = subCat.Id;selectSubCategory(subCat);scrollToPos();showsubmenumobile();" class="ng-binding">
                            ไก่
                        </a>
                    </li><!-- end ngRepeat: subCat in itemsList.SelectedCategory.SubCategories track by $index --><li ng-repeat="subCat in itemsList.SelectedCategory.SubCategories track by $index" ng-class="{'active':(subCat.Id == selectedSubCategory)}" ng-init="$parent.selectedSubCategory = $parent.selectedSubCategory ? $parent.selectedSubCategory : itemsList.SelectedCategory.SubCategories[0].Id;" class="ng-scope">
                        <a ng-click="$parent.selectedSubCategory = subCat.Id;selectSubCategory(subCat);scrollToPos();showsubmenumobile();" class="ng-binding">
                            ข้าวและโบว์ล
                        </a>
                    </li><!-- end ngRepeat: subCat in itemsList.SelectedCategory.SubCategories track by $index --><li ng-repeat="subCat in itemsList.SelectedCategory.SubCategories track by $index" ng-class="{'active':(subCat.Id == selectedSubCategory)}" ng-init="$parent.selectedSubCategory = $parent.selectedSubCategory ? $parent.selectedSubCategory : itemsList.SelectedCategory.SubCategories[0].Id;" class="ng-scope active">
                        <a ng-click="$parent.selectedSubCategory = subCat.Id;selectSubCategory(subCat);scrollToPos();showsubmenumobile();" class="ng-binding">
                            เบอร์เกอร์
                        </a>
                    </li><!-- end ngRepeat: subCat in itemsList.SelectedCategory.SubCategories track by $index --><li ng-repeat="subCat in itemsList.SelectedCategory.SubCategories track by $index" ng-class="{'active':(subCat.Id == selectedSubCategory)}" ng-init="$parent.selectedSubCategory = $parent.selectedSubCategory ? $parent.selectedSubCategory : itemsList.SelectedCategory.SubCategories[0].Id;" class="ng-scope">
                        <a ng-click="$parent.selectedSubCategory = subCat.Id;selectSubCategory(subCat);scrollToPos();showsubmenumobile();" class="ng-binding">
                            ทานเล่น
                        </a>
                    </li><!-- end ngRepeat: subCat in itemsList.SelectedCategory.SubCategories track by $index --><li ng-repeat="subCat in itemsList.SelectedCategory.SubCategories track by $index" ng-class="{'active':(subCat.Id == selectedSubCategory)}" ng-init="$parent.selectedSubCategory = $parent.selectedSubCategory ? $parent.selectedSubCategory : itemsList.SelectedCategory.SubCategories[0].Id;" class="ng-scope">
                        <a ng-click="$parent.selectedSubCategory = subCat.Id;selectSubCategory(subCat);scrollToPos();showsubmenumobile();" class="ng-binding">
                            เครื่องเคียง และเครื่องดื่ม
                        </a>
                    </li><!-- end ngRepeat: subCat in itemsList.SelectedCategory.SubCategories track by $index -->
                </ul>
            </div>
        </aside>
        <!-- ngIf: $root.isLoggedIn --><div class="menu-user-area ng-isolate-scope" ng-if="$root.isLoggedIn" userdata="$root.userData">
    <h2 class="menu-user-area__welcome-msg h4 desktop ng-binding">สวัสดี,<?php echo $_SESSION['fname']; ?></h2>
    <div class="row  menu-user-area margin-top-10">
        <!-- ngIf: lastOrder --><div class="desktop col-12 col-md-6 col-xl-4 ng-scope" ng-if="lastOrder">
           </div>
    </div>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
  <dt class="ng-binding">1x ข้าวกระเพราไก่</dt>
  <li ng-repeat="modifier in modifierGroup.Modifiers" class="ng-binding ng-scope">3x เฟรนซ์ฟรายส์ชีส</li>
  <li ng-repeat="modifier in modifierGroup.Modifiers" class="ng-binding ng-scope">1x ไก่ทอดออริจินอล</li>
  <li ng-repeat="modifier in modifierGroup.Modifiers" class="ng-binding ng-scope">1x เบอร์เกอร์ชีสหมู</li>
    <button href="#" class="btn btn-danger">สั่งซื้ออีกครั้ง (฿133) </button>
    <button href="#" class="btn btn-success">การสั่งซื้อที่ผ่านมา</button>
  </div>
</div><BR>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="https://images.unsplash.com/photo-1527960471264-932f39eb5846?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Fanta</h5>
      <button class="btn btn-danger">จาก ฿35.00</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://images.unsplash.com/photo-1546695259-ad30ff3fd643?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pepsi</h5>
      <button class="btn btn-danger pull-right">จาก ฿35.00</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Coffee</h5>
      <button class="btn btn-danger">จาก ฿79.00</button>
    </div>
  </div>
</div>
</div>
</div><BR>
<hr>
<br>
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
      <a class="text-footer" href="searchorder.php">ติดตามคำสั่งซื้อ</a><br>
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
    <script src="script/menuslide.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php

}
?>