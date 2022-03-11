<?php
include "database.php";

$problems = $db->query("SELECT * FROM problems");


?>



<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container mt-3 bg-secondary" style="height: 595px;">
        <div class="row " id="main">
            <div class="col">
                <div class="card text-light bg-dark mt-4" style="width: 18rem;">
                    <img src="images/j.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                           Hi Sam. Can you come to my home.I'm afraid.I hear some scary voices.
                        </p>
                        <button  class="btn btn-secondary" type="button" onclick="continue_story()"  >continue</button> 
                    </div>
                </div>
            </div>


        </div>
        

    </div>

    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>
<script>
function continue_story(){
    var main=document.getElementById("main");   
    var div_col=document.createElement("DIV");
             div_col.className="col";
             
             var div1=document.createElement("DIV");
             div1.className="card text-light bg-dark  mt-4";
             div1.style.width="18rem";
            
             var div2=document.createElement("DIV");
             div2.className="card-body ";
            // div2.classList="bg-dark";
            
            // div1.style.width="100px";
             var img=document.createElement("IMG");
             img.className="card-img-top";
             img.src="images/k.jpg";
             
            var tag_p=document.createElement("P");
            tag_p.className="card-text";
            tag_p.innerHTML="Oh my God! What happened there.Don't afraid.I will come soon.Please wait for me.";
            var btn=document.createElement("BUTTON");
           
            btn.className="btn btn-secondary ";
            btn.innerHTML="continue";
            btn.type="button";
            btn.onclick=continue_story2;
            main.appendChild(div_col);          
            div_col.appendChild(div1);
            div1.appendChild(img);           
            div1.appendChild(div2); 
           
            div2.appendChild(tag_p);
            div2.appendChild(btn);

}
function continue_story2(){
    var main=document.getElementById("main");   
    var div_col=document.createElement("DIV");
             div_col.className="col";
             
             var div1=document.createElement("DIV");
             div1.className="card text-light bg-dark  mt-4";
             div1.style.width="18rem";
            
             var div2=document.createElement("DIV");
             div2.className="card-body ";
            // div2.classList="bg-dark";
            
            // div1.style.width="100px";
             var img=document.createElement("IMG");
             img.className="card-img-top";
             img.src="images/l.jpg";
             
            var tag_p=document.createElement("P");
            tag_p.className="card-text";
            tag_p.innerHTML="When Sam arrived he saw that the apartment is in fire and he taught Suzy is dead and started to cry.";
            var btn=document.createElement("BUTTON");
           
            btn.className="btn btn-secondary ";
            btn.innerHTML="continue";
            btn.type="button";
            btn.onclick=continue_story3;
            main.appendChild(div_col);          
            div_col.appendChild(div1);
            div1.appendChild(img);           
            div1.appendChild(div2); 
           
            div2.appendChild(tag_p);
            div2.appendChild(btn);

}
function continue_story3(){
    var main=document.getElementById("main");   
    var div_col=document.createElement("DIV");
             div_col.className="col";
             
             var div1=document.createElement("DIV");
             div1.className="card text-light bg-dark  mt-4";
             div1.style.width="18rem";
            
             var div2=document.createElement("DIV");
             div2.className="card-body ";
            // div2.classList="bg-dark";
            
            // div1.style.width="100px";
             var img=document.createElement("IMG");
             img.className="card-img-top";
             img.src="images/m.jpg";
             
            var tag_p=document.createElement("P");
            tag_p.className="card-text";
            tag_p.innerHTML="Hey Sam.I'm here.Don't cry.I'm alive:).Somebody saved me from fire.";
            var btn=document.createElement("BUTTON");
           
            btn.className="btn btn-danger ";
            btn.innerHTML="End";
            btn.type="button";
            main.appendChild(div_col);          
            div_col.appendChild(div1);
            div1.appendChild(img);           
            div1.appendChild(div2); 
           
            div2.appendChild(tag_p);
            div2.appendChild(btn);

}


</script>