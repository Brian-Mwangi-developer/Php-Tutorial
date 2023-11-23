<?php
 
class ContactController extends Controller{

     function runBeforeAction(){
        if($_SESSION['has_submitted_the_form'] ?? 0 == 1){
            include 'view/contact/contactus-already-contacted.html';
            return false;
        }
        return true;
    }
    function defaultAction(){
        var_dump($_SESSION);
        include 'view/contact/contactus.html';
    }
    function submitContactFormAction(){
        echo 'inside Contactcontroller ::submitformAction';
        //validate
        //store data 
        //send email
        $_SESSION['has_submitted_the_form'] = 1;

        include 'view/contact/contactus-thankyou.html';
    }

    
}






