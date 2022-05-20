<template>

<div id="fondo2" class="container">



            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Galeria</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <tr v-for="(venta,index) in arrayReporte" :key="venta.id">
                                        <td>
                                            {{(index+1)}}
                                        </td>
                                        <td>
                                            <button type="button" @click.prevent="verVenta(venta.id)" class="btn btn-success btn-sm">
                                            <i class="fas fa-eye"></i>
                                            </button> &nbsp;
                                            <button type="button" @click.prevent="pdfVenta(venta.id)" class="btn btn-info btn-sm">
                                            <i class="fas fa-file-pdf"></i>
                                            </button> &nbsp;

                                        </td>
                                        <td v-text="venta.usuario"></td>
                                        <td v-text="venta.nombre"></td>
                                        <td v-text="venta.tipo_comprobante"></td>
                                        <td v-text="venta.serie_comprobante"></td>
                                        <td v-text="venta.num_comprobante"></td>
                                        <td v-text="venta.fecha_hora"></td>
                                        <td v-text="venta.total"></td>
                                        <td v-text="venta.recibido"></td>
                                        <td v-text="venta.cambio"></td>
                                        <td v-text="venta.totalc"></td>
                                        <td v-text="venta.totalu"></td>

                                        <td v-text="venta.estado"></td>
                                    </tr>
            <!-- Portfolio Grid Items-->
            <div  v-for="(galeria,index) in arrayReporte" :key="galeria.id" class="row justify-content-center">
                <!-- Portfolio Item 1-->
                {{(index+1)}}
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" :src="urlImage+galeria.image" alt="..." />
                    </div>
                </div>
            </div>
        </div>




</template>

<script>


export default {

    data() {
        return {

             urlImage:'img/',
            arrayGaleria: [],


        };
    },

    methods: {
        listarGaleria() {


Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)

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
                 var url= '/gallery/list';
                  axios.get(url).then(function (response) {
                  console.log(response);

                    var respuesta= response.data;
                    me.arrayGaleria = respuesta.galeria;

                    swal.fire({
                      title: "Finished!",
                      showConfirmButton: false,
                      timer: 1000
                    });



                })
                .catch(function (error) {
                    console.log(error);
                });
        },



        MostrarModal(){




        }


    },
     mounted() {
      //  this.listarGaleria();

    }
};
</script>
