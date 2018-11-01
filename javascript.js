/* * Hide from both screenreaders and browsers: h5bp.com/u */
.hidden {
  display: none !important;
  visibility: hidden;
}

/* * Hide only visually, but have it available for screenreaders: h5bp.com/v */
.visuallyhidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

/* * Extends the .visuallyhidden class to allow the element to be focusable * when navigated to via the keyboard: h5bp.com/p */
.visuallyhidden.focusable:active,
.visuallyhidden.focusable:focus {
  clip: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  position: static;
  width: auto;
}

/* * Hide visually and from screenreaders, but maintain layout */
.invisible {
  visibility: hidden;
}

.clearfix:before,
.clearfix:after {
  content: " ";
  /* 1 */
  display: table;
  /* 2 */
}

.clearfix:after {
  clear: both;
}

.noflick, #board, .note, .button {
  -webkit-perspective: 1000;
          perspective: 1000;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}

/* ==========================================================================
   Base styles: opinionated defaults
   ========================================================================== */
* {
  box-sizing: border-box;
}

html,
button,
input,
select,
textarea {
  color: #000000;
}

body {
  font-size: 1em;
  line-height: 1;
  background-color: white;
  background: -webkit-linear-gradient(315deg, white 0%, #ebebeb 47%, #dedede 100%);
  background: linear-gradient(135deg, white 0%, #ebebeb 47%, #dedede 100%);
}

::-moz-selection {
  background: #B3D4FC;
  text-shadow: none;
}

::selection {
  background: #B3D4FC;
  text-shadow: none;
}

a:focus {
  outline: none;
}

::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.7);
}

:placeholder {
  /* Firefox 18- */
  color: rgba(0, 0, 0, 0.7);
}

/* ==========================================================================
   Author's custom styles
   ========================================================================== */
#board {
  padding: 100px 30px 30px;
  margin-top: 40px;
  overflow-y: visible;
}

.note {
  float: left;
  display: block;
  position: relative;
  padding: 1em;
  width: 300px;
  min-height: 300px;
  margin: 0 30px 30px 0;
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.25));
  background: linear-gradient(top, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.25));
  background-color: #FFFD75;
  box-shadow: 5px 5px 10px -2px rgba(33, 33, 33, 0.3);
  -webkit-transform: rotate(2deg);
          transform: rotate(2deg);
  -webkit-transform: skew(-1deg, 1deg);
          transform: skew(-1deg, 1deg);
  -webkit-transition: -webkit-transform .15s;
  transition: -webkit-transform .15s;
  transition: transform .15s;
  transition: transform .15s, -webkit-transform .15s;
  z-index: 1;
}
.note:hover {
  cursor: move;
}
.note.ui-draggable-dragging:nth-child(n) {
  box-shadow: 5px 5px 15px 0 rgba(0, 0, 0, 0.3);
  -webkit-transform: scale(1.125) !important;
          transform: scale(1.125) !important;
  z-index: 100;
  cursor: move;
  -webkit-transition: -webkit-transform .150s;
  transition: -webkit-transform .150s;
  transition: transform .150s;
  transition: transform .150s, -webkit-transform .150s;
}
.note textarea {
  background-color: transparent;
  border: none;
  resize: vertical;
  font-family: "Gloria Hallelujah", cursive;
  width: 100%;
  padding: 5px;
}
.note textarea:focus {
  outline: none;
  border: none;
  box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.2) inset;
}
.note textarea.title {
  font-size: 24px;
  line-height: 1.2;
  color: #000000;
  height: 64px;
  margin-top: 20px;
}
.note textarea.cnt {
  min-height: 200px;
}
.note:nth-child(2n) {
  background: #FAAACA;
}
.note:nth-child(3n) {
  background: #69F098;
}

/* Button style  */
.button {
  font: bold 16px Helvetica, Arial, sans-serif;
  color: #FFFFFF;
  padding: 1em 2em;
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.3));
  background: linear-gradient(top, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.3));
  background-color: #00CC00;
  border-radius: 3px;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3), inset 0 -1px 2px -1px rgba(0, 0, 0, 0.5), inset 0 1px 2px 1px rgba(255, 255, 255, 0.3);
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3);
  text-decoration: none;
  -webkit-transition: background .01s, -webkit-transform .150s;
  transition: background .01s, -webkit-transform .150s;
  transition: transform .150s, background .01s;
  transition: transform .150s, background .01s, -webkit-transform .150s;
}
.button:hover {
  background-color: #00EE00;
  box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.3), inset 0 -1px 2px -1px rgba(0, 0, 0, 0.5), inset 0 1px 2px 1px rgba(255, 255, 255, 0.3);
}
.button:active {
  background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.3));
  background: linear-gradient(bottom, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.3));
  background-color: #00CC00;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3), 0 -1px 0 rgba(255, 255, 255, 0.3);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), inset 0 -1px 2px rgba(255, 255, 255, 0.3);
  outline: none;
}
.button.remove {
  position: absolute;
  top: 5px;
  right: 5px;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background-color: #E01C12;
  text-align: center;
  line-height: 16px;
  padding: 10px;
  border-color: #B30000;
  font-style: 1.6em;
  font-weight: bolder;
  font-family: Helvetica, Arial, sans-serif;
}
.button.remove:hover {
  background-color: #EF0005;
}

#add_new {
  position: fixed;
  top: 20px;
  right: 20px;
  z-index: 100;
}

.author {
  position: absolute;
  top: 20px;
  left: 20px;
}
