import Alpine from 'alpinejs';
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import '/public/css/style.css';
import moment from 'moment';

window.Alpine = Alpine;
window.moment = moment;

Alpine.start();

Alpine.data('datetime', () => {
    return {
        date: moment().format('L LTS'),
    };
});
