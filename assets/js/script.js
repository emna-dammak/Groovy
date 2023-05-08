var userLoggedIn;
var timer;

function createPlaylist() {
    console.log(userLoggedIn);
    var popup = prompt("Please enter the name of your playlist");

    if(popup != null) {

        $.post("includes/handlers/ajax/createPlaylist.php", { name: popup, username: userLoggedIn })
            .done(function(error) {

                if(error != "") {
                    alert(error);
                    return;
                }

                //do something when ajax returns
                openPage("yourMusic.php");
            });

    }

}


function deletePlaylist(playlistId) {
    var prompt = confirm("Are you sure you want to delte this playlist?");

    if(prompt == true) {

        $.post("includes/handlers/ajax/deletePlaylist.php", { playlistId: playlistId })
            .done(function(error) {

                if(error != "") {
                    alert(error);
                    return;
                }

                //do something when ajax returns
                openPage("yourMusic.php");
            });


    }
}

function openPage(url) {

    if(timer != null) {
        clearTimeout(timer);
    }

    if(url.indexOf("?") === -1) {
        url = url + "?";
    }

    var encodedUrl = encodeURI(url + "&userLoggedIn=" + userLoggedIn);
    console.log(encodedUrl);
    $("#mainContent").load(encodedUrl);
    $("body").scrollTop(0);
    history.pushState(null, null, url);
}