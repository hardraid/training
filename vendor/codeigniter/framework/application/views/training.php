<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Training Composer</title>
	<style type="text/css">
		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }
		body {
			background: #fff url("<?php echo base_url();?>images/effect.png");
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}
		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}
		h1 {
			color: #FFF;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 20pt;
			font-weight: normal;
			padding: 0px 15px 20px 15px;
		}
		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			text-align: justify;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}
		#body {
			margin: 0 15px 0 15px;
		}
		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}
		#container {
			margin: auto;
			padding: 15px;
			height: auto;
			width: 800px;
			text-align: center;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
			background: url("<?php echo base_url();?>images/background.jpg");
		}
		#editor {
			text-align: left;
        	position: relative;
        	left: 100px;
        	width: 600px;
        	height: 300px;
        	border: 4px solid #A4D11B;
    	}
    	button {
    		background-color:#A4D11B;
			color:#444;
			font-family:'Helvetica Neue',sans-serif;
			font-size:18px;
			line-height:30px;
			border-radius:20px;
			-webkit-border-radius:20px;
			-moz-border-radius:20px;
			border:0;
			text-shadow:#C17C3A 0 -1px 0;
			width:120px;
			height:32px;
			margin: 10px;
    	}
    	label {
    		color:#FFF;
    	}
	</style>
</head>
<body>
<div id="container">
<h1>Training Composer</h1>
<code>Crear un proyecto a partir de un archivo <b>composer.json</b> que haga uso del type custom <b>"summa-project"</b> proveniente del package <b>"summa/plugin"</b> que se encuentra en <b>"https://github.com/summa/training.git"</b>, por otro lado el proyecto depende de 2 packages mas, <b>"summa/payments"</b> en su version <b>1.5.3</b> pero admitiendo posibles nuevos patches y el branch <b>fase_two</b> de <b>"summa/shippings"</b>, Ambos se instalaran en <b>./payments</b> y <b>./shippings</b> respectivamente, Como ultimo paso teniendo en cuenta esto ultimo se deberian poder cargar todas las clases contenidas en ambos packages utilizando el namespace <b>"Summa"</b> asi por ejemplo teniendo el archivo <b>"./payments/Paypal.php"</b> poder invocar la clase como <b>"Summa\Paypal"</b>.</code>
<form id="training-form" action="<?php echo base_url('/training/send'); ?>" method="post" onsubmit="sendCode();">
	<div id="editor">{}</div>
	<input id="result" type="hidden" name="result" />
	<label for="name">Tu Nombre:</label><input id="name" type="text" name="name" />
	<button type="submit">Send Code</button>
</form>
<script type="text/javascript" src="<?php echo base_url();?>ace/src/ace.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>ace/src/theme-twilight.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>ace/src/mode-json.js"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/twilight");
    var JsonMode = ace.require("ace/mode/json").Mode;
    editor.getSession().setMode(new JsonMode());

    function sendCode()
    {
    	confirm('¿Estas seguro que deseas enviar los datos?');
    	document.getElementById("result").value = editor.getValue();
    }
</script>
</div>
</body>
</html>