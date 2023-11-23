<?php

class AboutUsController extends Controller{
    function defaultAction(){
        $variables['title'] ='About-Us page Title';
        $variables['content'] ='Below is the information about us';
        $template = new Template('default');
        $template->view('static-page',$variables);
    }

}