<?php
 
class ContactController extends Controller{

     function runBeforeAction(){
        if($_SESSION['has_submitted_the_form'] ?? 0 == 1){
            $variables['title'] ='Submission Already Made';
            $variables['content'] ='You have already submitted the form we will get back to you';
            $template = new Template('default');
            $template->view('static-page',$variables);
            return false;
        }
        return true;
    }
    function defaultAction(){
        $variables['title'] ='Contact Us';
        $variables['content'] ='Please write Us a Message';
        $template = new Template('default');
        $template->view('contact/contactus',$variables);
    }
    function submitContactFormAction(){
        //validate
        //store data 
        //send email
        $_SESSION['has_submitted_the_form'] = 1;

        $variables['title'] ='Thank You for Contacting Us';
        $variables['content'] ='We reply within two Business Days';
        $template = new Template('default');
        $template->view('static-page',$variables);
    }

    
}






