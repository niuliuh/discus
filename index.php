<!DOCTYPE html>
<html>
<head>
	<title>欢迎访问我的博客</title>
	<link rel="stylesheet" type="text/css" href="/static/css/site.css">
	<link rel="stylesheet" type="text/css" href="/static/plugins/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="/static/js/jquery.min.js"></script>
	<script type="text/javascript" src="/static/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/static/js/UI.js"></script>
</head>
<body>
	<div class="header">
		<div class="container">
			<span class="title" >博客项目</span>
			<div class="search">
				 <div class="input-group">
      <input type="text" class="form-control" placeholder="输入标题搜索">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">搜索</button>
      </span>
    </div>
			</div>
			<div class="login">
				<button type="button" class="btn btn-success" onclick="login()">登录</button>
				<button type="button" class="btn btn-warning">发表博客</button>
			</div>
		</div>
	</div>
	<div class="main container">
		<div class="col-lg-3  col-xs-3 left-container" >
				<p class="cates">博客分类</p>
				<div class="cate-list">
					<div class="cate-item"><a href="">编程语言</a></div>
					<div class="cate-item"><a href="">软件设计</a></div>
					<div class="cate-item"><a href="">Web前端</a></div>
					<div class="cate-item"><a href="">企业信息化</a></div>
					<div class="cate-item"><a href="">安卓开发</a></div>
					<div class="cate-item"><a href="">IOS开发</a></div>
					<div class="cate-item"><a href="">软件工程</a></div>
					<div class="cate-item"><a href="">数据库技术</a></div>
					<div class="cate-item"><a href="">操作系统</a></div>
					<div class="cate-item"><a href="">其他分类</a></div>
				</div>
			</div>
		<div class="col-lg-9   col-xs-9" >
				<div class="nav ">
					<a  href="">最新</a>
					<a class="active"  href="">热门</a>
				</div>
				<div class="content-list">
					<div class="content-item">
						<img src="./static/img/avatar.png">
						<div class="title">
							<p><a href=""></a> 谈一谈</p>
							<div><span>1次浏览</span><span>2021-2-19</span></div>
						</div>
					</div>
				<div class="content-item">
						<img src="./static/img/avatar.png">
						<div class="title">
							<p><a href=""></a> 谈一谈</p>
							<div><span>1次浏览</span><span>2021-2-19</span></div>
						</div>
					</div>
					<div class="content-item">
						<img src="./static/img/avatar.png">
						<div class="title">
							<p><a href=""></a> 谈一谈</p>
							<div><span>1次浏览</span><span>2021-2-19</span></div>
						</div>
					</div>
				</div>
		</div>
	</div>

</body>
</html>
<script type="text/javascript">
	function login(){
			UI.alert({title:'系统消息',msg:'请输入用户名',icon:'IMAGE_FOUR'});	
			UI.open({title:'登录',url:'/login.php',width:500,height:500});	
	}
</script>