const form = document.querySelector('.box-question');
const question = document.getElementById('question');
const nombre = document.getElementById('nbre-point');
const typeRep = document.getElementById('type-rep');
const ajouter = document.getElementById('ajout-rep');
const reptext = document.getElementById('input-text');
const radio = document.getElementById('radio');
const check = document.getElementById('check');
const lesrep = document.querySelector('.lesrep');
// const supprimer = document.getElementById('supp-rep');

ajouter.addEventListener('click', function(){
    const diva = document.createElement('div');
    diva.className = 'diva';

  const lab = document.createElement('label');
  lab.innerText = 'Reponse';

  const inputy = document.createElement('input');
  inputy.name = 'reponse';
  inputy.className = 'input-text';

  const radioy = document.createElement('input');
  radioy.type = 'radio';
  radioy.name = 'radio'
  radioy.id = 'radio';

  const checky = document.createElement('input');
  checky.name = 'check';
  checky.type = 'checkbox';
  checky.id = 'check'

  const supprimer = document.createElement('img');
  supprimer.src = "../img/Icônes/ic-supprimer.png" ;
  supprimer.id = 'supp-rep';

  typeRep.addEventListener('change',function(){
    lesrep.removeChild(diva);
    
});
  
  if(typeRep.value =='simple'){
    lesrep.appendChild(diva);
    diva.appendChild(lab);
    diva.appendChild(inputy);
    diva.appendChild(radioy);
    diva.appendChild(supprimer);

  }
  if(typeRep.value =='multiple'){
  
    lesrep.appendChild(diva);
    diva.appendChild(lab);
    diva.appendChild(inputy);
    diva.appendChild(checky);
    diva.appendChild(supprimer);

  }
  if(typeRep.value =='texte'){
  
    lesrep.appendChild(diva);
    diva.appendChild(lab);
    diva.appendChild(inputy);
    diva.appendChild(supprimer);
    if(diva){
        ajouter.style.visibility= 'hidden';
    }
    supprimer.addEventListener('click',function(){
        ajouter.style.visibility= 'visible';
    
    });
    

  }
 


  supprimer.addEventListener('click',function(){
    supprimer.parentNode.remove(diva);

});


});


