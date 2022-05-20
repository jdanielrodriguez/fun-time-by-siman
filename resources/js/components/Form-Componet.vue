<template>
    <div class="container" id="formulario">
        <!-- Contact Section Heading-->
        <h5
            class="page-section-heading text-center text-uppercase text-primary mb-3"
        >
            Formulario de Inscripción
        </h5>
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
                            placeholder="Nombre"
                            data-sb-validations="required"
                        />
                        <label for="nombre">Nombre</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            El nombre del encargado es Requerido.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input
                            class="form-control"
                            id="apellido"
                            type="text"
                            v-model="apellido"
                            placeholder="Apellido"
                            data-sb-validations="required"
                        />
                        <label for="apellido">Apellido</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            El Apellido del encargado es Requerido.
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
                        <label for="telefono">Teléfono</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            El Telefono Requerido.
                        </div>
                    </div>
                    <!-- Nombre Participante input-->
                    <div class="form-floating mb-3">
                        <input
                            class="form-control"
                            id="telefono"
                            type="text"
                            v-model="participante"
                            placeholder="Nombre de hija o hijo"
                            data-sb-validations="required"
                        />
                        <label for="participante">Nombre de hija o hijo</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            El nombre de hijo o hija es requerido.
                        </div>
                    </div>
                    <!-- Grupo Select -->
                    <div class="form-floating mb-3">
                        <label for="grupo">Seleccione una categoria</label>
                        <div>
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                v-model="grupo"
                                name=""
                                id=""
                                data-sb-validations="required"
                            >
                                <option value="0" disabled>
                                    Seleccione un grupo
                                </option>
                                <option value="1">De 4 a 7 años</option>
                                <option value="2">De 8 a 12 años</option>
                            </select>
                        </div>

                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            La categoria es requerida.
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
                        <label for="participante">Imagen Max 2mb</label>
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
                        <label for="video">Video Max 5mb</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            El video requerida.
                        </div>
                    </div>
                    <div v-show="mostrar">
                        <video
                            autoplay
                            id="video-preview"
                            style="width: 100%"
                            controls
                            v-show="file != ''"
                        />
                    </div>

                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">
                                El participante se registro correctamente
                            </div>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3"></div>
                    </div>


                    <!-- Nombre Participante input-->
                    <div class="me-auto mb-3">
                        <input
                            id="teminos"
                            type="checkbox"
                            v-model="teminos"
                            data-sb-validations="required"
                        />
                        <label for="teminos"> Acepto <a href="#" class="">Términos y Condiciones</a></label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            Debe Aceptar Términos y Condiciones
                        </div>
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
            <div class="w-100">
                <button
                    class="btn btn-primary btn-md w-25 shadow mt-3"
                    id="submitButton"
                    @click="registrar()"
                >
                    Enviar
                </button>
            </div>
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
            grupo: [""],
            img: null,
            video: null,
            mostrar: 0,

            errorMostrarMsjgaleria: [],
            mensaje: "",
            deshabilitar_boton: 0,
            errorGaleria: 0,
        };
    },

    methods: {
        registrar() {
            if (this.validar()) {
                return;
            }

            Swal.fire({
                title: "Checking...",
                text: "Please wait",
                imageUrl: "img/loading.gif",
                showConfirmButton: false,
                allowOutsideClick: false,
            });

            let me = this;

            axios
                .post("/galeria/registro", {
                    nombre: this.nombre,
                    dpi: this.dpi,
                    correo: this.correo,
                    telefono: this.telefono,
                    participante: this.participante,
                    grupo: this.grupo,
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
                    me.mostrar = 0;
                    window.location.reload();
                })
                .catch(function (error) {
                    console.log(error);
                });
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

        getVideo() {
            this.mostrar = 1;
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
            if (this.grupo[0] == "" || this.grupo[0] == 0) {
                this.errorMostrarMsjgaleria.push(
                    "El Grupo no puede estar Vacio."
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
