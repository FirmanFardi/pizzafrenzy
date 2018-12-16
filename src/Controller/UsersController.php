<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }



    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            

            $urole = $this->request->getData()['urole'];
            $_SESSION['urole'] = $urole;
            $user->urole =$_SESSION['urole'];

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('fail. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function searchadmin(){
			if($this->request->is(['patch','post','put'])){
				$search = $this->request->data['search'];
				
				$user = $this->Users->find('all')->where(['users.urole' => 1, 'users.uname LIKE' => '%'. $search .'%']);
				$this->set(compact('user'));
				$this->set('_serialize',['user']);
			}
	}

    public function login()
    {
        if($this->request->is('post')){
            $user = $this->Auth->identify();

            if($user){


                
                $this->Auth->setUser($user);

                   if($user['urole']== 1)
                   {
                    return $this->redirect($this->Auth->redirectUrl('/users/'));
                   }
                   else if($user['urole']== 2)
                     {
                    return $this->redirect($this->Auth->redirectUrl());
                   }
                //kalau ade akan redirect page user nak pergi
                

            }
            $this->Flash->error('Your username or password in incorrect');
        }
    }

    public function logout(){
        $this->Flash->success('You are now logged out');
        return $this->redirect($this->Auth->logout());
    }

    public function isAuthorized($user){
        return true;
    }

     public function search()
    {
        $this->request->allowMethod('ajax');
   
        $keyword = $this->request->query('keyword');
        $query = $this->Users->find('all',[
              'conditions' => ['uname LIKE'=>'%'.$keyword.'%','urole'=>'1'],
              'order' => ['Users.uid'=>'DESC'],
              'limit' => 10
        ]);
        $this->set('users', $this->paginate($query));
        $this->set('_serialize', ['users']);
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }


        



}
