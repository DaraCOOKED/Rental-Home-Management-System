import './bootstrap';
import { createApp } from 'vue'
import PropertyCard from './components/PropertyCard.vue'

const app = createApp({})
app.component('property-card', PropertyCard)
app.mount('#app')