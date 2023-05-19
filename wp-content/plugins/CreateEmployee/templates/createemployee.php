<?php

/**
 * @package CreateEmployeePlugin
 */

namespace Inc\Pages;

use \Inc\Base\BaseController;

?>
<div class="d-flex flex-column justify-content-center align-items-center">
    <!-- Success message popup -->
    <?php
    echo '<div class="alert alert-success" role="alert" id="successmsg">
                Book Registered Successfully
             </div>';

    echo '<script> document.getElementById("successmsg").style.display = "none"; </script>';

    
    global $successmessage;

    if ($successmessage == true) {
        echo '<script> document.getElementById("successmsg").style.display = "flex"; </script>';

        echo '<script> 
                        setTimeout(function(){
                            document.getElementById("successmsg").style.display ="none";
                        }, 3000);
                    </script>';

  
    }

    ?>

    <!-- Error message popup -->
    <?php
    echo '<div class="alert alert-danger" role="alert" id="errormsg">
                Book not registered, an error occured
             </div>';

    echo '<script> document.getElementById("errormsg").style.display = "none"; </script>';

    global $errormessage;

    if ($errormessage == true) {
        echo '<script> document.getElementById("errormsg").style.display = "flex"; </script>';

        echo '<script> 
                        setTimeout(function(){
                            document.getElementById("errormsg").style.display ="none";
                        }, 3000);
                    </script>';
    }
    ?>
    <div
        style="width:50%; display:flex; flex-direction:column; justify-content:center; align-items:center; margin-left: 20em; margin-top:1em;">
        <form method="post"
            style="width:30vw; box-shadow: 2px 2px 2px 2px grey;padding: 2em 3em; line-height: 2em; border-radius: 5px; background-color:#FFFFFF">

            <h1 style="text-align:center;">Create An Employee</h1>
            <div>
                <label>Employee Id:</label><br>
                <input type="text" style="width:100%;" placeholder="Enter ID" name="id" required>
            </div>

            <div>
                <label>Name: </label><br>
                <input type="text" style="width:100%;" placeholder="Enter Name" name="name" required><br>

            </div>


            <div>
                <label>Phone_number: </label><br>
                <input type="text" style="width:100%;" placeholder="Enter Phone Number" name="phone_number"
                    required><br>

            </div>

            <div>
                <label>Email: </label><br>
                <input type="email" style="width:100%;" placeholder="Enter Email " name="email" required><br>

            </div>

            <button type="submit"
                style="width:100%; background-color:#0071DC; color:white; padding:7px; border-radius: 5px; font-size: 14px; border: none; margin-top:10px;"
                name="createbtn">Create</button>
        </form>
    </div>