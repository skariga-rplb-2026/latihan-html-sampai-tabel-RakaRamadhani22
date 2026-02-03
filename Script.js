//letak javascript
console.log("Latihan javascript");

function masukan_nama(){
    let nama = prompt("Masukan nama anda");
    console.log("Halo"+nama);
    document.getElementById("jawaban").innerHTML = "haloo" + nama;
}
document.getElementById("pertanyaan").onclick=function(){
    //ini isinya
    let jawab=confirm("apakah sudah sarapan");
if(jawab = true){
    console.log("Alhamdulillah sudah sarapan");
}else{
    console.log("sebentar lagi istirahat bisa sarapan");
    document.getElementById("jawaban").innerHTML = "sebentar lagi istirahat bisa makan"
    }
}

let gelap = false; //putih
document.getElementById("tema").onclick = function(){
    if(gelap == true){
        document.body.style.background = "white";
        document.body.style.color = "black";
        gelap=false;
    }else{
        document.body.style.backgroundColor = "black";
        document.body.style.color = "white";
        gelap=true;
    }
}