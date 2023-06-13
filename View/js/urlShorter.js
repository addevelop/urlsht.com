
const form = document.querySelector(".formUrl form"),
fullURL = form.querySelector("input"),
shortenBtn = form.querySelector("button");
console.log(fullURL);
console.log('heu');

form.onsubmit = (e) => {
    e.preventDefault();

}

shortenBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/urlsht.com/Controler/UrlClass.php", true);
    xhr.onload = () => {
        if(xhr.readyState == 4 && xhr.status == 200)
        {
            let data = xhr.response;
            if(data.length <= 5)
            {
                console.log(data);
                let domain = "http://localhost/urlsht.com/" + data;
                console.log(data);
                $(".pop_url").css("display", "block");
                $("#new_url").val("" + domain + "");
                $("#url").html(fullURL.value)
                $("#new_url_acced").attr("href", domain);
                
                
                console.log(domain);
            }
            else
            {
                console.log(data);
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

$("#copier_url").click(function(){
    var text = document.getElementById('new_url');
    text.select();
    navigator.clipboard.writeText(text.value);
})




