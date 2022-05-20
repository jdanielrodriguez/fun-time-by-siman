<template></template>

<script>
import Swal from "sweetalert2";

export default {
    mounted() {
        console.log("Component mounted.");
    },
    data() {
        return {
            nombre: "",
            dpi: "",
            telefono: "",
            correo: "",
            participante: "",
            fechaNacimiento: "",
            img: null,
            video: null,

            errorMostrarMsjgaleria: [],
            mensaje: "",
            deshabilitar_boton: 0,
            errorGaleria: 0,
        };
    },

    methods: {
        registrar() {
            /*
                if (this.validar()){
                    return;
                }
                'img' : this.img,
                    'video' : this.video
*/
            let me = this;

            axios
                .post("/galeria/registro", {
                    nombre: this.nombre,
                    dpi: this.dpi,
                    correo: this.correo,
                    telefono: this.telefono,
                    participante: this.participante,
                    fechanacimiento: this.fechaNacimiento,
                })
                .then(function (response) {
                    console.log(response);

                    Swal.fire({
                        position: "top",
                        icon: "success",
                        title: "Datos Agregados Con Exito!",
                        showConfirmButton: false,
                        timer: 1500,
                    });
                    // window.location.reload();
                })
                .catch(function (error) {
                    console.log(error);
                });

            /*
                       fetch('/galeria/registro', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'url': '/payment',
        "X-CSRF-Token": document.querySelector('input[name=_token]').value
    },
    body: {

    }

})
 .then((res => res.json())
  .then((res) => console.log)
 )

                */
        },

        testing() {
            this.nombre = document.getElementById("nombre").value;
            this.dpi = document.getElementById("dpi").value;
            this.telefono = document.getElementById("telefono").value;
            this.email = document.getElementById("email").value;
            this.participante = document.getElementById("participante").value;

            console.log(this.video);
        },

        getImage(e) {
            let image = e.target.files[0];
            this.img = image;
            let reader = new FileReader();
            reader.readAsDataURL(image);
            reader.onload = (e) => {
                this.img = e.target.result;
            };
        },

        previewVideo() {
            /*
    let video = document.getElementById('video-preview');
    let reader = new FileReader();
    reader.readAsDataURL( video );
    reader.onload = function(){
      alert(reader.result);
    }
    reader.addEventListener('load', function(){
        video.src = reader.result;

    });
    */
        },

        getVideo() {
            /*
      this.file = event.target.files[0];
    this.previewVideo();
    */

            let input = document.getElementById("video");
            let video = input.files[0];
            this.video = video;
            var freader = new FileReader();
            freader.readAsDataURL(video);
            freader.onload = (input) => {
                this.video = input.target.result;
                document.getElementById("video-preview").src = freader.result;
                // alert(this.video);
            };
            /*
   var freader = new FileReader();
   freader.readAsDataURL(input.files[0]);
   freader.onload=function(){
    // alert(freader.result);
     this.video = freader.result;
    document.getElementById('video-preview').src=freader.result;
      }
*/
        },

        validar() {
            this.errorGaleria = 0;
            this.errorMostrarMsjgaleria = [];

            if (!this.nombre) {
                this.errorMostrarMsjgaleria.push(
                    "El Nombre Encargado no puede estar vacio."
                );
            }
            if (!this.dpi) {
                this.errorMostrarMsjgaleria.push(
                    "El DPI no puede estar vacio."
                );
            }
            if (!this.telefono) {
                this.errorMostrarMsjgaleria.push(
                    "El Telefono no puede estar vacio."
                );
            }
            if (!this.correo) {
                this.errorMostrarMsjgaleria.push(
                    "El Correo no puede estar vacio."
                );
            }
            if (!this.participante) {
                this.errorMostrarMsjgaleria.push(
                    "El Nombre Participante no puede estar vacio."
                );
            }
            if (!this.fechaNacimiento) {
                this.errorMostrarMsjgaleria.push(
                    "La Fecha de Naacimiento no puede estar vacio."
                );
            }
            if (!this.img) {
                this.errorMostrarMsjgaleria.push(
                    "La imagen no puede estar vacio."
                );
            }
            if (!this.video) {
                this.errorMostrarMsjgaleria.push(
                    "El Video no puede estar vacio."
                );
            }

            if (this.errorMostrarMsjgaleria.length) this.errorGaleria = 1;

            return this.errorGaleria;
        },

        cerrarModal() {
            this.nombre = "";
            this.dpi = "";
            this.telefono = "";
            this.email = "";
            this.participante = "";
            this.fechaNacimiento = "";
            this.deshabilitar_boton = 0;
            this.errorGaleria = 0;
            this.image = "";
            this.video = "";
            this.errorMostrarMsjgaleria = "";

            document.getElementById("video-preview").value = "";
            document.getElementById("image-preview").value = "";
        },
    },
};
</script>
