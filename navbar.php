<style>
    .checked {
        color: orange;
    }
    .accordion {
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.2s;
    }

    .panel {
        padding: 0 18px;
        display: none;
        overflow: hidden;
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
        overflow: hidden;
        background-color: #333;
    }

    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    .topnav a.active {
        background-color: #4CAF50;
        color: white;
    }
</style>



<div class="topnav">
    <a class="active" href="index.php">Home</a>
    <?php if ($_SESSION['login'] != '') {
        ?>
        <a href="my_account.php" style="float:right;">My Account</a> &nbsp;&nbsp;
        <a href="data/logout.php" style="float:right;">Logout</a>
    <?php } else { ?> 
        <a href="#popup_login" style="float:right;" data-toggle="modal" data-target="#popup_login">Login</a>
    <?php } ?>
</div>