(function(){
    let imgLen = document.getElementById('imgGallary');
    let images = imgLen.getElementsByTagName('img');
    let counter = 1;

    if(counter <= images.length){
        setInterval(function(){
            images[0].src = images[counter].src;
            console.log(images[counter].src);
            counter++;

            if(counter === images.length){
                counter = 1;
            }
        },4000);
    }
})();