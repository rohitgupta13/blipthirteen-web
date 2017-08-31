<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>libGDX Tutorial - Managing different viewports</title>

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/heroic-features.css" rel="stylesheet">

  </head>

  
  <style>
	.code-block{margin:30px;}
  </style>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">blipthirteen.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">Home</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../games.php">Games</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../tutorials.php">Tutorials
                <span class="sr-only">(current)</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
			<div class="my-3 mx-5 text-left">
				<h3>Managing different viewports</h3>
				<p class="my-3">
					Android devices vary. A major headache when developing for Android arises when you have to develop a game for multiple screen sizes.
					Although every game needs to handle this differently the following will help you a lot when it comes to handling different screen sizes and 
					aspect ratios.
				
					In this example we are using two images. The background needs to stretch to fill the whole screen and the chracter should always maintain its 
					aspect ratio.
				</p>
				<div class="text-center my-4">
					<img src="../../images/viewports.gif" alt="Using two different viewports" class="img-fluid" style="max-width: 40%; max-height: auto;"/> 
				</div> 
				<p class="my-4">
					Let's start by creating the two viewports and two textures.
				</p>
				
				<div class="code-block">
				  <pre>
private FitViewport fitViewport;
private StretchViewport stretchViewport;
private Texture image;
private Texture background;
				  </pre>
				</div>

				<p class="my-4">
					Initialize.
				</p>
				
				<div class="code-block">
				  <pre>
public void show() {
	image = new Texture("tut/robot.png");
	background = new Texture("tut/stretch.png");
	fitViewport = new FitViewport(1080,1920);
	stretchViewport = new StretchViewport(1080,1920);
}	
				  </pre>
				</div>
				
				<p class="my-4">
					Now, inside render, we will change the projection matrix and apply the stretchViewport and draw the background.  
					<br>
					<code>batch.setProjectionMatrix(stretchViewport.getCamera().combined);</code>
					<br>
					<code>stretchViewport.apply(true);</code>
				</p>
				
				<p class="my-4">
					For drawing the sprite we will just switch to fitViewport. 
					<br>
					<code>batch.setProjectionMatrix(fitViewport.getCamera().combined);</code>
					<br>
					<code>fitViewport.apply(true);</code>
				</p>
				
				

				<div class="code-block">
				  <pre>
public void render(float delta) {
        Gdx.gl.glClearColor(1,0,0,1);
        Gdx.gl.glClear(GL20.GL_COLOR_BUFFER_BIT);

        batch.setProjectionMatrix(stretchViewport.getCamera().combined);
        stretchViewport.apply(true);
        batch.begin();
        batch.draw(background,0,0,1080,1920);
        batch.end();

        batch.setProjectionMatrix(fitViewport.getCamera().combined);
        fitViewport.apply(true);
        batch.begin();
        batch.draw(image, 540 - image.getWidth()/2, 960 - image.getHeight()/2);
        batch.end();
}
				</pre>
			  </div>
			
				<p class="my-4">
					Also, do not forget to update the viewports inside resize()
				</p>
				
				<div class="code-block">
				  <pre>
public void resize(int width, int height) {
	fitViewport.update(width,height,true);
	stretchViewport.update(width,height,true);
}
				  </pre>
				</div>
			
			<p class="my-5">
				This is not the ultimate solution for handling multiple screen sizes but will help you a lot in a many cases. 
				This technique can be used to avoid those ugly black bars by using gradients that fade out of you the background that you are using in 
				fitViewport.
			</p>  
			</div>
	  </header>
	  <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="footer py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">blipthirteen.com</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
