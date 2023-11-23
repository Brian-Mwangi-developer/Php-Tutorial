<?php


class HomePageController extends Controller{
    function defaultAction(){
        
        
        $template = new Template();
        $template->view('homePage');
    }

}

