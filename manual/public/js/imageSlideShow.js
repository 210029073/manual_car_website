/**
 * The image slide show object is responsible for rendering an image slide show, such that when
 * the user changes the slides, it will result the image to change.
 *
 * It allows the user to be able to visit the previous image and next image from the slideshow
 * via the previous and next button.
 *
 * @author Ibrahim Ahmad <210029073@aston.ac.uk>
*  @version 1.0.1
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
     * @version 1.1
     * */
    this.onNextImage = function() {
        if (imageIndex < images.length - 1) {
            imageIndex++;
        } else {
            imageIndex = 0;
        }
        slideShowContainer.setAttribute('src', imageFilePath+"/"+images[imageIndex]);
    }

    /**
     * This will go to the previous images in the slideshow and then wrap around to the
     * end of the slideshow once reaches zero.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @version 1.1
     * */
    this.onPrevImage = function() {
        if (imageIndex > 0) {
            imageIndex--;
        } else {
            imageIndex = this.getImageLength() - 1;
        }
        slideShowContainer.setAttribute('src', imageFilePath+"/"+images[imageIndex]);
    }


    /**
     * This will retrieve the image via its index in order to change the image. This involves using a buttons
     * in order to change between images in the slideshow.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @version 1.0
     * */
    this.getImage = function(i) {
        slideShowContainer.setAttribute('src', imageFilePath+"/"+images[i]);
    }

    /**
     * This will therefore retrieve the total number of images for the slide show and return
     * the quantity of images.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @version 1.0
     * */
    this.getImageLength = function() {
        return images.length;
    }

    /**
     * This will therefore draw the slide show buttons on screen.
     *
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @version 1.0
     * */
    this.showSlideButtons = function() {
        slideShowShift.innerHTML += '<div><button id="slide'+5+'" onClick="slideShow.onPrevImage()">Previous</button></div>';
        for(i = 0; i < images.length; i++) {
            slideShowShift.innerHTML += '<div><button id="slide'+i+'" onClick="slideShow.getImage('+i+')">'+(i+1)+'</button></div>';
        }
        slideShowShift.innerHTML += '<div><button id="slide'+4+'" onClick="slideShow.onNextImage()">Next</button></div>';
    }
}
