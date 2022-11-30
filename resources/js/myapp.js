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


const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')
if (toastTrigger) {
toastTrigger.addEventListener('click', () => {
    const toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
})
}
