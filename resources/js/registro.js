


// Global

var img;
var video;


// funciones

function cerrarModal() {

}

function getImage() {

   let image = e.target.files[0];
   this.img = image;
   let reader = new FileReader();
   reader.readAsDataURL(image);
   reader.onload = e => {
      this.img = e.target.result;
   }

}

function getVideo() {


   let input = document.getElementById("video");
   let video = input.files[0];
   this.video = video;
   var freader = new FileReader();
   freader.readAsDataURL(video);
   freader.onload = input => {

      this.video = input.target.result;
      document.getElementById('video-preview').src = freader.result;
      alert(this.video);
   }


}

function validar() {

}

function addForm() {

   let nombre = document.getElementById('nombre');
   let dpi = document.getElementById('dpi');
   let telefono = document.getElementById('telefono');
   let correo = document.getElementById('correo');
   let participante = document.getElementById('participante');





}

