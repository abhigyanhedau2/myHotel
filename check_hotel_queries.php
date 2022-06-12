<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Queries - The Royal Palace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="check_booking_info.css">
</head>
<body>
    <header id="header">
        <nav id="nav">
            <!-- Hotel Logo -->
            <div class="logo">
                <img src="images/The Royal Palace Logo.png" id="logo">
            </div>

            <!-- Navbar list items -->
            <ul id="ul">
                <a href="home.html" id="a"><li id="li">Home</li></a>
                <a href="booking.html" id="a"><li id="li">Booking</li></a>
                <a href="about_us.html" id="a"><li id="li">About</li></a>
                <a href="reviews.html" id="a"><li id="li">Reviews</li></a>
                <a href="http://localhost/hotel/contact-us.php" id="a"><li id="li">Contact Us</li></a>
            </ul>

            <!-- Searchbar input -->
            <div id="searchbar">
                <input type="text" placeholder="Search Here.." name="searchbar">
            </div>

            <!-- Search button -->
            <div id="search-button">
                <button> &#128269;</button>
            </div>

            <div class="admin-login">
                <a href="http://localhost/hotel/admin_login.php">Admin Login</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="main-container">
            <h1 id="main-heading">Guest Queries and Contact Information</h1>
            <hr id="hr-line">

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email ID</th>
                    <th scope="col">Concern</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        //Connect to the database
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "hotel";
                        
                        //Creating the connection
                        $conn = mysqli_connect($servername, $username, $password, $database);

                        $sql = "SELECT * FROM `contact us`"; 
                        $result = mysqli_query($conn, $sql);

                        $counter = 1;

                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>
                                    <th scope='row'>" . $counter . "</th>
                                    <td>" . $row['Name'] . "</td>
                                    <td>" . $row['Email ID'] . "</td>
                                    <td>" . $row['Concern'] . "</td>
                                 </tr>";

                            $counter++;
                        }         
                    ?>
                </tbody>
              </table>
        </div>
    </main>



    <footer>
        <div class="foot">
            <div class="menu">
                <ul>
                    <a href="home.html"><li>Home</li></a>
                    <a href="booking.html"><li>Booking</li></a>
                    <a href="about_us.html"><li>About</li></a>
                    <a href="reviews.html"><li>Reviews</li></a>
                    <a href="http://localhost/hotel/contact-us.php"><li>Contact Us</li></a>
                </ul> 
            </div>
            <div class="social">
                <h4>Social Media</h4>
                <ul>
                    <li><a href="https://www.facebook.com/OberoiHotels"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/oberoihotels/?hl=en"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/OberoiHotels?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.oberoihotels.com/hotels-in-chandigarh-sukhvilas-resort/"><i class="fab fa-snapchat"></i></a></li>
                </ul> 
            </div>
            
            <h5>Copyright &copy; The Royal Palace</h5>
        </div>
    </footer>
</body>
</html>