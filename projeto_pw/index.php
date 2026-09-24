<?php
include 'config.php';
include DBAPI;
include("customers/functionindex.php");
index();

include HEADER_TEMPLATE;
$erro = null;
try {
    $db = open_database();
} catch (Exception $e) {
    $erro = $e->getMessage();
}
?>

<h1>Dashboard</h1>
<hr>

<?php if (!$erro): ?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Imóveis</h2>
        </div>
        <div class="col-sm-6 text-end h2">
            <a class="btn btn-secondary" href="customers/add.php"><i class="fa-solid fa-user-plus"></i> Novo Cliente</a>
            <a class="btn btn-light" href="index.php"><i class="fa-solid fa-refresh"></i> Atualizar</a>
        </div>
    </div>
</header>

<?php if (!empty($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
        <?php echo $_SESSION['message']; ?>
    </div>
    <?php //clear_messages(); ?> 
<?php endif; ?>

<hr>

<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th width="15%">Nome</th>
            <th>Imagem</th>
            <th>CPF/CNPJ</th>
            <th>Telefone</th>
            <th>Atualizado em</th>
            <th width="15%">Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($customers): ?>
            <?php foreach ($customers as $customer): ?> 
                <tr>
                    <td><?php echo $customer['id']; ?></td>
                    <td><?php echo $customer['name']; ?></td>
                    <td><img src="../img/casateste.png" alt=""></td>
                    <td><?php echo $customer['cpf_cnpj']; ?></td>
                    <td><?php echo telefone($customer['phone']); ?></td>
                    <td>
                        <?php 
                            $dt = new DateTime($customer['modified'], new DateTimeZone("America/Sao_Paulo"));
                            echo $dt->format("d/m/Y"); 
                        ?>
                    </td>
                    <td>
                        <div class="d-flex gap-2 mb-2">
                            <a href="view.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-light"><i class="fa fa-eye"></i> Visualizar</a>
                            <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-secondary"><i class="fa fa-pencil"></i> Editar</a>
                        </div>
                        <a href="#" class="btn btn-sm btn-dark w-100" data-bs-toggle="modal" data-bs-target="#delete-modal"
                            data-customer="<?= $customer['id']; ?>">
                            <i class="fa fa-trash"></i> Excluir
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Nenhum registro encontrado.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php include "modal.php"; ?>

<?php else: ?>
    <div class="alert alert-danger" role="alert">
        <p><b>ERRO:</b> Não foi possível Conectar ao Banco de Dados!<br>
            <?= $erro ?>
        </p>
    </div>
<?php endif; ?>

<?php include FOOTER_TEMPLATE; ?>
