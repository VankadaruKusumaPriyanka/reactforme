// AJSX
// (function(){
    function loadJsonFile(file,callback){
       var fileRequest= new XMLHttpRequest();
       fileRequest.overrideMimeType("application/json");
       fileRequest.open("GET",file,true);
       fileRequest.onreadystatechange = function(){
           if(fileRequest.readyState === 4 && fileRequest.status=="200"){
                callback(fileRequest.responseText);
           }
       }
       fileRequest.send();
    }

    loadJsonFile("data.json", function(text){
        var data=JSON.parse(text);
        detais(data.details);
        
    })
// })
var body=document.querySelector("#root");

function detais(a){
    var h1=document.createElement("h1");
    h1.textContent=a.name;
    body.appendChild(h1);
}