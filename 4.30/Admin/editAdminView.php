<?php 
include_once '../include.php';
$id=$_REQUEST['id'];
$sql="select id,username,password,email from ".ADMIN." where id = '{$id}'";
// print_r($sql);
$row=fetchOne($sql);
// print_r($row);
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ChinaKnow Admin</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.php" class="navbar-brand">Admin</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.php">Home</a></li>
                <li><a href="../index.html" target="_blank">ChinaKnow</a></li>
            </ul>
        </div>

    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>Menu</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>Admin</a>
                    <ul class="sub-menu">
                        <li><a href="admin-design.php"><i class="icon-font">&#xe0017;</i>Management</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>User</a>
                    <ul class="sub-menu">
                        <li><a href="user-design.html"><i class="icon-font">&#xe017;</i>Management</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>Post</a>
                    <ul class="sub-menu">
                        <li><a href="post-design.html"><i class="icon-font">&#xe017;</i>Management</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>Tag</a>
                    <ul class="sub-menu">
                        <li><a href="tag-design.html"><i class="icon-font">&#xe017;</i>Management</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>Activity</a>
                    <ul class="sub-menu">
                        <li><a href="activity-design.php"><i class="icon-font">&#xe017;</i>Management</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>Article</a>
                    <ul class="sub-menu">
                        <li><a href="article-design.php"><i class="icon-font">&#xe017;</i>Management</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.php">Index</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="admin-design.php">Management</a><span class="crumb-step">&gt;</span><span>Add New</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="editAdmin.php?id=<?php echo $row['id'];?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th><i class="require-red">*</i>Name:</th>
                            <td>
                                <input class="common-text required" id="key1" name="username" size="50" value="" type="text" placeholder="<?php echo $row['username'];?>">
                            </td>
                        </tr>
                            <tr>
                                <th><i class="require-red">*</i>Password:</th>
                                <td>
                                    <input class="common-text required" id="key2" name="password" size="50" value="" type="password">
                                </td>
                            </tr>
                            <tr>
                                 <th><i class="require-red">*</i>Email:</th>
                                 <td>
                                <input class="common-text required" id="key3" name="email" size="50" value="" type="text" placeholder="<?php echo $row['email'];?>">
                            </td>
                        </tr>
                            <tr>
                                <th>Contents：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="Submit" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="Return" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>
