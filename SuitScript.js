function main(pilihan_user){
    //alert(pilihan_user);
    //set pilihan komputer random
    const komputer = ["batu", "gunting", "kertas"];
    const random = Math.floor(Math.random() * komputer.length);
    let pilihan_komputer = komputer[random];

    document.getElementById('com').innerHTML = pilihan_komputer;
    document.getElementById('pil_com').src = "img/"+pilihan_komputer+".png";
    document.getElementById('pil_user').src = "img/"+pilihan_user+".png";


    //Kertas vs kertas = seri
    //kertas vs batu = user menang
    //kertas vs gunting = user kalah
    //kondisi menang, seri, kalah

    if (pilihan_user === pilihan_komputer){
         document.getElementById("hasil").innerHTML = "SERI";
    } else if (
              (pilihan_user === "kertas" && pilihan_komputer === "batu") || 
              (pilihan_user === "batu" && pilihan_komputer === "gunting") || 
              (pilihan_user === "gunting" && pilihan_komputer === "kertas")){
                document.getElementById("hasil").innerHTML = "MENANG";
              } else {
        document.getElementById("hasil").innerHTML = "KALAH";
    }

}