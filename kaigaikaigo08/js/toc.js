$(function(){
   let idcount = 1;
   let toc = '<ul class="chapter">';
   $("h2, h3", this).each(function(){
       this.id = "chapter-" + idcount;
       idcount++;
       let headinglevel;
       if(this.nodeName.toLowerCase() == "h2") {
           headinglevel = 'two';
       } else if(this.nodeName.toLowerCase() == "h3") {
           headinglevel = 'three';
       }
       toc += '<li class="chapter-h chapter-h-'+ headinglevel +'"><a href="#' + this.id + '">' + $(this).text() + "</a></li>\n";
   });
   toc += '</ul>';
   $("#toc").html(toc);
 });