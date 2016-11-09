<html>

<head>
    <link rel="stylesheet" href="css/boarding.css">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
</head>

<body>
    <form method="post" action="serverData.php">
      
        <div>
            <p id="text1">Complet&aacute; con tu nombre y apellido e imprim&iacute; tu boarding pass.</p>
            <p id="text2">Conservalo para presentarlo en la entrada el d&iacute;a de la fiesta.</p>
        </div>

        <img class="imgRelative" src="img/boarding.jpg" alt="Portada" />

        <h2><input id='inputName' type="text" name="fname"><br></h2>

        <label id="labelName"></label>

        <span>
            <button id="btnSubmit" type="submit">RSVP</button>
            <div style="height:5px;"></div>
            <button type="button" id="btnPrint" onclick="imprimir()">Imprimir</button>
        </span>
   
    </form>
    <script src="js/main.js"></script>
</body>

</html>
