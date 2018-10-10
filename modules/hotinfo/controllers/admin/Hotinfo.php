<?php



class HotinfoController extends ModuleAdminController
{
 public function __construct()
    {
        parent::__construct();

    }
    
  
    public function display()
    {
       global $cookie;
       $tab = 'Hotinfo';
       $token = Tools::getAdminToken('AdminModules'.intval(Tab::getIdFromClassName('AdminModules')).intval($cookie->id_employee));
       Tools::redirectAdmin('index.php?controller=AdminModules&configure=hotinfo'. '&token=' . $token);
    }


   


    
}