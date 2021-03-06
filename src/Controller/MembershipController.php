<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Membership Controller
 *
 * @property \App\Model\Table\MembershipTable $Membership
 */
class MembershipController extends AppController
{
  public function beforeFilter(\Cake\Event\Event $event){
    $this->Auth->allow();
  }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $membership = $this->paginate($this->Membership);

        $this->set(compact('membership'));
        $this->set('_serialize', ['membership']);
    }

    /**
     * View method
     *
     * @param string|null $id Membership id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $membership = $this->Membership->get($id, [
            'contain' => []
        ]);

        $this->set('membership', $membership);
        $this->set('_serialize', ['membership']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $membership = $this->Membership->newEntity();
        if ($this->request->is('post')) {
            $membership = $this->Membership->patchEntity($membership, $this->request->data);
            if ($this->Membership->save($membership)) {
                $this->Flash->success(__('The membership has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The membership could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('membership'));
        $this->set('_serialize', ['membership']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Membership id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $membership = $this->Membership->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $membership = $this->Membership->patchEntity($membership, $this->request->data);
            if ($this->Membership->save($membership)) {
                $this->Flash->success(__('The membership has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The membership could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('membership'));
        $this->set('_serialize', ['membership']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Membership id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $membership = $this->Membership->get($id);
        if ($this->Membership->delete($membership)) {
            $this->Flash->success(__('The membership has been deleted.'));
        } else {
            $this->Flash->error(__('The membership could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
