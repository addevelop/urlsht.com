
var list;
var im = "";
cht = 0;
$(document).ready(function(){
    list = document.cookie.split(';');

    list.forEach(val => {
        var listim = val.split('=');
        if(listim[0] == "changeb")
        {
            cht = 1;
        }
    })
    if(cht == 0)
    {
        setCookie("changeb", "head1.jpg");
    }
    stcooki();

})
$("#changeb").click(function(){
    checkCooki(2);
})


function setCookie(element, val)
{
    

    document.cookie = element + "=" + val;
}

function stcooki()
{
    list = document.cookie.split(';');
    im = "head1-1.jpg";
    
    list.forEach(val => {
        var listim = val.split('=');
        if(listim[0] == "changeb")
        {
            im = listim[1];
            $("body").css("background-image", "url(document/" + im);
        if(listim[1] == "head1.jpg")
        {
            $('.changeb1').css('left', '0px');
            $('.changeb').css('background-color', 'white');
            $("body").get(0).style.setProperty("--textColor", "#243845");

        }
        else if(listim[1] == 'head1-1.jpg')
        {
                        $('.changeb1').css('left', $('.changeb').width() - $('.changeb1').width() + 'px');
                        $('.changeb').css('background-color', 'green');
                        $("body").get(0).style.setProperty("--textColor", "white");

        }
    }
    })
}
function checkCooki(num)
{
    var ch = false;
    list.forEach(val => {
        var listim = val.split('=');
        if(listim[0] == "changeb")
        {
            
            im = listim[1];
        if(listim[1] == "head1.jpg")
        {
            ch = true
            // $('.changeb1').css('left', $('.changeb').width() - $('.changeb1').width() + 'px');
            // $("body").css("background-image", "url(document/head1-1.jpg");




        }
        // else if(listim[1] == 'head1-1.jpg')
        // {
        //     $('.changeb1').css('left', '0px');
        //                 $("body").css("background-image", "url(document/head1.jpg");

        // }
        
    }
    })
    if(ch == false)
    {
        setCookie("changeb", "head1.jpg");
    }
    else
    {
        setCookie("changeb", "head1-1.jpg");
    }
    stcooki();
    
}