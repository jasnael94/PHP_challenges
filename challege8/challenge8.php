<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge 8</title>
</head>
<body>
    

<form action="./thanks.php" method="post">

   <ul>
   <li>
      <label for="name">Nom:</label>
      <input type="text" id="name" name="user_name" />
    </li>
    <li>
      <label for="firstname">Prénom:</label>
      <input type="text" id="firstname" name="user_firstname" />
    </li>
    <li>
      <label for="mail">E-mail:</label>
      <input type="email" id="mail" name="user_email" />
    </li>
    <li>
        <label for="phone">Téléphone:</label>
        <input type="tel" id="phone" name="user_phone"/>
    </li>
    <li>
        <label for="subject">Sujet</label>
        <select name="subject" id="subject">
            <option value="">-Choisir un sujet-</option>
            <option value="signup">Inscription</option>
            <option value="info">Informations</option>
            <option value="contact">Nous Contacter</option>
        </select>
    </li>

    <li>
      <label for="message">Message:</label>
      <textarea id="message" name="message"></textarea>
    </li>

   </ul> 

    <button type="submit">Envoyer</button>

</form>

</body>
</html>