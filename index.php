<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>D.M.U</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
		<link rel="stylesheet" type="text/css" href=" https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

	</head>
	<body>
	<div class="container-fluid h-100">
            <!-- <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Dolpheen Underground</h1>
            </div> -->
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
                        <!-- <h1 class="text-center">Group</h1> -->
						<div class="input-group">
							<input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
                        <div class="tab-content p-2">
							<iframe width="100%" height="150%" src="https://www.youtube.com/embed/videoseries?si=xYL-eCHKWcVuCJbd&amp;list=PLP6GeQj7Bzrc8YnYcMDrkca2Aqjl8EmYu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
						</div>
						<!-- <ui class="contacts">
						<li class="active">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="<?=$_SESSION['icon'];?>" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span><?=$_SESSION['nama'];?></span>
									<p><?=$_SESSION['nama'];?> is online</p>
								</div>
							</div>
						</li>
						</ui> -->
					</div>
					<div class="card-footer"></div>
				</div></div>
				<div class="col-md-8 col-xl-6 chat">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="dolpheen.jpg" class="rounded-circle user_img">
								</div>
								<div class="user_info">
									<span>D.M.U (Dolpheen Manajemen Hutang)</span>
									<p>1767 Pesan</p>
								</div>
								<!-- <div class="video_cam">
									<span><i class="fas fa-video"></i></span>
									<span><i class="fas fa-phone"></i></span>
								</div> -->
							</div>
							<div class="card-tools">
								<button id="action_menu_btn" class="btn btn-tool" type="button" data-bs-toggle="dropdown" aria-expanded="true">
									<i href="logout.php" class="fa fa-gear"></i>
								</button>
								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item" href="#">
											<i class="fas fa-user-alt pe-2" style="padding-right:5px;"></i>
											My Profile
										</a>
									</li>
                                    <li><a class="dropdown-item" href="#" onclick="deletemessage();">
											<i class="fas fa-trash pe-2" style="padding-right:5px;"></i>
											Clear Chat
										</a>
									</li>
									<li><a class="dropdown-item" href="logout.php">
											<i class="fas fa-sign-out-alt pe-2" style="padding-right:5px;"></i>
											Logout
										</a>
									</li>
								</ul>
							</div>
						
							
						</div>
						<div class="card-body msg_card_body">
						</div>
				
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append" >
									<span class="input-group-text attach_btn"><label id="insPic" class="fas fa-camera" for="pic"></label>
									</span>
								</div>
								<textarea name="pesan" data-userid="<?= $_SESSION['uid'] ?>" data-nama="<?= $_SESSION['nama'] ?> "  data-color="<?= $_SESSION['c_chat'] ?> " placeholder="Tulis pesan cok..."class="form-control type_msg" onkeypress="send_message();"></textarea>
								<div class="input-group-append">
									<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
					


	</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyBkKzqfeaWJeWp55isvzKtiBhHaIYPFcDk",
  	authDomain: "group-chat-f4dc5.firebaseapp.com",
	databaseURL: "https://group-chat-f4dc5-default-rtdb.firebaseio.com",
	projectId: "group-chat-f4dc5",
	storageBucket: "group-chat-f4dc5.appspot.com",
	messagingSenderId: "449929605263",
	appId: "1:449929605263:web:f5ce86d72f04988d9a00fa"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  var rootchatref = firebase.database().ref('/');
  var chatref = firebase.database().ref('/Chat');
  chatref.on('child_added',function(snapshot) {
  	var data = snapshot.val();
  	var uid = $('textarea[name=pesan]').data('userid');
  	var row='';
  	if(data.uid === uid) {
  	  row += ` 
                           <div class="d-flex justify-content-end mb-4 p-3">
							<div class="msg_cotainer_send text-end" style="background-color:${data.c_chat};">${data.pesan}
							<span class="msg_time_send">${data.tanggal}</span>
							<span class="name_send" >${data.nama}</span>`
  	}else {
  		row += `
                          <div class="d-flex justify-content-start mb-4 p-3">
                           <div class="msg_cotainer_" style="background-color:${data.c_chat};">${data.pesan}
						   <span class="name_rec">${data.nama}</span>
                            <span class="msg_time_">${data.tanggal}</span>
                            <audio autoplay>
                                <source src="notification.mp3" type="audio/mp3" />
                            </audio>
                           </div>
                          </div>`;
  	}  

  	$('.msg_card_body').append(row);

  })


  $('.send_btn').click(function(){
  	var pesan = $('textarea[name=pesan]').val()
  	var uid = $('textarea[name=pesan]').data('userid');
  	var nama = $('textarea[name=pesan]').data('nama');
	var c_chat = $('textarea[name=pesan]').data('color');
  	var tanggal = getTanggal()
  	if(pesan !== "") {
  		writeNewPost(uid,pesan,nama,tanggal,c_chat)
  		$('textarea[name=pesan]').val('')
  		autoscroll();
  	}
  })

  function send_message() {
		var key = window.event.keyCode;

		// If the user has pressed enter
		if (key === 13) {
			var pesan = $('textarea[name=pesan]').val()
			var uid = $('textarea[name=pesan]').data('userid');
			var nama = $('textarea[name=pesan]').data('nama');
			var c_chat = $('textarea[name=pesan]').data('color');
			var tanggal = getTanggal()
			if(pesan !== "") {
				writeNewPost(uid,pesan,nama,tanggal,c_chat)
				$('textarea[name=pesan]').val('')
				autoscroll();
			}
			return false;
			}
			else {
				return false;
			}
	}

  function autoscroll(){
  	var cc = $('.msg_card_body');
  	var dd = cc[0].scrollHeight;
  	cc.animate({
  		scrollTop :dd
  	},500)
  }

  function getTanggal() {
  	var myDays = ['Minggu','Senin','Selasa','Rabu','Kamis','Jum&#39at','Sabtu'];
  	var time = new Date(),
  		day = time.getDay(),
  		day = myDays[day],
  		date = day + ','+ time.toLocaleString('en-US', {hour:'numeric', minute:'numeric', hour12: true});
  		return date
  }

  function writeNewPost(uid,pesan,nama,tanggal,c_chat) {
  // A post entry.
  var postData = {
    nama: nama,
    uid: uid,
   	tanggal:tanggal,
   	pesan:pesan,
	c_chat:c_chat
  };

  // Get a key for a new Post.
  var newPostKey = firebase.database().ref().child('Chat').push().key;

  // Write the new post's data simultaneously in the posts list and the user's post list.
  var updates = {};
  updates['/Chat/' + newPostKey] = postData;
  return firebase.database().ref().update(updates);
}
</script>
<script>var deletemessage = firebase.database().ref().child('Chat').remove();</script>