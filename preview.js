function previewFile()
{
	var preview = document.querySelector('img');
	var file    = document.querySelector('input[type=file]').files[0];
	var reader  = new FileReader();

	reader.addEventListener("load", function ()
	{
		preview.src = reader.result;
		preview.border = "1";
	}, false);

	if (file)
	{
		reader.readAsDataURL(file);
	}
}

function mousePosition()
{
	var posX = event.offsetX?(event.offsetX):event.pageX-img.offsetLeft;
	var posY = event.offsetY?(event.offsetY):event.pageY-img.offsetTop;

	originX.value=posX;
	originY.value=posY;
}