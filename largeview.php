<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Swanson Software</title>
	<link rel="stylesheet" href="styles/swansonsoftware.css">
	<script language="JavaScript" src="javascript/debug.js"></script>
	<script language="JavaScript" src="javascript/swansonSoftware.js"></script>

	<style type="text/css">
		p.largeViewClose {
			color:#0000ff;
			font-family:"verdana","arial","helvetica","sans-serif";
			font-size:100%; font-weight: bold; line-height:1.3; text-decoration:underline;
			margin-top:5px; margin-right:0.5in; margin-bottom:5px; margin-left:0.5in;
		}
		a {
			text-decoration:none;
		}
	</style>

<body bgcolor="#d0d0d0">
<%
strPath = request.querystring("pic")
%>
<center>
<a href="javascript:void window.close();"><p class="largeViewClose">Close Window</p></a>
  <img id="large" name="large" src="<%=strPath%>" border="4" alt="" />
</center>
</body>
</html>
