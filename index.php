<?php if($_GET['page'] == 'main'){?>
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<title>หน้าแรก</title>
<style>
  @font-face {
  font-family: th-sarabun;
  src: url(fonts/Sarabun-Regular.ttf);
  }
    * {
  /* box-sizing: border-box; */
  margin: 0;
  padding: 0;
}
/* html {
  font-size: 15px;
}
body {
  background: #f7f7ff;
  font-family: "th-sarabun", sans-serif;
  width: 80%;
  max-width: 1440px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  overflow-x: hidden;
} */
  html {
  background: whitesmoke;
  /* font-size: 62.5%; */
  font-family: "th-sarabun", sans-serif;
  font-size: 20px;
  height: 100%;
  display: flex; 
}
body { width: 100%; margin: auto; }
header {
  color: hsl(233, 13%, 49%);
  margin: 3.3rem 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
/* .toggle {
  margin-top: 2rem;
  color: hsl(234, 14%, 74%);
  display: flex;
  align-items: center;
}
.toggle-btn {
  margin: 0 1rem;
}
.checkbox {
  display: none;
}

.sub {
  background: linear-gradient(
    135deg,
    rgba(163, 168, 240, 1) 0%,
    rgba(105, 111, 221, 1) 100%
  );
  display: flex;
  justify-content: flex-start;
  align-items: center;
  height: 25px;
  width: 50px;
  height: 1.6rem;
  width: 3.3rem;
  border-radius: 1.6rem;
  padding: 0.3rem;
}
.circle {
  background-color: #fff;
  height: 1.4rem;
  width: 1.4rem;
  border-radius: 50%;
}
.checkbox:checked + .sub {
  justify-content: flex-end;
}

.cards {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

.card {
  background: #fff;
  color: hsl(233, 13%, 49%);
  border-radius: 0.8rem;
}

.cards .card.active {
  background: linear-gradient(
    135deg,
    rgba(163, 168, 240, 1) 0%,
    rgba(105, 111, 221, 1) 100%
  );
  color: #fff;
  display: flex;
  align-items: center;
  transform: scale(1.1);
  z-index: 1;
}
ul {
  margin: 2.6rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-around;
}
ul li {
  list-style-type: none;
  display: flex;
  justify-content: center;
  width: 100%;
  padding: 1rem 0;
}
ul li.price {
  font-size: 3rem;
  color: hsl(232, 13%, 33%);
  padding-bottom: 2rem;
}
.shadow {
  box-shadow: -5px 5px 15px 1px rgba(0, 0, 0, 0.1);
}

.card.active .price {
  color: #fff;
} */

.btn {
  font-size: 46px;
  margin-top: 1rem;
  height: 3.6rem;
  width: 13.3rem;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 4px;
  background: linear-gradient(
    135deg,
    rgba(163, 168, 240, 1) 0%,
    rgba(105, 111, 221, 1) 100%
  );
  color: #fff;
  outline: none;
  border: 0;
  font-weight: bold;
}
.active-btn {
  background: #fff;
  color: hsl(237, 63%, 64%);
}
/* .bottom-bar {
  border-bottom: 2px solid hsla(240, 8%, 85%, 0.582);
}
.card.active .bottom-bar {
  border-bottom: 2px solid hsla(240, 8%, 85%, 0.253);
}
.pack {
  font-size: 1.1rem;
}

a{
  text-decoration: none;
} */

.option-group {
  width: 90%;
  max-width: 800px;
  height: 150px;
  position: relative;
  overflow: hidden;
  border-radius: 0.25em;
  font-size: 4rem;
  margin: 0.2em auto;
  will-change: transform;
  transform: translateZ(0);
}

.option-container {
  display: flex; 
  justify-content: center;
  align-items: stretch;
  width: 120%;
  height: 100%;
  margin: 0 -10%;
}

.option {
  overflow: hidden;
  flex: 1;
  display: block;
  padding: 0.5em;
  background: #FFF;
  position: relative;
  margin: 0em;
  margin-right: 0.2em;
  &:last-child { margin-right: 0; }
  
  border-radius: 0.25em;
  
  display: flex;
  justify-content: flex-end;
  align-items: flex-start;
  flex-direction: column;
  
  cursor: pointer;
  
  opacity: 0.5;
  transition-duration: 0.8s, 0.6s;
  transition-property: transform, opacity;
  transition-timing-function: cubic-bezier(.98,0,.22,.98), linear;
  will-change: transform, opacity;
}

.option__indicator {
  display: block;
  transform-origin: left bottom;
  transition: inherit;
  will-change: transform;
  position: absolute;
  top: 0.5em;
  right: 0.5em;
  left: 0.5em;
  
  /* &:before,
  &:after {
    content: '';
    display: block;
    border: solid 2px #64D6EE;
    border-radius: 50%;
    width: 0.25em;
    height: 0.25em;
    position: absolute;
    top: 0;
    right: 0;
  } */
  
  /* &:after {
    background: #64D6EE;
    transform: scale(0);
    transition: inherit;
    will-change: transform;
  } */
}

.option-input {
  position: absolute;
  top: 0;
  z-index: -1;
  visibility: hidden;
}

.option__label {
  display: block;
  width: 100%;
  text-transform: uppercase;
  font-size: 1.5em;
  font-weight: bold;
  
  transform-origin: left bottom;
  transform: translateX(20%) scale(0.7);
  transition: inherit;
  will-change: transform;

  /* sub { 
    margin-left: 0.25em;
    font-size: 0.4em;
    display: inline-block; 
    vertical-align: 0.3em;
  } */
  
  /* &:after {
    content: '';
    display: block;
    border: solid 2px #64D6EE;
    width: 100%;
    transform-origin: 0 0;
    transform: scaleX(0.2);
    transition: inherit;
    will-change: transform;
  } */
}

/* .option:last-child {
  .option__label { transform: translateX(0%) scale(0.7); }
  .option__indicator { transform: translateX(-20%); }
}

.option-input:checked ~ .option {
  transform: translateX(-20%) translateX(0.2em);
  .option__indicator { transform: translateX(0%); }
  .option__label { transform: translateX(40%) scale(0.7); }
}

.option-input:first-child:checked ~ .option {
  transform: translateX(20%) translateX(-0.2em);
  .option__indicator { transform: translateX(-40%); }
  .option__label { transform: translateX(0%) scale(0.7); }
} */
.option-input:nth-child(1):checked ~ .option:nth-of-type(1),
.option-input:nth-child(2):checked ~ .option:nth-of-type(2) {
  background-color: rgba(163, 168, 240, 1) ;
  /* opacity: 1;
  .option__indicator { transform: translateX(0); &::after { transform: scale(1); } }
  .option__label,
  .option__label::after { transform: scale(1); } */
}

/* @media (max-width: 280px) {
  ul {
    margin: 1rem;
  }
  h1 {
    font-size: 1.2rem;
  }
  .toggle {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    height: 80px;
  }
  .cards {
    margin: 0;
    display: flex;
    flex-direction: column;
  }

  .card {
    transform: scale(0.8);
    margin-bottom: 1rem;
  }
  .cards .card.active {
    transform: scale(0.8);
  }
}

@media (min-width: 280px) and (max-width: 320px) {
  ul {
    margin: 20px;
  }
  .cards {
    display: flex;
    flex-direction: column;
  }
  .card {
    margin-bottom: 1rem;
  }
  .cards .card.active {
    transform: scale(1);
  }
}

@media (min-width: 320px) and (max-width: 414px) {
  .cards {
    display: flex;
    flex-direction: column;
  }
  .card {
    margin-bottom: 1rem;
  }
  .cards .card.active {
    transform: scale(1);
  }
}
@media (min-width: 414px) and (max-width: 768px) {
  .card {
    margin-bottom: 1rem;
    margin-right: 1rem;
  }
  .cards .card.active {
    transform: scale(1);
  }
}
@media (min-width: 768px) and (max-width: 1046px) {
  .cards {
    display: flex;
  }
  .card {
    margin-bottom: 1rem;
    margin-right: 1rem;
  }
  .cards .card.active {
    transform: scale(1);
  }
} */

</style>
</head>

<body>
  <header>
    <h1>ค่าบริการในการใช้งาน</h1>
    <h2>5บาท/หน่วย</h2>
    <!-- <div class="toggle">
      <label>นาที </label>
      <div class="toggle-btn">
        <input type="checkbox" class="checkbox" id="checkbox" />
        <label class="sub" id="sub" for="checkbox">
          <div class="circle"></div>
        </label>
      </div>
      <label> ชั่วโมง</label>
    </div> -->
  </header>
  <form action="ScanQrCode.html">
  <div class="option-group">
    <div class="option-container">
  
      <input class="option-input" checked id="option-1" type="radio" name="options" />
      <input class="option-input" id="option-2" type="radio" name="options" />
      
      <label class="option" for="option-1">
        <span class="option__indicator"></span>
        <span class="option__label">
          5&#3647;
          <!-- <sub></sub> -->
        </span>
      </label>
  
      <label class="option" for="option-2">
        <span class="option__indicator"></span>
        <span class="option__label">
          10&#3647;
          <!-- <sub></sub> -->
        </span>
      </label>
  
    </div>
  </div>
  <div class="option-group">
    <div class="option-container">
  
      <input class="option-input" id="option-3" type="radio" name="options" />
      <input class="option-input" id="option-4" type="radio" name="options" />
      
      <label class="option" for="option-3">
        <span class="option__indicator"></span>
        <span class="option__label">
          15&#3647;
          <!-- <sub></sub> -->
        </span>
      </label>
  
      <label class="option" for="option-4">
        <span class="option__indicator"></span>
        <span class="option__label">
          20&#3647;
          <!-- <sub></sub> -->
        </span>
      </label>
  
    </div>
  </div>
  <div class="option-group">
    <div class="option-container">
  
      <input class="option-input" id="option-5" type="radio" name="options" />
      <input class="option-input" id="option-6" type="radio" name="options" />
      
      <label class="option" for="option-5">
        <span class="option__indicator"></span>
        <span class="option__label">
          25&#3647;
          <!-- <sub></sub> -->
        </span>
      </label>
  
      <label class="option" for="option-6">
        <span class="option__indicator"></span>
        <span class="option__label">
          30&#3647;
          <!-- <sub>&#3647;</sub> -->
        </span>
      </label>
  
    </div>
  </div>
  <div class="option-group">
    <div class="option-container">
  
      <input class="option-input" id="option-7" type="radio" name="options" />
      <input class="option-input" id="option-8" type="radio" name="options" />
      
      <label class="option" for="option-7">
        <span class="option__indicator"></span>
        <span class="option__label">
          35&#3647;
          <!-- <sub>&#3647;</sub> -->
        </span>
      </label>
  
      <label class="option" for="option-8">
        <span class="option__indicator"></span>
        <span class="option__label">
          40&#3647;
          <!-- <sub>&#3647;</sub> -->
        </span>
      </label>
  
    </div>
  </div>
  <header>
    <button class="btn"><i class="fa fa-download"></i>ตกลง</button>
  </header>
  <!-- <h1>
    <a download="image-qr-code.png" href="images/" title="ImageName">
      <button class="btn"><i class="fa fa-download"></i>ยกเลิก</button>
    </a>
  </h1> -->
  <header style="margin: 2rem 0;"></header>
</form>
  <!-- <script>
const checkbox = document.getElementById("checkbox");
const professional = document.getElementById("professional");
const master = document.getElementById("master");
const basic = document.getElementById("basic");

checkbox.addEventListener("click", () => {
  basic.textContent = basic.textContent === "$199.99" ? "$19.99" : "$199.99";
  professional.textContent =
    professional.textContent === "$249.99" ? "$24.99 " : "$249.99";
  master.textContent = master.textContent === "$399.99" ? "$39.99" : "$399.99";
});

  </script> -->
</body>
<?php }else if($_GET['page'] == 'qr_code'){?>
  <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ชำระค่าบริการ</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- <link rel="stylesheet" href="style.css"></link> -->
    <style>
      @font-face {
        font-family: th-sarabun;
        src: url(fonts/Sarabun-Regular.ttf);
      }
      body {
        width: 100%;
        height: auto;
        background-color: hsl(212, 45%, 89%);
        max-width: 1440px;
        min-width: 3.75vw;
      }
      .box {
        background-color: hsl(0, 0%, 100%);
        width: 280px;
        height: 440px;

        border-radius: 20px;
        margin: 5% auto;
      }
      .img {
        width: 90%;
        margin: 15px;
        border-radius: 10px;
      }
      h1 {
        font-family: "th-sarabun", sans-serif;
        color: hsl(218, 44%, 22%);
        font-weight: 1000;
        text-align: center;
        font-size: 20px;
        margin: auto 10px;
      }
      p {
        font-family: "Hanken Grotesk", sans-serif;
        font-size: 14px;
        color: grey;
        font-weight: 400;
        text-align: center;
        margin: 12px 20px 10px 20px;
      }
      .btn {
        background-color: DodgerBlue;
        border: none;
        color: white;
        padding: 12px 30px;
        cursor: pointer;
        font-size: 20px;
      }

      /* Darker background on mouse-over */
      .btn:hover {
        background-color: RoyalBlue;
      }
    </style>
    <link
      href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="box">
      <img class="img" src="images/image-qr-code.png" alt="Qr-code" />
      <h1>Qr Code สำหรับชำระค่าบริการ</h1>
      <p>กรุณาแสกน Qr Code เพื่อชำระค่าบริการ</p>
      <h1>
        <a download="image-qr-code.png" href="images/" title="ImageName">
          <button class="btn"><i class="fa fa-download"></i> Download</button>
        </a>
      </h1>
      <h1><a href="Charging.html"> ถัดไป </a></h1>
    </div>
  </body>
</html>
<?php }else if($_GET['page'] == 'charging'){?>
  <!DOCTYPE html>
<html lang="en">
<head>

     <title>กำลังชาร์ท...</title>
<!-- 

Get Ready Template

https://templatemo.com/tm-521-get-ready

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/vegas.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- GRID LINE -->
    <!-- <section class="grid">
         <div class="container">
            <div class="row">

              <div class="col-md-2 col-sm-2">
                <div class="grid-line"></div>
              </div>
              <div class="col-md-2 col-sm-2">
                <div class="grid-line"></div>
              </div>
              <div class="col-md-2 col-sm-2">
                <div class="grid-line"></div>
              </div>
              <div class="col-md-2 col-sm-2">
                <div class="grid-line"></div>
              </div>
              <div class="col-md-2 col-sm-2">
                <div class="grid-line"></div>
              </div>

            </div>
         </div>
    </section> -->


    <div class="menu-bg"></div>
    <div class="menu-burger">☰</div>

    <div class="menu-items">
       <!-- <div class="container">
         <div class="row">
           <div class="col-md-offset-2 col-md-4 col-sm-6">
            <h1>Navigations</h1>
             <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Our Studio</a></li>
                <li><a href="#">Journal</a></li>
                <li><a href="#">Start a project</a></li>
                <li><a href="#">Email Us</a></li>
            </ul>
           </div>

           <div class="col-md-4 col-sm-6">
             <address>
               <h1>Our Studio</h1>
               <p>1234 New Street View, <br> Kumasi, Ghana</p>
               <div class="google-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" allowfullscreen></iframe>
               </div>
             </address>
           </div> 

           <div class="col-md-12 col-sm-12">
             <ul class="social-icon">
              <li class="line"></li>
               <li><a href="https://fb.com/templatemo" class="fa fa-facebook"></a></li>
               <li><a href="#" class="fa fa-twitter"></a></li>
               <li><a href="https://plus.google.com/+templatemo" class="fa fa-google"></a></li>
               <li><a href="#" class="fa fa-instagram"></a></li>
             </ul>
           </div>
         </div>
       </div> -->
    </div>


     <!-- HOME -->
     <section id="home">
        <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="home-info">
                              <h1>สถานะการทำงาน <br>กำลังชาร์ท... </h1>
                              <!-- You can change the date time in init.js file -->
                              <ul class="countdown">
                                   <!-- <li>
                                        <span class="days">14</span>
                                        <h3>Days</h3>
                                   </li> -->
                                   <li>
                                        <span class="hours">10</span>
                                        <h3>ชั่วโมง</h3>
                                   </li>
                                   <li>
                                        <span class="days">:</span>
                                        <h3>:</h3>
                                   </li>
                                   <li>
                                        <span class="minutes">15</span>
                                        <h3>นาที</h3>
                                   </li>
                                   <li>
                                        <span class="days">:</span>
                                        <h3>:</h3>
                                   </li>
                                   <li>
                                        <span class="seconds">34</span>
                                        <h3>วินาที</h3>
                                   </li>     
                              </ul>
                              <!-- <div class="subscribe-form">
                                <form action="" method="get">
                                  <input type="email" name="email" class="form-control" placeholder="Enter your email" required="">
                                  <button type="submit" class="form-control"><i class="fa fa-envelope-o"></i></button>
                                </form>
                              </div> -->
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <!-- <script src="js/vegas.min.js"></script> -->
     <script src="js/countdown.js"></script>
     <script src="js/init.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
<?php }?>
