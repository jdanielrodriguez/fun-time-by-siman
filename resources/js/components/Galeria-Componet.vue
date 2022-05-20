<template>
    <div id="fondo2" class="container">
        <!-- Portfolio Section Heading-->
        <h2
            class="page-section-heading text-center text-uppercase text-secondary mb-0"
        >
            Galeria
        </h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div
            class="portfolio-modal modal fade"
            id="portfolioModal2"
            tabindex="-1"
            aria-labelledby="portfolioModal2"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2
                                        class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    >
                                        Video
                                    </h2>
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
                                        v-for="video in arrayVideo"
                                        :key="video.id"
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

        <!-- Portfolio Grid Items-->
        <div
            v-for="galeria in arrayGaleria"
            :key="galeria.id"
            class="row justify-content-center"
        >
            <!-- Portfolio Item 1-->
            <!--
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#1">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" :src="urlImage+galeria.image" alt="..." />
                    </div>
                </div>
            -->
            <div class="card" style="width: 18rem">
                <img
                    class="img-fluid"
                    :src="urlImage + galeria.image"
                    alt="..."
                />
                <div class="card-body">
                    <button
                        @click="verVideo(galeria.id)"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#portfolioModal2"
                    >
                        Video
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            urlImage: "img/",
            urlVideo: "video/",
            arrayGaleria: [],
            mostrar: 0,
            getVideo: "",
            arrayVideo: [],
        };
    },

    methods: {
        listarGaleria() {
            /*

                if (this.validarReporte()){
                    return;
                }
                console.log(lugar);
                console.log(de);
                console.log(a);

                   swal.fire({
              title: "Checking...",
              text: "Please wait",
              imageUrl: "img/loading.gif",
              showConfirmButton: false,
              allowOutsideClick: false
            });
            */

            let me = this;
            var url = "/gallery/list";
            axios
                .get(url)
                .then(function (response) {
                    //console.log(response.data);

                    var respuesta = response.data;
                    me.arrayGaleria = respuesta.galeria;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        verVideo(galeria) {
            let me = this;

            var url = "/gallery/video?galeria=" + galeria;
            axios
                .get(url)
                .then(function (response) {
                    console.log(response.data);

                    var respuesta = response.data;
                    me.arrayVideo = respuesta.video;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        cerrarModal() {},
    },
    mounted() {
        this.listarGaleria();
    },
};
</script>
