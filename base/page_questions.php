<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="stylesheet" type="text/css" href="StylePageClair.css" media="all" id="linkstyle">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test végétarien</title>
</head>
<body>
<h1 id="NomSite">Scam Discovery</h1>
<div id="contenu">
<?php
	require_once("data.php");
	if(!isset($_POST['submit'])){
		$_SESSION['first'] = true;
		$_SESSION['question']['num_question'] = 0;
		
		echo "<h3>Question " . ($_SESSION['question']['num_question'] + 1) . "</h3>";
		echo "<p>" . $tab[$_SESSION['question']['num_question']]['question'] . "</p>";
		
		echo "<form method=\"post\" action=\"" . $_SERVER['PHP_SELF'] . "\">";
		
		echo "<input type =\"radio\" name=\"answer\" value =\"A\" checked=\"checked\">" . $tab[$_SESSION['question']['num_question']]['reponses'][0]['enonce'] . "</input><br>";
		echo "<input type =\"radio\" name=\"answer\" value =\"B\">" . $tab[$_SESSION['question']['num_question']]['reponses'][1]['enonce'] . "</input><br>";
		echo "<input type =\"radio\" name=\"answer\" value =\"C\">" . $tab[$_SESSION['question']['num_question']]['reponses'][2]['enonce'] . "</input><br>";
		echo "<input type=\"submit\" name=\"submit\" value=\"Question suivante\">";
		echo "</form>";
		echo "<pre>";
		print_r($_SESSION);
		echo "</pre>";
		$_SESSION['question']['num_question'] += 1;
	}else if($_SESSION['question']['num_question'] < 10){
		if($_SESSION['question']['num_question'] == 0  && $_SESSION['first']){
			$_SESSION['first'] = false;
		}
		
		echo "<h3>Question " . ($_SESSION['question']['num_question'] + 1) . "</h3>";
		echo "<p>" . $tab[$_SESSION['question']['num_question']]['question'] . "</p>";
		
		echo "<form method=\"post\" action=\"" . $_SERVER['PHP_SELF'] . "\">";
		
		echo "<input type =\"radio\" name=\"answer\" value =\"A\" checked=\"checked\">" . $tab[$_SESSION['question']['num_question']]['reponses'][0]['enonce'] . "</input><br>";
		echo "<input type =\"radio\" name=\"answer\" value =\"B\">" . $tab[$_SESSION['question']['num_question']]['reponses'][1]['enonce'] . "</input><br>";
		if(isset($tab[$_SESSION['question']['num_question']]['reponses'][2])){
			echo "<input type =\"radio\" name=\"answer\" value =\"C\">" . $tab[$_SESSION['question']['num_question']]['reponses'][2]['enonce'] . "</input><br>";
		}
		echo "<input type=\"submit\" name=\"submit\" value=\"Question suivante\">";
		echo "</form>";
		
		$_SESSION['question']['num_question']++;
		if(isset($_POST['answer'])){
			$_SESSION['question']['answers'][$_POST['answer']]++;
		}
	}else{
		$resultat = $_SESSION['question']['answers']['A'];
		$label = 'A';
		if($_SESSION['question']['answers']['B'] > $resultat){
			$resultat = $_SESSION['question']['answers']['B'];
			$label = 'B';
		}else if($_SESSION['question']['answers']['C'] > $resultat){
			$resultat = $_SESSION['question']['answers']['C'];
			$label = 'C';
		}
		echo "<h3>Résultat du test</h3>";
		echo "<p>" . $_SESSION['question']['name'] . ", Vous avez obtenu un maxium de " . $label . "</p>";
		echo "<h2>" . $tab['resultat'][$label]['titre'] ."</h2>";
		echo "<p>" . $tab['resultat'][$label]['details'] ."</p>";
		
	}
?>
<a href="destroy.php">Destroy</a>
</div>
</body>
</html>