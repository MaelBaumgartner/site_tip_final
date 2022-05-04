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
		$_SESSION['question']['num_question'] = 1;
		
		echo "<h2>Question " . ($_SESSION['question']['num_question']) . "</h2>";
		echo "<p>" . $data[$_SESSION['question']['num_question']]['question'] . "</p>";
		
		echo "<form method=\"post\" action=\"" . $_SERVER['PHP_SELF'] . "\" id=\"question_form\">"; //
		
		echo "<input type =\"radio\" name=\"answer\" value =\"A\" checked=\"checked\">" . $data[$_SESSION['question']['num_question']]['reponses'][0]['enonce'] . "</input><br>";
		echo "<input type =\"radio\" name=\"answer\" value =\"B\">" . $data[$_SESSION['question']['num_question']]['reponses'][1]['enonce'] . "</input><br>";
		echo "<input type =\"radio\" name=\"answer\" value =\"C\">" . $data[$_SESSION['question']['num_question']]['reponses'][2]['enonce'] . "</input><br>";
		echo "<input type=\"submit\" name=\"submit\" value=\"Question suivante\">";
		echo "</form>";
	}else if($_SESSION['question']['num_question'] < 10){
		echo "<h2>Question " . ($_SESSION['question']['num_question']+1) . "</h2>";
		echo "<p>" . $data[$_SESSION['question']['num_question']]['question'] . "</p>";
		
		echo "<form method=\"post\" action=\"" . $_SERVER['PHP_SELF'] . "\">";
		
		echo "<input type =\"radio\" name=\"answer\" value =\"0\" checked=\"checked\">" . $data[$_SESSION['question']['num_question']]['reponses'][0]['enonce'] . "</input><br>";
		echo "<input type =\"radio\" name=\"answer\" value =\"1\">" . $data[$_SESSION['question']['num_question']]['reponses'][1]['enonce'] . "</input><br>";
		if(isset($data[$_SESSION['question']['num_question']]['reponses'][2])){
			echo "<input type =\"radio\" name=\"answer\" value =\"2\">" . $data[$_SESSION['question']['num_question']]['reponses'][2]['enonce'] . "</input><br>";
		}
		echo "<div class=\"horizontal-center\">\t<input class=\"button button1\" type=\"submit\" name=\"submit\" value=\"Question suivante\">\t</div>\t";
		echo "</form>";
		
		
		if(isset($_POST['answer'])){
			$_SESSION['question'][$_SESSION['question']['num_question']] = $_POST['answer'];
		}
		$_SESSION['question']['num_question']++;
	}else {
		if(isset($_POST['answer'])){
			$_SESSION['question'][$_SESSION['question']['num_question']] = $_POST['answer'];
		}
		echo "<h2>Résultats</h2>";
		$i = 1;
		foreach($answers as $rightanswer){
			echo "<h3>Question " . $i . "</h3>";
			if($_SESSION['question'][$i] == $rightanswer){
			}else{
			}
			echo "Énoncé : " . $data[$i]['question'] . "<br>";
			echo "Votre réponse : " . $data[$i]['reponses'][$_SESSION['question'][$i]]['enonce'] . "<br>";
			echo "Réponse correcte : " . $data[$i]['reponses'][$rightanswer]['enonce'] . "<br>";
			$i++;
		}
		echo "<h3 style=\"text-align: center; width: 700px; margin-left: calc(50% - 350px);\">Merci d'avoir participé à notre quizz, nous espérons qu'il vous a plus et qu'il vous a été utile! Si vous pouviez aussi prendre le temps de remplir <a href=\"https://forms.gle/74y1G4uihQpWRN1LA\">ce dernier sondage</a> sur votre point de vue sur le quizz, nous serions ravis de connaître votre opinion.</h3>";
		session_destroy();
		echo "<div class=\"horizontal-center\">
        <a href=\"./Accueil.php\">
          <button class=\"button button1\">Retourner à l'accueil</button>
        </a>
      </div>";
	}
?>

</div>
</body>
</html>