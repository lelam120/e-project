var bam1 = document.getElementById("bam1")
var bam2 = document.getElementById("bam2")
var bam3 = document.getElementById("bam3")
var mot = document.getElementById("mot")
var hai = document.getElementById("hai")
var ba = document.getElementById("ba")


function click2(){
    if (bam2.classList.contains("buttonhien")){
       
    }else{
        hai.classList.remove("an")
        mot.classList.add("an")
        ba.classList.add("an")
        bam2.classList.add("buttonhien")
        bam1.classList.remove("buttonhien");
        bam3.classList.remove("buttonhien");
    }
}
function click1(){
    if (bam1.classList.contains("buttonhien")){
       
    }else{
        mot.classList.remove("an")
        hai.classList.add("an")
        ba.classList.add("an")
        bam1.classList.add("buttonhien")
        bam2.classList.remove("buttonhien");
        bam3.classList.remove("buttonhien");
    }
}
function click3(){
    if (bam3.classList.contains("buttonhien")){
       
    }else{
        ba.classList.remove("an")
        mot.classList.add("an")
        hai.classList.add("an")
        bam3.classList.add("buttonhien")
        bam1.classList.remove("buttonhien");
        bam2.classList.remove("buttonhien");
    }
}