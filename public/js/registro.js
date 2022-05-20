/******/ (() => { // webpackBootstrap
    var __webpack_exports__ = {};
    /*!**********************************!*\
      !*** ./resources/js/registro.js ***!
      \**********************************/
    // Global
    var img;
    var video; // funciones

    function cerrarModal() { }

    function getImage() {
        var _this = this;

        var image = e.target.files[0];
        this.img = image;
        var reader = new FileReader();
        reader.readAsDataURL(image);

        reader.onload = function (e) {
            _this.img = e.target.result;
        };
    }

    function getVideo() {
        var _this2 = this;

        var input = document.getElementById("video");
        var video = input.files[0];
        this.video = video;
        var freader = new FileReader();
        freader.readAsDataURL(video);

        freader.onload = function (input) {
            _this2.video = input.target.result;
            document.getElementById('video-preview').src = freader.result;
            alert(_this2.video);
        };
    }

    function validar() { }

    function addForm() {
        var nombre = document.getElementById('nombre');
        var dpi = document.getElementById('dpi');
        var telefono = document.getElementById('telefono');
        var correo = document.getElementById('correo');
        var participante = document.getElementById('participante');
    }
    /******/
})()
    ;
