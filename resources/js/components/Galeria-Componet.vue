<template>
    <div id="fondo2" class="container">
        <!-- Portfolio Section Heading-->
        <h3
            class="page-section-heading text-center text-uppercase text-secondary mb-0"
        >
            Participantes Registrados
        </h3>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div
            class="portfolio-modal modal fade"
            id="galeriaModal"
            tabindex="-1"
            aria-labelledby="galeriaModal"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h3
                                        v-if="currentName"
                                        class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    >
                                        {{ currentName }}
                                    </h3>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->

                                    <div
                                    id="zoomImage"
                                        class="image-container"
                                        v-if="currentImage"
                                    >
                                        <img   @click="zoom()"
                                            class="img-fluid item"
                                            :src="urlImage + currentImage"
                                            alt="..."
                                            loading="lazy"
                                        />
                                    </div>

                                    <div
                                        v-for="video in arrayVideo"
                                        :key="video.id"
                                        class="video-container"
                                    >
                                        <video id="video" width="100%" controls>
                                            <source
                                                :src="urlVideo + video.video"
                                                type="video/mp4"
                                            />
                                        </video>
                                    </div>

                                    <!-- Portfolio Modal - Text-->

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
        <div class="container row justify-content-center m-0">
            <div
                class="card col-xs-12 col-sm-6 col-md-3 col-lg-3 mb-5 me-3-gl"
                v-for="galeria in arrayGaleria"
                :key="galeria.id"
            >
                <div class="image-container">
                    <img
                        class="img-fluid item"
                        :src="urlImage + galeria.image"
                        alt="..."
                        loading="lazy"
                    />
                </div>
                <p>{{ galeria.participante }}</p>
                <div class="card-body">
                    <button
                        @click="verVideo(galeria)"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#galeriaModal"
                    >
                        Video
                    </button>
                </div>
            </div>
        </div>

        <!-- Portfolio Grid Items-->
    </div>
</template>

<script>
export default {
    data() {
        return {
            urlImage: "img/",
            currentImage: "",
            currentName: "",
            urlVideo: "video/",
            arrayGaleria: [],
            mostrar: 0,
            getVideo: "",
            arrayVideo: [],

        };
    },

    methods: {
        listarGaleria: async function() {

            let me = this;
            var url = "/gallery/list";
               await axios
                .get(url)
                .then(function (response) {
                    var respuesta = response.data;
                    me.arrayGaleria = respuesta.galeria;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        verVideo(galeria) {
            let me = this;

            var url = "/gallery/video?galeria=" + galeria.id;
            axios
                .get(url)
                .then(function (response) {
                    var respuesta = response.data;
                    me.arrayVideo = respuesta.video;
                    me.currentImage = galeria.image;
                    me.currentName = galeria.participante;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        cerrarModal() {
            this.currentImage = "";
            this.currentName = "";
            this.mostrar = 0;
            this.getVideo = "";
            this.arrayVideo = [];
        },


        zoom(){

       // document.getElementById("zoomImage").style.width = "800px";


        },


    },
    mounted() {
        this.listarGaleria();

    },
};
</script>
<style>

zoom{

    width: 400px;
}


</style>
