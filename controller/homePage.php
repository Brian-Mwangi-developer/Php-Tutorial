<?php


class HomePageController extends Controller{
    function defaultAction(){
        
        $variables['title'] ='Home page Title';
        $variables['content'] ='Welcome to our Home Page';
        $template = new Template('default');
        $template->view('static-page',$variables);
    }

}

