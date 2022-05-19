<template>
    <div>
        <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Name </h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>



        </ul>
      </nav><!-- .navbar -->


      <div class="position-relative">

           <button class='btn btn-outline-light' data-bs-toggle="modal" data-bs-target="#exampleModal" ><span class="bi-plus"></span>Registrate</button>
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>


        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">

            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>



    </div>

    <input type="checkbox" id="btn-modal">
    <div class="container-modal">
        <div class="content-modal">
            <h2>¡Bienvenido!</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, nostrum!</p>
            <div class="btn-cerrar">
                <label for="btn-modal">Cerrar</label>
            </div>
        </div>
        <label for="btn-modal" class="cerrar-modal"></label>
    </div>

  </header>
  <div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

<div class="input-group mb-3">

  <span class="input-group-text" for="nombre" id="basic-addon1"><i class="bi bi-person"></i></span>
  <input type="text" class="form-control" v-model="nombre" id="nombre" placeholder="Nombre Encargado" aria-label="nombre" aria-describedby="nombre" request/>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon2"><i class="bi bi-file-person"></i></span>
  <input type="text" class="form-control" v-model="dpi" id="dpi"  placeholder="DPI" aria-label="Dpi" aria-describedby="basic-addon2">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone"></i></span>
  <input type="text" class="form-control" v-model="telefono" id="telefono" placeholder="Teléfono" aria-label="telefono" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
  <input type="email" class="form-control" v-model="email" id="email" placeholder="correo electrónico" aria-label="email" aria-describedby="basic-addon1">
</div>


<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-heart"></i></span>
  <input type="text" class="form-control" v-model="participante" id="participante" placeholder="Participante" >
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="bi bi-card-image"></i></span>
  <label class="input-group-text" for="image">Imagen</label>
  <input type="file"  name="img" accept=".png, .jpg, .jpeg" :maxFileSiza="2048" @change="getImage" id="image"   class="form-control" >




                        <img :src="img" alt="" style="width:100%">



</div>


<div class="input-group mb-3">
  <span class="input-group-text" for="video" id="basic-addon1"><i class="bi bi-film"></i></span>
  <label class="input-group-text" for="video">Video</label>
  <input type="file" accept=".mp4" class="form-control" placeholder="Nombre Participante" @change="getVideo" id="video" aria-label="Participante" aria-describedby="basic-addon1">
<!--
                     <video :src="video" alt="" style="width:50%">
                         -->
</div>
</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
    </div>



</template>
<script>







import { tsEnumDeclaration } from '@babel/types'
import { toTypeString } from '@vue/shared'
import Swal from 'sweetalert2'
import { Alert } from '../../../../public/assets/vendor/bootstrap/js/bootstrap.bundle'

export default {



    data (){
            return {

                nombre : '',
                dpi : '',
                telefono : '',
                email : '',
                participante : '',
                img : null,
                video: null,

                errorMostrarMsjlugar : [],
                 'mensaje':'',
                 deshabilitar_boton:0,



            }
        },


    methods : {





     registrar(){


this.nombre = document.getElementById('nombre').value;
     this.dpi = document.getElementById('dpi').value;
     this.telefono = document.getElementById('telefono').value;
     this.email = document.getElementById('email').value;
     this.participante = document.getElementById('participante').value;
     this.img = document.getElementById('image').value;
     console.log(this.nombre,this.dpi,this.telefono,this.email,this.participante,this.img);

         /*
                if (this.validar()){
                    return;
                }
*/
                let me = this;
/*
                axios.post('/gallery/add',{

                    'nombre': this.nombre,
                    'dpi': this.dpi,
                    'correo': this.correo,
                    'telefono': this.telefono,
                    'participante': this.participante,
                    'img' : this.img,
                    'video' : this.video


                }).then(function (response) {


                     Swal.fire({
                          position: 'top',
                          icon: 'success',
                          title: 'Datos Agregados Con Exito!',
                          showConfirmButton: false,
                          timer: 1500
                        });
                }).catch(function (error) {
                    console.log(error);
                });
                */
            },



   testing(){

     this.nombre = document.getElementById('nombre').value;
     this.dpi = document.getElementById('dpi').value;
     this.telefono = document.getElementById('telefono').value;
     this.email = document.getElementById('email').value;
     this.participante = document.getElementById('participante').value;
     console.log(this.nombre,this.dpi,this.telefono,this.email,this.participante);





   },


   getImage(e){

    let image = e.target.files[0];
                this.img = image;
                let reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = e => {
                    this.img = e.target.result
                }

   },




          validar(){




          }




    }

}
</script>
<style>
#btn-modal{
    display: none;
}
.container-modal{
    width: 100%;
    height: 100vh;
    position: fixed;
    top: 0; left: 0;
    background-color: rgba(144, 148, 150, 0.8);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 100;
}
#btn-modal:checked ~ .container-modal{
    display: flex;
}
.content-modal{
    width: 100%;
    max-width: 400px;
    padding: 20px;
    background-color: #fff;
    border-radius: 4px;
}
.content-modal h2{
    margin-bottom: 15px;
}
.content-modal p{
    padding: 15px 0px;
    border-top: 1px solid #dbdbdb;
    border-bottom: 1px solid #dbdbdb;
}
.content-modal .btn-cerrar{
    width: 100%;
    margin-top: 15px;
    display: flex;
    justify-content: flex-end;
}
.content-modal .btn-cerrar label{
    padding: 7px 10px;
    background-color: #5488a3;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    transition: all 300ms ease;
}
.content-modal .btn-cerrar label:hover{
    background-color:#185E83;
}
.cerrar-modal{
    width:100%;
    height: 100vh;
    position: absolute;
    top:0; left: 0;
    z-index: -1;
}
@media screen and (max-width:800px) {
    .content-modal{
        width: 90%;
    }
}
</style>


