<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 *
 */
class TruncateController extends AppController
{

    public function initialize()
    {
        $this->loadComponent('RequestHandler');
    }

    /**
     *
     * @return \Cake\Network\Response|null
     */
    public function all()
    {
        $db = ConnectionManager::get('default');
        $db->query('delete from users');
//        $db->query('truncate table users');
        $this->set('_serialize', true);

    }

}

