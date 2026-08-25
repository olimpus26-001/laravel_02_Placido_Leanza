// navbar js

let bullet = document.querySelector('.bullet');
let check=false;

bullet.addEventListener('click', ()=>{
    if (check==false){
        bullet.style.transform= 'rotate(-180deg)';
        check=true;
    }else{
        bullet.style.transform= 'rotate(0deg)';
        check=false;
    }
});