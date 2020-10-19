
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



// Start Animation
const tl = gsap.timeline({ defaults: { ease: "power1.out" } });

tl.fromTo(".navbar-brand", { opacity: 0 }, { opacity: 1, duration: 1 });
tl.fromTo(".navbar-nav", { opacity: 0 }, { opacity: 1, duration: 1 }, "-=0.5");
tl.fromTo("#banner", { opacity: 0 }, { opacity: 1, duration: 1 },"-=0.5");
tl.fromTo("#socials", { opacity: 0 }, { opacity: 1, duration: 1 },"-=0.5");





// End Animation