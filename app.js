let btnBar = document.getElementById('btn-bar');
let logUser = document.getElementById("logUser");

btnBar.addEventListener('click', (e)=>{
    logUser.classList.toggle('log-user-visible')
})


