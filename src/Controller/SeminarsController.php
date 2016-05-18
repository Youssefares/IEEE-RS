<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Seminars Controller
 *
 * @property \App\Model\Table\SeminarsTable $Seminars
 */
class SeminarsController extends AppController
{
  public function beforeFilter(\Cake\Event\Event $event){
    $this->Auth->allow();
    $this->Auth->deny(['edit','delete','add']);
  }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $seminars = $this->paginate($this->Seminars);

        $this->set(compact('seminars'));
        $this->set('_serialize', ['seminars']);
    }

    /**
     * View method
     *
     * @param string|null $id Seminar id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seminar = $this->Seminars->get($id, [
            'contain' => ['SeminarRegistrants']
        ]);

        $this->set('seminar', $seminar);
        $this->set('_serialize', ['seminar']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seminar = $this->Seminars->newEntity();
        if ($this->request->is('post')) {
            $seminar = $this->Seminars->patchEntity($seminar, $this->request->data);
            if ($this->Seminars->save($seminar)) {
                setcookie("idforColor",$seminar->id);
                $this->Flash->success(__('The seminar has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The seminar could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('seminar'));
        $this->set('_serialize', ['seminar']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Seminar id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seminar = $this->Seminars->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seminar = $this->Seminars->patchEntity($seminar, $this->request->data);
            if ($this->Seminars->save($seminar)) {
                setcookie("idforColor",$seminar->id);
                $this->Flash->success(__('The seminar has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The seminar could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('seminar'));
        $this->set('_serialize', ['seminar']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Seminar id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seminar = $this->Seminars->get($id);
        if ($this->Seminars->delete($seminar)) {
            $this->Flash->success(__('The seminar has been deleted.'));
        } else {
            $this->Flash->error(__('The seminar could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
