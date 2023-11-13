<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'envoi d'e-mail</title>
</head>
<body>
    <h2>Formulaire d'envoi d'e-mail</h2>
    <form method="post" action="/envoyer-email">
        @csrf
        <label for="expediteur">Votre adresse e-mail:</label>
        <input type="email" name="expediteur" required><br>

        <label for="sujet">Sujet:</label>
        <input type="text" name="sujet" required><br>

        <label for="message">Message:</label>
        <textarea name="message" rows="5" required></textarea><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
