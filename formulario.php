<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset = "utf8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
</head>


<script type="text/javascript">
	
numero = 0;

function less() {
  numero--;
  setValue(numero);
}

function more() {
  numero++;
  setValue(numero);
}

function setValue(value) {
  document.getElementById('num').value = value;
  if(value<0){
  	document.getElementById('num').value = 0;
  	numero = 0;
  }
}

setValue(numero);


function insert(){
	window.alert(numero + " Adesivo(s) solicitados dos selecionados!");
}


</script>
<body>


<div class="container2">



<div class="container" name="formcontato" method="POST" action="salva.php">

	<div class="cabeca" >
		<div class="cabeca" >
		<div style=" background-color: transparent; width: 200px; padding-left: 20px;padding-top: 10px;">
		<h4>Formulário <br> para compras de</h4>
		<h3>Pacote de adesivos</h3>
		</div>
		
		<div><img class="img" src="img/box.png"></div>
		
	</div>
		
	</div>
	<div class="form-horizontal">
		
		<div >
					<label class="col-sm-2 control-label">
						Quais adesivos: 
					</label>

					<div class="spacer"></div>

					<div class="col-sm-10">
					
						<div>
							<input class="input" type="checkbox" name="scales" value="1">
							<label for="scales">React</label>
						</div>

						<div>
							<input type="checkbox" name="scales" value="2">
							<label for="scales">Vue</label>
						</div>

						<div>
							<input type="checkbox"  name="scales" value="3">
							<label for="scales">Angular</label>
						</div>

					</div>
				</div>

				<div class="spacer"></div>
				
				<div >
					<label>
						Quantos Adesivos de cada: 
					</label>

				</div>

				<div style="margin-top: 10px;">
					
					<button type="button" class="btnContador" onclick="less();">-</button>
					<input class="inputNumber" id="num">
					<button type="button" class="btnContador" onclick="more();">+</button>

				</div>

				<div class="spacer"></div>
				

				
				<div >
					<label for="mensagem" class="col-sm-2 control-label">
						Observações: 
					</label>
					<div style="margin-top: 10px;">
						<?php
							if(!empty($_SESSION['value_mensagem'])){ ?>
								<textarea class="form-control" name="mensagem"><?php echo $_SESSION['value_mensagem']; ?></textarea>
								<?php
								unset($_SESSION['value_mensagem']);
							}else{ ?>
								<textarea class="form-control" name="mensagem"></textarea>
							<?php }
						?>
						 <?php
							if(!empty($_SESSION['vazio_mensagem'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_mensagem']."</p>";
								unset($_SESSION['vazio_mensagem']);
							}
						 ?>
					</div>
				</div>
				
				<!-- <input class="btn btn-success" type="submit" value="Enviar" onclick="return validar_form_contato()"> -->


	</div>
	<div class="footer">
		<input class="button" type="submit" value="ENVIAR" onclick="return insert();"></button>
	</div>
</div>





</body>
</html>