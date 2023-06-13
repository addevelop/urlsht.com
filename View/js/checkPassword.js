function checkPassword(imgsrc)
{
    const img = imgsrc.attr("src");
    const list = img.split("/");
    const src = list[list.length-1];
    const file = src == "voir.png"?"fermer.png":"voir.png";
    list.splice(-1, 1);
    var newsrc = "";
    for(var y = 0; y < list.length; y++)
    {
        newsrc += list[y] + "/";
    }
    newsrc += file;
    imgsrc.attr("src", newsrc);
    const newtype = src == "voir.png"?"password":"text";
    imgsrc.prev().attr("type", newtype); 
}