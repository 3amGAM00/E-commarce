<?php 

namespace App\Process;

class Template{

    private $_template;
    public function __construct(array $template)
    {
        $this->_template = $template;
    }
    public static function asset($url){

       $know =  explode('/',$url);
       $knoww = explode('.',end($know));
       switch(end($knoww) ):
        case('css'):
            return PATH_CSS.str_replace('/',DS,$url);
            break;
        case('js'):
            return PATH_JS.str_replace('/',DS,$url);
        break;
        case('jpg' || 'png'):
            return PATH_IMG.str_replace('/',DS,$url);
        break;
       endswitch;
      
    }       

    public function renderAppStart(){
        foreach($this->_template['TEMPLATE'] as $templatepages):            
            require_once $templatepages;
        endforeach;
    }

    public function renderAppEnd(){
        foreach($this->_template['FOOtER'] as $footer):
        require_once $footer;
        endforeach;
    }
    
    public function renderAppStartDashboard(){
        foreach($this->_template['TEMPLATEDashboard'] as $templatepages):            
            require_once $templatepages;
        endforeach;
    }
    public function renderAppEndDashboard(){
        foreach($this->_template['FOOtERDashboard'] as $footer):
            require_once $footer;
        endforeach;
    }

    public function renderAppStartAdmin(){
        foreach($this->_template['templateAdmin'] as $templatepages):            
            require_once $templatepages;
        endforeach;
    } 
    public function renderAppEndAdmin(){
        foreach($this->_template['footerAdmin'] as $footer):
            require_once $footer;  
        endforeach;
    }

}
