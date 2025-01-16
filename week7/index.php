<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php




if (isset($_SESSION['page_visit_count'])) {
    
    $_SESSION['page_visit_count']++;
} else {
  
    $_SESSION['page_visit_count'] = 1;
}


if (isset($_COOKIE['total_visit_count'])) {
   
    $totalVisitCount = $_COOKIE['total_visit_count'] + 1;
} else {
    
    $totalVisitCount = 1;
}

setcookie('total_visit_count', $totalVisitCount, time() + (365 * 24 * 60 * 60));


echo "<h1>Je hebt deze pagina {$_SESSION['page_visit_count']} keer bezocht tijdens deze sessie.</h1>";
echo "<h1>Je hebt deze pagina in totaal $totalVisitCount keer bezocht.</h1>";
?>

</body>
</html>