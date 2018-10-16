<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800);

	body 
	{
	  font-family: 'Open Sans';
	  overflow: hidden;
	  background: #222222;
	}

	.animation-container 
	{
	  font-weight: 800;
	  font-size: 2.8em;
	  opacity: 1;
	}

	.animation-container svg 
	{
	  width: 90%;
	  display: block;
	  /*top: 5%;*/
	  margin: -8% 0 0 5%;
	  position: fixed;
	}

	.animation-container svg .text 
	{
	  width: 100%;
	  fill: transparent;
	  stroke-width: 1;
	  stroke-linejoin: round;
	  stroke-dasharray: 90,310;
	  stroke-dashoffset: 0;
	  -webkit-animation: text 8s infinite linear;
	  animation: text 8s infinite linear;
	}

	.animation-container svg .text:nth-child(4n + 1) 
	{
	  stroke: #00FF00;
	  -webkit-animation-delay: -2s;
	  animation-delay: -2s;
	}

	.animation-container svg .text:nth-child(4n + 2) {
	  stroke: #00FFFF;
	  -webkit-animation-delay: -4s;
	  animation-delay: -4s;
	}

	.animation-container svg .text:nth-child(4n + 3) 
	{
	  stroke: #FF3300;
	  -webkit-animation-delay: -6s;
	  animation-delay: -6s;
	}

	.animation-container svg .text:nth-child(4n + 4) 
	{
	  stroke: #FFFF00;
	  -webkit-animation-delay: -8s;
	  animation-delay: -8s;
	}

	@-webkit-keyframes text 
	{
	  100% 
	  {
	    stroke-dashoffset: -400;
	  }
	}

	

	</style>
</head>
<body>

<div class="animation-container">
  <svg viewBox="0 205 600 600">
    <symbol id="text">
      <text text-anchor="middle" x="50%" y="50%">Online Music Player</text>
    </symbol>
    <use xlink:href="#text" class="text"></use>
    <use xlink:href="#text" class="text"></use>
    <use xlink:href="#text" class="text"></use>
    <use xlink:href="#text" class="text"></use>
  </svg>
</div>



</body>
</html>