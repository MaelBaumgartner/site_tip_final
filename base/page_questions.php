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
		echo "<p>" . $data[$_SESSION['question']['num_question']]['question'] . "</p>";
		
		echo "<form method=\"post\" action=\"" . $_SERVER['PHP_SELF'] . "\" id=\"question_form\">"; //
		
		echo "<input type =\"radio\" name=\"answer\" value =\"A\" checked=\"checked\">" . $data[$_SESSION['question']['num_question']]['reponses'][0]['enonce'] . "</input><br>";
		echo "<input type =\"radio\" name=\"answer\" value =\"B\">" . $data[$_SESSION['question']['num_question']]['reponses'][1]['enonce'] . "</input><br>";
		echo "<input type =\"radio\" name=\"answer\" value =\"C\">" . $data[$_SESSION['question']['num_question']]['reponses'][2]['enonce'] . "</input><br>";
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
		echo "<p>" . $data[$_SESSION['question']['num_question']]['question'] . "</p>";
		
		echo "<form method=\"post\" action=\"" . $_SERVER['PHP_SELF'] . "\">";
		
		echo "<input type =\"radio\" name=\"answer\" value =\"A\" checked=\"checked\">" . $data[$_SESSION['question']['num_question']]['reponses'][0]['enonce'] . "</input><br>";
		echo "<input type =\"radio\" name=\"answer\" value =\"B\">" . $data[$_SESSION['question']['num_question']]['reponses'][1]['enonce'] . "</input><br>";
		if(isset($data[$_SESSION['question']['num_question']]['reponses'][2])){
			echo "<input type =\"radio\" name=\"answer\" value =\"C\">" . $data[$_SESSION['question']['num_question']]['reponses'][2]['enonce'] . "</input><br>";
		}
		echo "<input type=\"submit\" name=\"submit\" value=\"Question suivante\">";
		echo "</form>";
		
		$_SESSION['question']['num_question']++;
		if(isset($_POST['answer'])){
			$_SESSION['question']['answers'][$_POST['answer']]++;
		}
	}
?>
<a href="destroy.php">Destroy</a>
</div>
</body>
</html>