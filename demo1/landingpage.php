<?php 
session_start();


	






?>

<!DOCTYPE html>
<html lang="en">
<head>

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Glory:wght@500&display=swap');



:root {
  --clr-primary-400: hsl(60 100% 50%);
  --clr-neutral-100: hsl(0 0% 0%);
  --clr-neutral-100: hsl(0 0% 100%);
  
  --clr-neutral-100: #17141d;
  --clr-neutral-200: #201c29;
  --clr-neutral-400: hsl(0,0%,40%);
  --clr-neutral-600: hsl(0,0%,60%);
  --clr-neutral-1000: #ffffff;
  
  --clr-accent-100: #ff8a00;
  --clr-accent-200: cyan;       //#e52e53;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'DM Mono', monospace, serif;
  background-color: var(--clr-neutral-100);
  color: var(--clr-neutral-1000);
}

.card__list {
  display: flex;
  flex-direction: row;
  padding: 3rem;
  overflow-x: scroll;
}

.card {
  display: flex;
  flex-direction: column;
  position: center;
  height: 350px;
  width: 400px;
  min-width: 250px;
  padding: 1.5rem;
  
  border-radius: 16px;
  background: var(--clr-neutral-100);
  box-shadow: -1rem 0 3rem black;
  
  transition: 200ms;
}

.card:hover {
  transform: translateY(-1rem);
}

.card:hover~.card {
  transform: translateX(130px);
}

.card:not(:first-child) {
  margin-left:-130px;
}

.card__list::-webkit-scrollbar{
  width: 10px;  
  height: 10px;
}

.card__list::-webkit-scrollbar-thumb{
  background: var(--clr-neutral-200);
  border-radius: 10px;
  box-shadow: inset 2px 2px 2px hsla(0 0% 100% / 0.25);
}
.card__list::-webkit-scrollbar-track {
  background: linear-gradient(90deg,#201c29,#201c29 1px,#17141d 0,#17141d);
}

.card__author {
  position: relative;
  display: grid;
  grid-template-columns: 75px 1fr;
  align-items: center;
   
  margin: 3rem 0 0;
  grid-template-areas: "imag texto";
  gap: 1rem;
}

.card__author:hover .card__avatar img {
  filter: grayscale(0%);
}

.card__avatar img {
  display: block;
  overflow: hidden;
  width: 95%;
  height: 95%;
  place-self: center;
  border-radius: 50%;
  
  filter: grayscale(100%);
/*   margin: 16px 10px; */
  margin: 0 auto 1em;
  grid-area: imag;
}

  
.card__half-circle {
  position: absolute;
  bottom:-0.5em;
  left: 0;
  width: 100%;
  height: 100%;
  fill: none;
  stroke: var(--clr-accent-100);
  stroke-width:8px;
  stroke-linecap: round;
  z-index=1;
  grid-area: imag;
  margin: 0 auto;
}

.card__header h2:hover {
  background-image: linear-gradient(90deg, var(--clr-accent-100), var(--clr-accent-200));
  background-clip:text;
  -webkit-background-clip: text;
  color:transparent;
  -webkit-text-fill-color: transparent;
}

.card__authorname {
  grid-area: texto;
  place-self: start;
}

.card__authornameprefix {
  font-size: 1.05rem;
  font-weight: bold;
  color: cyan;
  margin-bottom: 0.5rem;
}

.card:nth-of-type(2) .card__authornameprefix {
  filter: hue-rotate(150deg);
}

.card:nth-of-type(3) .card__authornameprefix {
  filter: hue-rotate(200deg);
}

.card__author {
  color: var(--clr-neutral-600);
}

.tags {
  margin-top: 2rem;
}
.tags a {
    font-style: normal;
    font-weight: 700;
    font-size: .5rem;
    color: #7a7a8c;
    text-transform: uppercase;
    font-size: .66rem;
    border: 3px solid #28242f;
    border-radius: 2rem;
    padding: .2rem .85rem .25rem;
    position: relative;
}

.tags a:hover {
    background: linear-gradient(90deg,#ff8a00,#e52e71);
    text-shadow: none;
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-box-decoration-break: clone;
    background-clip: text;
    border-color: white;
} 

span{
  position: relative;
  display: inline-flex;
  width: 180px;
  height: 55px;
  margin: 0 50px;
  perspective: 1000px;
}
span a{
  font-size: 19px;
  letter-spacing: 1px;
  transform-style: preserve-3d;
  transform: translateZ(-25px);
  transition: transform .25s;
  font-family: 'Montserrat', sans-serif;
  position: relative;
}
span a:before,
span a:after{
  position: absolute;
  content: "LOGIN";
  height: 55px;
  width: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 5px solid black;
  box-sizing: border-box;
  border-radius: 5px;
}
span a:before{
  color:#000;
  background: #fff;
  transform: rotateY(0deg) translateZ(25px);
}
span a:after{
  color: #fff;
  transform: rotateX(90deg) translateZ(25px);
}
span a:hover{
  transform: translateZ(-25px) rotateX(-90deg);
}

h1{
    margin: 50px;
}



    </style>
</head>
<br>

<h1>Student Activity Point Management System</h1>
<span><a href="fpage.php"></a></span>
<!--           <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>
 -->
<section class="card__list">
  <article class="card">
    <header class="card__header">
      <p>Tutor</p>
      <h2>About Tutor</h2>
    </header>
    <div class="card__author">
    
      
      <div class="card__authorname">
        
        ⚪Assign AP
        <br>
        ⚪Manage AP
      </div>
    </div>
   
  </article>

  <article class="card">
    <header class="card__header">
      <p>Student</p>
      <h2>About Student</h2>
    </header>
    <div class="card__author">
      
      
      <div class="card__authorname">
        
      ⚪Upload Files<br>
        
      ⚪View KTU Guidelines.
      </div>
    </div>
    
  </article>
  
  
<br><br><br>



</section>

<div class="waveWrapper waveAnimation">
  <div class="waveWrapperInner bgTop">
    <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
  </div>
  <div class="waveWrapperInner bgMiddle">
    <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
  </div>
  <div class="waveWrapperInner bgBottom">
    <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
  </div>
</div>

</html>