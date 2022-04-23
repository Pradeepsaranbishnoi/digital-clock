<?php
/**
* Template Name: On Boarding Page Template
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header(); ?>
<style>
    #fname,
    #phone,
    #domain,
    #email {
        background-color: #ffffff;
        border-radius: 5px 5px 5px 5px;
        font-family: "Poppins", Sans-serif;
        font-size: 17px;
        font-weight: 500;
        padding: 16px 15px;
        height: auto;
        border: none;
        margin-bottom: 24px;
        width: 100%;
    }
    
    #firname {
        background-color: #ffffff;
        border-radius: 5px 5px 5px 5px;
        font-family: "Poppins", Sans-serif;
        font-size: 17px;
        font-weight: 500;
        text-transform: capitalize;
        padding: 0.75em;
        height: auto;
        width: 50%;
        border-color: #0258A1;
        border-width: 1px;
    }
    
    .submit,
    .btn {
        background-color: #0258A1;
        color: #ffffff;
        font-family: "Poppins", Sans-serif;
        font-size: 16px;
        border-radius: 5px;
        border: none;
        font-weight: 700;
        cursor: pointer;
        padding: 16px 29px;
        white-space: normal !important;
        word-wrap: break-word;
        margin-top: 20px;
    }
    
    .btn:hover {
        color: black;
        background: white;
    }
    
    .btn.active.focus {
        color: black;
        background: white;
        outline: none;
    }
    /* The Modal (background) */
    
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 155;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        padding-bottom: 100px;
        overflow: auto;
        /* Enable scroll if needed */
        background-color: #212326;
        /* Black w/ opacity */
        width:100%;
        height:100vh;
    }
    /* Modal Content */
    
    .modal-content {
        position: relative;
        width: 450px;
        box-shadow: none;
        margin: auto;
        border: 0;
        background: transparent;
    }
    /* The Close Button */
    
    .close {
        color: #ffffff14;
        float: right;
        font-size: 28px;
        transition: .7s;
        top: -100px;
        right: 0px;
        position: absolute;
        font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
        color: rgb(255, 255, 255);
        text-decoration: none;
        cursor: pointer;
    }
    
    .modal-header h2 {
        padding: 2px 16px;
        color: white;
        font-size: 30px;
        font-weight: 400;
        font-family: "Poppins", Sans-serif;
        text-align: left;
        line-height: 30px;
    }
    
    .btn-group {
        width: 100%;
    }
    
    .modal-body p {
        text-align: left;
        color: white;
        margin: 0;
        font-family: "Poppins", Sans-serif;
        font-size: 16px;
    }
    
    .modal-body {
        padding: 20px 16px 40px;
    }
    
    .container .modal-body {
        text-align: right;
    }
    
    @media screen and (max-width: 1080px) {
        .modal-content {
            width: 100%;
            padding: 26px;
        }
        .modal-header h2 {
            font-size: 24px;
            line-height: 25px;
        }
        .btn-group {
            margin-bottom: 30px;
        }
        #fname,
        #phone,
        #domain,
        #email {
            font-size: 1em;
        }
        .form-popup p {
            font-size: 16px;
            margin-top: 20px !important;
        }
        .close {
            top: -78px;
            right: 50px;
        }
    }
    
    .loaderDiv > h1 ,.loaderDiv > h2 {
        text-align: center;
        color: #fff;
        font-weight: bold;
    }
    .loaderDiv {
        display:none;
        position: fixed;
        z-index: 410;
        width: 100%;
        top: 0;
        height: 100%;
        padding: 30% 0;
        background: rgb(40 96 144 / 70%);
    }
    .loader {
        border: 6px solid #f3f3f3;
        border-radius: 50%;
        margin: auto;
        border-top: 6px solid #0258a1;
        width: 50px;
        height: 50px;
        -webkit-animation: spin 2s linear infinite;
        /* Safari */
        animation: spin 2s linear infinite;
    }
    /* Safari */
    
    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
        }
    }
    
    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>
<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>
    <?php get_sidebar(); ?>
<?php endif ?>
    <div id="primary" <?php astra_primary_class(); ?>>
        <?php astra_primary_content_top(); ?>
        <?php astra_content_page_loop(); ?>
        <?php astra_primary_content_bottom(); ?>
    </div><!-- #primary -->
<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>
    <?php get_sidebar(); ?>
<?php endif ?>
<?php get_footer(); ?>
<div class="loaderDiv"><div class="loader"></div>
    <h1>Congratulation</h1>
    <h2>Your Application is Live On<br><span id="dname"></span>.shoolbridge.in</h2>
    <div style="text-align: center;margin-top: 23px;display: block;">
        <a herf="" id="redirectUrl" style="display:none" class="btn">Complete Setup</a>
    </div>
</div>
 <!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Start your free 14-day trial of Educase India</h2>
            <p>Select business type</p>
        </div>
        <div class="modal-body">
        
            <div class="form-popup" id="myForm">
                <form class="form-container mySubmitForm" action="" id="mySubmitForm"  method="post">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-cyan btn-rounded active form-check-label" style="margin-right: 2.5%; margin-bottom: 20px; width: 47%;">
                            <i class="fas fa-school"></i>
                            <input class="form-check-input user_type" name="user_type" value="franchise" type="radio" autocomplete="off"> Franchise
                        </label>
                        <label class="btn btn-cyan btn-rounded form-check-label" style=" width: 48%;  margin-bottom: 20px; margin-left: 2.5%;">
                            <i class="fas fa-baby-carriage"></i>
                            <input class="form-check-input user_type" name="user_type" value="preschool" type="radio" autocomplete="off"> School                               
                        </label>
                    </div>
                    <br />
                    <input type="text" id="fname" placeholder="Your School Name*" name="text" required>
                    <input type="tel" id="phone" name="phone" placeholder="Your Mobile Number*" required>
                    <input type="mail" id="email" name="Email" placeholder="Your Email Id*" required>
                    <lable style="background: #eee;display: inline-block;margin-bottom: 10px;">
                        <input type="text" id="domain" placeholder="Domain name" name="domain" required="" style="width: 55%;margin: 0;" spellcheck="false" data-ms-editor="true">
                        <span style="font-size: 22px;color: #55595c;">.schoolbridge.in</span>
                    </lable>
                    
                    <p>
                        This is the URL that customers will use to visit your store. You can also buy a custom domain like xyzschool.com and connect it to this app.
                    </p>
            </div>
            <div class="g-recaptcha" data-sitekey="6Lc2RBMfAAAAAFIWzvKtS5YBGjOMfbL-VGGUVq6N" data-callback="recaptchaCallback"></div>
            <br/>
            <button type="submit"  class="btn" >Create Your Website </button>
            </form>
        </div>
    </div>
</div>
<script src="https://www.google.com/recaptcha/enterprise.js" async defer></script>
<script>
var recaptchachecked=false; 
function recaptchaCallback() {
    recaptchachecked = true;
}
        jQuery(document).ready(function () {
          jQuery("form").submit(function (event) {
          if(recaptchachecked){    
              
            jQuery('.loaderDiv').show();
            jQuery('#dname').html(jQuery("#domain").val());
            jQuery('#redirectUrl').hide();
            
            var formData = {
              user_type: jQuery(".user_type").val(),
              name: jQuery("#fname").val(),
              mobile: jQuery("#phone").val(),
              email: jQuery("#email").val(),
              domain_name: jQuery("#domain").val()+'.schoolbridge.in',
            };
            jQuery.ajax({
              type: "POST",
              url: "https://v2dev.schoolbridge.in/api/v2/onboarding-educase",
              data: formData,
              dataType: "json",
              encode: true,
            }).done(function (data) {
              console.log(data.status);
              if(data.status == 'failed'){
                alert(data.message);
                jQuery('.loaderDiv').hide();
              }else{
                //jQuery('.loaderDiv').hide();
                setTimeout(function () {
                    jQuery('.loader').hide();
                    jQuery('#redirectUrl').show();
                    jQuery("#redirectUrl").prop("href", data.redirect);
                 }, 4500);
                
                
                
              }
              
            });
            event.preventDefault();
          }else{
              alert("dsad");
              return false;
          }
          });
        });
    
        // Get the modal
        var modal = document.getElementById("myModal");
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        
        var btnSubmit = document.getElementById("btnSubmit");
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }
        
        btnSubmit.onclick = function() {
            alert("dsad");
        }
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        //window.onclick = function(event) {
        // if (event.target == modal) {
        //   modal.style.display = "none";
        //  }
        //}
        
        jQuery(document).on('submit','form#mySubmitForm',function(){
           alert("dsad");
        });
    </script>