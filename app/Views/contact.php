<?php require __DIR__ . '/partials/header.php'; ?>
<h1>Contact</h1>
<form method="post" action="/?page=contact">
    <label>Nom: <input name="last_name" required></label>
    <label>Prénom: <input name="first_name" required></label>
    <label>Email: <input type="email" name="email" required></label>
    <label>Message: <textarea name="message" required></textarea></label>
    <button type="submit">Envoyer</button>
</form>

<section>
    <h2>Nos coordonnées</h2>
    <p>Smartbike SARL<br>12 Rue de l'Innovation<br>94200 Ivry-sur-Seine<br>Tél: 01 23 45 67 89</p>
    <h3>Localisation</h3>
    <!-- Google Maps embed pour l'adresse de l'école EFREI -->
    <iframe src="https://www.google.com/maps?q=EFREI+Paris&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
