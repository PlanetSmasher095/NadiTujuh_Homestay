<?php include('inc_header.php');?>
<head>
<link rel='stylesheet' href='style.css'></head>

<body>

    
    <div class="head">
        <main>
        <h1>Welcome to Serious Lee Tech Support!!!</h1>        

        <?php if (!isset($_SESSION['accountid'])) { ?>
        <div class='enter'>
        <h2>Please Login or Register your account</h2>
            <div class='kiru'>
            <button><a href="signup.php">Sign up</a></button>
        </div>
        <div class='out'>
            <button><a href="login.php">Log in</a></button>
        </div>
    </div>
        
    <?php } ?>
       
        </body>
            
</div>
<?php include('inc_footer.php'); ?>
