import './bootstrap';
import Alpine from 'alpinejs'
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import focus from '@alpinejs/focus'
import intersect from '@alpinejs/intersect'


window.Alpine = Alpine
window.Swiper = Swiper

Alpine.plugin(intersect)
Alpine.plugin(focus)
Alpine.start()
