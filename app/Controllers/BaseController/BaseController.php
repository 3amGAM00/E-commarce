<?php
namespace App\Controllers\BaseController;

class BaseController{

    private $controller;
    private $action;
    protected $param;
    private $template;
    public $language;
    protected $Auth;

    protected  $data =[];

   public function setController($controllerName){

        $this->controller=$controllerName;

    }
   public function setAction($actionName){

        $this->action=$actionName;
        
    }

    public function setParam($paramName){

        $this->param = $paramName;

    }

    public function setTemplate($templateName)
    {
        $this->template = $templateName;
    }
    public function setLanguage($Language)
    {
        $this->language = $Language;
    }

    public function setauth($auth){
        $this->Auth = $auth;
    }

    public function pageUser($folder)
    {
        $array_folder = ['index','product'];
        if(in_array($folder,$array_folder)):
            return true;
        endif;
    }

    public function pageDashboard($folder)
    {

        $array_dashboard = ['Dashboard'];
        if(in_array($folder,$array_dashboard)):
            return true;
        endif;
    }
    public function pageAdminLogin($folder)
    {
        $array_dashboard = ['adminLogin'];
        if(in_array($folder,$array_dashboard)):
            return true;
        endif;
    }

    public function fileexistsUser($view)
    {
        if(file_exists($view)):
            $this->template->renderAppStart();
            extract($this->data);
            require $view;
             $this->template->renderAppEnd();
         endif;
    }

    public function fileexistsAdmin($view)
    {
        if(file_exists($view)):
            $this->template->renderAppStartDashboard();
            extract($this->data);
            require $view;
             $this->template->renderAppEndDashboard();
         endif;
    }

    public function fileexistsAdminEmpty( $view)
    {
        if(file_exists($view)):
            $this->template->renderAppStartAdmin();
            extract($this->data);
            require $view;
            $this->template->renderAppEndAdmin();
         endif;
    }

    public function  view($folder,$file)
    {
        
        $view =  PATH_VIEWS.$folder.DS.$file.'.view.php';


         
       if($this->pageUser($folder)):
              $this->fileexistsUser($view);
       return ;
       endif;



       if($this->pageDashboard($folder) || $this->pageAdminLogin($folder)):
        if($file == "Auth/login"):
             $this->fileexistsAdminEmpty($view);
        return;
        else:
             $this->fileexistsAdmin($view);
            return;
        endif;
    endif;
        extract($this->data);
        require $view;
    }

    // ob_get_contents();
    // ob_flush();

}
