<html>
<head>
	<title>Groovy</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

	<div id="mainContainer">

		<div id="topContainer">

			<?php //include("includes/navBarContainer.php"); ?>

			<div id="mainViewContainer">

				<div id="mainContent">

<?php include("navBar.php");
include ("includes/config.php");
include_once("includes/autoload.php");

//$artistRepo=new ArtistRepository();
//$albumRepo=new AlbumRepository();

/*if(isset($_GET['id']))
{
    $albumId=$_GET['id'];
}
else
{
    header("Location:index.php");
}
$album=new Album($albumId);
$artist=$album->getArtist();*/

?>


	<style>
		.square {
            height: 80%;
            width: 70%;
            position: relative;
            top: -50px;
            right: -26%;
            border-radius: 20px;
            padding: 0%;
            display: flex;
            box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.3);

        }
        .col1 {
            background: #f7f7f7;
			flex-basis: 25%; 
			padding: 10px;
            border-radius: 15px 0 0 15px;  
        }

        .col2 {
			flex-basis: 75%; 
			padding: 10px;
            background: linear-gradient(173.82deg, #EAF1FF 0%, rgba(234, 241, 255, 0.37) 100%);
            overflow-y: auto;
        }

        .col2::-webkit-scrollbar {
            width: 0.8em;
            display:block;
        }

        .col2::-webkit-scrollbar-track {
        background-color: #F4F4F4;

        }

        .col2::-webkit-scrollbar-thumb {
            background-color: #E0E7F4;
            height:20%;
        }

        .col2 table {
            width: 85%;
            left:10%;
            top:10%;
            right:20px;
            position: relative;
            font-family: 'calibri light';     
        }

        .column1 {
            width: 20%;
            font-family: 'calibri light';
            font-size: 16px;
            font-weight: 600;
            line-height: 24px;
            letter-spacing: 0em;
            text-align: left;
            color: #7F7F7F;
        }

        .column2 {
            width: 60%;
            font-family: 'calibri light';
            font-size: 16px;
            font-weight: 600;
            line-height: 24px;
            letter-spacing: 0em;
            text-align: left;
            color: #7F7F7F;

        }

        .column3 {
            width: 20%;
            font-family: 'calibri light';
            font-size: 16px;
            font-weight: 600;
            line-height: 24px;
            letter-spacing: 0em;
            text-align: left;
            color: #7F7F7F;
        }

        .first2
        {
            width: 57.5%;
        }

        .first3
        {
            width: 22.5%;
        }
 

        .col2 .contenu {
            width: 86%;
            left:8%;
            top:15%;
            position: relative;
            font-family: 'calibri light';
            border-collapse: separate;
            border-spacing: 18px; 

        }
    
        .color{
            color: #505050;
        }

        .play-button {
            position: absolute;
            
            transform: translateY(-50%);
            display: none;
        }

        hr {
            border: none;
            border-top: 1px solid #000000;
            margin: 10px 0;
            position: relative;
            top: 45%;
            width: 97%;
        }

        .bottomSection {
            position: relative;
            display: flex;
            top: 42%;
        }

        .bottomSection p {
            flex-basis: 50%; 
			padding: 10px; 
            align-items: center;
            justify-content: center;
            text-align: center;
            font-family: 'calibri light';
            color: #262252;           
        }

        .bottomSection1 {
            position: relative;
            display: flex;
            top: 33%;
        }

        .bottomSection1 p {
            flex-basis: 50%; 
			padding: 10px;   
            align-items: center;
            justify-content: center;
            text-align: center; 
            font-family: 'calibri light';
            color: #262252;         
        }

        .contenu tr:hover
        {
            transform: scale(1.05);
            transition: transform 0.2s ease-in-out;  
        }

        .bold {
            font-family:'calibri';        
            font-weight: 700;
            line-height: 116.5139%;
        }



	</style>
	<div class="square">
         <div class="col1">
            <div class="leftSection">
                
                <img src='assets/images/profile-pics/theWeeknd.jpg' alt='Example image'>
                
            </div>
            <div class="rightSection">
                
                <h2>After Hours</h2>
                
                <h1>By </h1>
                <h0>The Weeknd</h0>

            </div>
            <hr>
            <div class="bottomSection">
                
                <p class="bottomLeft bold">9</p>
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
            <table class="contenu">
                <tr>
                    <td class="column1 color">1</td>
                    <td class="column2 color">Alone Again </td>
                    <td class="column3 color">5:00</td>
                </tr>
                <tr>
                    <td class="column1 color">2</td>
                    <td class="column2 color">Too Late </td>
                    <td class="column3 color">5:00</td>
                </tr>
                <tr>
                    <td class="column1 color">3</td>
                    <td class="column2 color">Hardest To Love </td>
                    <td class="column3 color">5:00</td>
                </tr>
                <tr>
                    <td class="column1 color">4</td>
                    <td class="column2 color">Scared To Live </td>
                    <td class="column3 color">5:00</td>
                </tr>
                <tr>
                    <td class="column1 color">5</td>
                    <td class="column2 color">Snowchild </td>
                    <td class="column3 color">5:00</td>
                </tr>
                <tr>
                    <td class="column1 color">6</td>
                    <td class="column2 color">Escape From LA </td>
                    <td class="column3 color">5:00</td>
                </tr>
                <tr>
                    <td class="column1 color">7</td>
                    <td class="column2 color">Heartless </td>
                    <td class="column3 color">5:00</td>
                </tr>
                <tr>
                    <td class="column1 color">8</td>
                    <td class="column2 color">Faith</td>
                    <td class="column3 color">5:00</td>
                </tr>
                <tr>
                    <td class="column1 color">9</td>
                    <td class="column2 color">Blinding Lights</td>
                    <td class="column3 color">5:00</td>
                </tr>
                <tr>
                    <td class="column1 color">7</td>
                    <td class="column2 color">Heartless </td>
                    <td class="column3 color">5:00</td>
                </tr>
                <tr>
                    <td class="column1 color">8</td>
                    <td class="column2 color">Faith</td>
                    <td class="column3 color">5:00</td>
                </tr>
                <tr>
                    <td class="column1 color">8</td>
                    <td class="column2 color">Faith</td>
                    <td class="column3 color">5:00</td>
                </tr>
                

            </table>


		</div>
    </div>


<!--
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

        -->

        </div>


</div>

</div>


</div>

</body>

</html>

