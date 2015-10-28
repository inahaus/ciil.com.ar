<?php include_once 'assets/elements/head.php'; ?>

<body>
<!--[if lt IE 7]><p class=chromeframe>El navegador que estás usando está desactualizado <a href="http://www.chrome.com/">Instala Google Chrome para una mejor experiencia de navegación</a></p><![endif]-->
<!--
<header>
  <div class="col1"> <img src="img/top.gif" alt="Inahaus — Branding &amp; Graphic Design" width="912" height="50" border="0" /></div>
</header>
-->
<?php include_once 'assets/elements/header.php'; ?>

<body>
        <!-- TÍTULO DE PÁGINA -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <img src="assets/img/rueda.png">
                        <h2>CONTACTO</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us container">
            <div class="row">
                <div class="contact-form span6">
                    <form method="post" action="assets/sendmail.php">
                        <p>Puede hacernos llegar sus consultas mediante este formulario, rellenando los campos y luego pulsando el botón de enviar.</p>
                        <label for="name" class="nameLabel">Nombre</label>
                          <input id="name" type="text" name="name" placeholder="Ingrese su nombre...">
                        <label for="email" class="emailLabel">E-mail</label>
                          <input id="email" type="text" name="email" placeholder="Ingrese su e-mail...">
                        <label for="subject">Asunto</label>
                          <input id="subject" type="text" name="subject" placeholder="Su asunto...">
                        <label for="message" class="messageLabel">Mensaje</label>
                          <textarea id="message" name="message" placeholder="Su mensaje..."></textarea>
                        <button type="submit">ENVIAR</button>
                    </form>
                </div>
            </div>
        </div>

<?php include_once 'assets/elements/footer.php'; ?>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/jquery.quicksand.js"></script>
        <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

