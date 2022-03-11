const forme = document.querySelector('.formul');
const prenom = document.querySelector('.prenom');
const nom = document.querySelector('.nom');
const login = document.querySelector('.login');
const password1 = document.querySelector('.password1');
const password2 = document.querySelector('.password2');
const prenom_error=document.getElementById('prenom_error');
const nom_error =document.getElementById('nom_error');
const login_error =document.getElementById('login_error');
const password1_error =document.getElementById('password1_error');
const password2_error =document.getElementById('password2_error');


var inputPrenom = document.forms['formul']['prenom'];
var inputNom= document.forms['formul']['nom'];
var inputLogin = document.forms['formul']['login'];
var inputPassword1= document.forms['formul']['password1'];
var inputPassword2= document.forms['formul']['password2'];

var countError = 0;

//Functions-------------------------------------------------------------
function showError(input, message) {//Afficher les messages d'erreur
    if(input==inputPrenom){
        input.style.border= "2px solid #e74c3c";
        prenom_error.style.display = 'block';
        prenom_error.innerText = message;
    }
    if(input==inputNom){
        input.style.border= "2px solid #e74c3c";
        nom_error.style.display = 'block';
        nom_error.innerText = message;
    }
    if(input==inputLogin){
        input.style.border= "2px solid #e74c3c";
        login_error.style.display = 'block';
        login_error.innerText = message;
    }
    if(input==inputPassword1){
        input.style.border= "2px solid #e74c3c";
        input.value='';
        password1_error.style.display = 'block';
        password1_error.innerText = message;
    }
    if(input==inputPassword2){
        input.style.border= "2px solid #e74c3c";
        input.value='';
        password2_error.style.display = 'block';
        password2_error.innerText = message;
    }
}
//
function showSuccess(input) {
    if(input==inputPrenom){
        input.style.border= "2px solid #2ecc71";
    }
    if(input==inputNom){
        input.style.border= "2px solid #2ecc71";
    }
    if(input==inputLogin){
        input.style.border= "2px solid #2ecc71";
    }
    if(input==inputPassword1){
        input.style.border= "2px solid #2ecc71";
    }
    if(input==inputPassword2){
        input.style.border= "2px solid #2ecc71";
    } 
}
//
function checkEmail(input) {//Tester si l'email est valide :  javascript : valid email
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (re.test(input.value.trim().toLowerCase())) {
        showSuccess(input);
    } else {
        showError(input,`Login n'est pas valide!`);
        countError++;
    }
}
//
function checkRequired(inputArray) {// Tester si les champs ne sont pas vides
    inputArray.forEach(input => {
        if (input.value.trim() === '') {
            showError(input,`${getFieldName(input)} est obligatoire`);
            countError++;
        }else{
            showSuccess(input);
        }
    });
}
//
function getFieldName(input) {//Retour le nom de chaque input en se basant sur son id
    return input.className.charAt(0).toUpperCase() + input.className.slice(1);
}
//
function checkLength(input, min, max) {//Tester la longueur de la valeur  d'un input
    if(input.value.length < min){
        showError(input, `${getFieldName(input)} must be at least ${min} characters!`);
        countError++;
    }else if(input.value.length > max){
        showError(input, `${getFieldName(input)} must be less than ${max} characters !`);
        countError++;
    }else{
        showSuccess(input);
    }
}
//
function checkPasswordMatch(input1, input2) {
    if (input1.value !== input2.value) {
        showError(input2, 'Mots de passe différents!');
        countError++;
    }
}





//Event listeners--------------------------------------------------------
forme.addEventListener('submit',function(e){
    
    checkRequired([prenom, nom, login, password1, password2]);
    checkEmail(login);
    checkPasswordMatch(password1,password2);
    checkLength(password, 6, 25);
    
    e.preventDefault();
         
    setTimeout( function(){
        // lorsque que 5 secondes ce sont écoulé
        // envoi le formulaire
        e.target.submit();
    }, 1000);

    

});





///////////////////////////////////////////////////////////////////

const fichier = document.getElementById('fichier');
//const profil = document.getElementById('profil');
const avatar = document.querySelector('.avatar');
const avata = document.querySelector('.avata');


avatar.addEventListener('click', function(){
    fichier.click();
    fichier.addEventListener('change',getImage,false);
});


function getImage(){
    if(avatar.children.length === 0){
        const imagecharger = fichier.files[0];
        let newImg = new Image(imagecharger.width, imagecharger.heigth);
        newImg.src=URL.createObjectURL(imagecharger);
        newImg.id = "profil";
        avatar.appendChild(newImg);
    }else{
        const theElements = document.querySelectorAll('.avatar img');
        theElements.forEach(elt =>{
            avatar.removeChild(elt);   
        })
        getImage();

    }
}
