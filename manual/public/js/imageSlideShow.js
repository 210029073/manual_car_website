/**
 * The image slide show object is responsible for rendering an image slide show, such that when
 * the user changes the slides, it will result the image to change.
 *
 * @author Ibrahim Ahmad <210029073@aston.ac.uk>
 * */
imageSlideShow = function(firstImage, imageNameWithNoExtensions, imagePath, slideShowShifter, slideShow) {
    const imageFilePath = imagePath; //this will set the image file path
    var slideShowShift = slideShowShifter; //this is used to access the buttons will be removed in future release
    var slideShowContainer = slideShow; //slideshow container
    var data = firstImage;
    var splitData = imageNameWithNoExtensions;
    //images array
    /**
     * Representing different views of the car
     * no number = front
     *
     * Note: Each file with a number has the same file name as the one with no numbers
     * though it has a number just before the jpg file extension.
     *
     * 1 = rear
     * 2 = sides
     * 4 = interiors
     * */
    //sets the file extension for the image
    const imageFileExtension = ".jpg";
    var images = [data, splitData+"_1"+imageFileExtension, splitData+"_2"+imageFileExtension, splitData+"_3"+imageFileExtension];


    //sets the image file index for slideshows that have a previous and back button.
    var imageIndex = 0;

    /**
     * This will go to the next images in the slideshow and then wrap around to the
     * beginning of the slideshow once reaches n.
     *
     * Where n is the total number of images represented in a slideshow.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * */
    this.onNextImage = function() {
        if (imageIndex == images.length) {
            imageIndex = 0;
        } else {
            imageIndex++;
        }
        slideShowContainer.setAttribute('src', imageFilePath+"/"+images[imageIndex]);
    }

    /**
     * This will go to the previous images in the slideshow and then wrap around to the
     * end of the slideshow once reaches zero.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * */
    this.onPrevImage = function() {
        if (imageIndex == 0) {
            imageIndex = this.getImageLength();
        } else {
            imageIndex--;
        }
        slideShowContainer.setAttribute('src', imageFilePath+"/"+images[imageIndex]);
    }


    /**
     * This will retrieve the image via its index in order to change the image. This involves using a buttons
     * in order to change between images in the slideshow.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * */
    this.getImage = function(i) {
        slideShowContainer.setAttribute('src', imageFilePath+"/"+images[i]);
    }

    /**
     * This will therefore retrieve the total number of images for the slide show and return
     * the quantity of images.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * */
    this.getImageLength = function() {
        return images.length;
    }

    /**
     * This will therefore draw the slide show buttons on screen.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * */
    this.showSlideButtons = function() {
        for(i = 0; i < images.length; i++) {
            slideShowShift.innerHTML += '<div><button id="slide'+i+'" onClick="slideShow.getImage('+i+')">'+(i+1)+'</button></div>';
        }
    }
}
