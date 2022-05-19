<template>
    <div>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 scroll">

             <div class="col mt-3">
                <div class="card text-center" style="">
                    <img src="https://source.unsplash.com/collection/190728/1500x900" class="card-img-top  img-fluid " alt="...">
                    <div class="card-body">
                        <!--
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        -->
                     <button class="btn colorButton" @click="video()">Video</button>
                    </div>
                  </div>
            </div>


            <div class="col mt-3">
                <div class="card text-center" style="">
                    <img src="https://source.unsplash.com/collection/190728/1500x900" class="card-img-top  img-fluid " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">Ver</button>
                    </div>
                  </div>
            </div>

            <div class="col mt-3">
                <div class="card text-center" style="">
                    <img src="https://source.unsplash.com/collection/190728/1500x900" class="card-img-top  img-fluid " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">Ver</button>
                    </div>
                  </div>
            </div>

            <div class="col mt-3">
                <div class="card text-center" style="">
                    <img src="https://source.unsplash.com/collection/190728/1500x900" class="card-img-top  img-fluid " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">Ver</button>
                    </div>
                  </div>
            </div>

            <div class="col mt-3">
                <div class="card text-center" style="">
                    <img src="https://source.unsplash.com/collection/190728/1500x900" class="card-img-top  img-fluid " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">Ver</button>
                    </div>
                  </div>
            </div>

            <div class="col mt-3">
                <div class="card text-center" style="">
                    <img src="https://source.unsplash.com/collection/190728/1500x900" class="card-img-top  img-fluid " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">Ver</button>
                    </div>
                  </div>
            </div>

            <div class="col mt-3">
                <div class="card text-center" style="">
                    <img src="https://source.unsplash.com/collection/190728/1500x900" class="card-img-top  img-fluid " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">Ver</button>
                    </div>
                  </div>
            </div>

            <div class="col mt-3">
                <div class="card text-center" style="">
                    <img src="https://source.unsplash.com/collection/190728/1500x900" class="card-img-top  img-fluid " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">Ver</button>
                    </div>
                  </div>
            </div>

            <div class="col mt-3">
                <div class="card text-center" style="">
                    <img src="https://source.unsplash.com/collection/190728/1500x900" class="card-img-top  img-fluid " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">Ver</button>
                    </div>
                  </div>
            </div>

            <div class="col mt-3">
                <div class="card text-center" style="">
                    <img src="https://source.unsplash.com/collection/190728/1500x900" class="card-img-top  img-fluid " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">Ver</button>
                    </div>
                  </div>
            </div>
        </div>
    </div>

</template>
<script>



import Swal from 'sweetalert2'

export default {



    data (){
            return {


            }
        },


    methods : {


        Listar(){



        },

        video(){


          Swal.fire({


  html:
  `
  <div class="contentVideo">
  <video autoplay class="video" controls>
   <source src="/assets/video/no1.mp4" type="video/mp4">
   </video>
   </div>

  `,


showConfirmButton: false,
width: '80%',








})


        }


    }

}
</script>



