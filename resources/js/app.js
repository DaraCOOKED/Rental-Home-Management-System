import './bootstrap';
import { createApp } from 'vue';
import UnitCard from './components/UnitCard.vue';

const app = createApp({});
app.component('unit-card', UnitCard);
app.mount('#app');