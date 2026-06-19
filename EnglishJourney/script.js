const loginbox = document.querySelector('.loginbox');
const reglink = document.querySelector('.reglink');
const loglink = document.querySelector('.loglink');


reglink.addEventListener('click',()=>{
    loginbox.classList.add('active');
});

loglink.addEventListener('click',()=>{
    loginbox.classList.remove('active');
});


function signup(){

    alert("Welcome To English Jounery");
   
   
    window.location = "home.php";
}

function updateProfile(){

  alert ("Your Profile is updated");

}

