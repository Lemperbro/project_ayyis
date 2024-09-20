
var role = document.getElementById('role');

function roles(){
    var ranting = document.getElementById('input-ranting');
    var cabang = document.getElementById('input-cabang');
    if(this.role.value == 'ranting'){
        ranting.classList.remove('hidden');
        cabang.classList.remove('hidden');
    }else if(this.role.value == 'cabang'){
        cabang.classList.remove('hidden');
        ranting.classList.add('hidden');
    }else{
        cabang.classList.add('hidden');
        ranting.classList.add('hidden');
    }
}

window.addEventListener("unload", function(event) {
    role.selectedIndex = 0;
  });
