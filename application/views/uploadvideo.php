<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>YOuTube</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>style.css">
	<title></title>
	<style>
		table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=file], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

textarea, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
	</style>
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
<div class="sidebar">
	<div class="shortcut-links">
		<a href=""><img src="<?=base_url('assets/');?>images/home.png"><p>Home</p></a>
		<a href=""><img src="<?=base_url('assets/');?>images/explore.png"><p>Explore</p></a>
		<a href=""><img src="<?=base_url('assets/');?>images/subscription.png"><p>Subscription</p></a>
		<a href=""><img src="<?=base_url('assets/');?>images/library.png"><p>Library</p></a>
		<a href=""><img src="<?=base_url('assets/');?>images/history.png"><p>History</p></a>
		<a href=""><img src="<?=base_url('assets/');?>images/playlist.png"><p>Playlist</p></a>
		<a href=""><img src="<?=base_url('assets/');?>images/messages.png"><p>Messages</p></a>
		<a href="<?=base_url('login/logout');?>"><img src="<?=base_url('assets/');?>images/show-more.png"><p>Log Out</p></a>
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
	
	<?=$this->session->flashdata('message');?>
	<div class="list-container">

		<form method="post" action="<?=base_url('login/saveVideo');?>" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<td>Video Title</td>
					<td><input type="text" name="vtitle">
				</tr>
				<tr>
				<td>Select Video </td>
				<td><input type="file" name="vUpload">
				</td>
				<tr>
					<td>Video Description</td>
					<td> <textarea name="VDescription" rows="10"></textarea></td>
				</tr>
				<tr>
					<td>Video Type</td>
					<td><input type="radio" name="vType" value="0">Public <input type="radio" name="vType" value="1">Private
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>

<script src="<?=base_url('assets/');?>script.js"></script>
</body>
</html>