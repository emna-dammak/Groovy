<html>
<head>
    <title>Welcome to Groovy!</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
 <div id="container">
    <div id="navBarContainer">

        <div class="titreNavBar">

            <div class="titre">
                <img class="logo" src="assets/icons/logo.png">
                <div class="roovy">ROOVY</div>
            </div>

        </div>


        <div class="contenuNavBar">

            <div class="groupMenu">


                <span class="grandText">Menu</span>


                <div class="menuTools">

                    <div class="browse">
                        <img src="assets/icons/browse.svg" alt="" class="icon">
                        <span class="text">Browse</span>
                    </div>

                    <div class="search">
                        <img src="assets/icons/search.svg" alt="" class="icon">
                        <span class="text">Search</span>
                    </div>

                    <div class="library">
                        <img src="assets/icons/library.svg" alt="" class="icon">
                        <span class="text">Library</span>
                    </div>

                </div>
            </div>


            <div class="groupPlaylist">

                <div class="playlist">
                    <span class="grandText">Playlist</span>
                </div>

                <div class="createYourPlaylist">
                    <span class="text">Create your playlist...</span>
                </div>

            </div>


            <div class="groupSettings">

                <div class="settings">
                    <span class="grandText">Settings</span>
                </div>

                <div class="settingsTools">

                    <div class="username">
                        <img src="assets/icons/username.svg" alt="" class="icon">
                        <div class="text">Username</div>
                    </div>

                    <div class="logout">
                        <img src="assets/icons/logout.svg" alt="" class="icon">
                        <div class="text">Logout</div>
                    </div>

                </div>

            </div>

        </div>
    </div>

     <div id="nowPlayingBarContainer">

         <div id="nowPlayingBar">
             <div id="nowPlayingLeft">
                 <div class="content">
					<span class="albumLink">
						<img src="https://upload.wikimedia.org/wikipedia/en/c/c1/The_Weeknd_-_After_Hours.png"  class="albumArtwork">
					</span>
                     <div class="trackInfo">
                         <span class="trackName">After Hours</span>
                         <span class="artistName">The Weekend</span>

                     </div>
                 </div>
             </div>
             <div id="nowPlayingCenter">
                 <div class="content playerControls">
                     <div class="buttons">
                         <button class="controlButton shuffle" title="Shuffle Button">
                             <img src="assets/icons/shuffle.svg" alt="Shuffle" >
                         </button>

                         <button class="controlButton previous" title="previous Button">
                             <img src="assets/icons/previous.svg" alt="previous" >
                         </button>

                         <button class="controlButton play" title="play Button">
                             <img src="assets/icons/play.svg" alt="play" >
                         </button>

                         <button class="controlButton pause" title="pause Button" style="display: none">
                             <img src="assets/icons/pause.svg" alt="pause" >
                         </button>

                         <button class="controlButton next" title="next Button">
                             <img src="assets/icons/next.svg" alt="next" >
                         </button>

                         <button class="controlButton repeat" title="repeat Button">
                             <img src="assets/icons/repeat.svg" alt="repeat" >
                         </button>

                     </div>

                     <div class="playbackBar">
                         <span class="progressTime current">0.00</span>
                         <div class="progressBar">
                             <div class="progressBarBg">
                                 <div class="progress"></div>
                             </div>
                         </div>
                         <span class="progressTime remaining">0.00</span>
                     </div>

                 </div>
             </div>
             <div id="nowPlayingRight">
                 <div class="volumeBar">
                     <button class="controlButton" title="volume button">
                         <img src="assets/icons/volume-low.svg" alt="volume">
                     </button>
                     <div class="progressBar">
                         <div class="progressBarBg">
                             <div class="progress"></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </div>

 <script src="navBar.js"></script>
</body>
</html>
