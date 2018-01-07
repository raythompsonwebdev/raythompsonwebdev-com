

var c = document.querySelector('#svg-image-container');

var ctx = c.getContext("2d");

var image = new Image ();

image.onload = function(){

	console.log("loaded image");
	ctx.drawImage(image, 0, 0, c.width, c.height );
	var savedImage = c.toDataURL();
	window.open(savedImage);
}
				
image.src ="../images/home-page-image.png";