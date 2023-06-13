$("input.input_text").focus(function(){
    animeInput($(this).parent(), true);
})

$("input.input_text").focusout(function(){
    if($(this).val() == "")
    {
    animeInput($(this).parent(), false);
    }
})

function animeInput(input, check)
{
    console.log(check);
    if(check == true)
    {
    $(input).children(".label_text").css("transform", "translateY(-80%) scale(0.7)");
    }
    else
    {
        $(input).children(".label_text").css("transform", "translate(0%) scale(1)");
    }
}

