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
                            placeholder="Nombre de mamá / papá o tutor legal"
                            data-sb-validations="required"
                        />
                        <label for="nombre"
                            >Nombre de mamá / papá o tutor legal</label
                        >
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            El Nombre de mamá / papá o tutor legal es Requerido.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input
                            class="form-control"
                            id="apellido"
                            type="text"
                            v-model="apellido"
                            placeholder="Apellido de mamá / papá o tutor legal"
                            data-sb-validations="required"
                        />
                        <label for="apellido"
                            >Apellido de mamá / papá o tutor legal</label
                        >
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            El Apellido de mamá / papá o tutor legal es
                            Requerido.
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
                            placeholder="e-mail"
                            data-sb-validations="required,email"
                        />
                        <label for="correo">e-mail</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="email:required"
                        >
                            El e-mail es required.
                        </div>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="email:email"
                        >
                            El e-mail no es Valido.
                        </div>
                    </div>
                    <!-- Telefono input-->
                    <div class="form-floating mb-3">
                        <input
                            class="form-control"
                            id="telefono"
                            type="text"
                            v-model="telefono"
                            placeholder="Teléfono"
                            data-sb-validations="required"
                        />
                        <label for="telefono">Teléfono</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            El Teléfono Requerido.
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
                        <select
                            class="form-select"
                            aria-label="Default select example"
                            v-model="grupo"
                            id="grupo"
                            data-sb-validations="required"
                        >
                            <option value="0" disabled>
                                Seleccione una Categoría
                            </option>
                            <option value="1">De 4 a 7 años</option>
                            <option value="2">De 8 a 12 años</option>
                        </select>
                        <label for="grupo">Categoría</label>
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
                    <div class="image-container" v-if="img">
                        <img class="img-fluid item" :src="img" alt="..." />
                    </div>
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
                        <div class="video-container">
                            <video
                                autoplay
                                id="video-preview"
                                style="width: 100%"
                                controls
                                v-show="file != ''"
                            />
                        </div>
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
                    <div class="me-auto mb-3 terminos">
                        <input
                            id="terminos"
                            type="checkbox"
                            v-model="terminos"
                            data-sb-validations="required"
                        />
                        <label for="terminos">
                            Acepto
                            <a
                                href="#terminos-modal"
                                data-bs-toggle="modal"
                                data-bs-target="#terminos-modal"
                                class=""
                                ><u>Términos y Condiciones</u></a
                            ></label
                        >
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
                        class="errorInput"
                    ></div>
                </div>
            </div>
            <!-- Submit Button-->
            <div class="w-100">
                <button
                    id="submitButton"
                    class="btn btn-primary btn-md w-25 shadow mt-3"
                    @click="registrar()"
                >
                    Enviar
                </button>
            </div>
            <div
                class="portfolio-modal modal fade"
                id="terminos-modal"
                tabindex="-1"
                aria-labelledby="terminos-modal"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">
                                        <h2>
                                            Términos y Condiciones Funtime
                                            Casting Siman.
                                        </h2>
                                        <h4
                                            class="text-start text-justify ps-3"
                                        >
                                            1. ¿Cómo Participar?
                                        </h4>
                                        <p class="text-start text-justify">
                                            Tendrás que llenar un formulario
                                            online en www.funtimesiman.com con
                                            los datos de padres o tutor legal,
                                            aceptando la cesión de las imágenes
                                            del casting de niños a SIMAN al
                                            enviar el formulario, así como las
                                            fotografías de la pasarela las
                                            cuales aparecerán posteriormente en
                                            redes sociales de ser seleccionado
                                            ganador.
                                        </p>
                                        <br />
                                        <p class="text-start text-justify">
                                            Subir una foto de buena calidad y un
                                            video mostrando sus habilidades de
                                            modelaje. Límite de peso del vídeo:
                                            5 mb, fotografía 2 mb.
                                        </p>
                                        <br />
                                        <div class="text-start text-justify">
                                            La niña o niño debe cumplir con las
                                            edades de las 2 categorías:
                                            <br />
                                            <ul>
                                                <li>De 4 a 7 años.</li>
                                                <li>De 8 a 12 años.</li>
                                            </ul>
                                            Se escogerán 3 niños por categoría.
                                        </div>

                                        <h4
                                            class="text-start text-justify ps-3 mt-3"
                                        >
                                            2. Premios:
                                        </h4>
                                        <div class="text-start text-justify">
                                            <ul>
                                                <li>
                                                    Participar en la pasarela de
                                                    niños by Siman
                                                </li>
                                                <li>
                                                    Un certificado de regalo de
                                                    Q1,000.00 para cada ganador,
                                                    el cual se entregará el día
                                                    del evento.
                                                </li>
                                                <li>
                                                    Se les obsequiará los
                                                    outfits que utilizarán en la
                                                    pasarela.
                                                </li>
                                            </ul>
                                        </div>

                                        <h4
                                            class="text-start text-justify ps-3 mt-3"
                                        >
                                            3. ¿Cómo se anunciarán a los
                                            ganadores?
                                        </h4>

                                        <p class="text-start text-justify">
                                            Los ganadores serán llamados por
                                            SIMAN para indicarles los detalles
                                            de la pasarela asi como el dia que
                                            deben llegar a tallarse la ropa para
                                            el evento, fecha y horario
                                            inamovible.
                                        </p>

                                        <p class="text-start text-justify">
                                            Durante la pasarela se tomarán
                                            fotografías de los modelos, las
                                            cuales se comprometen a ceder todos
                                            los derechos de uso para fines
                                            publitarios sin fecha de caducidad.
                                            Estas imágenes aparecerán,
                                            posteriormente, en redes sociales y
                                            en cualquier medio que SIMAN utilice
                                            para comunicación publicitaria.
                                        </p>

                                        <h4
                                            class="text-start text-justify ps-3 mt-3"
                                        >
                                            4. Fecha y Horario
                                        </h4>

                                        <p class="text-start text-justify">
                                            La Pasarela Fun Time by Siman se
                                            llevará a cabo el Sábado 28 de mayo
                                            de 2022 a las 16:30 horas en la
                                            tienda de Siman Pradera Concepción.
                                            Esta fecha y hora puede variar con
                                            previa notificación para coordinar a
                                            los participantes.
                                        </p>

                                        <h4
                                            class="text-start text-justify ps-3 mt-3"
                                        >
                                            5. Formulario de inscripción.
                                        </h4>

                                        <p class="text-start text-justify">
                                            Al completar los datos y enviar el
                                            formulario de inscripción, Ud esta
                                            aceptando los terminos y condiciones
                                            descritos en este documento.
                                        </p>
                                    </div>
                                    <div class="col-lg-8 mx-auto">
                                        <button
                                            class="btn btn-primary"
                                            @click="cerrarModal()"
                                            data-bs-dismiss="modal"
                                        >
                                            <i class="fas fa-xmark fa-fw"></i>
                                            Cerrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            apellido: "",
            file: "",
            terminos: false,
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
                title: "Guardando...",
                text: "Por favor espere",
                imageUrl: "img/loading.gif",
                showConfirmButton: false,
                allowOutsideClick: false,
            });

            let me = this;

            axios
                .post("/galeria/registro", {
                    nombre: this.nombre,
                    apellido: this.apellido,
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
                    "El Nombre de mamá / papá o tutor legal no puede estar vacio."
                );
            }
            if (!this.apellido) {
                this.errorMostrarMsjgaleria.push(
                    "El Apellido de mamá / papá o tutor legal no puede estar vacio."
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
                    "La Categoria no puede estar Vacio."
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

            if (!this.terminos) {
                this.errorMostrarMsjgaleria.push(
                    "Debe aceptar los terminos y condiciones."
                );
            }
            if (this.errorMostrarMsjgaleria.length) this.errorGaleria = 1;

            return this.errorGaleria;
        },

        cerrarModal() {
            this.nombre = "";
            this.terminos = false;
            this.apellido = "";
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
