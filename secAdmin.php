<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>
	<style type="text/css">
		*{
			margin: 0;
		    padding: 0;
		    box-sizing: border-box;
		    font-family: 'Poppins', sans-serif;
		}

		body {
			min-height: 100vh;
		}

		a {
			text-decoration: none;
		}

		li {
			list-style: none;
		}

		h1, h2 {
			color: #444;
		}
		h3{
			color:#999 ;
		}

		.btn {
			background: #f05462;
			color: white;
			padding: 5px 10px;
			text-align: center;
		}

		.btn:hover {
			color: #f05462;
			background: white;
			padding: 3px 8px;
			border: 2px solid #f05462;
		}
		.title{
			display: flex;
			align-items: center;
			justify-content: space-around;
			padding: 15px 10px ;
			border-bottom: 2px solid #999;
		}
		.table{
			padding: 10px;

		}
		th,td{
			text-align: text;
			padding: 8px;

		}

		.side-menu {
			position: fixed;
			background: #f05462;
			width: 20vw;
			min-height: 100vh;
			display: flex;
			flex-direction: column;
		}

		.side-menu .brand-name {
			height: 10vh;
			display: flex;
			align-items: center;
			justify-content: center;
			color: black;
		}

		.side-menu li {
			font-size: 24px;
			padding: 20px 40px;
			color: white;
			display: flex;
			align-items: center;
		}

		.side-menu li:hover {
			background: white;
			color: #f05462;
		}
		.container{
			position: absolute;
			right:0;
			width: 80vw;
			height: 100vh;
			background:#f1f1f1 ;

		}
		.container .header
		{
			position: fixed;
			top: 0;
			right: 0;
			width: 80vw;
			height: 10vh ;
			background: white;
			display: flex;
			align-items: center;
			justify-content: center;
			box-shadow: 0 4px 8px 0 rgba(0 0 0 0.2);
		}
		.container .header .nav
		{
			width: 90%;
			display: flex;
			align-items: center;
		}
		.container .header .nav .search{
			flex: 3;
			display: flex;
			justify-content: center;
			
		}
		.container .header .nav .search input[type=text]{
			border: none;
			background: #f1f1f1;
			padding: 10px;
			width: 50%;
		}
		.container .header .nav .search button
		{
			width: 40px;
			height: 40px;
			border: none;
			display: flex;
			align-items: center;
			justify-content: center;


		}
		.container .header .nav .search button img{
			width: 30px;
			height: 30px;
		}
		.container .header .nav .user{
			flex: 1;
			display: flex;
			justify-content: space-between;
			align-items: center;
		

		}
		.container .header .nav .user img
		{
			width: 40px;
			height: 40px ;
		}
		.container .header .nav .user.img-case
		{
			position: relative;
			width: 50px;
			height: 50px;
		}
		.container .header .nav .user.img-case img{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;

		}
		.container.content{
			position: relative;
			margin-top: 10vh;
			min-height: 90vh;
			background: #f1f1f1;
		}
		.container.content.cards
		{
			padding: 20px 15px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			flex-wrap: wrap;

		}
		.container.content.cards.card{
			width: 250px;
			height: 150px;
			background: white;
			margin: 20px 10px;
			display: flex;
			align-items: center;
			justify-content: space-around;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		.container.content.content-2{
			min-height: 60vh;
			display: flex;
			justify-content: space-around;
			align-items: flex-start ;
			flex-wrap: wrap;
		}
		.container.content.content-2.orders{
			min-height: 50vh;
			flex: 5;
			background: white;
			margin: 0 40px 40px 40px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			display: flex;
			flex-direction: column;
		}
		
		
		@media screen and (max-width: 1050px){
	.side-menu li{
		font-size: 18px;

	}
}
@media screen and (max-width: 940px){
	.side-menu li span{
		display: none;
	}
	.side-menu
	{
		align-items:center
	}
	.side-menu li img{
		width:40px;
		height:40px;
	}
	.side-menu li:hover
	{
		background: #f05462;
		padding:8px 38px ;
		border:2px solid white ;
	}

}
@media screen and (max-width: 536px){
	.brand-name h1{
		font-size: 16px;
	}
	.container .content.cards{
		justify-content: center;
	}
	.side-menu li img{
		width: 30px;
		height: 30px;
	}
	.container .content.content-2.recent-payments table th:nth-child(2),.container .content.content-2.recent-payments table th:nth-child(2)
	{
		display: none;

	}
}
		
	</style>
</head>
<body>
	<div class="side-menu">
		<div class="brand-name">
			<h1>Glamors</h1>
		</div>
		<ul>
			<li><img src="images/dashboard.png">&nbsp;<span> Dashboard</span></li>
			<li><img src="images/photographer.png">&nbsp; <span>Photographers</span></li>
			<li><img src="images/conversation.png">&nbsp;<span>Messages</span> </li>
			<li><img src="images/reviews.png">&nbsp;<span>Reviews</span> </li>
			<li><img src="images/wages.png">&nbsp; <span>Payments</span></li>
		</ul>

	</div>
	<div class="container">
		<div class="header">
			<div class="nav">
				<div class="search">
					<input type="text" placeholder="Search..">
					<button type="submit"><img src="images/search.png" </button>
				</div>
				<div class="user">
					<a href="" class="btn">Add New</a>
					<img src="images/notifications.png">
					<div class="img-case">
						 <img src="images/admin.png">
				    </div>
			    </div>
		</div>
	</div>
	    
	    
	    	<div class="content-2">
	    		<div class="orders">
	    			<div class="title">
	    				<h2>Orders</h2>
	    				<a href="#" class="btn">View All</a>
	    			</div>
	    			<table>
	    				<tr>
	    					<th>ID</th>
	    					<th>Talent</th>
	    					<th>Place</th>
	    					<th>E-Mail</th>
	    					<th>Dates</th>
	    					<th>Res-Person</th>
	    					<th>Tel</th>
	    					<th>Description</th>
	    				</tr>
	    				<tr>
	    					<td>John</td>
	    					<td>John</td>
	    					<td>John</td>
	    					<td>abs </td>
	    					<td>
	    						<a href="#" class="btn"></a>
	    					</td>
	    				</tr>
	    			</table>
	    		</div>
	    		
	    	</div>
	    	
	    
	
    
</body>
</html>
