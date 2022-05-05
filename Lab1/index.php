<html>
<head>
    <title>Lab 1</title>
</head>

<?php
//Obecna data
$dateNow = new DateTime("now");

//Data sformatowana pod względem wyświetlania, oraz z obiektu DateTime do string
$formattedDate = $dateNow->format('d/m/Y H:i:s');
?>

<script type="text/javascript">

    //Zmienna wyciągnieta z kodu php
    let dateNow = '<?php echo $formattedDate; ?>';

    //Zmienna określająca port nasłuchujący
    let port = 8000;

    console.log('Autor: Konrad Pysiewicz');
    console.log('Data uruchomienia: ' + dateNow);
    console.log('Port: ' + port);
</script>

<body>

<?php

//Pobranie ip publicznego użytkownika
$ip = file_get_contents('http://checkip.dyndns.com/');
$ip = str_replace("Current IP Address: ", "", $ip);
echo 'Adres ip użytkownika: ' . $ip . '</br>';
echo 'Strefa czasowa użytkownika: ' . date_default_timezone_get() . '</br>';

//Utworzenie nowej daty na podstawie strefy czasowej użytkownika
$userDate = new DateTime("now", new DateTimeZone(date_default_timezone_get()));
$formattedUserDate = $userDate->format('d/m/Y H:i:s');
echo 'Data i godzina w strefie czasowej użytkownika: ' . $formattedUserDate;
?>
</body>

</html>