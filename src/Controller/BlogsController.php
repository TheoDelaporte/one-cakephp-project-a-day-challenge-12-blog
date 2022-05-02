<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Blogs Controller
 *
 * @property \App\Model\Table\BlogsTable $Blogs
 * @method \App\Model\Entity\Blog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Blogs->find()
            ->contain(['Tags']);
        $blogs = $this->paginate($query);

        $this->set(compact('blogs'));
    }

    /**
     * View method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blog = $this->Blogs->get($id, [
            'contain' => ['Tags'],
        ]);

        $this->set(compact('blog'));
    }
}
