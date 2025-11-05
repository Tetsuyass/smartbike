<?php require __DIR__ . '/partials/header.php'; ?>
<section>
    <h1>Nos vélos</h1>
    <?php foreach ($products as $p): ?>
        <div class="product">
            <h3><?= htmlspecialchars($p['name']) ?></h3>
            <img src="/<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['name']) ?>" style="max-width:200px;">
            <p>Prix : <?= number_format($p['price'],2,',',' ') ?> €</p>
            <p><a href="/?page=produit&id=<?= $p['id'] ?>">Plus d'infos</a> | <a href="/?page=commander">Commander</a></p>
        </div>
    <?php endforeach; ?>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
