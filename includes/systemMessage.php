<?php 
    if (isset($_SESSION["error"])) {    ?>                            
        <div class="error-field">
            <i class="fa-solid fa-exclamation"></i>
            <span> 
                <?php echo $_SESSION["error"];  ?>
            </span>
        </div>
    <?php 
        unset($_SESSION["error"]);
    }

    if (isset($_SESSION["success"])) {    ?>                            
        <div class="success-field">
            <i class="fa-solid fa-check"></i>
            <span> 
                <?php echo $_SESSION["success"];  ?>
            </span>
        </div>
    <?php 
        unset($_SESSION["success"]);
    }
?>