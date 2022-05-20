<template>
    <div class="container">
        <!-- Contact Section Heading-->
        <h2
            class="page-section-heading text-center text-uppercase text-secondary mb-0"
        >
            Registrate
        </h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input
                            class="form-control"
                            id="nombre"
                            type="text"
                            v-model="nombre"
                            placeholder="Nombre de Encargado..."
                            data-sb-validations="required"
                        />
                        <label for="nombre">Nombre Encargado</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            El nombre del encargado es Requerido.
                        </div>
                    </div>
                    <!-- DPI input-->
                    <div class="form-floating mb-3">
                        <input
                            class="form-control"
                            id="dpi"
                            type="text"
                            v-model="dpi"
                            placeholder="DPI"
                            data-sb-validations="required"
                        />
                        <label for="dpi">DPI</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            El DPI es Requerido.
                        </div>
                    </div>
                    <!-- Telefono input-->
                    <div class="form-floating mb-3">
                        <input
                            class="form-control"
                            id="telefono"
                            type="text"
                            v-model="telefono"
                            placeholder="telefono"
                            data-sb-validations="required"
                        />
                        <label for="telefono">Telefono</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            El Telefono Requerido.
                        </div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input
                            class="form-control"
                            id="corre"
                            type="email"
                            v-model="correo"
                            placeholder="name@example.com"
                            data-sb-validations="required,email"
                        />
                        <label for="correo">Correo</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="email:required"
                        >
                            El Correo es required.
                        </div>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="email:email"
                        >
                            El correo no es Valido.
                        </div>
                    </div>
                    <!-- Nombre Participante input-->
                    <div class="form-floating mb-3">
                        <input
                            class="form-control"
                            id="telefono"
                            type="text"
                            v-model="participante"
                            placeholder="Participante"
                            data-sb-validations="required"
                        />
                        <label for="participante">Participante</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            El nombre del participante es requerido.
                        </div>
                    </div>
                    <!-- Nombre Participante input-->
                    <div class="form-floating mb-3">
                        <input
                            class="form-control"
                            id="fechan"
                            type="date"
                            v-model="fechaNacimiento"
                            placeholder="Fecha de Nacimiento"
                            data-sb-validations="required"
                        />
                        <label for="participante">Fecha de Nacimiento</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            La fecha de nacimiento es requerida.
                        </div>
                    </div>

                    <!-- Imagen input-->
                    <div class="form-floating mb-3">
                        <input
                            class="form-control"
                            id="image"
                            type="file"
                            @change="getImage"
                            data-sb-validations="required"
                        />
                        <label for="participante">Imagen</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            La imagen es requerida.
                        </div>
                    </div>

                    <img :src="img" alt="" style="width: 100%" />

                    <!-- Video input-->
                    <div class="form-floating mb-3">
                        <input
                            class="form-control"
                            id="video"
                            type="file"
                            @change="getVideo(event)"
                            data-sb-validations="required"
                        />
                        <label for="video">Video</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            El video requerida.
                        </div>
                    </div>

                    <video
                        autoplay
                        id="video-preview"
                        style="width: 100%"
                        controls
                        v-show="file != ''"
                    />

                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">
                                Form submission successful!
                            </div>
                            To activate this form, sign up at
                            <br />
                            <a
                                href="https://startbootstrap.com/solution/contact-forms"
                                >https://startbootstrap.com/solution/contact-forms</a
                            >
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3"></div>
                    </div>
                </form>
            </div>
            <div v-show="errorGaleria" class="text-center">
                <div class="text-center text-danger mb-3">
                    <div
                        v-for="error in errorMostrarMsjgaleria"
                        :key="error"
                        v-text="error"
                    ></div>
                </div>
            </div>
            <!-- Submit Button-->
            <button
                class="btn btn-primary btn-xl"
                id="submitButton"
                @click="registrar()"
            >
                Enviar
            </button>
        </div>
    </div>
</template>

<script>
import Swal from "sweetalert2";

export default {
    mounted() {},

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
            console.log("registrar");

            if (this.validar()) {
                return;
            }

            /*
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
                    img: this.img,
                    video: this.video,
                })
                .then(function (response) {
                    Swal.fire({
                        position: "top",
                        icon: "success",
                        title: "Datos Agregados Con Exito!",
                        showConfirmButton: false,
                        timer: 1500,
                    });
                    window.location.reload();
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
            console.log("validar");

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
