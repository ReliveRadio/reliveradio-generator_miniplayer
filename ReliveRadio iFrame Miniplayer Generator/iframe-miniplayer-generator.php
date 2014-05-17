<html>
<header>
<title>Relive iFrame Miniplayer</title>
<style>	
.wmfg_layout_0, table, .wmfg_textarea { font-family: Verdana, Geneva, sans-serif; font-size: 13px; }
.wmfg_layout_0 ul.wmfg_questions { list-style-type: none; margin: 0; padding: 0; }
.wmfg_layout_0 ul.wmfg_questions li.wmfg_q { margin: 10px 0; padding: 10px; border: 1px solid #cccccc; }
.wmfg_layout_0 label.wmfg_label { display: block; margin: 0 0 5px 0; }
.wmfg_layout_0 table.wmfg_answers { width: 100%; _width: 97%; border-collapse: collapse; }
.wmfg_layout_0 table.wmfg_answers { vertical-align: top; }
.wmfg_layout_0 table.wmfg_answers td { padding: 2px; vertical-align: top; }
.wmfg_layout_0 table.wmfg_answers td.wmfg_a_td { width: 25px; }

.wmfg_layout_0 .wmfg_text { border: 1px solid #CCC; padding: 4px; font-size: 13px; color: #000000; width: 98.5%;
background-color: #ffffff;
background:-webkit-gradient(linear,0 0,0 100%,from(#f8f8f8),to(#fff));
background:-moz-linear-gradient(top,#f8f8f8,#fff);
}
.wmfg_layout_0 .wmfg_textarea { border: 1px solid #CCC; padding: 4px; font-size: 13px; color: #000000; width: 98.5%;
background:-webkit-gradient(linear,0 0,0 100%,from(#f8f8f8),to(#fff));
background:-moz-linear-gradient(top,#f8f8f8,#fff);
background-color: #ffffff;
}
.wmfg_layout_0 .wmfg_select { 
border:1px solid #CCCCCC; padding: 3px; font-size: 13px; color: #000000; margin: 0; width: 100%; _width: 97%;
background-color: #ffffff;
background:-webkit-gradient(linear,0 0,0 100%,from(#f8f8f8),to(#fff));
background:-moz-linear-gradient(top,#f8f8f8,#fff);
}
.wmfg_layout_0 .wmfg_btn { 
border: 1px solid #cccccc; cursor: pointer; font-weight: normal; font-size: 13px; padding: 6px; color: #444; font-family: 'lucida grande', tahoma, verdana, arial, sans-serif; 
background: -webkit-gradient(linear, left top, left bottom, from(#FAFAFA), color-stop(0.5, #FAFAFA), color-stop(0.5, #E5E5E5), to(#F9F9F9)); 
background: -moz-linear-gradient(top, #FAFAFA, #FAFAFA 50%, #E5E5E5 50%, #F9F9F9);
filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#FAFAFA', endColorstr='#E5E5E5');
}
.wmfg_layout_0 .wmfg_btn:hover {  
background: -webkit-gradient(linear, left top, left bottom, from(#EDEDED), color-stop(0.5, #EDEDED), color-stop(0.5, #D9D9D9), to(#EDEDED)); 
background: -moz-linear-gradient(top, #EDEDED, #EDEDED 50%, #D9D9D9 50%, #EDEDED);
filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#E3326E', endColorstr='#D9D9D9'); 
</style>
</header>
<body>

<h1 style="font-family: Verdana, Geneva, sans-serif;">Relive Radio Miniplayer Generator</h1>
<hr />
<div style="width:60%; float:left;" class="wmfg_layout_0">
<form method="post" action="./">
<ul class="wmfg_questions">
	<li class="wmfg_q">
		<label class="wmfg_label" for="stream">Stream aussuchen:</label>
		<select class="wmfg_select" name="stream" id="stream">
			<?php
			if ($_POST['stream'] == 'mix') { 
				
				echo '<option value="mix" selected="selected">Mix</option>';
				
				} else { 
				
				echo '<option value="mix">Mix</option>'; }
			?>
			<?php
			if ($_POST['stream'] == 'mix-mobile') { 
				
				echo '<option value="mix-mobile" selected="selected">Mix - Mobile Version</option>';
				
				} else { 
				
				echo '<option value="mix-mobile">Mix - Mobile Version</option>'; }
			?>
			<?php
			if ($_POST['stream'] == 'technik') { 
				
				echo '<option value="technik" selected="selected">Technik</option>';
				
				} else { 
				
				echo '<option value="technik">Technik</option>'; }
			?>
			<?php
			if ($_POST['stream'] == 'technik-mobile') { 
				
				echo '<option value="technik-mobile" selected="selected">Technik - Mobile Version</option>';
				
				} else { 
				
				echo '<option value="technik-mobile">Technik - Mobile Version</option>'; }
			?>
			<?php
			if ($_POST['stream'] == 'kultur') { 
				
				echo '<option value="kultur" selected="selected">Kultur</option>';
				
				} else { 
				
				echo '<option value="kultur">Kultur</option>'; }
			?>
			<?php
			if ($_POST['stream'] == 'kultur-mobile') { 
				
				echo '<option value="kultur-mobile" selected="selected">Kultur - Mobile Version</option>';
				
				} else { 
				
				echo '<option value="kultur-mobile">Kultur - Mobile Version</option>'; }
			?>
		</select>
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label">Style aussuchen:</label>
		<table class="wmfg_answers">
			<tr class="wmfg_a" style="float: left;">
				<td class="wmfg_a_td"><?php 
			 if ($_POST['style'] == '') { 
				
				echo '<input type="radio" class="wmfg_radio" name="style" value="" checked="checked"/>';
				
				} else { 
				
				echo '<input type="radio" class="wmfg_radio" name="style" value="" checked="checked"/>'; }
			?></td>
				<td><label class="wmfg_label_a" for="radio_1">Kein Style</label></td>
			</tr>
			<tr class="wmfg_a" style="float: left;">
			 	<td class="wmfg_a_td"><?php 
			 if ($_POST['style'] == 'mix') { 
				
				echo '<input type="radio" class="wmfg_radio" name="style" value="mix" checked="checked"/>';
				
				} else { 
				
				echo '<input type="radio" class="wmfg_radio" name="style" value="mix" />'; }
			?></td>
				<td><label class="wmfg_label_a" for="mix_style">Mix (gr&uuml;n)</label></td>
			</tr>
			<tr class="wmfg_a" style="float: left;">
				<td class="wmfg_a_td"><?php 
			 if ($_POST['style'] == 'technik') { 
				
				echo '<input type="radio" class="wmfg_radio" name="style" value="technik" checked="checked"/>';
				
				} else { 
				
				echo '<input type="radio" class="wmfg_radio" name="style" value="technik" />'; }
			?></td>
				<td><label class="wmfg_label_a" for="technik_style">Technik (blau)</label></td>
			</tr>
			<tr class="wmfg_a" style="float: left;">
				<td class="wmfg_a_td"><?php 
			 if ($_POST['style'] == 'kultur') { 
				
				echo '<input type="radio" class="wmfg_radio" name="style" value="kultur" checked="checked"/>';
				
				} else { 
				
				echo '<input type="radio" class="wmfg_radio" name="style" value="kultur" />'; }
			?></td>
				<td><label class="wmfg_label_a" for="kultur_style">Kultur (orange)</label></td>
			</tr>
		</table>
		<hr />
		<label class="wmfg_label" for="color">Eigene Farbe:</label>
		<input type="text" class="wmfg_text" name="color" id="color" placeholder="ff00ff" value="<?php  if ('' != $_POST['color']) { echo $_POST['color']; } ?>" />
	</li>


	<li class="wmfg_q">
		<label class="wmfg_label">Ausrichtung:</label>
		<table class="wmfg_answers">
			<tr class="wmfg_a" style="float: left;">
				<td class="wmfg_a_td"><label class="wmfg_label" for="left">Links:</label></td>
				<td><input style="width:80px;" type="text" class="wmfg_text" name="left" id="left" placeholder="-1px" value="<?php  if ('' != $_POST['left']) { echo $_POST['left']; } ?>" /></td>
			</tr>
			
			<tr class="wmfg_q" style="float: left; padding-left:15px;">
				<td class="wmfg_a_td"><label class="wmfg_label" for="right">Rechts:</label></td>
				<td><input style="width:80px;" type="text" class="wmfg_text" name="right" id="right" placeholder="-1px" value="<?php  if ('' != $_POST['right']) { echo $_POST['right']; } ?>" /></td>
			</tr>
			
			<tr class="wmfg_q" style="float: left; padding-left:15px;">
				<td class="wmfg_a_td"><label class="wmfg_label" for="top">Hoch:</label></td>
				<td><input style="width:80px;" type="text" class="wmfg_text" name="top" id="top" placeholder="-1px" value="<?php  if ('' != $_POST['top']) { echo $_POST['top']; } ?>" /></td>
			</tr>
			<tr class="wmfg_q" style="float: left; padding-left:15px;">
				<td class="wmfg_a_td"><label class="wmfg_label" for="bottom">Runter:</label></td>
				<td><input style="width:80px;" type="text" class="wmfg_text" name="bottom" id="bottom" placeholder="-1px" value="<?php  if ('' != $_POST['bottom']) { echo $_POST['bottom']; } ?>" /></td>
			</tr>
		</table>
	</li>

	<li class="wmfg_q">
		<label class="wmfg_label">Darstellung:</label>
		<table class="wmfg_answers">
			<tr class="wmfg_q" style="float:left;">
				<td class="wmfg_a_td"><label class="wmfg_label" for="w">Breite:</label></td>
				<td><input type="text" class="wmfg_text" name="w" id="w" placeholder="100%" value="<?php  if ('' != $_POST['w']) { echo $_POST['w']; } ?>" /></td>
			</tr>
			<tr class="wmfg_q" style="float: left; padding-left:15px;">
				<td class="wmfg_a_td"><label class="wmfg_label" for="h">H&ouml;he:</label></td>
				<td><input type="text" class="wmfg_text" name="h" id="h" placeholder="100px" value="<?php  if ('' != $_POST['h']) { echo $_POST['h']; } ?>" /></td>
			</tr>
		</table>
	</li>

	
	<li class="wmfg_q">
		<input type="submit" class="wmfg_btn" value="Erstellen" />
	</li>
</ul>
</form>
</div>
<?php if ('' != $_POST['stream']) { ?>
<div style="margin-top: 10px; float:left; margin-left: 20px; width: 30%; font-family: Verdana, Geneva, sans-serif; 
font-size: 13px; border: 1px solid #cccccc;">
	<div style="padding:5px; background:#E9E9E9;">
		<label class="wmfg_label" for="textarea_id">Code Kopieren:</label>
		<br>
		<textarea class="wmfg_textarea" style="height: 150px; width: 355px;">&#60;iframe style="border: none;<?php 
		 if ('' != $_POST['left']) { echo ' margin-left:'.$_POST['left'] . ';'; } 
		 if ('' != $_POST['right']) { echo 'margin-right:'.$_POST['right'] . ';'; }  
		 if ('' != $_POST['top']) { echo 'margin-top:'.$_POST['top'] . ';'; }  
		 if ('' != $_POST['bottom']) { echo 'margin-bottom:'.$_POST['bottom'] . ';'; } 
		 ?>" src="http://liveplayer.reliveradio.de/standalone-live-playerapi/standalone-mini.php?stream=<?php 
		 echo $_POST['stream']; 
		  
		 if ('' != $_POST['style']) { echo '&css='.$_POST['style']; } 
		 if ('' != $_POST['color']) { echo '&color='.$_POST['color']; } 
		 
		 ?>" <?php 
		 if ('' != $_POST['h']) { echo 'height="'.$_POST['h']. '"'; } 
		 if ('' != $_POST['w']) { echo ' width="'.$_POST['w']. '"'; } 
		 ?> marginwidth="10" marginheight="10" scrolling="no" border="0"></iframe></textarea>
<br>
<label class="wmfg_label">Angaben:</label>
 <hr />
<?php
if ('' != $_POST['stream']) { echo 'Stream: <b>'.$_POST['stream'] .'</b><br />'; } 
if ('' != $_POST['style']) { echo 'Style: <b>'.$_POST['style'] .'</b><br />'; } 
if ('' != $_POST['color']) { echo 'Color: <b>'.$_POST['color'] .'</b><br />'; } 
if ('' != $_POST['left']) { echo 'Left: <b>'.$_POST['left'] . '</b><br />'; } 
if ('' != $_POST['right']) { echo 'Right: <b>'.$_POST['right'] . '</b><br />'; } 
if ('' != $_POST['top']) { echo 'Top: <b>'.$_POST['top'] . '</b><br />'; } 
if ('' != $_POST['bottom']) { echo 'Bottom: <b>'.$_POST['bottom'] .'</b><br />'; } 
 ?>
 <br>
 
<label class="wmfg_label">Ergebnis:</label>
 <hr />
 <div style="background: url(./bg.png) center center transparent;">
<iframe style="border: none;<?php 
		 if ('' != $_POST['left']) { echo ' margin-left:'.$_POST['left'] . ';'; } 
		 if ('' != $_POST['right']) { echo 'margin-right:'.$_POST['right'] . ';'; }  
		 if ('' != $_POST['top']) { echo 'margin-top:'.$_POST['top'] . ';'; }  
		 if ('' != $_POST['bottom']) { echo 'margin-bottom:'.$_POST['bottom'] . ';'; } 
		 ?> background: url(./green.png);" src="http://liveplayer.reliveradio.de/standalone-live-playerapi/standalone-mini.php?stream=<?php 
		 echo $_POST['stream']; 
		  
		 if ('' != $_POST['style']) { echo '&css='.$_POST['style']; } 
		 if ('' != $_POST['color']) { echo '&color='.$_POST['color']; } 
		 
		 ?>" <?php 
		 if ('' != $_POST['h']) { echo 'height="'.$_POST['h']. '"'; } 
		 if ('' != $_POST['w']) { echo ' width="'.$_POST['w']. '"'; } 
		 ?> marginwidth="10" marginheight="10" scrolling="no" border="0"></iframe>
 </div>
		 
		 
	</div>
</div>
<?php } ?>

<a style="bottom:0; position: absolute; margin-bottom:20px;" 
href="https://github.com/ReliveRadio/reliveradio-generator_miniplayer">Finde mehr auf Github</a>
</body>
</html>
