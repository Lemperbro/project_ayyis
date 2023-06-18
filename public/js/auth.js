//   var jenisSelect = document.getElementById("jenis");
//   var inputRanting = document.getElementById("input-ranting");
//   var inputCabang = document.getElementById("input-cabang");

//   jenisSelect.addEventListener("change", function() {
//     if (jenisSelect.value === "ranting") {
//       inputRanting.style.display = "block";
//       inputCabang.style.display = "none";
//     } else if (jenisSelect.value === "cabang") {
//       inputRanting.style.display = "none";
//       inputCabang.style.display = "block";
//     } else {
//       inputRanting.style.display = "none";
//       inputCabang.style.display = "none";
//     }
//   });

function roles(){
    var role = document.getElementById('role');
    var ranting = document.getElementById('input-ranting');
    var cabang = document.getElementById('input-cabang');
    if(role.value == 'ranting'){
        ranting.classList.remove('hidden');
        cabang.classList.remove('hidden');
    }else if(role.value == 'cabang'){
        cabang.classList.remove('hidden');
        ranting.classList.add('hidden');
    }else{
        cabang.classList.add('hidden');
        ranting.classList.add('hidden');
    }
}
