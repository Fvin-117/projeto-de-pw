<?php
include 'config.php';
include DBAPI;

include HEADER_TEMPLATE;
$erro = null;
try {
	$db = open_database();
} catch (Exception $e) {
	$erro = $e->getMessage();
}
?>

<?php if (!$erro): ?>

	<section class="re-hero mb-4">
		<h1>Painel de imóveis</h1>
		<p>Cadastre novos imóveis e mantenha o catálogo da imobiliária sempre atualizado.</p>
		<i class="fa-solid fa-house-chimney re-hero-icon" aria-hidden="true"></i>
	</section>

	<div class="row g-3">
		<div class="col-12 col-md-6 col-lg-4">
			<a href="customers/add.php" class="re-tile re-tile--accent">
				<span class="re-tile-icon"><i class="fa-solid fa-plus"></i></span>
				<span>
					<h2>Novo imóvel</h2>
					<p>Cadastre uma casa, apartamento ou terreno.</p>
				</span>
			</a>
		</div>

		<div class="col-12 col-md-6 col-lg-4">
			<a href="customers" class="re-tile">
				<span class="re-tile-icon"><i class="fa-solid fa-building"></i></span>
				<span>
					<h2>Gerenciar imóveis</h2>
					<p>Consulte, edite ou remova imóveis cadastrados.</p>
				</span>
			</a>
		</div>
	</div>

<?php else: ?>
	<div class="alert alert-danger d-flex align-items-start gap-3" role="alert">
		<i class="fa-solid fa-triangle-exclamation fs-4"></i>
		<div>
			<strong>Não foi possível conectar ao banco de dados.</strong><br>
			<?= $erro ?>
		</div>
	</div>

<?php endif; ?>

<?php include FOOTER_TEMPLATE; ?>