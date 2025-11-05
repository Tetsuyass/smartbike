<?php require __DIR__ . '/partials/header.php'; ?>
<h1>Commander un vélo</h1>
<form method="post" action="/?page=commander">
    <label for="product_id">Vélo :</label>
    <select name="product_id" id="product_id" required>
        <option value="">-- choisir --</option>
        <?php foreach ($products as $p): ?>
            <option value="<?= $p['id'] ?>"><?= htmlspecialchars($p['name']) ?> - <?= number_format($p['price'],2,',',' ') ?> €</option>
        <?php endforeach; ?>
    </select>
    <label>Nom: <input name="last_name" required></label>
    <label>Prénom: <input name="first_name" required></label>
    <label>Email: <input type="email" name="email" required></label>
    <label>Message: <textarea name="message"></textarea></label>
    <button type="submit">Envoyer</button>
</form>
<?php require __DIR__ . '/partials/footer.php'; ?>
