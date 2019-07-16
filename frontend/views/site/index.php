<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>货物寄送</title>
		<link rel="shortcut icon" href="/images/logo3.png"> <!--网站图标--->
		<link rel="stylesheet" href="/css/layui.css">
	</head>

	<body class="layui-layout-body">
		<div class="layui-layout layui-layout-admin">
			<div class="layui-header">
				<div class="layui-logo">欢迎回来！<?= yii::$app->user->identity->username; ?></div>
				<!-- 头部区域（可配合layui已有的水平导航） -->

				<ul class="layui-nav layui-layout-right">
					<li class="layui-nav-item">
						<a href="javascript:;">
							<img src="/images/1.gif" class="layui-nav-img"> <?= yii::$app->user->identity->username; ?>
						</a>
						<dl class="layui-nav-child">
							<dd>
								<a href="">基本资料</a>
							</dd>
							<dd>
								<a href="">安全设置</a>
							</dd>
						</dl>
					</li>
					<li class="layui-nav-item">
						<a href="logout">注销</a>
					</li>
				</ul>
			</div>

			<div class="layui-side layui-bg-black">
				<div class="layui-side-scroll">
					<!-- 左侧导航区域（可配合layui已有的垂直导航） -->
					<ul class="layui-nav layui-nav-tree" lay-filter="test">
						<li class="layui-nav-item layui-nav-itemed">
							<a class="" href="javascript:;">快递服务</a>
							<dl class="layui-nav-child">
								<dd>
									<a  target="right">寄快递</a>
								</dd>
                                <dd>
                                    <a  target="right">运输中</a>
                                </dd>
								<dd>
									<a target="right">历史签收</a>
								</dd>
							</dl>
						</li>

						<li class="layui-nav-item layui-nav-itemed">
							<a class="" href="javascript:;">API测试</a>
							<dl class="layui-nav-child">
								<dd>
									<a href="javascript:void(0)"  onclick="api('get请求',1)">get请求</a>
								</dd>
                                <dd>
                                   <a href="javascript:void(0)"  onclick="api('post请求',1)">post请求</a>
                                </dd>
								<dd>
									<a href="javascript:void(0)"  onclick="api('put请求',1)">put请求</a>
								</dd>
							</dl>
						</li>

					</ul>
				</div>
			</div>

			<div class="layui-body" style="z-index: 0;">
				<!-- 内容主体区域 -->
				<div style="padding: 15px;">
                    <img src="/images/world.png" style="height: 100%;width: 100%;">
                    </img>              
				</div>
			</div>

			<div class="layui-footer">
				<!-- 底部固定区域 -->
                <div class="row">
                    <p><b>&copy; 2019  Team#0731</b></p>                   
                </div>
			</div>
		</div>
		
		<script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="/myplugs/js/plugs.js">
		</script>
		<script type="text/javascript">
			//添加编辑弹出层
			function api(title, id) {
				$.jq_Panel({
					title: title,
					iframeWidth: 500,
					iframeHeight: 300,
					url: "api"
				});
			}
		</script>
		<script src="/js/layui.js"></script>
		<script>
			//JavaScript代码区域
			layui.use('element', function() {
				var element = layui.element;

			});
		</script>
	</body>

</html>