<div class="container-question">
    <h2>Paramétrez vos questions</h2>
    <form action="<? PATH_POST ?>" method="post" class="box-question" name="form">
        <div class="lesquest">
            <label for="question">Questions</label>
            <textarea name="question" id="question" cols="30" rows="3"></textarea>
        </div>
        <small class="error_question">ERROR</small>
        <div class="lespoints">
            <label for="nbr-point">Nombre de point </label>
            <input type="number" name="nbre-point" id="nbre-point">
        </div>
        <small class="error_question">ERROR</small>
        <div class="lestyp">
            <label for="type-rep">Type de réponse</label>
            <select name="type-rep" id="type-rep">
                <option value="none">Donnez le type de réponse</option>
                <option value="simple">Simple</option>
                <option value="multiple">Multiple</option>
                <option value="texte">Texte</option>
            </select>
            <img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."Icônes".DIRECTORY_SEPARATOR."ic-ajout-réponse.png" ?>" alt="" id="ajout-rep">
        </div>
        <small class="error_question">ERROR</small>
        <div class="lesrep">
            <!-- <label for="reponse">Réponse 1</label>
            <input type="text" name="reponse" id="input-text">
            <input type="radio" name="radio" id="radio">
            <input type="checkbox" name="check" id="check">
            <img src="<?= WEB_ROOT."img".DIRECTORY_SEPARATOR."Icônes".DIRECTORY_SEPARATOR."ic-supprimer.png" ?>" alt="" id="supp-rep"> -->

        </div>
        <div class="butt">
            <button type="submit" class="enregistrer">Enregistrer</button>
        </div>
</form>
</div>

<script src="<?= WEB_ROOT.'js'.DIRECTORY_SEPARATOR.'creerQuestion.js'  ?>"></script>