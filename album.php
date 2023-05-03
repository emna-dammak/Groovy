<?php 
//include("includes/header.php");
include_once("includes/config.php");
include_once("includes/autoload.php");

$artistRepo=new ArtistRepository();
$albumRepo=new AlbumRepository();

if(isset($_GET['id']))
{
    $albumId=$_GET['id'];
}
else
{
    header("Location:index.php");
}
$album=new Album($albumId);
$artist=$album->getArtist();

?>
<div class="entityInfo">
    <div class="leftSection">
        <img src='<?=$album->getArtworkPath()?>'>
    </div>
    <div class="rightSection">
        <h2><?=$album->getTitle()?></h2>
        <p>By <?=$artist->getName();?></p>
        <p><?=$album->getNumberOfSongs()?> songs </p>
    </div>

</div>
<div class="trackListContainer">
    <ul class="trackList">
        <?php
        $i=1;
        $songIdArray=$album->getSongIds();
        foreach($songIdArray as $songId)
            {
                $song=new Song($songId);
                $artistSong=$song->getArtist();
                echo "
                <li class='trackListRow'>
                    <div class='trackCount'>
                        <img class='play' src='assets/images/icons/play-white.png'>
                           <span class='trackNumber'>".$i."
                    </div>
                    <div class='trackInfo'>
                        <span class='trackName'>".$song->getTitle()."</span>
                        <span class='artistName'>".$song->getArtist()->getName()."</span>
                    </div>
                    <div class='trackOptions'>
                        <img class='optionsButton' src='assets/images/icons/more.png'
                    </div>
                    <div class='trackDuration'>
                        <span class='duration'>".$song->getDuration()."</span>
</div>
                  </li>";
                $i+=1;
            }
?>
    </ul>
</div>



<?php include("includes/footer.php");?>

