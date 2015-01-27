<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="../Css/style.css" />
    <script type="text/javascript" src="../Js/jquery.js"></script>
    <script type="text/javascript" src="../Js/bootstrap.js"></script>
    <script type="text/javascript" src="../Js/ckform.js"></script>
    <script type="text/javascript" src="../Js/common.js"></script>

 

    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }


    </style>
</head>
<body>
<form class="form-inline definewidth m20" action="index.php" method="get">    
    用户名称：
    <input type="text" name="username" id="username"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; <a href="opuser.php?op=add"><button type="button" class="btn btn-success" id="addnew">新增用户</button></a>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>用户id</th>
        <th>用户名称</th>
        <th>邮箱</th>
        <th>密码</th>
        <th>手机</th>
        <th>QQ</th>
        <th>权限</th>
        <th>头像</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    </thead>
    <tbody>
    <?php
        include_once "../../php/config.php";
                    $username = $_GET["username"];
                    $sql = "select * from t_user 
                     where uname like '%".$username."%'  order by uid asc ";
                    // $rowsArray = $conne -> getRowsArray($sql);
                    $result = mysql_query($sql);

            

                    if($result&&mysql_num_rows($result)>0){

            $pageSize = 10;
            $curpage = 1;
            $countPage = 0;
            $curpage = $_GET["page"] == null ? "1" : $_GET["page"];
            $i = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $i++;
                        if ($i > ($curpage - 1) * $pageSize && $i <= $curpage * $pageSize) {                            
                        echo "<tr><td>".$row['uid']."</td>
                            <td>".$row['uname']."</td>
                            <td>".$row['uemail']."</td>
                            <td>".$row['upwd']."</td>
                            <td>".$row['utel']."</td>
                            <td>".$row['uqq']."</td>
                            <td>".$row['upower']."</td>
                            <td>".$row['uheader']."</td>
                            <td><a href='opuser.php?op=look&uid=".$row['uid']." '>查看具体</a></td>
                            <td><a href='opuser.php?op=edit&uid=".$row['uid']." '>编辑</a></td>
                            <td><a href='opuser.php?op=del&uid=".$row['uid']." '>删除</a></td>
                            </tr>";
                        
                    }
                }
                  $countPage = ($i + $pageSize - 1) / $pageSize;
            }
                mysql_close();
            ?>
            </tbody>
</table>
<div class="inline pull-right page">
         共<?php echo $i;?> 条记录 <?php echo $curpage;?>/<?php if($i/$pageSize< 1){ echo "1";}else{ echo $countPage; }
         ?> 页  

        <a href="index.php?page=1">首页</a>
        <?php if ($curpage != 1) {?>
            <a href="index.php?page=<?php 
            echo $curpage - 1;?>">上一页</a>
        <?php }?>
        <?php 
            if ($curpage < ((int)$i/$pageSize)  ) {
        ?>
            <a href="index.php?page=<?php 
            echo $curpage + 1;?>">下一页</a>
        <?php 
            }
            
            
        ?>

        <a href="index.php?page=<?php echo $countPage;?>">尾页</a>
        
</div>
</body>
</html>