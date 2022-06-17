(function(){
    let elboite__modale
    let elboite__x;    
    function creerBoiteModale(){
        elboite__modale = document.createElement('div');
        elboite__x = document.createElement('button');
        elboite__modale.appendChild(elboite__x);
        elboite__modale.classList.add('boite__modale');
        elboite__x.classList.add('boite__x');
        elboite__x.innerHTML = 'X';
       let elbody = document.querySelector('body')
        elbody.appendChild(elboite__modale);
    }

    creerBoiteModale();


    /* document.querySelector('.boite__modale') */
    let OK = document.querySelector('.btn')
    console.log('allo');
    OK.addEventListener('mousedown', function(){
        elboite__modale.classList.add('boite__modale__ouvrir')
        
    })

    elboite__x.addEventListener('mousedown', function(){
        elboite__modale.classList.remove('boite__modale__ouvrir')
    })
 })()