<?php
		if(!function_exists('print_out_da_items'))
		{
			function print_out_da_items($items)
			{
				foreach($items as $key=>$value)
				{
					if(is_array($value))
						print_out_da_items($value);
					else
						echo "<li>$value</li>";
				}
			}
		}
?>

from da child!

<?php if(isset($variables['da_wrappa'])): ?>
		<<?php print $variables['da_wrappa']; ?>>
<?php else: ?>
		<ul>
<?php endif; ?>
<?php print_out_da_items($variables['da_items']); ?>
<?php if(isset($variables['da_wrappa'])): ?>
	</<?php print $variables['da_wrappa']; ?>>
<?php else: ?>
	</ul>
<?php endif; ?>