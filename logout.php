<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>千寻网--合肥工业大学失物招领</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Head Navbar -->
<?php
include_once "php/header.php";
include_once "php/function.php";
include_once "php/config.php";
?>
<!-- Body Main -->
<div class="container">

  
 <form class="form-horizontal col-sm-4 col-sm-offset-4" role="form" id="forget" action="forget.php">
   <h3>请不要离开我~~~   *(^_^)*    </h3>
   <?php
	//session_start();
	//session_unset();
	session_destroy();
    mysql_close();
	echo_message("正在退出..." ,3);

?>  
</form>
</div>

<!-- Footer -->
<?php
    include_once "php/footer.php";
?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/reg.js"></script>

<!-- hfutfind.com Baidu tongji analytics -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");

document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F2ef7e98a67ec1cfb8f1b6dcee50de923' type='text/javascript'%3E%3C/script%3E"));

</script>

</body>
</html>