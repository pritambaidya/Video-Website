<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Play Video</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>style.css">
	
	<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
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
			<img src="<?=base_url('assets/');?>images/upload.png" alt="">
			<img src="<?=base_url('assets/');?>images/more.png" alt="">
			<img src="<?=base_url('assets/');?>images/notification.png" alt="">
			<img src="<?=base_url('assets/');?>images/Jack.png" class="user-icon" alt="">
		</div>
	</nav>

	<div class="container play-container">
		<div class="row">
			<div class="play-video">
				<?php  
				foreach ($blog as $row)  
				{
				?>
					<video controls autoplay>
						<source src="<?=base_url('uploads/').$row->vName.'.mp4';?>" type="video/mp4" height="300px">
						</video>

						<div class="tags">
							<a href="">#coding</a><a href="">#HTML</a><a href="">#CSS</a><a href="">#Javascript</a>
						</div>
						<h3><?=$row->vTitle;?></h3>
						<p><?=$row->vDesc;?></p>
						<div class="play-video-info">
							<p><?=$row->views;?> Views &bull;</p>
							
							<div>
								<a href=""><img src="<?=base_url('assets/');?>images/like.png">125</a>
								<a href=""><img src="<?=base_url('assets/');?>images/dislike.png">2</a>
								<a href=""><img src="<?=base_url('assets/');?>images/share.png">share</a>
								<a href=""><img src="<?=base_url('assets/');?>images/save.png">Save</a>
							</div>
						</div>
						<?php } ?>
						<hr>
						<div class="publisher">
							<img src="<?=base_url('assets/');?>images/Jack.png">
							<div>
								<p>Easy Tutorials</p>
								<span>500k Subscribers</span>
							</div>
							<button type="button"></button>
						</div>
						<div class="vid-description">
							<p>Channel that makes learning easy</p>
							<p>Suscribe easy tutorials to watch more tutorials</p>
							<hr>
							<h4>134 Comments</h4>

							<div class="add-comment">
								<img src="<?=base_url('assets/');?>images/Jack.png">
								<input type="text" placeholder="Write comments..." name="">
							</div>

							<div class="old-comment">
								<img src="<?=base_url('assets/');?>images/Jack.png">
								<div>
									<h3>Jack Nicho<span>2 days ago</span></h3>
									<p>A global network protocols.</p>
									<div class="acomment-action">
										<img src="<?=base_url('assets/');?>images/like.png">
										<span>244</span>
										<img src="<?=base_url('assets/');?>images/dislike.png">
										<span>2</span>
										<span>REPLY</span>
										<a href="">All replies</a>
									</div>
								</div>
							</div>
							<div class="old-comment">
								<img src="<?=base_url('assets/');?>images/Jack.png">
								<div>
									<h3>Jack Nicho<span>2 days ago</span></h3>
									<p>A global network protocols.</p>
									<div class="acomment-action">
										<img src="<?=base_url('assets/');?>images/like.png">
										<span>244</span>
										<img src="<?=base_url('assets/');?>images/dislike.png">
										<span>2</span>
										<span>REPLY</span>
										<a href="">All replies</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="right-sidebar">
						<div class="side-video-list">
							<img src="<?=base_url('assets/');?>images/thumbnail1.png">
							<div class="vid-info">
								<a href="" class="small-thumbnail">Best Channel that help you to be web developer</a>
								<p>Easy Tutorial</p>
								<p>15k views</p>
							</div>
						</div>
						<div class="side-video-list">
							<img src="<?=base_url('assets/');?>images/thumbnail2.png">
							<div class="vid-info">
								<a href="" class="small-thumbnail">Best Channel that help you to be web developer</a>
								<p>Easy Tutorial</p>
								<p>15k views</p>
							</div>
						</div>
						<div class="side-video-list">
							<img src="<?=base_url('assets/');?>images/thumbnail3.png">
							<div class="vid-info">
								<a href="" class="small-thumbnail">Best Channel that help you to be web developer</a>
								<p>Easy Tutorial</p>
								<p>15k views</p>
							</div>
						</div>
						<div class="side-video-list">
							<img src="<?=base_url('assets/');?>images/thumbnail4.png">
							<div class="vid-info">
								<a href="" class="small-thumbnail">Best Channel that help you to be web developer</a>
								<p>Easy Tutorial</p>
								<p>15k views</p>
							</div>
						</div>
						<div class="side-video-list">
							<img src="<?=base_url('assets/');?>images/thumbnail5.png">
							<div class="vid-info">
								<a href="" class="small-thumbnail">Best Channel that help you to be web developer</a>
								<p>Easy Tutorial</p>
								<p>15k views</p>
							</div>
						</div>
						<div class="side-video-list">
							<img src="<?=base_url('assets/');?>images/thumbnail6.png">
							<div class="vid-info">
								<a href="" class="small-thumbnail">Best Channel that help you to be web developer</a>
								<p>Easy Tutorial</p>
								<p>15k views</p>
							</div>
						</div>
						<div class="side-video-list">
							<img src="<?=base_url('assets/');?>images/thumbnail7.png">
							<div class="vid-info">
								<a href="" class="small-thumbnail">Best Channel that help you to be web developer</a>
								<p>Easy Tutorial</p>
								<p>15k views</p>
							</div>
						</div>
						<div class="side-video-list">
							<img src="<?=base_url('assets/');?>images/thumbnail8.png">
							<div class="vid-info">
								<a href="" class="small-thumbnail">Best Channel that help you to be web developer</a>
								<p>Easy Tutorial</p>
								<p>15k views</p>
							</div>
						</div>
					</div>
				</div>
			</div>


		</body>
		</html>