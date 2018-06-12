<!DOCTYPE html>
<html>
<head>
	<title>Enviar</title>
</head>

       <script type="text/javascript">
        function mymessage()
        {
         location.href = "mailto:cayo.diebe@apextoolgroup.com?cc=cayo.diebe@apextoolgroup.com&subject=<?php echo $_POST['e_assunto']; ?>&body=<?php echo $_POST['e_mensagem']; ?>";

         }
        </script>
<body onload="mymessage()"> 
</body>
</html>
