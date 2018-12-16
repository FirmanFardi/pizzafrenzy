<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Payments Controller
 *
 *
 * @method \App\Model\Entity\Payment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $payments = $this->paginate($this->Payments);

        $this->set(compact('payments'));
    }

    /**
     * View method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $payment = $this->Payments->get($id, [
            'contain' => []
        ]);

        $this->set('payment', $payment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $payment = $this->Payments->newEntity();

        
        if ($this->request->is('post')) {
            $payment = $this->Payments->patchEntity($payment, $this->request->getData());

            $paymethod =$this->request->getData()['paymethod'];
            $_SESSION['paymethod'] = $paymethod;
        
            if ($this->Payments->save($payment)) {
                echo ('succesfully');
                 $payid =$this->request->getData()['payid'];
                 $_SESSION['payid'] = $payment->payid;
                 $this->Flash->success(__('The payment has been saved.'));

                 
                return $this->redirect(['controller'=>'Orders','action' => 'add']);
            }
            $this->Flash->error(__('fail. Please, try again.'));
        }
        $this->set(compact('payment'));
    }

        public function temp()
    {
        //pegang value crust dgn quantity lepas checkout
        $method =$this->request->getData()['pay'];

   
        $_SESSION['paymethod'] = $method;


        $this->Flash->success($_COOKIE['pid']);

        return $this->redirect(['controller'=>'Orders','action' => 'add',]);

    }

    /**
     * Edit method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $payment = $this->Payments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payment = $this->Payments->patchEntity($payment, $this->request->getData());
            if ($this->Payments->save($payment)) {
                $this->Flash->success(__('The payment has been saved.'));

                return $this->redirect(['controller'=>'Payments','action' => 'view']);
            }
            $this->Flash->error(__('The payment could not be saved. Please, try again.'));
        }
        $this->set(compact('payment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $payment = $this->Payments->get($id);
        if ($this->Payments->delete($payment)) {
            $this->Flash->success(__('The payment has been deleted.'));
        } else {
            $this->Flash->error(__('The payment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
           public function isAuthorized($payment){
        return true;
    }

    public function addPay()
    {
        return $this->redirect(['controller'=>'Orders','action' => 'add']);
    }
}
