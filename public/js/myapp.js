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
for(let i=0; i<cards.length;i++){
    let card=cards[i];
    card.addEventListener('mouseover', function () {
        let fade=this.children[1];
        let productinfo=this.children[2]
        let addto=this.children[3];
        fade.classList.add('fadeactive');
        //addto.classList.add('activecard');
        productinfo.classList.add('activeproductinfo');
    })
    card.addEventListener('mouseout', function () {
        let fade=this.children[1];
        let productinfo=this.children[2]
        let addto=this.children[3];
        fade.classList.remove('fadeactive');
        //addto.classList.remove('activecard');
        productinfo.classList.remove('activeproductinfo');
    })
}
var addtos=document.querySelectorAll('.addto');
for (let index = 0; index < addtos.length; index++) {
    const element = addtos[index];
    element.addEventListener('click', function () {
        element.classList.toggle('addtoclicked');
        element.nextElementSibling.toggleAttribute('checked')
    })
}

