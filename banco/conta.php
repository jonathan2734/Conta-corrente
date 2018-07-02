<!DOCTYPE>
<html>
	<head>
		<title>Conta corrente</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="conta.css">
	</head>
	<body>
		<div id="meio">
			<form method="get" action="conta.php">
            	<div id="topo">
                <?php
					$v = isset ($_GET["v"])?$_GET["v"]:0;
					session_start();
					$s = isset($_SESSION["total"])?$_SESSION["total"]:0;
					$operacao = isset ($_GET["lista"])?$_GET["lista"]:0;
					if ($operacao == "l1") {
						(int)$_SESSION["total"] += (int)$v;
					}
					elseif ($operacao == "l2") {
						(int)$_SESSION["total"] -= (int)$v;
					}
				?> 
            		<h2 id="demo"> Bem vindo, Atualize a página ao iniciar</h2>
                <?php 
					echo "<h2> Seu saldo atual é R$ ".number_format($s,2)."</h2>" 
				?>
                	<h2> Selecione a operaçao e digite um valor</h2> 
                    <h2> Depois clique em algum dos botões duas vezes</h2>
                </div>
                <h2><u class="barra"> Nova operação </u></h2>
                <div id="field">    
				<fieldset id="q1">
					<legend>Operação</legend>
						<input type="radio" name="lista" value="l1">Crédito <br>   
						<input type="radio" name="lista" value="l2">Débito
				</fieldset>
                </div>
				<fieldset id="q2">
					<legend>valor</legend>
					<label>R$</label> <input type="number" name="v" value="<?php echo $nome; ?>">
				</fieldset>
				<br>
				<input type="submit" name="saque" value="Realizar
Operaçao" id="saque">
				<br>
				<input type="submit" name="deposito" value="Atualizar
Saldo" id="deposito">
                <br>
			</form>
        	<div id="caixa">
            	<?php
            	echo "<h3> Operação realizada </h3>";
                echo "<h3> Com sucesso. Saldo atual:</h3>";
                echo "<h3> R$ ".number_format($s,2)."</h3>";
				?>	
            </div>
		</div>
        <script src="conta.js"> </script>	
	</body>
</html>