<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="refresh" content="5400" />
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

        <meta http-equiv="Pragma" content="no-cache"/>
        <meta http-equiv="Expires" content="-1"/>
        <meta http-equiv="Cache-Control" content="no-cache"/>

        <meta name="keywords" content="Topics"/>
        <meta name="description" content="Topics"/>
        <meta name="robots" content="index, follow"  />
        <meta name="googlebot" content="index, follow">
        <meta name="revisit-after" content="1 days" />
        <meta name="generator" content="Topics" />
        <meta name="rating" content="General">

        <meta property="og:url" content=""> <!--url-->
        <meta property="og:description" content="Topics">
        <meta property="og:title" content="Topics">
        <meta property="og:image" content=""> <!--link img-->
        <meta property="og:site_name" content=""> <!--url-->
        <meta property="og:type" content="product" />
        <meta property="og:locale" content="vi_VN" />
        <meta itemprop="image" content=""> <!--link img-->

        <meta property="article:section" content="Topics" />
        <meta property="article:tag" content="Topics" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="" />
        <meta name="twitter:title" content="Topics" />
        <meta name="twitter:description" content="Topics" />
        <meta name="twitter:image" content="" /> <!--link img-->
        <meta name="twitter:url" content="" /> <!--url-->

        <title>Thông báo đăng nhập</title>

        <link rel="shortcut icon" type="image/x-icon" href=""/> <!--icon-->

        <link type="text/css" rel="stylesheet" href="css/dropdown.css" />
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/animate.min.css" rel="stylesheet" type="text/css">
        <link href="css/style-pop.css" rel="stylesheet" type="text/css">
        <!--css-->
        <link rel='stylesheet' id='gfont-style-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A100%2C300%2C300italic%2C400%2C400italic%2C500%2C700%2C900%7CRoboto+Slab%3A300%2C400%2C700%7CArapey%3A400%2C400italic%7CLobster%7CCinzel%7CPoiret+One%3A400%7CJosefin+Sans%3A400%7CDomine%3A400&#038;ver=4.4.5' type='text/css' media='all' />
    </head>

	<body class="cbp-spmenu-push">
         <?php 
            include("header.php");
            include("login.php");
            include("register.php");
        ?>

        <div class="container" style="z-index:1 !important;">
            <div class="row" style="display:flex;margin:50px 0;">
                <div class="col-md-7" style="margin:auto;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">Thông báo đăng nhập</div>
                        </div>
                        <div class="panel-body">
                                <?php
                                    // session_start();
                                    //Tạo kết nối đến CSDL
                                    include('control/configure.php');
                                    $msg = '';   
                                    //Truy vấn đến CSDL
                                    if(isset($_REQUEST['username'])&&isset($_REQUEST['password'])&&isset($_REQUEST['btnLogin'])){
                                        $username = $_REQUEST['username'];
                                        $password = $_REQUEST['password'];
                                        $sql = "SELECT * FROM user WHERE username = '{$username}' AND password = (md5('{$password}'))";
                                        $query = mysqli_query($con,$sql);
                                        $num_rows = mysqli_num_rows($query);
                                        if ($num_rows==0) {
                                            $msg = "Tên đăng nhập hoặc mật khẩu không đúng!";
                                        }
                                        while ($row = mysqli_fetch_array($query)){  
                                            //Kiểm tra thành viên hợp lệ không
                                            if($row['state']=='0'){
                                                $msg = "Tài khoản của bạn chưa được kích hoạt, vui lòng xác nhận qua email mà bạn đã đăng ký.";
                                            }else{
                                                //Đưa vào 1 mảng $row
                                                $_SESSION['iduser'] = $row['iduser'];
                                                $_SESSION['role'] = $row['idrole'];
                                                $_SESSION['username'] = $row['username'];
                                                $_SESSION['fullname'] = $row['fullname'];
                                                ?>
                                                <script language="javascript">
                                                    history.back();
                                                </script>
                                                <?php
                                            }
                                            
                                        }      
                                        //Bước 4: Đóng kết nối đến server
                                    mysqli_close($con);
                                    }
                                ?>
                                <div class="noti-repwd-me"><br><br><i><?php echo $msg; ?></i></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php 
        include("footer.php");
    ?>

<!-- <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script> -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type='text/javascript' src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/style.js"></script>
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script src="js/dropdown.js"></script>
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--javascript-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>

<script type="text/javascript">
  $(document).ready(function() {      
    $().UItoTop({ easingType: 'easeOutQuart' });
              
    });
</script>
    </body>