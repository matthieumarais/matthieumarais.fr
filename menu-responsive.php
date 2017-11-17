<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Document sans nom</title>
<style>
.hamburglar {
	-webkit-transform: scale(1);
	transform: scale(1);
	position: relative;
	display: block;
	width: 68px;
	height: 68px;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	display: none;
	border-color:transparent!important
}

.hamburglar:hover, .navbar-default .navbar-toggle, .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover{
	background-color:transparent!important;
	 border-color:transparent!important;
}

 @-webkit-keyframes 
rotate-out {
 0% {
 -webkit-transform: rotate(0deg);
 transform: rotate(0deg);
}
 40% {
 -webkit-transform: rotate(180deg);
 transform: rotate(180deg);
}
 100% {
 -webkit-transform: rotate(360deg);
 transform: rotate(360deg);
}
}
 @keyframes 
rotate-out {
 0% {
 -webkit-transform: rotate(0deg);
 transform: rotate(0deg);
}
 40% {
 -webkit-transform: rotate(180deg);
 transform: rotate(180deg);
}
 100% {
 -webkit-transform: rotate(360deg);
 transform: rotate(360deg);
}
}
@-webkit-keyframes 
rotate-in {
 0% {
 -webkit-transform: rotate(360deg);
 transform: rotate(360deg);
}
 40% {
 -webkit-transform: rotate(180deg);
 transform: rotate(180deg);
}
 100% {
 -webkit-transform: rotate(0deg);
 transform: rotate(0deg);
}
}
@keyframes 
rotate-in {
 0% {
 -webkit-transform: rotate(360deg);
 transform: rotate(360deg);
}
 40% {
 -webkit-transform: rotate(180deg);
 transform: rotate(180deg);
}
 100% {
 -webkit-transform: rotate(0deg);
 transform: rotate(0deg);
}
}

.hamburglar.is-open .path {
	-webkit-animation: dash-in 0.6s linear normal;
	animation: dash-in 0.6s linear normal;
	-webkit-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
}

.hamburglar.is-open .animate-path {
	-webkit-animation: rotate-in 0.6s linear normal;
	animation: rotate-in 0.6s linear normal;
	-webkit-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
}

.hamburglar.is-closed .path {
	-webkit-animation: dash-out 0.6s linear normal;
	animation: dash-out 0.6s linear normal;
	-webkit-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
}

.hamburglar.is-closed .animate-path {
	-webkit-animation: rotate-out 0.6s linear normal;
	animation: rotate-out 0.6s linear normal;
	-webkit-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
}

.path {
	stroke-dasharray: 240;
	stroke-dashoffset: 240;
	stroke-linejoin: round;
}
 @-webkit-keyframes 
dash-in {
 0% {
 stroke-dashoffset: 240;
}
 40% {
 stroke-dashoffset: 240;
}
 100% {
 stroke-dashoffset: 0;
}
}
 @keyframes 
dash-in {
 0% {
 stroke-dashoffset: 240;
}
 40% {
 stroke-dashoffset: 240;
}
 100% {
 stroke-dashoffset: 0;
}
}
@-webkit-keyframes 
dash-out {
 0% {
 stroke-dashoffset: 0;
}
 40% {
 stroke-dashoffset: 240;
}
 100% {
 stroke-dashoffset: 240;
}
}
@keyframes 
dash-out {
 0% {
 stroke-dashoffset: 0;
}
 40% {
 stroke-dashoffset: 240;
}
 100% {
 stroke-dashoffset: 240;
}
}

.burger-icon {
    height: 30px;
    left: 16px;
    position: absolute;
    top: 20px;
    width: 34px;
}

.burger-container {
	position: relative;
	height: 28px;
	width: 36px;
}

.burger-bun-top, .burger-bun-bot, .burger-filling {
 background: #158fef none repeat scroll 0 0;
    border-radius: 2px;
    display: block;
    height: 3px;
    position: absolute;
    width: 35px;
}

.burger-bun-top {
	top: 0;
	-webkit-transform-origin:35px 2px 0;
	transform-origin:35px 2px 0;
}

.burger-bun-bot {
	bottom: 0;
	-webkit-transform-origin: 34px 2px;
	transform-origin: 34px 2px;
}

.burger-filling {
	top: 12px;
}

.burger-ring {
	position: absolute;
	top: 0;
	left: 0;
	width: 68px;
	height: 68px;
}

.svg-ring {
	width: 68px;
	height: 68px;
}

.hamburglar.is-open .burger-bun-top {
	-webkit-animation: bun-top-out 0.6s linear normal;
	animation: bun-top-out 0.6s linear normal;
	-webkit-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
}

.hamburglar.is-open .burger-bun-bot {
	-webkit-animation: bun-bot-out 0.6s linear normal;
	animation: bun-bot-out 0.6s linear normal;
	-webkit-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
}

.hamburglar.is-closed .burger-bun-top {
	-webkit-animation: bun-top-in 0.6s linear normal;
	animation: bun-top-in 0.6s linear normal;
	-webkit-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
}

.hamburglar.is-closed .burger-bun-bot {
	-webkit-animation: bun-bot-in 0.6s linear normal;
	animation: bun-bot-in 0.6s linear normal;
	-webkit-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
}
 @-webkit-keyframes 
bun-top-out {
 0% {
 left: 0;
 top: 0;
 -webkit-transform: rotate(0deg);
 transform: rotate(0deg);
}
 20% {
 left: 0;
 top: 0;
 -webkit-transform: rotate(15deg);
 transform: rotate(15deg);
}
 80% {
 left: -5px;
 top: 0;
 -webkit-transform: rotate(-60deg);
 transform: rotate(-60deg);
}
 100% {
 left: -5px;
 top: 1px;
 -webkit-transform: rotate(-45deg);
 transform: rotate(-45deg);
}
}
 @keyframes 
bun-top-out {
 0% {
 left: 0;
 top: 0;
 -webkit-transform: rotate(0deg);
 transform: rotate(0deg);
}
 20% {
 left: 0;
 top: 0;
 -webkit-transform: rotate(15deg);
 transform: rotate(15deg);
}
 80% {
 left: -5px;
 top: 0;
 -webkit-transform: rotate(-60deg);
 transform: rotate(-60deg);
}
 100% {
 left: -5px;
 top: 1px;
 -webkit-transform: rotate(-45deg);
 transform: rotate(-45deg);
}
}
@-webkit-keyframes 
bun-bot-out {
 0% {
 left: 0;
 -webkit-transform: rotate(0deg);
 transform: rotate(0deg);
}
 20% {
 left: 0;
 -webkit-transform: rotate(-15deg);
 transform: rotate(-15deg);
}
 80% {
 left: -5px;
 -webkit-transform: rotate(60deg);
 transform: rotate(60deg);
}
 100% {
 left: -5px;
 -webkit-transform: rotate(45deg);
 transform: rotate(45deg);
}
}
@keyframes 
bun-bot-out {
 0% {
 left: 0;
 -webkit-transform: rotate(0deg);
 transform: rotate(0deg);
}
 20% {
 left: 0;
 -webkit-transform: rotate(-15deg);
 transform: rotate(-15deg);
}
 80% {
 left: -5px;
 -webkit-transform: rotate(60deg);
 transform: rotate(60deg);
}
 100% {
 left: -5px;
 -webkit-transform: rotate(45deg);
 transform: rotate(45deg);
}
}
@-webkit-keyframes 
bun-top-in {
 0% {
 left: -5px;
 bot: 0;
 -webkit-transform: rotate(-45deg);
 transform: rotate(-45deg);
}
 20% {
 left: -5px;
 bot: 0;
 -webkit-transform: rotate(-60deg);
 transform: rotate(-60deg);
}
 80% {
 left: 0;
 bot: 0;
 -webkit-transform: rotate(15deg);
 transform: rotate(15deg);
}
 100% {
 left: 0;
 bot: 1px;
 -webkit-transform: rotate(0deg);
 transform: rotate(0deg);
}
}
@keyframes 
bun-top-in {
 0% {
 left: -5px;
 bot: 0;
 -webkit-transform: rotate(-45deg);
 transform: rotate(-45deg);
}
 20% {
 left: -5px;
 bot: 0;
 -webkit-transform: rotate(-60deg);
 transform: rotate(-60deg);
}
 80% {
 left: 0;
 bot: 0;
 -webkit-transform: rotate(15deg);
 transform: rotate(15deg);
}
 100% {
 left: 0;
 bot: 1px;
 -webkit-transform: rotate(0deg);
 transform: rotate(0deg);
}
}
@-webkit-keyframes 
bun-bot-in {
 0% {
 left: -5px;
 -webkit-transform: rotate(45deg);
 transform: rotate(45deg);
}
 20% {
 left: -5px;
 bot: 0;
 -webkit-transform: rotate(60deg);
 transform: rotate(60deg);
}
 80% {
 left: 0;
 bot: 0;
 -webkit-transform: rotate(-15deg);
 transform: rotate(-15deg);
}
 100% {
 left: 0;
 -webkit-transform: rotate(0deg);
 transform: rotate(0deg);
}
}
@keyframes 
bun-bot-in {
 0% {
 left: -5px;
 -webkit-transform: rotate(45deg);
 transform: rotate(45deg);
}
 20% {
 left: -5px;
 bot: 0;
 -webkit-transform: rotate(60deg);
 transform: rotate(60deg);
}
 80% {
 left: 0;
 bot: 0;
 -webkit-transform: rotate(-15deg);
 transform: rotate(-15deg);
}
 100% {
 left: 0;
 -webkit-transform: rotate(0deg);
 transform: rotate(0deg);
}
}

.hamburglar.is-open .burger-filling {
	-webkit-animation: burger-fill-out 0.6s linear normal;
	animation: burger-fill-out 0.6s linear normal;
	-webkit-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
}

.hamburglar.is-closed .burger-filling {
	-webkit-animation: burger-fill-in 0.6s linear normal;
	animation: burger-fill-in 0.6s linear normal;
	-webkit-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
}
 @-webkit-keyframes 
burger-fill-in {
 0% {
 width: 0;
 left: 36px;
}
 40% {
 width: 0;
 left: 40px;
}
 80% {
 width: 36px;
 left: -6px;
}
 100% {
 width: 36px;
 left: 0px;
}
}
 @keyframes 
burger-fill-in {
 0% {
 width: 0;
 left: 36px;
}
 40% {
 width: 0;
 left: 40px;
}
 80% {
 width: 36px;
 left: -6px;
}
 100% {
 width: 36px;
 left: 0px;
}
}
@-webkit-keyframes 
burger-fill-out {
 0% {
 width: 36px;
 left: 0px;
}
 20% {
 width: 42px;
 left: -6px;
}
 40% {
 width: 0;
 left: 40px;
}
 100% {
 width: 0;
 left: 36px;
}
}
@keyframes 
burger-fill-out {
 0% {
 width: 36px;
 left: 0px;
}
 20% {
 width: 42px;
 left: -6px;
}
 40% {
 width: 0;
 left: 40px;
}
 100% {
 width: 0;
 left: 36px;
}
}

</style>

</head>

<body>
<button id="hamburger" type="button" class="navbar-toggle collapsed hamburglar" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span>
        <div class="burger-icon">
          <div class="burger-container"> <span class="burger-bun-top"></span> <span class="burger-filling"></span> <span class="burger-bun-bot"></span> </div>
        </div>
        <div class="burger-ring"> <svg class="svg-ring">
          <path class="path" fill="none" stroke="#158fef" stroke-miterlimit="10" stroke-width="2" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
          </svg> </div>
        <svg width="0" height="0">
        <mask id="mask">
          <path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10" stroke-width="2" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
        </mask>
        </svg> </button>

<script>
 var trigger = $('#hamburger'),
        isClosed = true;

    trigger.click(function () {
      burgerTime();
    });

    function burgerTime() {
      if (isClosed == true) {
     
		trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = false;
      } else {
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = true;
      }
    }
	
</script>
</body>
</html>
