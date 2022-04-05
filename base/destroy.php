<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Session</title>
</head>
<body>
<h2>Etat de la session</h2>
<?php 
session_destroy();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";


?>
<a href="page_questions.php">Index</a>
</body>
</html>