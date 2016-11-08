<?
include('testcase_db.php');
if(!isset($_SESSION))
	session_start();
?>
<html>
<head>
	<style>

	* {
  -webkit-box-sizing:border-box;
  -moz-box-sizing:border-box;
  box-sizing:border-box;
}

ul{
  margin-top:0;
  margin-bottom:11.5px;
}
body {
  font-family:"Roboto","Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size:13px;
  line-height:1.846;
  color:#666666;
  background-color:#ffffff;
}
.nav {
  margin-bottom:0;
  padding-left:0;
  list-style:none;
  margin-top:14px;
}
.nav li {
  height:50px;
}
.navbar-nav > li > a {
  padding-top:8px;
  padding-bottom:8px;
  line-height:32px;
  color:#333;
  font-weight:bold;
  background-color:rgba(255,255,255,0.4);
}
.nav > li > a:hover, .nav > li > a:focus {
  color:#fff;
  background-color:rgba(0,0,0,0.6);
  font-weight:bold;
}
	</style>
	<title>
	</title>
</head>
<body>

		<ul class="nav">
		<li class="">
			<a href="testcase_main.php">TEST-CASE</a>
		</li>
		<li class="">
			<?if(your_level($_SESSION['name'])==0)
			{?><a href="feedback_question.php">FEED-BACK</a>
			<?}
			else
			{?>
			   <a href="feedback_answer.php">FEED-BACK</a>
			<?}?>
		</li>
		<li class="">
			<a href="mypage_main.php">MY-PAGE</a>
		</li>
		<li class="">
			<a href="21view_logout.php">LOG-OUT</a>
		</li>
		</ul>
</body>
</html>
