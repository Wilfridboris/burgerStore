<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/da81de1a39.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css">
    
    <title>BurgerStore</title>
</head>
<body>
 <header>
            <div class="BurgerStore-Head-Panel">
                <h3> BurgerStore </h3>
            </div>
            <div>
                <ul class="BurgerStore-Menu-List ">
                    <li class="logo"><a href="/"><img src="/img/burger_icon.png" style="width:35px" alt=""/></a></li>
                    <li class="item"><a href="/" ><i class="fas fa-truck-moving"></i> Track Order</a></li>
                    <li class=" item">
                    <a id="search" href="/"><i class="fas fa-search"></i> Search</a>
                    </li>
                    <li class="item"><a href={{ route('login') }}>Login</a></li>
                    <li class="item"><a href={{ route('register') }}>Register</a></li>
                    <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
                    <!-- <li class="toggle"><a><i class="fas fa-align-justify"></i></a></li> -->
                   
                  
                </ul>
            </div>
</header>
    <main class="container-x">
    <div class="search-x " id="overlay">
           <div class="search-panel">
                 <p><input id="searchbar" type="text" placeholder="Find What you looking for"/>    <span class="closeS"> <i class="fas fa-times"><span></i></p>
                 <button>Search</button>
           </div>
       
       
    </div>

    <!--add a content here-->
    @yield('content')
     @yield('order-content')
     @yield('order-show')
     @yield('order-checkout')
     @yield('payment')
     @yield('orders-track')

    
    </main>
    <footer>
        <div class="BurgerStore-footer">
            <div class="info">
                <ul>
                    <li><h5>About Us</h5></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Investor</a></li>
                    <li><a href="#">Term of Service</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            
            <div class="info">
                <ul>
                    <li><h5>For You</h5></li>
                    <li><a href="#">Intro</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Games</li>
                    <li><a href="#">Gift card</a></li>
                </ul> 
            </div>
            <!-- <div class="separator">
                
            </div> -->
            <div class="link">
                <ul>
                    <li>facebook</li>
                    <li>twitter</li>
                    <li>instagram</li>
                </ul>
            </div>
            <div class="copyright">
                <p>This site is protected by reCAPTCHA and the Google  Privacy Policy  and  Terms of Service  apply.</p>
                <p>  Copyright © Burger Store 2021</p>
            </div>
        </div>
       
    </footer>
    
    <script src="../js/jquery.js"></script>
    <script src="../js/structure.js"></script>
</body>
</html>