<h1>
  <?php echo $article->title; ?>
</h1>
<p><?php echo $article->body; ?></p>
<hr>
<p><small>Criado em: <?php echo $article->created->format('d/m/Y H:i'); ?></small></p>
<p><?php echo $this->Html->link('Editar', ['action' => 'edit', $article->slug]); ?></p>
