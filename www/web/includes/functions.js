// JavaScript Document

function mausrein(name,bild)
{
	if(!bild)
	{
	var vorher = document.images[name].src ;
	var beschnitten = vorher.substring(0, vorher.length - 4);
	document.images[name].src = beschnitten + 'b.gif' ;
	}
	else{document.images[name].src = bild ;}
}
function mausraus(name,bild)
{
	if(!bild)
	{
	var vorher = document.images[name].src ;
	var beschnitten = vorher.substring(0, vorher.length - 5);
	document.images[name].src = beschnitten + '.gif' ;
	}
	else{document.images[name].src = bild ;}
}

var myimages=new Array();
function preloadimages()
{
for (i=0;i<preloadimages.arguments.length;i++)
{
myimages[i]=new Image()
myimages[i].src=preloadimages.arguments[i]
}
}
preloadimages("img/main.jpg","img/logoRightOver.gif","img/navHomeOver.gif","img/navProductOver.gif","img/navContactOver.gif","img/navFairOver.gif","img/navLinksOver.gif");


