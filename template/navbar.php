<?php
	$navbar = array(
		array('url' => 'index.php', 'name' => 'Home'),
		array('url' => 'contact.php', 'name' => 'Contact')	
	);	

	function isActive($pageName) {
		global $PAGE_TITLE;
		if ($pageName === $PAGE_TITLE) {
			echo ' class="active" ';
		}
	}

	function navItem($url, $name) { 
		global $PAGE_TITLE;
		$class = $PAGE_TITLE === $name ? 'active': ''
		?>
		<li role="presentation" class="<?php echo $class; ?>">
			<a href="<?php echo $url; ?>"><?php echo $name; ?></a>
		</li>
		<?php	
	} // end nav

?><ul class="nav nav-tabs"><?php
	navItem('index.php', 'Home');
	navItem('contact.php', 'Contact');
	navItem('education.php', 'Education');
	navItem('dream.php', 'Dream');
	navItem('booklist.php', 'Booklist');

?></ul>
	
