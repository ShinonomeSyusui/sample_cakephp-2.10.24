<div class="products view">
<h2><?php echo __('商品詳細'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('商品名'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('価格'); ?></dt>
		<dd>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('在庫数'); ?></dt>
		<dd>
			<?php echo h($product['Product']['stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('有効状態'); ?></dt>
		<dd>
			<?php echo h($product['Product']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('作成日'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('更新日'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('操作'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('編集'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $product['Product']['id']), array('confirm' => __('商品ID: %s を削除してもよろしいですか？', $product['Product']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('商品一覧'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('商品を追加'), array('action' => 'add')); ?> </li>
	</ul>
</div>
