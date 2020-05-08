<?php
session_start();
if(!empty($_SESSION['id'])){
	echo $_SESSION['acesso'].' '.$_SESSION['nome']."<br>";
	echo "<a href='sair.php'>Sair</a></br>";
}else{
	$_SESSION['msg'] = "Login expirou!";
	header("Location: ../index.php");
};
if($_SESSION['acesso'] == 'admin'){
}elseif($matricula[0]!=0 || $matricula[1]!=1){
    $_SESSION['msg']='Você não pertence a esta série!</br>';
    header("Location: painel.php");
};
echo'<p>Você está na pagina do quarto ano</p>';
echo '<a href="painel.php">voltar</a></br>';

?>
<div id="ytplayer">
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
      videoId: 'eNMadAeyGSo'
    });
  }
</script>
</div>