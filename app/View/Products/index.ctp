<div class="products index">
	<h2><?php echo __('商品一覧'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_name', '商品名'); ?></th>
			<th><?php echo $this->Paginator->sort('price', '価格'); ?></th>
			<th><?php echo $this->Paginator->sort('stock', '在庫数'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active', '有効状態'); ?></th>
			<th><?php echo $this->Paginator->sort('created', '作成日'); ?></th>
			<th><?php echo $this->Paginator->sort('modified', '更新日'); ?></th>
			<th class="actions"><?php echo __('操作'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($products as $product): ?>
	<tr>
		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['product_name']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['price']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['stock']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['created']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('詳細'), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('編集'), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $product['Product']['id']), array('confirm' => __('商品ID: %s を削除してもよろしいですか？', $product['Product']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('{:pages}ページ中 {:page}ページ目、全{:count}件中 {:start}件目から{:end}件目まで表示しています。')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('前へ'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('次へ') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('操作'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('商品を追加'), array('action' => 'add')); ?></li>
	</ul>
</div>
