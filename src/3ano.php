<?php
session_start();
include("conexao.php");
if(!empty($_SESSION['id'])){
	echo $_SESSION['acesso'].' '.$_SESSION['nome']."<br>";
	echo "<a href='sair.php'>Sair</a></br>";
}else{
	$_SESSION['msg'] = "Login expirou!";
	header("Location: ../index.php");
};
if($_SESSION['acesso'] == 'Admin'){
}elseif($matricula[0]!=0 || $matricula[1]!=1){
    $_SESSION['msg']='Você não pertence a esta série!</br>';
    header("Location: painel.php");
};
echo'<p>Você está na pagina do terceiro ano</p>';
echo '<a href="painel.php">voltar</a></br>';


$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
$cmd = "SELECT * FROM videos"; 
$result = mysqli_query($conn, $cmd);
$total = mysqli_num_rows($result);
$registros = 1;
$numPaginas = ceil($total/$registros); 
$inicio = ($registros*$pagina)-$registros; 
$cmd = "SELECT * FROM posts LIMIT $inicio,$registros"; 
$cmd = "SELECT * FROM videos WHERE numero=$pagina LIMIT 1";
$produto = mysqli_query($conn, $cmd);
while ($row = mysqli_fetch_array($produto)){
	if($row['sala']!='3ano'){	
	}else{?><div id="ytplayer">
		<script>
		  // Load the IFrame Player API code asynchronously.
		  var tag = document.createElement('script');
		  tag.src = "https://www.youtube.com/player_api";
		  var firstScriptTag = document.getElementsByTagName('script')[0];
		  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
		
		  // Replace the 'ytplayer' element with an <iframe> and
		  // YouTube player after the API code downloads.
		  var player;
		  function onYouTubePlayerAPIReady() {
			player = new YT.Player('ytplayer', {
			  height: '360',
			  width: '640',
			  videoId: '<?php echo$row['link'];?>'
			});
		  }
		</script>
		</div>
<?php };
};
for($i = 1; $i < $numPaginas + 1; $i++) { 
    echo "<a href='3ano.php?pagina=$i'>".$i."</a> "; 
}     


