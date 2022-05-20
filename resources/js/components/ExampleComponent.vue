<template>








<div >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrate</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


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
  <input type="email" class="form-control" v-model="correo" id="email" placeholder="correo electrónico" aria-label="email" aria-describedby="basic-addon1">
</div>


<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-heart"></i></span>
  <input type="text" class="form-control" v-model="participante" id="participante" placeholder="Nombre Participante" >
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar"></i></span>
  <label class="input-group-text" for="fechaNacimiento">Fecha de Nacimiento</label>
  <input type="date" class="form-control" v-model="fechaNacimiento" id="fechaNacimiento" placeholder="Fecha de Nacimiento" >
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
  <input type="file"  class="form-control" placeholder="Nombre Participante" accept="video/*" @change="getVideo( $event )" id="video" aria-label="Participante" aria-describedby="basic-addon1">



                         <video autoplay id="video-preview"  style="width:100%" controls v-show="file != ''"/>

</div>

   <div v-show="errorGaleria" class="text-center">
        <div class="text-center text-error">
            <div v-for="error in errorMostrarMsjgaleria " :key="error" v-text="error"></div>
        </div>
    </div>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" @click="cerrarModal()" data-bs-dismiss="modal">Cerrar</button>
        <button type="button"  :disabled = "deshabilitar_boton==1" class="btn btn-primary"  @click="registrar()">Enviar</button>
      </div>
    </div>
  </div>
</div>
  </div>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
