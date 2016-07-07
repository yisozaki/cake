<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Dungeons Controller
 *
 * @property \App\Model\Table\DungeonsTable $Dungeons
 */
class DungeonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $dungeons = $this->paginate($this->Dungeons);
        $this->set(compact('dungeons'));
        $this->set('_serialize', ['dungeons']);
    }

    /**
     * View method
     *
     * @param string|null $id Dungeon id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dungeon = $this->Dungeons->get($id, [
            'contain' => ['Maps'],
        ]);

        $this->set('dungeon', $dungeon);
        $this->set('_serialize', ['dungeon']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dungeon = $this->Dungeons->newEntity();
        if ($this->request->is('post')) {
            $dungeon = $this->Dungeons->patchEntity($dungeon, $this->request->data);
            if ($this->Dungeons->save($dungeon)) {
                $this->Flash->success(__('The dungeon has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dungeon could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dungeon'));
        $this->set('_serialize', ['dungeon']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dungeon id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dungeon = $this->Dungeons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dungeon = $this->Dungeons->patchEntity($dungeon, $this->request->data);
            if ($this->Dungeons->save($dungeon)) {
                $this->Flash->success(__('The dungeon has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dungeon could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dungeon'));
        $this->set('_serialize', ['dungeon']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dungeon id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dungeon = $this->Dungeons->get($id);
        if ($this->Dungeons->delete($dungeon)) {
            $this->Flash->success(__('The dungeon has been deleted.'));
        } else {
            $this->Flash->error(__('The dungeon could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
