<?php require __DIR__ . '/partials/header.php'; ?>
<article>
    <h1><?= htmlspecialchars($product['name']) ?></h1>
    <img src="/<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" style="max-width:400px;">
    <p><?= nl2br(htmlspecialchars($product['description'])) ?></p>
    <p>Prix : <?= number_format($product['price'],2,',',' ') ?> €</p>
    <p><a href="/?page=commander">Commander</a></p>
</article>
<?php require __DIR__ . '/partials/footer.php'; ?>
