<html>  
<head>  
<title>Login</title>  
<meta http-equiv="Content-Type"  content= "text/html; charset=gb2312" >  
</head>  
  
<body>  
<form name="form1"  method= "post"  action= "3.2login.php" >  
  <table width="300"  border= "0"  align= "center"  cellpadding= "2"  cellspacing= "2" >  
    <tr>  
      <td width="150" ><div align= "right" >用户名：</div></td>  
      <td width="150" ><input type= "text"  name= "username" ></td>  
    </tr>  
    <tr>  
      <td><div align="right" >密码：</div></td>  
      <td><input type="password"  name= "passcode" ></td>  
    </tr>  
    <tr>  
      <td><div align="right" >保存Cookie：</div></td>  
      <td><select name="cookie"  id= "cookie" >  
                    <option value="0"  selected>浏览器进程</option>  
                    <option value="1" >保存1天</option>  
                    <option value="2" >保存30天</option>  
                    <option value="3" >保存365天</option>  
                  </select></td>  
    </tr>  
  </table>  
  <p align="center" >  
    <input type="submit"  name= "Submit"  value= "Submit" >  
    <input type="reset"  name= "Reset"  value= "Reset" >  
  </p>  
</form>  
</body>  
</html>  
