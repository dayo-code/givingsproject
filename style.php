<style type="text/css">
body{
	background-color: white;
	font-family: 'Montserrat', 'Lato', sans-serif;
	font-size: 15px;
}

.all:hover{
	color: black;
}

.me-2{
	  border-bottom:1px solid grey;
	  border-top:none;
	  border-left: none;
	 border-right: none;
}

.zoom{
  transition: transform .2s;
  width: 18rem;
  height: 380px;
  margin: 0 auto;
}

.zoom:hover{
  transform: scale(1.2);
  background-image: url("images/slide1.jpg");
}

.top{
	background-color: #ededed;
}
.fri{
	display: inline-block;
}
.carousel{
	background-color: black;

}
.act{
	background-image: url("images/slide1.jpg");
	background-repeat:no-repeat;
	background-attachment:scroll;
	background-size:cover;
	width: 100%;
	height: 700px; 
}

.act2{
	background-image: url("images/pexels.jpg");
	background-repeat:no-repeat;
	background-attachment:scroll;
	background-size:cover;
	width: 100%;
	height: 700px; 
}

.act3{
	background-image: url("images/pexels-leticia.jpg");
	background-repeat:no-repeat;
	background-attachment:scroll;
	background-size:cover;
	width: 100%;
	height: 700px; 
}

.txt{
	padding: 150px;
  text-align: center;

}

.women{
	background-image: url(<?php echo $cat['cat_pic'];?>);	background-repeat:no-repeat;
	background-attachment:scroll;
	background-size:cover;
	width: 100%;
	height: 300px;
}

.we{

	height: 20px;
	width: 20px;
	border-radius: 50%;
	background-color: grey;
	display: inline-block;
}
.wer{
	color: grey;
	text-align: center;
	height: 25px;
	width: 24px;
	border:1px solid grey ;
	display: inline-block;
}
.checked{
	color: orange;
	cursor: pointer;
}

.mm{
	background-image:url("images/wheels.jpg");
	background-repeat:no-repeat;
	background-attachment:scroll;
	background-size:contain;
	width: 100%; 
	height: 300px
}

.modal-footer{
	background-color: rgba(0,0,0,0.5);
}

.bb{
	background-image:url("https://cdn.shopify.com/s/files/1/0026/2910/7764/files/26_1f4ba115-a4bb-4b9c-8755-e7855d528a7a_570x.progressive.png.jpg?v=1552393816");
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:cover;
	width: 100%; 
	height: 350px
}

</style>