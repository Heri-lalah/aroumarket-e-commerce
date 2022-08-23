//Global animation
let tohome=document.getElementById('tohome');
let righttohome=document.getElementById('righttohome');
document.addEventListener('scroll', function () {
    if(window.scrollY>80){
        tohome.classList.replace('tohome','tohomeactive')
    }else{
        tohome.classList.replace('tohomeactive','tohome')
    }
})
