<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Registrar Usuarios:</title>
     <link rel="stylesheet" href="vaidroll.css">	
</head>
<body>
<div class="caja1">
<form method="post" action="login.php">
<div class="formtlo">Registrar Usuario..</div>
<div class="ub1">* Registrar un usuario</div>
<input type="text" name="txtusuario">
<div class="ub1">* Registre una contraseña</div>

<input type="password" name="txtpassword" id="txtpassword">

<div class="ub1">
<input type="checkbox" onclick="verpassword()" >Mostrar contraseña
 </div>
<div class="ub1">Rol</div>
<select name="rol">
<option value="0" style="display:none;"><label>Seleccionar</label></option>
<option value="Usuario">Usuario</option>
<option value="Admin">Administrador</option>
</select>

<div align="center">
<input type="submit" value="Registrar">

<input type="reset" value="Cancelar"><br><br>

</div>
<form>
</div>
</body>
<script>
  function verpassword(){
      var tipo = document.getElementById("txtpassword");
      if(tipo.type == "password")
	  {
          tipo.type = "text";
      }
	  else
	  {
          tipo.type = "password";
      }
  }
</script>
</html>