<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xfince Home</title>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<style>
    nav{
    display: flex;
    justify-content: space-between;
}

nav ul{
    display: flex;
}

nav .items{
    display: flex;
}

nav li{
    list-style: none;
    padding: 8px;
}

nav li a{
    color: #000;
    font-size: 1.5rem;
}

nav li a:hover{
    text-decoration: none;
    color: #000;
}
nav li:hover{
    background: lightgreen;
    border-radius: 12px;
}
</style>
<body>
<div class="wrapper">
        <nav class="bg-light shadow px-3">
            <ul class="brand">
                <li><a href="" class="logo"><span>X</span>Fince</a></li>
            </ul>
            <ul class="items">
                <li><a href="" class="lists">Home</a></li>
                <li><a href="" class="lists">About</a></li>
                <li><a href="" class="lists">Contact</a></li>
                <li><a href="login.php" class="lists">Account</a></li>
            </ul>
        </nav>
    </div>
  
   <!-- Home body -->
   <section class="bg-ligh py-5">
   <div class="container">
       <div class="row">
           <div class="col-md-6">
               <p class="today">join us today and earn huge</p>
               <br><br>
               <div class="">
                  <button>Get started</button>
               </div>
           </div>
           <div class="col-md-6">
               <img src="images/undraw_conversation_re_c26v.svg" alt="" width="100%">
           </div>
       </div>   
   </div>
   </section>

   <div class="container mt-3">
       <div class="row">
               <div class="col-md-4">
                   <div class="taker shadow">
                   <img src="images/icons8-bank-60.png" alt="">
                   <br><br>
                   <h5>QUICK AND EASY <br>DEPOSIT</h5>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus accusamus pariatur provident alias qui. Placeat.</p>
                   </div>
                  
               </div>
               <div class="col-md-4">
               <div class="taker shadow">
                   <img src="images/icons8-credit-card-64.png" alt="">
                   <br><br>
                   <h5>MAKE MONEY TODAY USING XFINANCE</h5>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus accusamus pariatur provident alias qui. Placeat.</p>
                   </div>
               </div>
               <div class="col-md-4">
               <div class="taker shadow">
                   <img src="images/icons8-economy-64.png" alt="">
                   <br><br>
                   <h5>FAST AND EASY <br>WITHDRAWAL</h5>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus accusamus pariatur provident alias qui. Placeat.</p>
                   </div>
               </div>
       </div>
   </div>













    <script src="plugins/bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/wow/wow.min.js"></script>
    <script>
       new WOW().init()
    </script>
</body>
</html>