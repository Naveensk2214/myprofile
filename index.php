<?php include_once 'db.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera Store</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="container">
            <h1><b>SNAP STUDIO</b></h1>
            <center>
                <div class="logo-container">
                    <img src="https://th.bing.com/th/id/OIP.AIfNgoO7DZ9w2JR8Azg5kQHaHa?w=192&h=191&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="camera logo" class="logo">
                </div>
            </center>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#about us">about us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="products" class="products-section">
        <div class="container">


            <input type="text" id="searchBar" placeholder="Search for cameras..." onkeyup="searchProducts()">
            <section id="about us">
                <h2 align="left">About us:</h2>
                <p align="left">Welcome to Photography, your trusted destination for all things photography!</p>
                <p align="left">At Camara, we are passionate about empowering photographers—whether you're a seasoned
                    professional or a budding enthusiast.
                    Our mission is to provide cutting-edge camera technology, accessories, and expert advice to help you
                    capture the perfect shot,
                    every time.</p>
                <p align="left">Founded in 2006, Camara started as a small photography store with a big dream: to bring
                    the best in imaging technology to everyone.
                    Over the years, we have grown into a global brand, offering an extensive range of cameras, lenses,
                    tripods, lighting equipment, and more.
                    Our curated selection includes top brands like Canon, Nikon, Sony, Fujifilm, and more, ensuring that
                    you find the perfect gear to fit your
                    style and budget.</p><br><br>

            </section>

            <div class="product-grid" id="productGrid">

                <div class="product">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK6wAWYsWdg7Ve_Vri9qWYPLCb9zug7Ivfmw&s"
                        alt="Camera 1">
                    <h3>Canon EOS 90D</h3>
                    <p>24.1 MP | 4K Video | Dual Pixel AF</p>
                    <span class="price">₹70,999.00</span>
                    <button class="buy-btn" onclick="openOrderForm('Canon EOS 90D')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2MWWDPMwF1bUYZdXO0cysqfynfkoPqMxdjA&s"
                        alt="Camera 2">
                    <h3>Nikon Z6 II</h3>
                    <p>24.5 MP | 4K Video | Full-frame Sensor</p>
                    <span class="price">₹85,000.00</span>
                    <button class="buy-btn" onclick="openOrderForm('Nikon Z6 II')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.BO4GN2tKhN7JzkpvaBJmHwAAAA?w=244&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Camera 3">
                    <h3>canon GC67</h3>
                    <p>24.2 MP | 4K HDR | Full-frame Mirrorless</p>
                    <span class="price">₹79,799.00</span>
                    <button class="buy-btn" onclick="openOrderForm('Sony Alpha a7 III')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.jkm-pWj8M1gJtqnJT80BoAHaEK?w=326&h=183&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Camera 4">
                    <h3>Fujifilm X-T4</h3>
                    <p>26.1 MP | 4K Video | APS-C Sensor</p>
                    <span class="price">₹85,000.00</span>
                    <button class="buy-btn" onclick="openOrderForm('Fujifilm X-T4')">Buy Now</button>
                </div>

                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.A9ssx_mhez5h9aBMp_BXEAHaHa?w=181&h=181&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Camera 2">
                    <h3>duplex DD22 pro</h3>
                    <p>29.5 MP | 10K Video | Full-frame Sensor</p>
                    <span class="price">₹95,000</span>
                    <button class="buy-btn" onclick="openOrderForm('duplex DD22 pro')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.0XRyRhBbiu6arDgK_ukERQHaE7?w=263&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Camera 2">
                    <h3>lumix</h3>
                    <p>24.5 MP | 8.5K Video | Full-frame Sensor</p>
                    <span class="price">₹75,999.00</span>
                    <button class="buy-btn" onclick="openOrderForm('jumix')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.dNn08j5VZiK4oSd8G0U7KwHaF_?w=227&h=183&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Camera 2">
                    <h3>olypus</h3>
                    <p>24.5 MP | 4.5K Video | Full-frame Sensor</p>
                    <span class="price">₹99,000.00</span>
                    <button class="buy-btn" onclick="openOrderForm('olypus')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.K05RCtBdnEddtOZIhXZPEgHaEK?w=265&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Camera 2">
                    <h3>pixceltax JI22</h3>
                    <p>24.5 MP | 4K Video | Full-frame Sensor</p>
                    <span class="price">₹10,2000.00</span>
                    <button class="buy-btn" onclick="openOrderForm('pixceltax JI22')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.c6KTRwns8ibPcZmjnSP3sQAAAA?w=224&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="camera2">
                    <h3>lunix 22pro</h3>
                    <p>50.5 MP | 6K Video | Full-frame Sensor</p>
                    <span class="price">₹99,999.00</span>
                    <button class="buy-btn" onclick="openOrderForm('junix 22pro')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.V_ZYSxpGbcLu2PTZRAz16AHaEK?w=287&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Camera 2">
                    <h3>pentax JC1000</h3>
                    <p>30 MP | 3K Video | Full-frame Sensor</p>
                    <span class="price">₹20,0000.00</span>
                    <button class="buy-btn" onclick="openOrderForm('pentax JC1000')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.hsr3CzfGW0856YYhhmRW3AHaE8?w=239&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Camera 2">
                    <h3>momiya 6-63 pro</h3>
                    <p>20.5 MP | 4.5K Video | Full-frame Sensor</p>
                    <span class="price">₹12,0000.00</span>
                    <button class="buy-btn" onclick="openOrderForm('momiya 6-63 pro')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.DTElRA83k3nPqwzuYy8s8wHaHa?w=184&h=187&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Camera 2">
                    <h3>sony z6 11</h3>
                    <p>24.5 MP | 8K Video | Full-frame Sensor</p>
                    <span class="price">₹10,6500.00</span>
                    <button class="buy-btn" onclick="openOrderForm('sony z6 11')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.8Weor-i2kcIYRpxjIk0mggHaEK?w=314&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Camera 2">
                    <h3>lumix G7</h3>
                    <p>24.5 MP | 8K Video | Full-frame Sensor</p>
                    <span class="price">₹75,000.00</span>
                    <button class="buy-btn" onclick="openOrderForm('lumix G7')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.0zYXM2qe8pzOE4lCuc5cPgHaEK?w=300&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Camera 2">
                    <h3>canon EOS 3000D</h3>
                    <p>24.5 MP | 8K Video | Full-frame Sensor</p>
                    <span class="price">₹65,000.00</span>
                    <button class="buy-btn" onclick="openOrderForm('canon EOS 3000D')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://www.bing.com/th?id=OIP.Jc3lAz3XvVxYuIUXYMp4RwHaFa&w=182&h=150&c=8&rs=1&qlt=90&r=0&o=6&dpr=1.3&pid=3.1&rm=2"
                        alt="Camera 2">
                    <h3>sigma c67</h3>
                    <p>24.5 MP | 8K Video | Full-frame Sensor</p>
                    <span class="price">₹99,999.00</span>
                    <button class="buy-btn" onclick="openOrderForm('pen tax')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.goHtE46oOkSI8veP0qt5sgHaE8?w=222&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Camera 2">
                    <h3>leica D-lux 8</h3>
                    <p>24.5 MP | 8K Video | Full-frame Sensor</p>
                    <span class="price">₹88,888.00</span>
                    <button class="buy-btn" onclick="openOrderForm('leica D-lux')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.0zYXM2qe8pzOE4lCuc5cPgHaEK?w=300&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Camera 2">
                    <h3>sony z67</h3>
                    <p>15.5 MP | 2K Video | Full-frame Sensor</p>
                    <span class="price">₹86,6500.00</span>
                    <button class="buy-btn" onclick="openOrderForm('sony z67')">Buy Now</button>
                </div>
                <div class="product">
                    <img src="https://th.bing.com/th/id/OIP.0zYXM2qe8pzOE4lCuc5cPgHaEK?w=300&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Camera 2">
                    <h3>sony z58</h3>
                    <p>24.5 MP | 1K Video | Full-frame Sensor</p>
                    <span class="price">₹75,000.00</span>
                    <button class="buy-btn" onclick="openOrderForm('sony z58')">Buy Now</button>
                </div>
            </div><br><br>
            <ol id="contact">
                <h3><u>Contact us:</u></h3>
                <p>Number:9019709082</p>
                <a href="naveensk6002@gmail.com">Email:naveensk6002@gmail.com</a>
                <p>Address:M.G Road Chikkamagaluru</p>
                <p>Pinecode:577123</p>
            </ol>

        </div>
    </section>

    <div id="orderForm" class="order-form">
        <div class="form-container">
            <h2>Order Now</h2>
            <form id="orderNowForm" method="POST" action="order.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
                
                <label for="camera">camera:</label>
                <input type="text" id="camera" name="camera" readonly required>

                <button type="submit">Submit Order</button>
                <button type="button" onclick="closeOrderForm()">Cancel</button>
            </form>
            
        </div>
    </div>
    <script>
        function openOrderForm(cameraName) {
    document.getElementById("orderForm").style.display = "block";
    document.getElementById("camera").value = cameraName; 
}

function closeOrderForm() {
    document.getElementById("orderForm").style.display = "none";
}

    </script>


    <footer>
        <div class="container">
            <p>&copy; 2024 camera Store. All rights reserved.</p>
        </div>
    </footer>


    
</body>

</html>