<style>
  @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Source Sans Pro', sans-serif;
}

.icon-bar {
	position: fixed;
	top: 70%;
	transform: translateY(-70%);
	-webkit-transform: translateY(-70%);
	-ms-transform: translateY(-70%);
	z-index: 10;
}

.icon-bar a {
	text-decoration: none;
	width: 150px;
	color: #fff;
	display: flex;
	justify-content: flex-end;
	align-items: center;
	padding: 5px;
	font-size: 20px;
	transform: translateX(-110px);
	-webkit-transform: translateX(-110px);
	-ms-transform: translateX(-110px);
	transition: all 0.5s linear;
	-webkit-transition: all 0.5s linear;
	-ms-transition: all 0.5s linear;
	
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.insagram {
  background: #3f729b;
  color: white;
}

.telegram {
  background: #0088CC;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

.icon-bar a i {
	padding-left: 20px;
	font-size: 30px !important;
	animation: letszoom 3s linear alternate-reverse infinite;
}

@keyframes letszoom {
	from {
		transform: scale(0.8);
	}

	to {
		transform: scale(1);
	}

}

.icon-bar a:hover {
	transform: translateX(0);
	-webkit-transform: translateX(0);
	-ms-transform: translateX(0);
}
</style>
<body>
		<div class="icon-bar">
		<a href="#" class="facebook">Facebook<i class="fab fa-facebook-square"></i></a> 
  <a href="#" class="twitter">Twitter<i class="fab fa-twitter-square"></i></a> 
  <a href="#" class="youtube">Youtube<i class="fab fa-youtube-square"></i></a> 
  <a href="#" class="insagram">Instagram<i class="fab fa-instagram-square"></i></a> 
  <a href="#" class="telegram">Telegram<i class="fab fa-telegram"></i></a>
</div>
	</body>