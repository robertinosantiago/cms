<?php

namespace App\Controller;

class ArticlesController extends AppController {

  public function initialize() {
    parent::initialize();

    $this->loadComponent('Paginator');
    $this->loadComponent('Flash');
  }

  public function index() {
    $articles = $this->Paginator->paginate($this->Articles->find());
    $this->set(compact('articles'));
  }

  public function view($slug = null) {
    $article = $this->Articles->findBySlug($slug)->firstOrFail();
    $this->set(compact('article'));
  }

  public function add() {
    $article = $this->Articles->newEntity();
    if($this->request->is('post')) {
      $article = $this->Articles->patchEntity($article, $this->request->getData());

      //Temporariamente será definido o id 1 para o usuário
      //Ou um id de usuário existente no banco de dados
      $article->user_id = 1;

      if ($this->Articles->save($article)) {
        $this->Flash->success(__('Salvo com sucesso'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não foi possível salvar'));
    }
    $this->set('article', $article);
  }

  public function edit($slug) {
    $article = $this->Articles->findBySlug($slug)->firstOrFail();
    if ($this->request->is(['post', 'put'])) {
      $this->Articles->patchEntity($article, $this->request->getData());
      if ($this->Articles->save($article)) {
        $this->Flash->success(__('Alterado com sucesso.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não foi possível alterar o artigo'));
    }
    $this->set('article', $article);
  }

}
