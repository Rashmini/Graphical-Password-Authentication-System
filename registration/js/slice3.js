// slicing the image to four parts
function changeIt(img)
{
    var name = img.src;
    console.log(name);

    var canvas = document.createElement('canvas');
    ctx = canvas.getContext('2d');
    images=[],
    parts = [],
    img = new Image();

    img.onload = split_4;

    function split_4()
    {
        var w2 = img.width / 2,
        h2 = img.height / 2;

        for(i=0; i<4; i++){
            var x = (-w2*i) % (w2*2),
            y = (h2*i)<=h2? 0 : -h2;

            canvas.width = w2;
            canvas.height = h2;

            ctx.drawImage(this, x, y);
            parts.push( canvas.toDataURL() );

            //for test div
            var slicedImage = document.createElement('img')
            images.push(slicedImage);
            slicedImage.src = parts[i];
            var div = document.getElementById('test')
            div.appendChild(slicedImage);
        }

        for (var i = 0; i < 4; i++) (function(i){
            images[i].onclick=function(){
            changeIt2(i);
            }
        })(i);
    }
    img.src = name;
}


// passing the selected image slice
function changeIt2(i)
{
    var name = i;
    console.log(name);
    window.location.href = "registered.php?var="+name;
}