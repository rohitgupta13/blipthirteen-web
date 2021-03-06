<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>libGDX Tutorial - Managing preferences</title>

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
				<h3>Managing preferences</h3>
				<p class="my-3">
					Preferences can be used to store different values such as high scores, settings, player's name.
				</p>
				<p class="my-4">
					To create a preference object 
					<br>
					<code> prefs = Gdx.app.getPreferences(yourGameName);</code>
				</p>
				
				<p class="my-4">
					Now, when your game loads for the first time, you need to create a preference file. 
				</p>
				
				
				<div class="code-block">
				  <pre>
if(!prefs.contains("yourGameName")){
	prefs.putString("created","true");
	prefs.putBoolean("music",true);
	prefs.putBoolean("sound",true);
	prefs.flush();
}
				  </pre>
				</div>

				<p class="my-4">
					In the piece of code above, you are checking if a file with the name 'yourGameName' exists. If it does not, you create one and save the default settings.
					When the game runs the second time it won't create the file again since <code>prefs.contains("yourGameName") </code> will return true.
				
					It is advisable to use your package name instead of 'yourGameName', so it won't clash with any app.
					
					You can save your data as key-value pairs.
				</p>
				
				<div class="code-block">
				  <pre>
prefs.putInteger("highScore", highScore);
prefs.flush();
				  </pre>
				</div>
				
				<p class="my-1">
					<br>
					<code>prefs.flush()</code> -> writes your changes to the file.
				
					<br><br>
					The preferences file is located in the following directory.
				</p>
				
				
				<div class="code-block">
				  <pre>
Windows 	%UserProfile%/.prefs/My Preferences
Linux and OS X 	~/.prefs/My Preferences
				  </pre>
				</div>
				
				
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
