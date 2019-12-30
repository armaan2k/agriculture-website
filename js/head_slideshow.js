$(document).ready(function() {
    // Create the classes to change the images in the header
    let imageClassArray = new Array("bee", "tractor", "meadow");
    let imageClassIndex = 1;

    // get the header container
    let headerContainer = $("#header_container");
    let headerOverlay = $("#header_container .coat");

    if ((headerContainer !== null) && (headerOverlay !== null)) {
        // make the animation go off every 10 seconds
        setInterval(function() {
            // a fade overlay for 2000 ms
            headerOverlay.fadeIn(2000, 'swing', function() {
                // change class for next imgage
                headerContainer.removeClass();
                headerContainer.addClass(imageClassArray[imageClassIndex]);
                imageClassIndex = (imageClassIndex + 1) % imageClassArray.length;

                // 100 ms delay before fading out
                headerOverlay.delay(100).fadeOut(2000);
            });
        },
        10000);
    }
});
