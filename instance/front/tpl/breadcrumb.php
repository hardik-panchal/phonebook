<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php print _U ?>home">Home</a> 
        </li>
	<?php
	/*
	 * Render bread crumb
	 */
	?>
	<?php if (!empty($bc)): ?>
    	<span class="divider">/</span>
	    <?php $bc_length = count($bc); ?>
	    <?php $i = 0; ?>
	    <?php foreach ($bc as $eb): ?>
		<?php $i++; ?>
		<li>
		    <?php if ($eb['link']): ?>
	    	    <a href="<?php print $eb['link'] ?>"><?php print $eb['text'] ?></a>
		    <?php else: ?>
			<?php print $eb['text'] ?>
		    <?php endif; ?>

		    <?php if ($i < $bc_length): ?>
	    	    <span class="divider">/</span>
		    <?php endif; ?>

		</li>
	    <?php endforeach; ?>

	<?php endif; ?>


    </ul>
</div>
