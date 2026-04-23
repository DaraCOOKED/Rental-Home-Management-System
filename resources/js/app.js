import './bootstrap';
import { createApp } from 'vue';
import UnitCard from './components/UnitCard.vue';
import cardtenant from './components/cardenant.vue'

const app = createApp({});
app.component('unit-card', UnitCard);
app.mount('#app');
app.component('card-tenant', cardtenant)