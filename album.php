
<?php
$name='album';
include("includes/header.php");
include("includes/config.php");
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
<div class="square">
         <div class="col1">
            <div class="leftSection">

                <img src='<?=$album->getArtworkPath()?>' alt='Example image'>

            </div>
            <div class="rightSection">

                <h2><?=$album->getTitle()?></h2>

                <h1>By </h1>
                <h0><?=$artist->getName();?></h0>

            </div>
            <hr>
            <div class="bottomSection">

                <p class="bottomLeft bold"><?=$album->getNumberOfSongs()?></p>
                <p class="bottomRight"><span class="bold">45</span><span>min</span></p>
            </div>
            <div class="bottomSection1">

                <p class="bottomLeft">Songs</p>
                <p class="bottomRight">Playtime</p>
            </div>
		</div>
		<div class="col2">
            <table>

                <tr>
                    <td class="column1">#</td>
                    <td class="column2 first2">Title</td>
                    <td class="column3 first3">Duration</td>
                </tr>
            </table>
            <table class='contenu'>
                <?php
                $i=1;
                $songIdArray=$album->getSongIds();
                foreach($songIdArray as $songId)
                {
                    $song=new Song($songId);
                    $artistSong=$song->getArtist();
                echo "
                <tr>
                    <td class='column1 color'>".$i."</td>
                    <td class='column2 color'>".$song->getTitle()."</td>
                    <td class='column3 color'>".$song->getDuration()."</td> 
                </tr>
                
                 ";
                $i+=1;} ?>
                 </table>

		</div>
    </div>







<?php include("includes/footer.php");?>

