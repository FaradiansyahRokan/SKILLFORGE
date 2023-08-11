<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SF | PAYMENT</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('cssfile/style.css')}}">

</head>
<body>

            <!-- Navigation -->
            <nav>
                <img src="../images/SKILLFORGE.jpg" alt="">
                <div class="navigation">
                    <ul>
                        <i id="menu-close" class="fa-solid fa-xmark"></i>
                        <li><a href="{{ url('/')}}">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="{{ url('course')}}">Course</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                    <img id="menu" src="{{ asset('../images/menu.png')}}" alt="">
                </div>
            </nav>
    

<div class="container">

    <form action="/course/payment/berhasil" method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="name" placeholder="Your Name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>no.telp :</span>
                    <input type="text" name="phone" placeholder="Telp">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="State">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="../images/pay.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Total Price :</span>
                    <input type="text" name="price" placeholder="Total">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="month">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="year">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>
        <a href="" class="checkout">
            <button class="submit-btn text-decoration-none" type="submit">Checkout</button>
         </a>

    </form>

</div>   



<style>
    .checkout{
        text-decoration: none;
    }
</style>
    
</body>
</html>