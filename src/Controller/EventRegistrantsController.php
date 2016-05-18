<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;

/**
 * EventRegistrants Controller
 *
 * @property \App\Model\Table\EventRegistrantsTable $EventRegistrants
 */
class EventRegistrantsController extends AppController
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
        $this->paginate = [
            'contain' => ['Events']
        ];
        $eventRegistrants = $this->paginate($this->EventRegistrants);

        $this->set(compact('eventRegistrants'));
        $this->set('_serialize', ['eventRegistrants']);
    }

    /**
     * View method
     *
     * @param string|null $id Event Registrant id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventRegistrant = $this->EventRegistrants->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('eventRegistrant', $eventRegistrant);
        $this->set('_serialize', ['eventRegistrant']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventRegistrant = $this->EventRegistrants->newEntity();
        if ($this->request->is('post')) {
            $eventRegistrant = $this->EventRegistrants->patchEntity($eventRegistrant, $this->request->data);
            if ($this->EventRegistrants->save($eventRegistrant)) {
                setcookie("idforColor",$eventRegistrant->event_id);
                $this->Flash->success(__('The event registrant has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The event registrant could not be saved. Please, try again.'));
            }
        }
        $events = $this->EventRegistrants->Events->find('list', ['limit' => 200]);
        $this->set(compact('eventRegistrant', 'events'));
        $this->set('_serialize', ['eventRegistrant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Event Registrant id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventRegistrant = $this->EventRegistrants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventRegistrant = $this->EventRegistrants->patchEntity($eventRegistrant, $this->request->data);
            if ($this->EventRegistrants->save($eventRegistrant)) {
                $this->Flash->success(__('The event registrant has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The event registrant could not be saved. Please, try again.'));
            }
        }
        $events = $this->EventRegistrants->Events->find('list', ['limit' => 200]);
        $this->set(compact('eventRegistrant', 'events'));
        $this->set('_serialize', ['eventRegistrant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Event Registrant id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventRegistrant = $this->EventRegistrants->get($id);
        if ($this->EventRegistrants->delete($eventRegistrant)) {
            $this->Flash->success(__('The event registrant has been deleted.'));
        } else {
            $this->Flash->error(__('The event registrant could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
