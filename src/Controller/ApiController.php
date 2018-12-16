<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApiController extends AppController
{
	public function index()
    {
  
    }
	public function api()
	{
			return $this->redirect(['action' => 'api']);
	}

	    public function isAuthorized(){
        return true;
    }
}