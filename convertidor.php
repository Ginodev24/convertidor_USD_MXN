<?php

if (empty($_POST["valor"]) || $_POST["valor"]==0) {

    $error = "Debes ingresar un valor";
    header("Location: index.php?error=" . $error);

} else {

    $valor  = floatval($_POST["valor"]);
    $apiUrl = "https://v6.exchangerate-api.com/v6/3e9b2296439bc467dcdd0c6e/pair/USD/MXN/{$valor}";
    // $apiUrl = "";

    $iniciarCurl = curl_init($apiUrl);
    curl_setopt($iniciarCurl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($iniciarCurl);


    if (curl_errno($iniciarCurl)) {
        $error = "Error al realizar la solicitud" . curl_error($iniciarCurl);
        header("Location: index.php?error=" . $error);
        exit;
    }

    curl_close($iniciarCurl);

    $datos = json_decode($respuesta, true);


    $costo_pesos = $datos["conversion_rate"];
    $conversion = $datos["conversion_result"];

    $mensaje =  "{$valor} USD equivale a {$conversion} MXN. El dólar vale {$costo_pesos}";
    header("Location: index.php?mensaje=" . $mensaje);
}
