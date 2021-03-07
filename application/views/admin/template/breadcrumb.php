<!-- BEGIN: Breadcrumb -->
<div class="-intro-x breadcrumb breadcrumb--light mr-auto">
	<a href="<?= base_url() ?>beranda" class="">THS</a>
	<?php foreach ($this->uri->segments as $segment): ?>
		<i data-feather="chevron-right" class="breadcrumb__icon"></i>
		<?php 
		$url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
		$is_active =  $url == $this->uri->uri_string;
		?>
		<p class=" <?php echo $is_active ? 'breadcrumb--active': '' ?>">
			<?php if($is_active): ?>
				<?php  echo ucwords(str_replace('_', ' ', $segment)) ?>
				<?php else: ?>
					<a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment) ?></a>
			<?php endif; ?>
		</p>
	<?php endforeach; ?>
</div>
<!-- END: Breadcrumb