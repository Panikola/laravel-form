import './bootstrap';
import {createApp} from 'vue';
import Toast from 'vue-toastification';
import FeedbackForm from './components/FeedbackForm.vue';
import 'vue-toastification/dist/index.css';

const app = createApp({});

app.component('FeedbackForm', FeedbackForm);
app.use(Toast, {});
app.mount('#app');
