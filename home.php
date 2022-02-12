<?php 

    session_start();
    
    //Redirect to login page if there's no session
    include "includes/checkLogin.inc.php";

    include "includes/autoload.inc.php";
    
    include_once "assets/header.php";
?>

<body>
    <div class="container">
        <div class="panels">

            <div class="l-wing">
                <div class="l-header">
                    <div class="c-img">
                            <img src="img/img.png" alt="">
                        </div>
                    <div class="user-info">
                        <div class="user">
                            <h4><?php echo $_SESSION["session_uid"]; ?></h4> 
                            <p>#<?php echo $_SESSION["session_code"]; ?></p>
                        </div>
                        <div class="status">
                            <p><i class="fa fa-circle"></i> &nbsp;Online</p>
                        </div>
                    </div>
                    <div class="logout">
                        <form action="includes/logout.inc.php">
                            <input type="submit" value="Logout">
                        </form>
                    </div>
                </div>
                <div class="l-content">
                    <div class="pill-nav">
                        <a class="active" href="">Messages &nbsp; &nbsp;<i class="fas fa-comment-alt"></i></a>
                        <a href="">Requests &nbsp; &nbsp;<i class="fas fa-user-plus"></i></a>
                    </div> 
                    <div class="f-list">

                        <?php

                            $myUser = $_SESSION['session_id'];
                            $object = new userList();
                            $object->getUserList($myUser);

                            if ($object->getUserList($myUser)) {

                                foreach ($object->getUserList($myUser) as $post) { 

                                    $chatUser = $post['user_id'];
                                    $object->getChatList($myUser, $chatUser); ?>

                                        <a href="?uid=<?php echo $post['user_id'] ?>">
                                            <div class="card">
                                                <div class="c-content">
                                                    <div class="c-img">
                                                        <img src="img/img.png" alt="">
                                                    </div>
                                                    <div class="c-name">
                                                        <h4><?php echo $post['user_uid'] ?></h4>
                                                        <p>xx</p>
                                                    </div>
                                                </div>  
                                            </div>
                                        </a>
                            <?php }
                            } else { ?>
                                    <div class="cards">
                                        <div class="no-user">  
                                            <h4>There are no users available to chat</h4>
                                        </div>
                                    </div>
                         <?php   }  ?>
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
                    <div class="c-img">
                                <img src="img/img.png" alt="">
                            </div>
                    <div class="user-info">
                        <div class="name">
                            <h4>John Doe</h4>
                        </div>
                        <div class="status">
                            <p>Active Now</p>
                        </div>
                    </div>  
                </div>
                <div class="r-content">
                    <div class="chat-area">

                       
                    </div>

                </div>
                <div class="control-area">
                        <input type="text" placeholder="Type message here...">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>
