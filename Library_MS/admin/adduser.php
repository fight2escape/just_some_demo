<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'include.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理</title>
	<link rel="stylesheet" href="../styles/index.css"/>
	<link rel="stylesheet" href="styles/admin.css">
</head>
<body>
	<header>
		<a href="index.php" id="index">Library_MS</a>
		<div class="right">
			<span id="user"> </span>
			<a href="../doAction.php?act=logout" id="logout">logout</a>
		</div>
	</header>
	<div class="main">
		<div class="main_left">
			<ul>
				<li><a href="../books.php">馆藏图书信息</a></li>
				<li><a href="../history.php">图书借阅历史</a></li>
				<li><a href="../student.php">学生信息管理</a></li>
				<li><a href="../user.php">用户列表</a></li>
				<li><a href="../admin.php">管理员列表</a></li>
				<li><a href="../author.php">作者列表</a></li>
				<li><a href="../press.php">出版社列表</a></li>
			</ul>
		</div>
		<div class="main_right">
			<div class="right_top">新增用户</div>
			<div class="right_cont">
			<form action="doAdminAction.php?act=addUser" method="post" >
				<label for="book">用户名</label>
				<input type="text" name="user" placeholder="请输入学号" id="book">
				<br />
				<label for="book">密码</label>
				<input type="text" name="password" placeholder="请输入密码" id="book">
				<br />
				<label for="book">邮箱</label>
				<input type="text" name="email" placeholder="请输入email" id="book">
				<br />
				<label for="book">联系电话</label>
				<input type="text" name="phone" placeholder="请输入联系电话" id="book">
				<br />
				<input type="submit" value="submit" id="submit">
			</form>
			</div>
		</div>
	</div>
	<footer>&copy;badwolf</footer>
</body>
</html>