
<nav class="navbar  navbar-fixed-top navbar-default" role="navigation" >
        <div class="container">
            <?php
                if(!isset($_SESSION['logged_user']))
                {
                    echo "
                    
                        <div class='loginButtons'> 
                            <button id='sign' type='button' class='btn btn-danger btn-sm'>
                                <span class='glyphicon glyphicon-paperclip'></span> Sign in
                            </button>					
    					    <button id='log' type='button' class='btn btn-danger btn-sm'>
                                 <span class='glyphicon glyphicon-log-in'></span> Log in
                            </button>
                        </div>
                        <a class='navbar-brand navbar-brand-default' href='index.php'>F.A. League</a>
                    ";
                }
                else
                {
                    echo "
                
                        <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                            <ul class='nav navbar-nav'>
                                <a class='navbar-brand navbar-brand-default' href='index.php'>F.A. League</a>
                                <li>
                                    <a href='game.php'>The Game</a>
                                </li>
                                </ul>
                                    <span id='hello' href='#'>Hello, ".$_SESSION['logged_user']['username_sign']."</span>
                                <div class='loginButtons'>
                                <a href='profile.php'>
                                        <button type='button' class='btn btn-danger btn-sm'>
                                            <span  class='glyphicon glyphicon-user'></span> Profile
                                        </button>
                                    </a>
                                    <a href='php/logout.php'>
                                        <button type='button' class='btn btn-danger btn-sm'>
                                            <span  class='glyphicon glyphicon-off'></span> Off 
                                        </button>
                                    </a>
                                </div>

                        </div>

                    ";
                }
            ?>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    