 // Import our custom CSS
 import '../sass/app.scss'

 import '../css/carousel.css'

 // Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

// Import only the Bootstrap components we need
import { Dropdown, Offcanvas, Popover } from 'bootstrap';

// Create an example popover
document.querySelectorAll('[data-bs-toggle="popover"]')
  .forEach(popover => {
    new Popover(popover)
  })
