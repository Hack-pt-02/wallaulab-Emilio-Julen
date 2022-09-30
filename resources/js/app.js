import './bootstrap';

/** Primer importamos Swal
 * Luego parece ser que traemos Swal a todo el browser con window.Swal
 * Entonces es reconocido por el session->flash
 */

import Swal from 'sweetalert2';
window.Swal = Swal;
//import 'boxicons';