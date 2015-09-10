<?php
	$navbar = array(
		array('url' => 'index.php', 'name' => 'Home'),
		array('url' => 'contact.php', 'name' => 'Contact')	
	);	

	function navItem($url, $name, $additionalClasses = '') { 
		global $PAGE_TITLE;
		$activeClass = $PAGE_TITLE === $name ? 'active': ''
		?>
		<li role="presentation" class="col-sm-2 <?php echo $additionalClasses . ' ' . $activeClass; ?>">
			<a href="<?php echo $url; ?>"><?php echo $name; ?></a>
		</li>
		<?php	
	} // end nav

	
?><ul class="nav nav-tabs row text-uppercase text-center"> 
	
	<?php
	
	navItem('index.php', 'Home', 'col-sm-offset-1');
	navItem('contact.php', 'Contact');
	navItem('education.php', 'Education');
	navItem('dream.php', 'Dream');
	navItem('booklist.php', 'Booklist');

?></ul>
