VERSIONE JUMPING PAGE
<!---
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Query page</title>
</head>
<body>
 

<?php
/*
    include_once 'connect.php';
    $value = $_POST['input'];
    echo "<h3>Query selezionato: {$value}</h3>";

    echo '<div id="elenco">'."<br>".'1) Il titolo delle opere del Tiziano conservate al museo “El Prado”.' . "<br>".
    '2) L’elenco degli artisti ed il titolo delle loro opere conservate alla “Galleria degli Uffi-zi” o a “Palazzo Pitti”' . "<br>".
    '3) L’elenco degli artisti e delle loro opere conservate nei musei di Firenze' . "<br>".
    '4) Le città in cui sono conservate opere di Leonardo' . "<br>".
    '5) L’elenco delle opere del Tiziano conservate nei musei di Londra ' . "<br>".
    '6) L’elenco degli artisti e il titolo delle opere di artisti spagnoli conservate nei musei di Firenze' . "<br>".
    '7) L’elenco dei titoli delle opere di artisti italiani conservate nei musei di Londra, in cui è rappresentata la Madonna' . "<br>".
    '8) Il nome dei musei di Londra che conservano opere di Picasso ' . "<br>".
    '9) Il nome e il loro autore delle opere che rappresentano “Gesù e San Giovannino” ' . "<br>".
    '10) L’elenco dei nomi degli artisti che hanno dipinto “Gesù e San Giovannino”' . "<br>".
    '11) Il nome e l’autore delle opere che rappresentano “Gesù e San Giovannino” oppure “la Madonna e Giovanni Battista” ' . "<br>".
    '12) L’elenco delle opere ed il loro autore che rappresentano “San Giovanni” al museo del Prado '."</div>";

    switch($value){
        case 1: 
            $query = 'SELECT opera.titolo 
            FROM ((opera JOIN artista ON opera.id_a = artista.id_a) 
            JOIN museo ON museo.id_m = opera.id_m)
            WHERE (museo.nome_m = "El Prado") AND (artista.nome_a = "Tiziano") 
            AND artista.cognome_a = "Vecellio";'; 

            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th> Titolo dell'opera </th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td> $row[titolo] </td>";
                    echo "</tr>";
        
                }
                echo "</table>";

                } else {
                    echo "Process Failed.";
                }
                mysqli_close($conn);
                break;


        case 2:
            $query = 'SELECT artista.nome_a, artista.cognome_a, opera.titolo, museo.nome_m
            FROM ((artista JOIN opera ON artista.id_a = opera.id_a) 
            JOIN museo ON museo.id_m = opera.id_m)
            WHERE  (museo.nome_m = "Galleria degli Uffizi") OR (museo.nome_m = "Palazzo Pitti");'; 

            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th> Nome dell'artista </th>";
                echo "<th> Cognome dell'artista </th>";
                echo "<th> Titolo dell'opera </th>";
                echo "<th> Nome del museo </th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td> $row[nome_a] </td>";
                    echo "<td> $row[cognome_a] </td>";
                    echo "<td> $row[titolo] </td>";
                    echo "<td> $row[nome_m] </td>";
                    echo "</tr>";
        
                }
                echo "</table>";

                } else {
                    echo "Process Failed.";
                }
                mysqli_close($conn);
                break;


        case 3:
            $query = 'SELECT artista.nome_a, artista.cognome_a, opera.titolo, museo.città
            FROM ((artista JOIN opera ON artista.id_a = opera.id_a) 
            JOIN museo ON museo.id_m = opera.id_m)
            WHERE  museo.città = "Firenze";'; 

            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th> Nome dell'artista </th>";
                echo "<th> Cognome dell'artista </th>";
                echo "<th> Titolo dell'opera </th>";
                echo "<th> Città del museo </th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td> $row[nome_a] </td>";
                    echo "<td> $row[cognome_a] </td>";
                    echo "<td> $row[titolo] </td>";
                    echo "<td> $row[città] </td>";
                    echo "</tr>";
        
                }
                echo "</table>";

                } else {
                    echo "Process Failed.";
                }
                mysqli_close($conn);
                break;
               
        case 4:
            $query = 'SELECT museo.città, artista.nome_a, artista.cognome_a, opera.titolo
            FROM ((artista JOIN opera ON artista.id_a = opera.id_a) 
            JOIN museo ON museo.id_m = opera.id_m)
            WHERE (artista.nome_a = "Leonardo") AND (artista.cognome_a = "Da Vinci");'; 

            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th> Città del museo </th>";
                echo "<th> Nome dell'artista </th>";
                echo "<th> Cognome dell'artista </th>";
                echo "<th> Titolo dell'opera </th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td> $row[città] </td>";
                    echo "<td> $row[nome_a] </td>";
                    echo "<td> $row[cognome_a] </td>";
                    echo "<td> $row[titolo] </td>";
                    echo "</tr>";
        
                }
                echo "</table>";

                } else {
                    echo "Process Failed.";
                }
                mysqli_close($conn);
                break;

         case 5:
            $query = 'SELECT artista.nome_a, artista.cognome_a, opera.titolo, museo.città
            FROM ((artista JOIN opera ON artista.id_a = opera.id_a) 
            JOIN museo ON museo.id_m = opera.id_m)
            WHERE  (museo.città = "Londra") AND (artista.nome_a = "Tiziano") AND (artista.cognome_a = "Vecellio");'; 

            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th> Nome dell'artista </th>";
                echo "<th> Cognome dell'artista </th>";
                echo "<th> Titolo dell'opera </th>";
                echo "<th> Città del museo </th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td> $row[nome_a] </td>";
                    echo "<td> $row[cognome_a] </td>";
                    echo "<td> $row[titolo] </td>";
                    echo "<td> $row[città] </td>";
                    echo "</tr>";
        
                }
                echo "</table>";

                } else {
                    echo "Process Failed.";
                }
                mysqli_close($conn);
                break;

        case 6:
            $query = 'SELECT artista.nome_a, artista.cognome_a, opera.titolo, museo.città
            FROM ((artista JOIN opera ON artista.id_a = opera.id_a) 
            JOIN museo ON museo.id_m = opera.id_m)
            WHERE (artista.nazionalità = "Spagna") AND (museo.città = "Firenze");'; 

            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th> Nome dell'artista </th>";
                echo "<th> Cognome dell'artista </th>";
                echo "<th> Titolo dell'opera </th>";
                echo "<th> Città del museo </th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td> $row[nome_a] </td>";
                    echo "<td> $row[cognome_a] </td>";
                    echo "<td> $row[titolo] </td>";
                    echo "<td> $row[città] </td>";
                    echo "</tr>";
        
                }
                echo "</table>";

                } else {
                    echo "Process Failed.";
                }
                mysqli_close($conn);
                break;

        case 7: 
            $query = 'SELECT artista.nome_a, artista.cognome_a, opera.titolo, museo.città
            FROM ((((artista JOIN opera ON artista.id_a = opera.id_a) 
            JOIN museo ON museo.id_m = opera.id_m) 
            JOIN contenere ON contenere.id_o = opera.id_o)
            JOIN personaggio ON personaggio.id_p = contenere.id_p)
            WHERE (artista.nazionalità = "Italia") AND (museo.città = "Londra") AND (personaggio.nome_p = "Madonna");'; 

            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th> Nome dell'artista </th>";
                echo "<th> Cognome dell'artista </th>";
                echo "<th> Titolo dell'opera </th>";
                echo "<th> Città del museo </th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td> $row[nome_a] </td>";
                    echo "<td> $row[cognome_a] </td>";
                    echo "<td> $row[titolo] </td>";
                    echo "<td> $row[città] </td>";
                    echo "</tr>";
        
                }
                echo "</table>";

                } else {
                    echo "Process Failed.";
                }
                mysqli_close($conn);
                break;


        case 8:
            $query = 'SELECT museo.città, museo.nome_m, artista.nome_a, artista.cognome_a, opera.titolo
            FROM ((artista JOIN opera ON artista.id_a = opera.id_a) 
            JOIN museo ON museo.id_m = opera.id_m) 
            WHERE (artista.cognome_a = "Picasso") AND (museo.città = "Londra")'; 

            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th> Città del museo </th>";
                echo "<th> Nome del museo </th>";
                echo "<th> Nome dell'artista </th>";
                echo "<th> Cognome dell'artista </th>";
                echo "<th> Titolo dell'opera </th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td> $row[città] </td>";
                    echo "<td> $row[nome_m] </td>";
                    echo "<td> $row[nome_a] </td>";
                    echo "<td> $row[cognome_a] </td>";
                    echo "<td> $row[titolo] </td>";
                    echo "</tr>";
        
                }
                echo "</table>";

                } else {
                    echo "Process Failed.";
                }
                mysqli_close($conn);
                break;

        case 9:
            $query = 'SELECT DISTINCT artista.nome_a, artista.cognome_a, opera.titolo
            FROM ((((artista JOIN opera ON artista.id_a = opera.id_a) 
            JOIN museo ON museo.id_m = opera.id_m) 
            JOIN contenere ON contenere.id_o = opera.id_o)
            JOIN personaggio ON personaggio.id_p = contenere.id_p)
            WHERE (personaggio.nome_p = "Gesù") OR (personaggio.nome_p = "Giovanni Battista");'; 

            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th> Nome dell'artista </th>";
                echo "<th> Cognome dell'artista </th>";
                echo "<th> Titolo dell'opera </th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td> $row[nome_a] </td>";
                    echo "<td> $row[cognome_a] </td>";
                    echo "<td> $row[titolo] </td>";
                    echo "</tr>";
        
                }
                echo "</table>";

                } else {
                    echo "Process Failed.";
                }
                mysqli_close($conn);
                break;
                
                
        case 10:
            $query = 'SELECT artista.nome_a, artista.cognome_a, opera.titolo
            FROM ((((artista JOIN opera ON artista.id_a = opera.id_a) 
            JOIN museo ON museo.id_m = opera.id_m) 
            JOIN contenere ON contenere.id_o = opera.id_o)
            JOIN personaggio ON personaggio.id_p = contenere.id_p)
            WHERE (personaggio.nome_p = "Gesù" OR "Giovanni Battista");'; 

            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th> Nome dell'artista </th>";
                echo "<th> Cognome dell'artista </th>";
                echo "<th> Titolo dell'opera </th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td> $row[nome_a] </td>";
                    echo "<td> $row[cognome_a] </td>";
                    echo "<td> $row[titolo] </td>";
                    echo "</tr>";
        
                }
                echo "</table>";

                } else {
                    echo "Process Failed.";
                }
                mysqli_close($conn);
                break;
                
                
        case 11:
            $query = 'SELECT artista.nome_a, artista.cognome_a, opera.titolo
            FROM ((((artista JOIN opera ON artista.id_a = opera.id_a) 
            JOIN museo ON museo.id_m = opera.id_m) 
            JOIN contenere ON contenere.id_o = opera.id_o)
            JOIN personaggio ON personaggio.id_p = contenere.id_p)
            WHERE (personaggio.nome_p = "Gesù" OR "Giovanni Battista")
            OR (personaggio.nome_p = "Madonna" OR "Giovanni Battista");'; 

            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th> Nome dell'artista </th>";
                echo "<th> Cognome dell'artista </th>";
                echo "<th> Titolo dell'opera </th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td> $row[nome_a] </td>";
                    echo "<td> $row[cognome_a] </td>";
                    echo "<td> $row[titolo] </td>";
                    echo "</tr>";
        
                }
                echo "</table>";

                } else {
                    echo "Process Failed.";
                }
                mysqli_close($conn);
                break;


        case 12:
            $query = 'SELECT artista.nome_a, artista.cognome_a, opera.titolo
            FROM ((((artista JOIN opera ON artista.id_a = opera.id_a) 
            JOIN museo ON museo.id_m = opera.id_m) 
            JOIN contenere ON contenere.id_o = opera.id_o)
            JOIN personaggio ON personaggio.id_p = contenere.id_p)
            WHERE (personaggio.nome_p = "Giovanni Battista") AND (museo.nome_m = "El Prado");'; 

            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th> Nome dell'artista </th>";
                echo "<th> Cognome dell'artista </th>";
                echo "<th> Titolo dell'opera </th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td> $row[nome_a] </td>";
                    echo "<td> $row[cognome_a] </td>";
                    echo "<td> $row[titolo] </td>";
                    echo "</tr>";
        
                }
                echo "</table>";

                } else {
                    echo "Process Failed.";
                }
                mysqli_close($conn);
                break;

        case 100: 
            $query = 'SELECT opera.id_o, opera.titolo, opera.anno_creazione FROM opera;'; 

            $result = mysqli_query($conn, $query);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                echo "<table>";
                echo "<tr>";
                echo "<th> ID opera</th>";
                echo "<th> Titolo </th>";
                echo "<th> Anno creazione </th>";
                echo "</tr>";

                while($row = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td> $row[id_o] </td>";
                    echo "<td> $row[titolo] </td>";
                    echo "<td> $row[anno_creazione] </td>";
                    echo "</tr>";
        
                }
                echo "</table>";

                } else {
                    echo "Process Failed.";
                }
                mysqli_close($conn);
                break;

        default: 
            echo "<br>"."<br>"."<h2>Inserisci una query valida</h2>";
            break;
    };

?>

<div id="footer">
    <button class="button" onclick="history.go(-1);">Home </button>
    <h4>- Programmed by Lin Jiale -</h4>
</div>

</body>
</html>


