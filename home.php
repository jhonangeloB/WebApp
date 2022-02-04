<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="panels">

            <div class="l-wing">
                <div class="l-header">
                    <div class="user-info">
                        <div class="user">
                            <h4>John Smith &nbsp;</h4> 
                            <p>#3434</p>
                        </div>
                        <div class="status">
                            <p><i class="fa fa-circle"></i>&nbsp; &nbsp;Active Now</p>
                        </div>
                    </div>
                    <div class="logout-btn">
                        <form action="logout.php">
                            <input type="submit" value="Logout">
                        </form>
                    </div>
                </div>
                <div class="l-content">
                    <div class="search">
                        <form action="">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>  
                    </div>
                    <div class="f-list">
                        <div class="card">
                            <div class="c-name">
                                <h4>John Smith</h4>
                            </div>
                            <div class="c-msg">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            </div>   
                        </div>
                        <div class="card">
                            <div class="c-name">
                                <h4>John Smith</h4>
                            </div>
                            <div class="c-msg">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            </div>   
                        </div>
                        <div class="card">
                            <div class="c-name">
                                <h4>John Doe</h4>
                            </div>
                            <div class="c-msg">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            </div>   
                        </div>
                        <div class="card">
                            <div class="c-name">
                                <h4>John Smith</h4>
                            </div>
                            <div class="c-msg">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            </div>   
                        </div>
                        <div class="card">
                            <div class="c-name">
                                <h4>John Smith</h4>
                            </div>
                            <div class="c-msg">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            </div>   
                        </div>
                        <div class="card">
                            <div class="c-name">
                                <h4>John Smith</h4>
                            </div>
                            <div class="c-msg">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            </div>   
                        </div>
                    </div>
                    <div class="add-user">
                        <label for="">Add user</label>
                        <form action="">
                            <input type="text" class="uname" placeholder="Username">
                            <p>+</p>
                            <input type="text" class="ucode" placeholder="Code">
                            <button>Invite</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="r-wing">
                <div class="r-header">
                    Right Panel
                </div>
            </div>
        </div>
    </div>
</body>
</html>