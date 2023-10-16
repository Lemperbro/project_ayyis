const { preview } = require("vite");

function LihatKta() {
    const [imageDepan] = ktaDepan.files;
    const [imageBelakang] = ktaBelakang.files;
    if (imageBelakang || imageDepan) {
        previewKtaDepan.src = URL.createObjectURL(imageDepan);
        previewKtaBelakang.src = URL.createObjectURL(imageBelakang);
    }


}