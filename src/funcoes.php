<?php
function video ($sala, $pagina){
    include("conexao.php");

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
        if($row['sala']!=$sala){	
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
    <?php 

    };
    };
    return($numPaginas);
}