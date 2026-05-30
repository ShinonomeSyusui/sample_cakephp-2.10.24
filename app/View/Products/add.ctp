<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('商品を追加'); ?></legend>
	<?php
		echo $this->Form->input('product_name', array('label' => '商品名'));
		echo $this->Form->input('price', array('label' => '価格'));
		echo $this->Form->input('stock', array('label' => '在庫数'));
		echo $this->Form->input('is_active', array('label' => '有効状態'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('登録')); ?>
</div>
<div class="actions">
	<h3><?php echo __('操作'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('商品一覧'), array('action' => 'index')); ?></li>
	</ul>
</div>
