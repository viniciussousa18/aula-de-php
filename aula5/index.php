<!DOCTYPE html>
<html>
   <head>
        <meta http-equiv="content-Type" content="text/html";
		charset=UTF-8">
		<tittle>Cadastro de Clientes</tittle>
		  
		  
		 
		 
		 </head>
		 <body>
		 <h3> Sistemas de Clientes </h3>
		 <form action = "gravar.php" method="post">
		   Nome..:
		   <br>
		   <input type="text" name = "nome"/>
		   <br><br>
		   E-mail..:
		   <br>
		   <input type="text" name = "email"/>
		   <br><br>
		   Idade..:
		   <br>
		   <input type="text" name = "idade"/>
		   <br><br>
		   Estado Civil.:
		   <select name = "estado">
		        <option value = "">Selecione --</option>
				<option value = "Solteiro">Solteiro</option>
				<option value = "casado">Casado</option>
				<option value = "viuvo">Viuvo</option>
				<option value = "divorciado">Divorciado</option>
			</select>
			<br><br>
			<input type="submit" value="Cadastrar Cliente">
			<input type="reset" value="Limpar Campos">
		</form>
		</body>
		
	</html>