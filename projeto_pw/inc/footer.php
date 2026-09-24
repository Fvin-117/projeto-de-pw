
    </main> <!-- /container -->

    <footer class="container">
        <hr>
        <?php $dt = new DateTime("now", new DateTimeZone("America/Sao_Paulo")); ?>
        <p>&copy;2026 à <?= $dt->format("Y")?> - Flávio Vinícius e Leonardo Augusto</p>
    </footer>

    <script src="<?php echo BASEURL; ?>js/jquery-4.0.0.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/all.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/main.js"></script>
    </body>

</html>