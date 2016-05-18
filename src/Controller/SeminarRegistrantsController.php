<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SeminarRegistrants Controller
 *
 * @property \App\Model\Table\SeminarRegistrantsTable $SeminarRegistrants
 */
class SeminarRegistrantsController extends AppController
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
            'contain' => ['Seminars']
        ];
        $seminarRegistrants = $this->paginate($this->SeminarRegistrants);

        $this->set(compact('seminarRegistrants'));
        $this->set('_serialize', ['seminarRegistrants']);
    }

    /**
     * View method
     *
     * @param string|null $id Seminar Registrant id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seminarRegistrant = $this->SeminarRegistrants->get($id, [
            'contain' => ['Seminars']
        ]);

        $this->set('seminarRegistrant', $seminarRegistrant);
        $this->set('_serialize', ['seminarRegistrant']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seminarRegistrant = $this->SeminarRegistrants->newEntity();
        if ($this->request->is('post')) {
            $seminarRegistrant = $this->SeminarRegistrants->patchEntity($seminarRegistrant, $this->request->data);
            if ($this->SeminarRegistrants->save($seminarRegistrant)) {
                setcookie("idforColor",$seminarRegistrant->seminar_id);
                $this->Flash->success(__('The seminar registrant has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The seminar registrant could not be saved. Please, try again.'));
            }
        }
        $seminars = $this->SeminarRegistrants->Seminars->find('list', ['limit' => 200]);
        $this->set(compact('seminarRegistrant', 'seminars'));
        $this->set('_serialize', ['seminarRegistrant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Seminar Registrant id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seminarRegistrant = $this->SeminarRegistrants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seminarRegistrant = $this->SeminarRegistrants->patchEntity($seminarRegistrant, $this->request->data);
            if ($this->SeminarRegistrants->save($seminarRegistrant)) {
                $this->Flash->success(__('The seminar registrant has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The seminar registrant could not be saved. Please, try again.'));
            }
        }
        $seminars = $this->SeminarRegistrants->Seminars->find('list', ['limit' => 200]);
        $this->set(compact('seminarRegistrant', 'seminars'));
        $this->set('_serialize', ['seminarRegistrant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Seminar Registrant id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seminarRegistrant = $this->SeminarRegistrants->get($id);
        if ($this->SeminarRegistrants->delete($seminarRegistrant)) {
            $this->Flash->success(__('The seminar registrant has been deleted.'));
        } else {
            $this->Flash->error(__('The seminar registrant could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
