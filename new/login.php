<?php session_start(); ?>
<style>
    body {font-family: Arial, Helvetica, sans-serif;



    }

    /* Full-width input fields */
    input[type=text], input[type=password] , input[type=email]{
        width: 100%;
        padding: 10px 18px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;

    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 10px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */

        z-index: 1; /* Sit on top */

        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 40px;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;

        overflow: hidden;
        outline: 0;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: transparent;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 25%; /* Could be more or less, depending on screen size */
        box-shadow: 0 0 4px 2px black;
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 25px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)} 
        to {-webkit-transform: scale(1)}
    }

    @keyframes animatezoom {
        from {transform: scale(0)} 
        to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        .modal-content {

            width: 100%; /* Could be more or less, depending on screen size */

        }
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }

    @media only screen and (max-width: 600px) {

        input[type=text], input[type=password],input[type=email] {

            font-size:x-small;
        }
        .modal-content {

            width: 80%; /* Could be more or less, depending on screen size */

        }

        .modal {

            padding-top: 100px;

        }
    }
</style>

<div id="popup_login" class="modal ">

    <form class="modal-content animate" action="data/data_login.php" method="post"style="background-color:#fff">

        <div class="container" style="background-color:#fff">
            <input type="text" placeholder="Enter Username" name="u_username" required>

            <input type="password" placeholder="Enter Password" name="u_password" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:transparent">
            <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>



<div id="popup_signUp" class="modal ">

    <form class="modal-content animate" action="data/data_signup.php" method="post"style="background-color:#fff">
        <input type="hidden" name="action" value="register">
        <input type="hidden" name="type" value="front">
        <div class="container">

            <input type="text" placeholder="Enter Username" name="u_username" required>

            <input type="email" placeholder="Enter Email" name="email" >

            <input type="password" placeholder="Enter Password" name="u_password" required>

            <input type="password" placeholder="Confirm Password" name="u_cpassword" required>

            <button type="submit">Sin Up</button>

        </div>

        <div class="container" style="background-color:transparent">
            <button type="button" onclick="document.getElementById('register').style.display = 'none'" class="cancelbtn">Cancel</button>

        </div>
    </form>
</div>

<script>
// Get the modal
    var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


