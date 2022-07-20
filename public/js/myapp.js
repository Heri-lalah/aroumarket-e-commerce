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

//Cart animation
let cards=document.querySelectorAll('.card');
for (let index = 0; index < cards.length; index++) {
    let card = cards[index];
    let addto=card.children[1].children[1].children[1]
    addto.addEventListener('click', function(){
        this.classList.toggle('text-warning')
    })
}

