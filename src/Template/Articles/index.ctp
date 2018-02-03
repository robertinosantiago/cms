<h1>Artigos</h1>

<?php echo $this->Html->link('Novo artigo', ['action' => 'add']); ?>

<table>
  <thead>
    <tr>
      <th>Título</th>
      <th>Criado em</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($articles as $article): ?>
      <tr>
        <td>
          <?php echo $this->Html->link($article->title, ['controller' => 'Articles', 'action' => 'view', $article->slug]); ?>
        </td>
        <td>
          <?php echo $article->created->format('d/m/Y H:i'); ?>
        </td>
        <td>
          <?php echo $this->Html->link('Editar', ['action' => 'edit', $article->slug]); ?>
          <?php echo $this->Form->postLink('Excluir', ['action' => 'delete', $article->slug], ['confirm' => 'Confirma exclusão?']); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
