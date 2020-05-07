<?php
session_start();
$matricula[] = str_split($_SESSION['matricula']);
if($_SESSION['matricula'] == 0000){
}
elseif($matricula[0]!=0 || $matricula[1]!=5){
    $_SESSION['msg']='Você não pertence a esta série!</br>';
    header("Location: painel.php");
};
echo'<p>Você está na pagina do quinto ano</p>';
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
      videoId: '-JIUE2UuBUQ'
    });
  }
</script>
</div>