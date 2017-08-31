<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>libGDX Tutorial - Loading music and sfx</title>

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
				<h3>Loading music and sfx</h3>
				<p class="my-3">
					Loading audio is as easy as importing textures. The supported formats are mp3, ogg, and wav.
					Till now I haven't faced a problem with any of the formats.
				</p>
				<p class="my-4">
					The classes provided by libGDX are 
					<a href="https://libgdx.badlogicgames.com/nightlies/docs/api/com/badlogic/gdx/audio/Sound.html">Sound</a>
					and <a href="https://libgdx.badlogicgames.com/nightlies/docs/api/com/badlogic/gdx/audio/Music.html">Music</a>.
				</p>
				
				<div class="code-block">
				  <pre>
private Sound sfx;
private Music bgm;
				  </pre>
				</div>

				<p class="my-2">
					Initialize.
				</p>
				
				<div class="code-block">
				  <pre>
public void show() {
	bgm = Gdx.audio.newMusic(Gdx.files.internal("data/music.ogg"));
	sfx = Gdx.audio.newSound(Gdx.files.internal("data/sound.ogg"));
}	
				  </pre>
				</div>
				
				<p class="my-4">
					Once loaded the sounds can be played using the play(float f) fuction. You can pass a value between 0 and 1
					as the volume.
					
					Another useful function for playing background music is setLooping(boolean b);
					<br>
					<code>bgm.setLooping(true);</code>
					<br>
					<code>bgm.play();</code>
				</p>
				
				<p class="my-4">
					Do not forget to dispose() the objects.
				</p>
				<div class="code-block">
				  <pre>
public void dispose() {
	bgm.dispose();
	sfx.dispose();
}
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
