<?php
	$PAGE_TITLE = 'Home';
	include "template/header.php";
?>
<!-- -=- -=- -=- -=- -=- -=- -=- -=- -=- -=- -=- -=- -=- -->

<h1> HOME </h1>

<style>
	ul {
		list-style-type:none;
		margin: 0;
		padding: 0;
	
	}
	
	li {
		float: left;
	}
	
	a {
		display: block;
		width: 150px;
		background-color: azure
	}
</style>

<ul>
	<li><a href="#home">HOME</a></li>
	<li><a href="#education">EDUCATION</a></li> 
	<li><a href="#booklist">BOOKLIST</a></li> 
	<li><a href="#dream">DREAM</a></li> 
	<li><a href="#contact">CONTACT</a></li> 
</ul>


<img src="img/home-fei.jpg" />

<!-- -=- -=- -=- -=- -=- -=- -=- -=- -=- -=- -=- -=- -=- -->
<?php include "template/footer.php"; ?>
