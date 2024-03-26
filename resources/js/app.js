import './bootstrap';
import {createApp} from 'vue';
import FeedbackForm from './components/FeedbackForm.vue';

createApp({})
    .component('FeedbackForm', FeedbackForm)
    .mount('#app');
