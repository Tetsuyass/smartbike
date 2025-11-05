<?php require __DIR__ . '/partials/header.php'; ?>

<section>
    <h1>Bienvenue chez Smartbike</h1>
    <?php if (!empty($last)): ?>
        <article>
            <h2><?= htmlspecialchars($last['name']) ?></h2>
            <img src="/<?= htmlspecialchars($last['image']) ?>" alt="<?= htmlspecialchars($last['name']) ?>" style="max-width:300px;">
            <p><?= nl2br(htmlspecialchars($last['description'])) ?></p>
            <p>Prix : <?= number_format($last['price'],2,',',' ') ?> €</p>
            <p><a href="/?page=produit&id=<?= $last['id'] ?>">Plus d'infos</a> | <a href="/?page=commander">Commander</a></p>
        </article>
    <?php else: ?>
        <p>Aucun produit disponible pour l'instant.</p>
    <?php endif; ?>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
