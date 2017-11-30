<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<style>
		*{
			margin:0px;
			padding:0px;
		}
		ul {
			position:relative;
			background-color: #c0c;
			width:40px;
			list-style-type:none;
			text-align:center;
			border-radius: 8px;
			box-shadow: 4px 1px 1px 1px #ccc;
		}
		a{
			text-decoration: none;
		}
	</style>
	<script src="jquery.js"></script>
	<script>
		$(function(){
			$(this).bind('mousedown',function(){
				if(event.which==3)
					$('#u1').css({'left':event.clientX+'px','top':event.clientY+'px','display':'block'});
			})
			$(this).bind('contextmenu',function(){return false;});
			$(this).bind('mouseup',function(){
				if(event.which==1)
					$('#u1').css({'display':'none'});
			})
		})
	</script>
</head>
<body>
	<ul id="u1">
		<li><a href="www.baidu.com" target="_black">111</a></li>
		<li><a href="http://www.qq.com" target="_black">111</a></li>
		<li><a href="">111</a></li>
		<li><a href="">111</a></li>
	</ul>
</body>
</html>