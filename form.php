  <form  action="thanks.php"  method="post">
  <div>
    <label  for="nom">Nom :</label>
    <input  type="text"  id="nom"  name="user_name">
  </div>
  <div>
    <label  for="prenom">Prénom :</label>
    <input  type="text"  id="prenom"  name="first_name">
  </div>
  <div>
    <label  for="courriel">E-mail :</label>
      <input  type="email"  id="email"  name="user_email">
  </div>
  <div>
    <label  for="telNumber">Numéro de téléphone :</label>
    <input  type="tel"  id="telNumber"  name="telNumber"
    pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}">
    <p>Format requis : 01-23-45-67-89</p>
  </div>
  <label for="school">Choisissez une école :</label>
    <select id="ecole" name="school">
        <option value="hogwarts">Hogwarts</option>
        <option value="beauxbatons">Beauxbatons</option>
        <option value="durmstrang">Durmstrang</option>
        <option value="mahoutokoro">Mahoutokoro</option>
    </select>
  <div>
    <label  for="message">Message :</label>
    <textarea  id="message"  name="user_message"></textarea>
  </div>
  <div  class="button">
    <button  type="submit">Envoyer votre message</button>
  </div>
</form>