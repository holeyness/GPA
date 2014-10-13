<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="http://www.theempireformula.biz/favicon.ico" type="image/x-icon" / >
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<title>Ian's GPA Calculator</title>
</head>
<body>
	<div id="content" >
		<h1><span class="hr">GPA</span> Calculator</h1>
		
		<div id="intro">
			
	<?php
	
	
	$array1 = array(4,8,15,16,23,42);
 echo $array1[0]; 
 
 
$a = $_POST['aa'];
$b = $_POST['bb'];
$c = $_POST['cc'];
$d = $_POST['dd'];
$e = $_POST['ee'];
$f = $_POST['ff'];
$g = $_POST['gg'];
$h = $_POST['hh'];

$va = 0;
$vb = 0;
$vc = 0;
$vd = 0;
$ve = 0;
$vf = 0;
$vg = 0;
$vh = 0;

$number = 0;
switch ($a){
	case "A":
		$va = 4;
		$number ++;
		break;
	case "A-":
		$va = 3.7;
		$number ++;
		break;	
	case "B+":
		$va = 3.3;
		$number ++;
		break;	
	case "B":
		$va = 3;
		$number ++;
		break;
	case "B-":
		$va = 2.7;
		$number ++;
		break;	
	case "C+":
		$va = 2.3;
		$number ++;
		break;	
	case "C":
		$va = 2;
		$number ++;
		break;	
	case "C-":
		$va = 1.7;
		$number ++;
		break;	
	case "D+":
		$va = 1.3;
		$number ++;
		break;	
	case "D":
		$va = 1;
		$number ++;
		break;	
	case "D-":
		$va = 0.7;
		$number ++;
		break;
	case "F":
		$va = 0;
		$number ++;
		break;	
		
	
}

switch ($b){
	case "A":
		$vb = 4;
		$number ++;
		break;
	case "A-":
		$vb = 3.7;
		$number ++;
		break;	
	case "B+":
		$vb = 3.3;
		$number ++;
		break;	
	case "B":
		$vb = 3;
		$number ++;
		break;
	case "B-":
		$vb = 2.7;
		$number ++;
		break;	
	case "C+":
		$vb = 2.3;
		$number ++;
		break;	
	case "C":
		$vb = 2;
		$number ++;
		break;	
	case "C-":
		$vb = 1.7;
		$number ++;
		break;	
	case "D+":
		$vb = 1.3;
		$number ++;
		break;	
	case "D":
		$vb = 1;
		$number ++;
		break;	
	case "D-":
		$vb = 0.7;
		$number ++;
		break;
	case "F":
		$vb = 0;
		$number ++;
		break;	
		

}

switch ($c){
	case "A":
		$vc = 4;
		$number ++;
		break;
	case "A-":
		$vc = 3.7;
		$number ++;
		break;	
	case "B+":
		$vc = 3.3;
		$number ++;
		break;	
	case "B":
		$vc = 3;
		$number ++;
		break;
	case "B-":
		$vc = 2.7;
		$number ++;
		break;	
	case "C+":
		$vc = 2.3;
		$number ++;
		break;	
	case "C":
		$vc = 2;
		$number ++;
		break;	
	case "C-":
		$vc = 1.7;
		$number ++;
		break;	
	case "D+":
		$vc = 1.3;
		$number ++;
		break;	
	case "D":
		$vc = 1;
		$number ++;
		break;	
	case "D-":
		$vc = 0.7;
		$number ++;
		break;
	case "F":
		$vc = 0;
		$number ++;
		break;	
		
}

switch ($d){
	case "A":
		$vd = 4;
		$number ++;
		break;
	case "A-":
		$vd = 3.7;
		$number ++;
		break;	
	case "B+":
		$vd = 3.3;
		$number ++;
		break;	
	case "B":
		$vd = 3;
		$number ++;
		break;
	case "B-":
		$vd = 2.7;
		$number ++;
		break;	
	case "C+":
		$vd = 2.3;
		$number ++;
		break;	
	case "C":
		$vd = 2;
		$number ++;
		break;	
	case "C-":
		$vd = 1.7;
		$number ++;
		break;	
	case "D+":
		$vd = 1.3;
		$number ++;
		break;	
	case "D":
		$vd = 1;
		$number ++;
		break;	
	case "D-":
		$vd = 0.7;
		$number ++;
		break;
	case "F":
		$vd = 0;
		$number ++;
		break;	
		

}

switch ($e){
	case "A":
		$ve = 4;
		$number ++;
		break;
	case "A-":
		$ve = 3.7;
		$number ++;
		break;	
	case "B+":
		$ve = 3.3;
		$number ++;
		break;	
	case "B":
		$ve = 3;
		$number ++;
		break;
	case "B-":
		$ve = 2.7;
		$number ++;
		break;	
	case "C+":
		$ve = 2.3;
		$number ++;
		break;	
	case "C":
		$ve = 2;
		$number ++;
		break;	
	case "C-":
		$ve = 1.7;
		$number ++;
		break;	
	case "D+":
		$ve = 1.3;
		$number ++;
		break;	
	case "D":
		$ve = 1;
		$number ++;
		break;	
	case "D-":
		$ve = 0.7;
		$number ++;
		break;
	case "F":
		$ve = 0;
		$number ++;
		break;	
		
	
}

switch ($f){
	case "A":
		$vf = 4;
		$number ++;
		break;
	case "A-":
		$vf = 3.7;
		$number ++;
		break;	
	case "B+":
		$vf = 3.3;
		$number ++;
		break;	
	case "B":
		$vf = 3;
		$number ++;
		break;
	case "B-":
		$vf = 2.7;
		$number ++;
		break;	
	case "C+":
		$vf = 2.3;
		$number ++;
		break;	
	case "C":
		$vf = 2;
		$number ++;
		break;	
	case "C-":
		$vf = 1.7;
		$number ++;
		break;	
	case "D+":
		$vf = 1.3;
		$number ++;
		break;	
	case "D":
		$vf = 1;
		$number ++;
		break;	
	case "D-":
		$vf = 0.7;
		$number ++;
		break;
	case "F":
		$vf = 0;
		$number ++;
		break;	
	
}

switch ($g){
	case "A":
		$vg = 4;
		$number ++;
		break;
	case "A-":
		$vg = 3.7;
		$number ++;
		break;	
	case "B+":
		$vg = 3.3;
		$number ++;
		break;	
	case "B":
		$vg = 3;
		$number ++;
		break;
	case "B-":
		$vg = 2.7;
		$number ++;
		break;	
	case "C+":
		$vg = 2.3;
		$number ++;
		break;	
	case "C":
		$vg = 2;
		$number ++;
		break;	
	case "C-":
		$vg = 1.7;
		$number ++;
		break;	
	case "D+":
		$vg = 1.3;
		$number ++;
		break;	
	case "D":
		$vg = 1;
		$number ++;
		break;	
	case "D-":
		$vg = 0.7;
		$number ++;
		break;
	case "F":
		$vg = 0;
		$number ++;
		break;	
		
	
}

switch ($h){
	case "A":
		$vh = 4;
		$number ++;
		break;
	case "A-":
		$vh = 3.7;
		$number ++;
		break;	
	case "B+":
		$vh = 3.3;
		$number ++;
		break;	
	case "B":
		$vh = 3;
		$number ++;
		break;
	case "B-":
		$vh = 2.7;
		$number ++;
		break;	
	case "C+":
		$vh = 2.3;
		$number ++;
		break;	
	case "C":
		$vh = 2;
		$number ++;
		break;	
	case "C-":
		$vh = 1.7;
		$number ++;
		break;	
	case "D+":
		$vh = 1.3;
		$number ++;
		break;	
	case "D":
		$vh = 1;
		$number ++;
		break;	
	case "D-":
		$vh = 0.7;
		$number ++;
		break;
	case "F":
		$vh = 0;
		$number ++;
		break;	
		
	
}

if ($number == 0) {
	$number = 1;}

$total = $va + $vb + $vc + $vd + $ve + $vf + $vg + $vh;
$final = $total/$number;
?>
			<p align="center">Your GPA is:<b> 
<?php

echo round($final,2); ?></b></p>
<p align="center">
<?php

if ($final == 4){
	echo 'You have: <span class="red">Highest Honors</span>';
	} elseif (($final >= 3.5 ) && ($final < 4)){
		echo 'You have: <span class="red">High Honors</span>';}
	elseif (($final >= 3) && ($final < 3.5)){
		echo 'You have: <span class="red">Honors</span>';} 
	
?></p>
 
</div>


	<div id="left">
	
<form ><input type="button" value="Start Over" onclick="history.go(-1);return false;" /></form> <br />
<h3>Share It:</h3>
<p>Everyone needs to know what their GPA is.</p>
<p><b class="padding">Option 1:</b><iframe src="http://www.facebook.com/plugins/like.php?href=www.theempireformula.biz&amp;layout=button_count&amp;show_faces=false&amp;width=250&amp;action=like&amp;font&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe></p>

<p><b class="padding">Option 2:</b>Send them the link:<br /><input type="text" value="http://www.theEmpireFormula.biz"  onclick="this.select();"  name="string" size="26" readonly> </p>
	
			</div>
		<div id="footer">
			<p>&copy; Ian Luo </p>
		</div>
	</div>
</body>
</html>