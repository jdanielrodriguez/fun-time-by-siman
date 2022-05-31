<template>
    <div id="fondo2" class="container">
        <!-- Portfolio Section Heading-->


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
                class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mb-3 me-3-gl min-heigth-galery"
                v-for="(galeria,index) in arrayGaleria"
                :key="galeria.id"
            >
                <button
                        class="btn btn-primary btn-xl form-control pt-0 min-heigth-galery shadow"
                    >
                    <div class="headerButton mb-4">
                        <h5>
                            {{ galeria.label ? galeria.name : '' }}
                        </h5>
                    </div>
                    <div class="bodyButton">
                        {{ galeria.label ? galeria.label + ' cupos disponibles.' : '' }}
                    </div>
                </button>
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
            arrayGaleria: [{id:1,label:'',name:'Carrera a las 10:00 H'},{id:2,label:'',name:'Carrera a las 11:00 H'},{id:3,label:'',name:'Carrera a las 12:00 H'}],
            mostrar: 0,
            getVideo: "",
            arrayVideo: [],

        };
    },

    methods: {
        listarGaleria: function() {
            for(var i = 0; i < this.arrayGaleria.length; i++){
                this.arrayGaleria[i].label = this.cantidadHorarios(this.arrayGaleria[i]);
            }

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

        cantidadHorarios(galeria) {
            axios
                .get("/gallery/cantidad-grupo?grupo="+galeria.id)
                .then((response) => {
                    const label = "" + (20 - response.data);
                    galeria.label = label;
                    return label;
                })
                .catch((error) => {
                    console.log(error);
                    return '';
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
    async mounted() {
        await this.listarGaleria();
    },
};
</script>
<style>

zoom{

    width: 400px;
}


</style>
