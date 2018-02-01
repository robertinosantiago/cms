<h1>Novo artigo</h1>
<?php
  echo $this->Form->create($article);
  echo $this->Form->control('title');
  echo $this->Form->control('body', ['rows' => 3]);
  echo $this->Form->button(__('Salvar'));
  echo $this->Form->end();
?>
