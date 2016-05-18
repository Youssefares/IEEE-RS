<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VisitRegistrants Controller
 *
 * @property \App\Model\Table\VisitRegistrantsTable $VisitRegistrants
 */
class VisitRegistrantsController extends AppController
{
  public function beforeFilter(\Cake\Event\Event $event)
  {
      $this->Auth->allow();
  }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Visits']
        ];
        $visitRegistrants = $this->paginate($this->VisitRegistrants);

        $this->set(compact('visitRegistrants'));
        $this->set('_serialize', ['visitRegistrants']);
    }

    /**
     * View method
     *
     * @param string|null $id Visit Registrant id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $visitRegistrant = $this->VisitRegistrants->get($id, [
            'contain' => ['Visits']
        ]);

        $this->set('visitRegistrant', $visitRegistrant);
        $this->set('_serialize', ['visitRegistrant']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $visitRegistrant = $this->VisitRegistrants->newEntity();
        if ($this->request->is('post')) {
            $visitRegistrant = $this->VisitRegistrants->patchEntity($visitRegistrant, $this->request->data);
            if ($this->VisitRegistrants->save($visitRegistrant)) {
                setcookie("idforColor",$visitRegistrant->visit_id);
                $this->Flash->success(__('The visit registrant has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The visit registrant could not be saved. Please, try again.'));
            }
        }
        $visits = $this->VisitRegistrants->Visits->find('list', ['limit' => 200]);
        $this->set(compact('visitRegistrant', 'visits'));
        $this->set('_serialize', ['visitRegistrant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Visit Registrant id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $visitRegistrant = $this->VisitRegistrants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $visitRegistrant = $this->VisitRegistrants->patchEntity($visitRegistrant, $this->request->data);
            if ($this->VisitRegistrants->save($visitRegistrant)) {
                $this->Flash->success(__('The visit registrant has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The visit registrant could not be saved. Please, try again.'));
            }
        }
        $visits = $this->VisitRegistrants->Visits->find('list', ['limit' => 200]);
        $this->set(compact('visitRegistrant', 'visits'));
        $this->set('_serialize', ['visitRegistrant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Visit Registrant id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $visitRegistrant = $this->VisitRegistrants->get($id);
        if ($this->VisitRegistrants->delete($visitRegistrant)) {
            $this->Flash->success(__('The visit registrant has been deleted.'));
        } else {
            $this->Flash->error(__('The visit registrant could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
