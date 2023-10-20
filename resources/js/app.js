import { commonFunc } from "./modules/common";
import { homeFunc } from "./modules/home";
import "../scss/style.scss";

document.addEventListener( "DOMContentLoaded", function () {

  // common page
  commonFunc();

  // only front page
  if ( document.querySelector( '.p-home' ) ) {
    homeFunc();
  }
} );
