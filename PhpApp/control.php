<?php include_once("assets/fonksiyon.php"); 
$yonetim=new yonetim;
$yonetim->kontrolet("cot");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
   
    <title>Yönetim Paneli</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">    
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">   
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  
   
    <div class="page-container">
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="control.php"><img src="assets/images/logo/logo-2.png" alt="logo" /></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="control.php?sayfa=kisiekle"><i class="ti-settings"></i><span>Kişi Ekle</span></a></li>
                            <li><a href="control.php?sayfa=kisiliste"><i class="ti-folder"></i><span>Kişileri Listele</span></a></li>
                            <li><a href="control.php?sayfa=loglar"><i class="ti-user"></i><span>Loglar</span></a></li>
                            <li><a href="control.php?sayfa=kulbilgi"><i class="ti-settings"></i><span>Kullanıcı Bilgileri</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
   
        <div class="main-content">
         
            <div class="header-area">
                <div class="row align-items-center">
                  
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                      
                    </div>
               
                     <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar-1.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $yonetim->kuladial($baglanti); ?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                               
                                <a class="dropdown-item" href="control.php?sayfa=cikis">Çıkış</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="main-content-inner">
           
               <div class="row">
                    <div class="col-lg-12 mt-2 bg-white text-center" style="min-height:500px;">

                
                     

                        <?php 

                        @$sayfa=$_GET["sayfa"];

                        switch ($sayfa) :

                            case "kisiekle";
                            $yonetim->kisiekle($baglanti);
                            break;
                            case "cikis";
                            $yonetim->cikis($baglanti);
                            break;

                            case "kisiliste";
                            $yonetim->kisiliste($baglanti);
                            break;

                            case "yonsil":
                            $yonetim->yonsil($baglanti,$_GET["id"]); 
                            break;

                            case "liste";
                            $yonetim->liste($baglanti);
                            break;

                            case "webbirimi";
                            $yonetim->webbirimi($baglanti);
                            break;

                            case "sistembirimi";
                            $yonetim->sistembirimi($baglanti);
                            break;

                            case "networkbirimi";
                            $yonetim->networkbirimi($baglanti);
                            break;

                            case "idaribirimi";
                            $yonetim->idaribirim($baglanti);
                            break;
                            
                            case "loglar";
                            $yonetim->loglar($baglanti);
                            break;

                            case "kulbilgi";
                            $yonetim->kulbilgi($baglanti);
                            break;


                            


                        endswitch;

                         ?>
                    

                </div>
            </div>
            </div>
        </div>
     
    </div>
 
   

    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>  


    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>


