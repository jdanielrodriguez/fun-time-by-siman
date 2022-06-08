<template>
    <div class="container" id="formulario" v-if="!mostrar">
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
                            @blur="duplicado()"
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
                        <div v-show="validateDPI" class="text-center">
                            <p class="text-center text-danger mb-3 f-size-18">
                                El DPI ya esta Registrado!
                            </p>
                        </div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input
                            @blur="validarCorreo()"
                            class="form-control"
                            id="correo"
                            type="email"
                            v-model="correo"
                            placeholder="E-mail"
                            data-sb-validations="required,email"
                        />
                        <label for="correo">E-mail</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="email:required"
                        >
                            El E-mail es required.
                        </div>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="email:email"
                        >
                            El e-mail no es Valido.
                        </div>
                        <div v-show="validateCorreo" class="text-center">
                            <p class="text-center text-danger mb-3">
                                Ingrese un email Correcto!
                            </p>
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
                            @change="validarHorario()"
                            v-model="grupo"
                            id="grupo"
                            data-sb-validations="required"
                        >
                            <option value="0" disabled>
                                Seleccione un Horario
                            </option>
                            <option value="1" v-if="grupos[0]">
                                10:00 Horas
                            </option>
                            <option value="2" v-if="grupos[1]">
                                11:00 Horas
                            </option>
                            <option value="3" v-if="grupos[2]">
                                12:00 Horas
                            </option>
                        </select>
                        <label for="grupo">Horarios</label>
                        <div
                            class="invalid-feedback"
                            data-sb-feedback="name:required"
                        >
                            El Horario es requerida.
                        </div>
                    </div>

                    <div v-show="validateHorario" class="text-center">
                        <p class="text-center text-danger mb-3 f-size-18">
                            El Horario ya llego al maximo de participantes,
                            seleccione otro.
                        </p>
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
                    :disabled="deshabilitar_boton == 1"
                    id="submitButton"
                    class="btn btn-primary btn-md w-25 shadow mt-3"
                    @click="registrar"
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
                                            Términos y Condiciones Funtime Baby
                                            Race.
                                        </h2>
                                        <p class="text-start text-justify">
                                            1. Podrán participar en el Concurso
                                            todas aquellas personas mayores de
                                            edad, con sus bebés y residentes en
                                            el territorio de Guatemala que se
                                            hayan preinscrito asistan al
                                            certamen y se presenten de manera
                                            presencial.
                                        </p>
                                        <p class="text-start text-justify">
                                            2. La participación en el Concurso
                                            es gratuita, de tal manera que no
                                            será necesaria la compra de ningún
                                            producto, ni el pago de cuota o
                                            cantidad alguna para la
                                            participación y en su caso, la
                                            obtención del premio objeto del
                                            mismo.
                                        </p>
                                        <p class="text-start text-justify">
                                            3. No podrán participar en el
                                            concurso los bebés que actualmente
                                            estén caminando ya que se trata de
                                            una carrera de gateo.
                                        </p>
                                        <p class="text-start text-justify">
                                            4. SIMAN se reserva el derecho de
                                            dar de baja y expulsar
                                            automáticamente a cualquier
                                            participante que estime debido a un
                                            mal uso o abuso del Concurso, con la
                                            correspondiente cancelación de su
                                            participación. Se entiende como mal
                                            uso, con carácter enunciativo y no
                                            excluyente.
                                        </p>
                                        <p class="text-start text-justify">
                                            5. Los participantes sólo podrán
                                            preinscribirse para una sola Carrera
                                            de Gateo del total de 3 carreras que
                                            se realizara el sabado 11 de junio
                                            en 3 horarios 10am 11 am 12 pm . Se
                                            convocará a los padres de cada bebé
                                            15 minutos antes de la competición
                                            en la pista de gateo para proceder a
                                            la entrega de numeros, organizar a
                                            los bebés competidores y completar
                                            sus datos, asignando un carril para
                                            cada uno. Importante: Si los
                                            participantes preinscritos no se
                                            presentan en el periodo de tiempo
                                            mencionado anteriormente, perderán
                                            su derecho a participar y se
                                            procederá a incorporar a otro
                                            concursante que se encuentre en
                                            lista de espera.
                                        </p>
                                        <p class="text-start text-justify">
                                            6. Formulario de inscripción. Al
                                            completar los datos y enviar el
                                            formulario de inscripción, Ud esta
                                            aceptando los terminos y condiciones
                                            descritos en este documento.
                                        </p>
                                        <p class="text-start text-justify">
                                            7. Al Inscribirse acepta que el
                                            tutor y participante salgan en
                                            fotografías o vídeos en redes
                                            sociales y otros canales de
                                            comunicación de Siman.
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
    <div class="container" v-else>
        <div class="finish">
            <img src="asset/image/finish.png" alt="" />
        </div>
    </div>
</template>

<script>
import Swal from "sweetalert2";

export default {
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
            grupos: [],
            mensaje: "",
            mostrar: 0,
            deshabilitar_boton: 0,
            // validaciones
            validateImage: 0,
            validateVideo: 0,
            validateDPI: 0,
            validateHorario: 0,
            validateCorreo: 0,
            errorMostrarMsjgaleria: [],
            mensaje: "",
            deshabilitar_boton: 0,
            errorGaleria: 0,
        };
    },

    methods: {
        registrar: async function () {
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
            me.deshabilitar_boton = 1;
            me.mostrar = 1;
            await axios
                .post("/galeria/registro", {
                    nombre: this.nombre,
                    apellido: this.apellido,
                    dpi: this.dpi,
                    correo: this.correo,
                    telefono: this.telefono,
                    participante: this.participante,
                    grupo: this.grupo,
                })
                .then(function (response) {
                    Swal.fire({
                        position: "top",
                        icon: "success",
                        title: "Datos Agregados Con Exito!",
                        showConfirmButton: false,
                        timer: 2500,
                    });
                    setTimeout(
                        window.location.reload.bind(window.location),
                        3000
                    );
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

        getImage() {
            let input = document.getElementById("image");
            let img = input.files[0];
            if (!/\.(jpg|jpeg|png)$/i.test(img.name)) {
                this.validateImage = 1;
            } else {
                this.validateImage = 0;
                this.img = img;
                let freader = new FileReader();
                freader.readAsDataURL(img);
                freader.onload = (input) => {
                    this.img = input.target.result;
                };
            }
        },

        getVideo() {
            let input = document.getElementById("video");
            let video = input.files[0];

            if (!/\.(mp4|mov|avi|m4a)$/i.test(video.name)) {
                this.validateVideo = 1;
            } else {
                this.validateVideo = 0;
                this.video = video;
                let extension = "mp4";
                var freader = new FileReader();
                freader.readAsDataURL(video);
                freader.onload = (input) => {
                    this.video = input.target.result;
                    document.getElementById("video-preview").style.display =
                        "block";
                    document.getElementById("video-preview").src =
                        freader.result;
                    // alert(this.video);
                };
            }

            this.mostrar = 1;
        },

        duplicado() {
            axios
                .put("/gallery/validar", {
                    dpi: this.dpi,
                })
                .then((response) => {
                    this.mensaje = response.data;
                    if (this.mensaje === "Existe") {
                        this.validateDPI = 1;
                    } else {
                        this.validateDPI = 0;
                    }
                })
                .catch((error) => {
                    console.log(err);
                });
        },

        validarHorario() {
            axios
                .post("/gallery/validar-grupo", {
                    grupo: this.grupo,
                })
                .then((response) => {
                    this.mensaje = response.data;
                    if (this.mensaje === "El grupo esta lleno") {
                        this.validateHorario = 1;
                    } else {
                        this.validateHorario = 0;
                    }
                })
                .catch((error) => {
                    console.log(err);
                });
        },
        async cantidadHorario(grupo) {
            let ret;
            await axios
                .get("/gallery/cantidad-grupo?grupo=" + grupo)
                .then((response) => {
                    ret = response.data;
                })
                .catch((err) => {
                    console.log(err);
                });
            return ret;
        },

        obtenerHorarios: async function () {
            this.grupos.length = 0;
            for (var i = 0; i < 3; i++) {
                let horario = await this.cantidadHorario(i + 1);
                this.grupos.push(horario <= 20);
            }
        },
        validarCorreo() {
            let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (document.getElementById("correo").value.match(mailformat)) {
                this.validateCorreo = 0;
            } else {
                this.validateCorreo = 1;
            }
        },

        validar() {
            this.errorGaleria = 0;
            this.errorMostrarMsjgaleria = [];

            /*** validar campos vacios */
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

            if (!this.terminos) {
                this.errorMostrarMsjgaleria.push(
                    "Debe aceptar los terminos y condiciones."
                );
            }

            /*** validar duplicacion dpi */
            if (this.validateDPI == 1) {
                this.errorMostrarMsjgaleria.push("El DPI ya esta Registrado!.");
            }

            /*** validar cantidad de por horario */
            if (this.validateHorario == 1) {
                this.errorMostrarMsjgaleria.push(
                    "El Horario seleccionado esta lleno!."
                );
            }

            /*** validar escritura de email */
            if (this.validateCorreo == 1) {
                this.errorMostrarMsjgaleria.push("Ingrese un email Correcto!");
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
            this.errorMostrarMsjgaleria = "";
        },
    },
    async mounted() {
        await this.obtenerHorarios();
    },
};
</script>
