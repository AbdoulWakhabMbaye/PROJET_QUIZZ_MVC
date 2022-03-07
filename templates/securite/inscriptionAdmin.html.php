<div class="inscription_admin">
    <div class="formulaire">
        <div class="titre">
            <h2>S'INSCRIRE</h2>
            <p>Pour proposer des quizz</p>
        </div>
        <form action="<?= PATH_POST ?>" method="post" class="formul">
            <div class="first-control">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom">
            </div>
            <div class="first-control">
                <label for="name">Nom</label>
                <input type="text" name="nom">
            </div>
            <div class="first-control">
                <label for="login">Login</label>
                <input type="text" name="login">
            </div>
            <div class="first-control">
                <label for="password">Password</label>
                <input type="text" name="password">
            </div>
            <div class="first-control">
                <label for="confirmer">Confirmer Password</label>
                <input type="text" name="confirmer">
            </div>
            <div class="fiche">
                <label for="file">Avatar</label>
                <input type="file" name="file" id="fichier">
            </div>
            <div class="divSubmit">
                <button type="submit" id="submit">Créer un compte</button>
            </div>
        </form>
        </div>
        <div class="avatar">
            <img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."chat.webp" ?>" alt="AVATAR">
        </div>
        
            
    
</div>