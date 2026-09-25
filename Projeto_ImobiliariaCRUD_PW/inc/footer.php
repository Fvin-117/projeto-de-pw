</main> <!-- /container -->

    <?php
    $dt = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
    $ano = (int) $dt->format("Y");
    $periodo = $ano > 2026 ? "2026 - {$ano}" : "2026";
    ?>

    <footer class="re-footer">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-12 col-lg-5">
                    <a class="re-brand mb-3" href="<?php echo BASEURL; ?>index.php">
                        <span class="re-brand-icon"><i class="fa-solid fa-house-chimney"></i></span>
                        <span class="re-brand-text">
                            <span class="re-brand-name">Casa Nova</span>
                            <span class="re-brand-tag">IMOBILIÁRIA</span>
                        </span>
                    </a>
                    <p class="mb-0" style="max-width: 42ch; font-size: .92rem;">
                        Compra, venda e locação de imóveis com atendimento próximo e transparente.
                    </p>
                </div>

                <div class="col-6 col-lg-3">
                    <h6>Navegação</h6>
                    <ul>
                        <li><a href="<?php echo BASEURL; ?>index.php">Início</a></li>
                        <li><a href="<?php echo BASEURL; ?>customers">Gerenciar imóveis</a></li>
                        <li><a href="<?php echo BASEURL; ?>customers/add.php">Novo imóvel</a></li>
                    </ul>
                </div>

                <div class="col-6 col-lg-4">
                    <h6>Contato</h6>
                    <ul>
                        <li><i class="fa-solid fa-phone"></i> (15) 3000-0000</li>
                        <li><i class="fa-brands fa-whatsapp"></i> (15) 90000-0000</li>
                        <li><i class="fa-regular fa-envelope"></i> contato@casanova.com.br</li>
                        <li><i class="fa-solid fa-location-dot"></i> Rua Exemplo, 123 - Sorocaba/SP</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="re-footer-bottom">
            <div class="container d-flex flex-column flex-md-row justify-content-between gap-1">
                <span>&copy; <?= $periodo ?> Casa Nova Imóveis - Desenvolvido por Flávio e Leonardo</span>
                <span>CRECI 00000-J</span>
            </div>
        </div>
    </footer>

    <script src="<?php echo BASEURL; ?>js/jquery-4.0.0.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/all.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/main.js"></script>
</body>

</html>