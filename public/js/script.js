const change = src => {
    document.getElementById('view-image').src = src
}

function ShowPassword() {
    var password = document.getElementById("password");
    var eyeShow = document.getElementById("eyeShow");
    var eyeHidden = document.getElementById("eyeHidden");
    if (password.type === "password") {
       password.type = "text";
 
       eyeShow.classList.add('hidden')
       eyeHidden.classList.remove('hidden')
 
    } else {
       password.type = "password";
 
 
       eyeHidden.classList.add('hidden')
       eyeShow.classList.remove('hidden')
 
    }
 
    }

    document.addEventListener('DOMContentLoaded', function() {
      var Error = document.getElementById('unconfirmed-error');

      if (Error) {
          Error.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
  });