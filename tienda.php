<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script rel="stylesheet" href="flowtype.js"></script>
		<script type="text/javascript" src="demo.js"></script>
		<link
			href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" type="text/css" href="tienda.css" />
		<link rel="stylesheet" type="text/css" href="tienda.css" media="print" />
<link re="stylesheet" type="text/css" href="login.css"/>
		<title>Display Date and Time in Javascript</title>
		<script type="text/javascript" src="date_time.js"></script>
	</head>
	<style>
        body{
            max-width: 1000px;
            padding:0 auto;
            margin: 0 auto;
            background-color: rgb(250, 250, 250);
            
        }
        img{
            width:100%;
            height:100%;
        }
.header{
    
    background-color:thistle;
   
    
}
.header ul{
    display: flex;
    text-align: center;
    padding:20px;
    list-style: none;
}
h4{
    color: #666;
}
p{
    color:rgb(3, 3, 3);
}
li{
    text-align: center;
    padding:10px;
}
.header a{
    text-decoration: none;
}
main{
    position: relative;
    width:100%;
}
.sidebar{
    position: relative;
}
.content{
    display:flex;
    flex-wrap: wrap;
    justify-content: space-between;
    
   
    text-align: justify;
}
.bar1{
   justify-self: start;
}
.main-container{
    display:flex;
    width:500px;
    height:200px;
}
.container1{
    display: flex;
    width:450px;
    height:150px;
}
.box1{
    width:100px;
    height:100px;
}

.mySlides{
    width:400px;
    height:450px;
}


.box2{
    width:350px;
text-align: left;


    border:solid black 1px;
  
}
/*card*/
.card {
    text-align: left;
    display:flex;
 
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 6px;
}
section{
    text-align: justify;
}
.row {
    border:inset 1px #123;
    padding:5px;

    margin:5px;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

.column {
  flex-basis: 100%;
  padding:20px;
  margin:5px;
  border:1px solid black;
}
footer{
    background-color:thistle;
}
@media screen and (min-width: 800px) {
  .column {
    flex: 1;
  }
}
@media screen and (min-width: 800px) {
  ._25 {
    flex: 2.5;
  }
  ._55 {
    flex: 5.5;
  }
  ._20 {
    flex: 2;
  }
}

    </style>
	<body>
       
<!--JS TIME AND DATE-->
		<header>
			<div class="container">
				<ul>
			<li><div span id="date_time"></span>
			<script type="text/javascript">
				window.onload = date_time("date_time");
			</script></li>
			</ul>
		</div>	
	</header>
<!--JS TIME AND DATE ends-->
<!--BOOTSTRAP NAVBAR-->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
			  <div class="navbar-header">
				<a class="navbar-brand" href="#">WebSiteName</a>
			  </div>
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li class="active"><a href="store.html">Store</a></li>
				
				<li class="active"><a href="#">Product Review</a></li>
				<li class="active"><a href="#">How Tos</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Shop <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="#">New Arrievals</a></li>
					<li><a href="#">Sale</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Hyegene</a></li>
					<li><a href="#">Hair-Care</a></li>
					<li><a href="#">Accessories</a></li>
				  </ul>
				</li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="form.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="login.html"><button
					onclick="document.getElementById('id01').style.display='block'"
					style="width:auto;"
				>
					Login
				</button>
				<div id="id01" class="modal">
					<form
						class="modal-content animate"
						action="/action_page.php"
						method="post"
					>
						<div class="imgcontainer">
							<span
								onclick="document.getElementById('id01').style.display='none'"
								class="close"
								title="Close Modal"
								>&times;</span
							>
							<img src="img_avatar2.png" alt="Avatar" class="avatar" />
						</div>
						<div class="container">
							<label for="uname"><b>Username</b></label>
							<input
								type="text"
								placeholder="Enter Username"
								name="uname"
								required
							/>
							<label for="psw"><b>Password</b></label>
							<input
								type="password"
								placeholder="Enter Password"
								name="psw"
								required
							/>
							<button type="submit">Login</button>
							<label>
								<input type="checkbox" checked="checked" name="remember" /> Remember
								me
							</label>
						</div>
						<div class="container" style="background-color:#f1f1f1">
							<button
								type="button"
								onclick="document.getElementById('id01').style.display='none'"
								class="cancelbtn"
							>
								Cancel
							</button>
							<span class="psw">Forgot <a href="#">password?</a></span>
						</div>
					</form>
				</div>
				<script>
					// Get the modal
					var modal = document.getElementById("id01");
					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
						if (event.target == modal) {
							modal.style.display = "none";
						}
					};
				</script>
					<div id="id01" class="modal">
					  <form class="modal-content animate" action="/action_page.php" method="post">
						<div class="imgcontainer">
						  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
						  <img src="img_avatar2.png" alt="Avatar" class="avatar">
						</div>
					
						<div class="container">
						  <label for="uname"><b>Username</b></label>
						  <input type="text" placeholder="Enter Username" name="uname" required>
					
						  <label for="psw"><b>Password</b></label>
						  <input type="password" placeholder="Enter Password" name="psw" required>
							
						  <button type="submit">Login</button>
						  <label>
							<input type="checkbox" checked="checked" name="remember"> Remember me
						  </label>
						</div>
						<div class="container" style="background-color:#f1f1f1">
						  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
						  <span class="psw">Forgot <a href="#">password?</a></span>
						</div>
					  </form>
					</div>
			  </ul>
			</div>
		</nav>
<!--BOOTSTRAP NAVBAR ENDS-->
<!--SALE COUNTDOWN -->

<!--SALE COUNTDOWN ENDS -->	

<!--PRDUCT SLIDER-->		
<main>


<!--PRDUCT SLIDER END-->
<!--sticky header-->


	
  
 
  <div class="header" id="myHeader"><ul>

   <li> <a href="endostore.html"><p>News Letter
    </p></a></li>
    <li><a href="google.html"><p>search</p></a></li>
  </ul>
	
  </div>
<div class="sidebar">
  <div class="content">
      <div class="bar1">

        
    
      <h6>Lorem ipsum dolor sit amet consectetur.</h6>
    <h3>Lorem ipsum dolor sit amet.</h3> 
    <h3>-Lorem ipsum dolor, sit amet consectetur</h3>

    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus minima at ratione rem!</h6>
    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi recusandae dolores enim.</h6>
    <h6>Lorem ipsum dolor sit.</h6></div>
    <div class="box2">
        <form action="/action_page.php" method="get" id="nameform">
          <label for="fname">First name:</label>
          <input type="text" id="fname" name="fname"><br><br>
          <label for="lname">Last name:</label>
          <input type="text" id="lname" name="lname">
        </form>
        
        <p>The button below is outside the form element, but still part of the form.</p>
        
        <button type="submit" form="nameform" value="Submit">Submit</button>
       </div>

</div>

      <!--Id-->

      <div id="main-container">
        <div class="container1">
          <div class="box1"><img src="me.jpg">
          </div>
          <div class="content1">
            <p class="title1">Fernando Vergara<a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a></p>
            <h5 class="sub-title">Web Dev/Hire Me</h5>
          
          </div>
        </div>
    

   

<!--end of id-->
<!--form-->

   

 


</div>



<!--slider-->
<div class="navbar">
<h2 class="w3-center">Manual Slideshow</h2>
<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
<div class="w3-content w3-display-container">
  <img class="mySlides" src="https://media.istockphoto.com/photos/bearded-stylish-man-posing-outdoors-picture-id642272652?s=2048x2048" class="responsable">
  <img class="mySlides" src="https://media.istockphoto.com/photos/handsome-man-profile-picture-id831066704?s=2048x2048" class="responsable">
  <img class="mySlides" src="https://media.istockphoto.com/photos/beard-and-tatoos-picture-id476982132?s=2048x2048" class="responsable">
  <img class="mySlides" src="https://media.istockphoto.com/photos/young-handsome-man-over-isolated-background-smiling-looking-to-the-picture-id1124224575?s=2048x2048"class="responsable">

</div>



</div>

    </main>
    <section>
	<h3>On Scroll Sticky Header</h3>
<h3 >Lorem ipsum dolor sit amet.</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure consequuntur molestiae, laborum repellendus corporis deserunt necessitatibus nostrum reprehenderit nulla veniam, inventore omnis officia nihil eum accusamus quas neque sed praesentium sapiente ea nam quo et voluptates at! Quia, in exercitationem?</p>
<h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam aspernatur laboriosam tempora recusandae? Esse, et aliquid.</h4>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia enim numquam quisquam repellat sunt nemo tempore labore veniam autem harum incidunt, suscipit facere? Voluptatem, est voluptatum.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, odio! Nulla, ipsam?</p>
</p>
<h4>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat eaque adipisci at! Quasi quam suscipit fugiat nam maxime debitis neque autem quae. Explicabo, optio incidunt? Quasi quod praesentium, nostrum iusto quam cum maiores.
</h4>
<p>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fuga doloremque vitae sint provident aliquid optio! Illum sed vel accusantium consequatur expedita fugit suscipit impedit obcaecati perferendis ut, odit alias eaque!
</p>
  </div>
  </section>
<!--sticky header ENDS-->
<!--main grid -->
<div class="row">
    <div class="column">

        <div class="row">
            <div class="column">
              <!-- 50% width -->
              <a href=""><H3><img src="https://media.istockphoto.com/photos/modern-empty-barbershop-interior-with-chairs-mirrors-and-lamps-picture-id1007175486?s=2048x2048" class="responsive">TRENDING THIS SPRING</H3><P>The mullet is back and i dont hate it</P></a>
            </div>
            <div class="column">
              <!-- 50% width -->
              <a href=""><h3><img src="https://media.istockphoto.com/photos/interior-view-of-luxury-beauty-and-barbershop-salon-picture-id891953302?s=2048x2048" class="responsive">TRENDING THIS SPRING</h3><P>Lorem ipsum dolor sit amet consectetur.</P></a>

            </div>
          </div>
          <div class="row">
            <div class="column">
              <!-- 33.33% width -->
              <a href=""><h3><img src="https://media.istockphoto.com/photos/old-straight-razor-with-brush-strop-and-shaving-soap-picture-id503860550?s=2048x2048" class="responsive">Sponsors</h3><P>Check out</P></a>

            </div>
            <div class="column">
              <!-- 33.33% width -->
              <a href=""><h3><img src="https://media.istockphoto.com/photos/vintage-wet-shaving-tools-on-a-wooden-table-picture-id483333652?s=2048x2048" class="responsive">Sponsors</h3><P>Go visit</P></a>

            </div>

            </div>
           
            
            </div>
          </div>


      <!-- 100% width -->
      <div class="row">
        <div class="column">
    
            <div class="row">
                <div class="column">
                  <!-- 50% width -->
                  <a href=""><H3><img src="https://media.istockphoto.com/photos/modern-empty-barbershop-interior-with-chairs-mirrors-and-lamps-picture-id1007175486?s=2048x2048" class="responsive">TRENDING THIS SPRING</H3><P>The mullet is back and i dont hate it</P></a>
                </div>
                <div class="column">
                  <!-- 50% width -->
                  <a href=""><h3><img src="https://media.istockphoto.com/photos/interior-view-of-luxury-beauty-and-barbershop-salon-picture-id891953302?s=2048x2048" class="responsive">TRENDING THIS SPRING</h3><P>Lorem ipsum dolor sit amet consectetur.</P></a>
    
                </div>
              </div>
              <div class="row">
                <div class="column">
                  <!-- 33.33% width -->
                  <a href=""><h3><img src="https://media.istockphoto.com/photos/old-straight-razor-with-brush-strop-and-shaving-soap-picture-id503860550?s=2048x2048" class="responsive">Sponsors</h3><P>Check out</P></a>
    
                </div>
                <div class="column">
                  <!-- 33.33% width -->
                  <a href=""><h3><img src="https://media.istockphoto.com/photos/vintage-wet-shaving-tools-on-a-wooden-table-picture-id483333652?s=2048x2048" class="responsive">Sponsors</h3><P>Go visit</P></a>
    
                </div>
    
                </div>
               
                
                </div>
              </div>

              <h1>The footer element</h1>

              <footer>
                <p>Posted by: Hege Refsnes</p>
                <p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
              </footer>

      <!--main grid ends-->


      

<!--BANNER AD-->

       
<!--BANNER AD ENDS-->


<!--slider script-->
<script>
    var slideIndex = 1;
    showDivs(slideIndex);
    
    function plusDivs(n) {
      showDivs(slideIndex += n);
    }
    
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      x[slideIndex-1].style.display = "block";  
    }
    </script>
    




<!--sticky header script-->

<!--carousel script-->

	

		  
			 
			</div>
	</body>
</html>
