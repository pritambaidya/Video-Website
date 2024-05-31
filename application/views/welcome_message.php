<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>YOuTube</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>style.css">
	<title></title>
</head>
<body>
<nav class="flex-div">
	<div class="nav-left flex-div">
		<img src="<?=base_url('assets/');?>images/menu.png" class="menu-icon" alt="">
		
	</div>
	<div class="nav-middle flex-div">
		<div class="search-box flex-div">
			<input type="text" placeholder="search" name="">
			<img src="<?=base_url('assets/');?>images/search.png" alt="">
		</div>
		<img src="<?=base_url('assets/');?>images/voice-search.png" class="mic-icon" alt="">
	</div>
	<div class="nav-right flex-div">
		<a href="<?=base_url('login/uploadvid');?>"><img src="<?=base_url('assets/');?>images/upload.png" alt=""></a>
		<img src="<?=base_url('assets/');?>images/more.png" alt="">
		<img src="<?=base_url('assets/');?>images/notification.png" alt="">
		<img src="<?=base_url('assets/');?>images/Jack.png" class="user-icon" alt=""><?php print_r($_SESSION['UserLoginSession']['username']);?>
	</div>
</nav>
<div class="sidebar">
	<div class="shortcut-links">
		<a href=""><img src="<?=base_url('assets/');?>images/home.png"><p>Home</p></a>
		<a href=""><img src="<?=base_url('assets/');?>images/explore.png"><p>Explore</p></a>
		<a href=""><img src="<?=base_url('assets/');?>images/subscription.png"><p>Subscription</p></a>
		<a href=""><img src="<?=base_url('assets/');?>images/library.png"><p>Library</p></a>
		<a href=""><img src="<?=base_url('assets/');?>images/history.png"><p>History</p></a>
		<a href=""><img src="<?=base_url('assets/');?>images/playlist.png"><p>Playlist</p></a>
		<a href=""><img src="<?=base_url('assets/');?>images/messages.png"><p>Messages</p></a>
		<a href="<?=base_url('login/logout');?>"><img src="<?=base_url('assets/');?>images/show-more.png"><p>Log out</p></a>
	</div>
	<div class="subscribed-list">
		<h3>SUBSCRIBED</h3>
		<a href=""><img src="<?=base_url('assets/');?>images/Jack.png">Jack Nicholas</a>
		<a href=""><img src="<?=base_url('assets/');?>images/simon.png">Simon Baker</a>
		<a href=""><img src="<?=base_url('assets/');?>images/tom.png">Tom Hardy</a>
		<a href=""><img src="<?=base_url('assets/');?>images/megan.png">Megan RYan</a>
		<a href=""><img src="<?=base_url('assets/');?>images/cameron.png">Cameran Diaz</a>
	</div>
</div>

<div class="container">
	
	<div class="list-container">

		<?php  
			foreach ($blog as $row)  
			{
				?>
		<div class="vid-list">
			<a href="playvideo.html">
				<video width="100%" height="200px" controls>
							<source src="<?=base_url('uploads/').$row->vName.'.mp4';?>" type="">
						</video>
			</a>
			<div class="flex-div">
				<img src="<?=base_url('assets/');?>images/Jack.png">
				<div class="vid-info">
					<a href="playvideo.html"><?php echo $row->vTitle; ?></a>
					<p><?=$row->views;?> Views &bull;</p>
				</div>
			</div>
		</div>
		<?php } ?>
				<p><?php echo $links; ?></p>
		<!--<div class="vid-list">
			<a href=""><img src="<?=base_url('assets/');?>images/thumbnail2.png" class="thumbnail"></a>
			<div class="flex-div">
				<img src="<?=base_url('assets/');?>images/Jack.png">
				<div class="vid-info">
					<a href="">Best channel to learn coding that help you to be web developer</a>
					<p>15k Views &bull; 2 days</p>
				</div>
			</div>
		</div>
		<div class="vid-list">
			<a href=""><img src="<?=base_url('assets/');?>images/thumbnail3.png" class="thumbnail"></a>
			<div class="flex-div">
				<img src="<?=base_url('assets/');?>images/Jack.png">
				<div class="vid-info">
					<a href="">Best channel to learn coding that help you to be web developer</a>
					<p>15k Views &bull; 2 days</p>
				</div>
			</div>
		</div>
		<div class="vid-list">
			<a href=""><img src="<?=base_url('assets/');?>images/thumbnail4.png" class="thumbnail"></a>
			<div class="flex-div">
				<img src="<?=base_url('assets/');?>images/Jack.png">
				<div class="vid-info">
					<a href="">Best channel to learn coding that help you to be web developer</a>
					<p>15k Views &bull; 2 days</p>
				</div>
			</div>
		</div>
		<div class="vid-list">
			<a href=""><img src="<?=base_url('assets/');?>images/thumbnail5.png" class="thumbnail"></a>
			<div class="flex-div">
				<img src="<?=base_url('assets/');?>images/Jack.png">
				<div class="vid-info">
					<a href="">Best channel to learn coding that help you to be web developer</a>
					<p>15k Views &bull; 2 days</p>
				</div>
			</div>
		</div>
		<div class="vid-list">
			<a href=""><img src="<?=base_url('assets/');?>images/thumbnail6.png" class="thumbnail"></a>
			<div class="flex-div">
				<img src="<?=base_url('assets/');?>images/Jack.png">
				<div class="vid-info">
					<a href="">Best channel to learn coding that help you to be web developer</a>
					<p>15k Views &bull; 2 days</p>
				</div>
			</div>
		</div>
		<div class="vid-list">
			<a href=""><img src="<?=base_url('assets/');?>images/thumbnail7.png" class="thumbnail"></a>
			<div class="flex-div">
				<img src="<?=base_url('assets/');?>images/Jack.png">
				<div class="vid-info">
					<a href="">Best channel to learn coding that help you to be web developer</a>
					<p>15k Views &bull; 2 days</p>
				</div>
			</div>
		</div>
		<div class="vid-list">
			<a href=""><img src="<?=base_url('assets/');?>images/thumbnail8.png" class="thumbnail"></a>
			<div class="flex-div">
				<img src="<?=base_url('assets/');?>images/Jack.png">
				<div class="vid-info">
					<a href="">Best channel to learn coding that help you to be web developer</a>
					<p>15k Views &bull; 2 days</p>
				</div>
			</div>
		</div>
	</div>-->
</div>

<script src="<?=base_url('assets/');?>script.js"></script>
</body>
</html>