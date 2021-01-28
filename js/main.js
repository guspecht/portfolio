
// Start Preload Imagens .gif

window.addEventListener("load", ()=>{
    // If is not mobile load the .gif before
    // To save data from mobile users.
    if (window.innerWidth > 760) {                
        var images = new Array()
        function preload() {
            for (i = 0; i < preload.arguments.length; i++) {
                images[i] = new Image()
                images[i].src = preload.arguments[i]
            }
        }
        preload(                    
            "./img/legendz.gif",
            "./img/gustavoSpechtYoutube.gif",
            "./img/portfolio.gif"
        )
    }
});

// End Preload Imagens .gif
