<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('商品を編集'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_name', array('label' => '商品名'));
		echo $this->Form->input('price', array('label' => '価格'));
		echo $this->Form->input('stock', array('label' => '在庫数'));
		echo $this->Form->input('is_active', array('label' => '有効状態'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('更新')); ?>
</div>
<div class="actions">
	<h3><?php echo __('操作'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $this->Form->value('Product.id')), array('confirm' => __('商品ID: %s を削除してもよろしいですか？', $this->Form->value('Product.id')))); ?></li>
		<li><?php echo $this->Html->link(__('商品一覧'), array('action' => 'index')); ?></li>
	</ul>
</div>
