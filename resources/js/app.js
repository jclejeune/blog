import Alpine from 'alpinejs';
import 'bootstrap/dist/css/bootstrap.min.css';
import '/public/css/style.css';
import '/public/css/leaflet.css';
import moment from 'moment';
import leaflet from 'leaflet';

window.Alpine = Alpine;
window.moment = moment;
window.leaflet = leaflet;

Alpine.start();

Alpine.data('datetime', () => {
    return {
        date: moment().format('L LTS'),
    };
});


import icon from '../../public/img/gps.png';


let DefaultIcon = L.icon({
    iconUrl: icon,
    iconAnchor:   [25, 50],
});

L.Marker.prototype.options.icon = DefaultIcon;


var map = document.getElementById("map");

map = L.map('map').setView([48.98992925620837, 1.91373130377852425], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 20,
    attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
}).addTo(map);

L.marker([48.98992925620837, 1.91373130377852425],{ alt: 'Insersite' }).addTo(map).bindPopup('Venez nous voir!');
