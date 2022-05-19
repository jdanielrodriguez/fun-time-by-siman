import { createApp } from 'vue';

import App from './App.vue';

import axios from 'axios';

import Form from './componets/Form.vue'
import List from './componets/List.vue'

import swal from 'sweetalert2';
window.Swal = swal;

const app = createApp(App).mount("#app")

const form = createApp(Form).mount('#form')
const list = createApp(List).mount('#list')






