

<html>
<head>
	<style>
	@font-face {
     font-family: myriadpro;
     src: url('MyriadPro-Cond.otf');
	}
	#campo {background-color:tomato; width: 55%; height: 30%; border-radius: 25px;}
	html {background-color:lightblue; font-family: "myriadpro";}

	#id_input{
		width: 200px; 
	}	
	#id_input2{
		width: 400px; 
		height: 100px;
	}	

	#enviar{
		background-color: #FF4500;
		width: 100px;
		height: 30px;
		font-family: "myriadpro";
		letter-spacing: 1px;
		font-size: 20px;
		border-radius: 10px;
		border-style: solid;
	}

	#enviar:hover{
		background-color: tomato;

	}

	label {
		font-size: 40px;
	}

	#faq {
			margin-left: 50px;
			width: 100px;
			height: 100px;
			float:left; }
	#faq:hover { background-color:tomato;}

		.switch {
		  position: absolute;
		  margin-left: -9999px;
		  visibility: hidden;
		}

		.switch + label {
		  display: block;
		  position: relative;
		  cursor: pointer;
		  outline: none;
		  user-select: none;
		}
		.switch--shadow + label {
		  padding: 2px;
		  width: 40px;
		  height: 30px;
		  background-color: #dddddd;
		  border-radius: 30px;
		}

					.switch--shadow + label:before,
			.switch--shadow + label:after {
			  display: block;
			  position: absolute;
			  top: 1px;
			  left: 1px;
			  bottom: 1px;
			  content: "";
			}
			.switch--shadow + label:before {
			  right: 1px;
			  background-color: #f1f1f1;
			  border-radius: 30px;
			  transition: all 0.4s;
			}
			.switch--shadow + label:after {
			  width: 30px;
			  background-color: #fff;
			  border-radius: 100%;
			  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
			  transition: all 0.4s;
			}

			.switch--shadow:checked + label:before {
				  background-color: #8ce196;
				}
				.switch--shadow:checked + label:after {
				  transform: translateX(15px);
				}
	</style>

	<script>

	</script>
</head>
<body>
			<!-- <a href="mailto:help@apextoolgroup.com.br?
					cc=cayo.diebe@apextoolgroup.com.br&
					subject=Problema&
					body=The problem in e-mail.">
			Link</a> 



			<form method="post" action="mailto:[b]meuemail[/b]" type="text/plain>

							 <a href="#" onclick="window.load('index.html', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400');">Clique para abrir a janela POP-up</a>  
							-->
							<center>
		<form action="enviar.php" method="post">
			<label>Subject</label>
			<br>


			<input type="text" id="id_input" name="e_assunto" required>
			<br><br>

			<label> Problem Description </label> <br>
			<textarea id="id_input2" name="e_mensagem" required></textarea>	
			<br><br>
			<input type="submit" name="enviar" id="enviar" value="SEND">

		</form>
		<br><br><br>
			<div id="campo">
				
				<h1> FAQ - Frequently Asked Questions </h1>
				<br>
				<h3> 
					<div id="faq">
					<a href="wifi.pdf"><img src="img/wifi.png" width="100"> </a>
					</div>
					<div id="faq">
					<a href="wifi.pdf"><img src="img/impressora.png" width="100"> </a>   
					</div>
					<div id="faq">
					<a href="wifi.pdf"><img src="img/folder.png" width="100"></a>
					</div>
					<div id="faq">
					<a href="wifi.pdf"><img src="img/falante.png" width="100"> </a>
					</div>

				</h3>
			</div>


</body>
</html>

