<?php
    include 'connect1.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Infinite Esports</title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    </head>
    
    <body>
        <header>
        <div class="flex">
            <div class="logo">
                <a href="#"><img src="logo3.png" alt="infinite logo"/></a>
            </div>
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                    <ul id="nav-menu-container">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="games.php">Games</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <a href="login.php" id="login-register-buttons">Register</a>
            </div>
        </header>
        
<main>
    <section id="hero-image">
        <div class="hero-marketing-text">
            <h1>The best <span>Games</span> out there</h1>
            <h5>Beat the best to be the Best</h5>
            <button onclick="games()">More Games</button>
            <script type="text/javascript">
                function games(){
                window.location.href = "games.php"
                }
            </script>
        </div>
    </section>
    <section id="latest-news">
        <div class="flex">
            <h5>Latest news</h5>
            <div id="latest-news-container">
                <div class="latest-news-items">
                    <span class="badge new">New</span>
                    <span class="latest-news-text">register in the pubg's biggest event</span> 
                </div>
            </div>
        </div>
    </section>

        <section id="recent-games">
            <h1>Recent Matches</h1>
            <div class="flex">
                <div class="box">
                    <span class="badge Pubg">Pubg</span>
                    <img src="7.jpg"/>
                    <div class="box-lower-section">
                        <h4>PUBG </h4>
                        <p>PlayerUnknown Battlegrounds</p>
                        <a href="#" class="comments">3 comments</a>
                    </div>
                </div>

                <div class="box">
                    <span class="badge COD">COD</span>
                    <img src="cod6.jpg"/>
                    <div class="box-lower-section">
                        <h4>COD</h4>
                        <p>Call of Duty</p>
                        <a href="#" class="comments">3 comments</a>
                    </div>
                </div>

                <div class="box">
                    <span class="badge csgo">CS:GO</span>
                    <img src="csgo6.jpg"/>
                    <div class="box-lower-section">
                        <h4>CS:GO </h4>
                        <p>Counter Strike:Global Offensive</p>
                        <a href="#" class="comments">3 comments</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="Tournaments">
            <div class="flex">
                <span class="badge Tournaments">Tournaments </span>
                <div class="box">
                    <span class="badge premium-Tournament">premium Tournaments</span>
                    <div class="Tournaments-image">
                        <img src="pubg2.png">
                    </div>
                    <div class="Tournaments-content">
                        <h3>PUBG</h3>
                        <div><label>Tournament Begins:</label><strong>august 8,2020</strong></div>
                        <div><label>Tournament Ends:</label><strong>august 9,2020</strong></div>
                        <div><label>Participants:</label><strong>16 teams</strong></div>
                        <div><label>Tournament Organiser:</label><strong>Infinite Esports</strong></div>
                        <div><label class="prizes">Prizes:</label>:</label><label>1st prize:1000 2nd Prize:500</label>
                        <a href="regd.php" id="login-register-buttonss">Register</a>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <span class="badge premium-Tournament">premium Tournaments</span>
                    <div class="Tournaments-image">
                        <img src="cod2.png">
                    </div>
                    <div class="Tournaments-content">
                       <h3>COD</h3>
                        <div><label>Tournament Begins:</label><strong>august 8,2020</strong></div>
                        <div><label>Tournament Ends:</label><strong>august 9,2020</strong></div>
                        <div><label>Participants:</label><strong>16 teams</strong></div>
                        <div><label>Tournament Organiser:</label><strong>Infinite Esports</strong></div>
                        <div><label class="prizes">Prizes:</label>:</label><label>1st prize:1000 2nd Prize:500</label>
                        <a href="regd.php" id="login-register-buttonss">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="recent-reviews">
            <h1>Recent Reviews</h1>
            <div class="flex">
                <div class="box">
                    <span class="rating-badge gold">9.3</span>
                    <div class="recent-review-image">
                        <img src="pubg3.jpg"/>
                    </div>
                    <div>
                        <h4>PUBG</h4>
                        <p>PlayerUnknown Battlegrounds</p> 
                    </div>
                </div>

                <div class="box">
                    <span class="rating-badge purple">9.5</span>
                    <div class="recent-review-image">
                        <img src="cod3.jpg"/>
                    </div>
                    <div>
                        <h4>COD</h4>
                        <p>Call of DUTY</p> 
                    </div>
                </div>

                <div class="box">
                    <span class="rating-badge green">9.1</span>
                    <div class="recent-review-image">
                        <img src="csgo4.jpg"/>
                    </div>
                    <div>
                        <h4>CS:GO</h4>
                        <p>Counter Strike:Global Offensive</p> 
                    </div>
                </div>

                <div class="box">
                    <span class="rating-badge violet">9.7</span>
                    <div class="recent-review-image">
                        <img src="valo1.png"/>
                    </div>
                    <div>
                        <h4>Valorant</h4>
                        <p>Valorant</p> 
                    </div>
                </div>
            </div>
        </section>

        <section id="posts-comments">
            <div class="flex">
                <div class="game-warrior">
                    <img src="foot3.png"/>
                    <p>Hold infinity in the palm of your hand.</p>
                </div>

                <div class="posts-comments-box">
                    <h3>latest posts</h3>
                    <div class="post-item">
                        <img src="pubg1.jpg" />
                        <div>
                            <h5>august 1,2020</h5>
                            <p>PlayerUnknown Battlegrounds</p>
                            <small>By:admin</small>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="cod1.jpg" />
                        <div>
                            <h5>august 1,2020</h5>
                            <p>Call of Duty</p>
                            <small>By:admin</small>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="csgo3.webp" />
                        <div>
                            <h5>august 1,2020</h5>
                            <p>Counter Strike:Global offensive</p>
                            <small>By:admin</small>
                        </div>
                    </div>
                </div>
                <div class="posts-comments-box">
                    <h3>Top comments</h3>
                    <div class="comments-item">
                        <img src="eyep4tch.png"/>
                        <div>
                            <p><span class="author">Ishan Kadam</span><span>on</span>Its fun to play PUBG.</p>
                            <h5>august 1,2020</h5>
                        </div>
                    </div>

                    <div class="comments-item">
                        <img src="darksoul.png"/>
                        <div>
                            <p><span class="author">rohan juikar</span><span>on</span>Its fun to play PUBG.</p>
                            <h5>august 1,2020</h5>
                        </div>
                    </div>

                    <div class="comments-item">
                        <img src="adarsh.png"/>
                        <div>
                            <p><span class="author">Nikhil pigle</span><span>on</span>Its fun to play PUBG.</p>
                            <h5>august 1,2020</h5>
                        </div>
                    </div>

                    <div class="comments-item">
                        <img src="pratik2.png"/>
                        <div>
                            <p><span class="author">Pratik </span><span>on</span>Its fun to play PUBG.</p>
                            <h5>august 1,2020</h5>
                        </div>
                    </div>
                    <button>show more comments</button> 
                </div>
            </div>
                
        </section>
</main>
<footer>
        <div class="flex">
        <small>Copyright &copy; 2019 All rights reserved | this template is made with <span class="footer-heart">&#9829;</span>by Ishan & Rohan </a></small>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>

        <li>
            <a href="games.php">Games</a>
        </li>

        <li>
            <a href="contact.php">contact</a>
        </li>
    </ul>
    </div>  
</footer>
</body>
</html>