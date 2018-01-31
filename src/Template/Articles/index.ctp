<h1>Artigos</h1>

<table>
  <thead>
    <tr>
      <th>Título</th>
      <th>Criado em</th>
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
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
