window.addEventListener("DOMContentLoaded",(e)=>{
    let parrafos=document.querySelectorAll("p");
    let tColor=document.querySelector("#color");
    let tFondo=document.querySelector("#fondo");
    let tTamaño=document.querySelector("#tamaño");

    for(let parrafo of parrafos){
        parrafo.addEventListener("click",(e)=>{
            e.target.classList.toggle("seleccionar");
        });
    }

    tColor.addEventListener("change",(e)=> {
        let seleccionados=document.querySelectorAll(".seleccionar");
        for(let parrafo of seleccionados){
            parrafo.style.color=tColor.value;
        }
    });
    tFondo.addEventListener("change",(e)=> {
        let seleccionados=document.querySelectorAll(".seleccionar");
        for(let parrafo of seleccionados){
            parrafo.style.backgroundColor=tFondo.value;
        }
    });
    tTamaño.addEventListener("change",(e)=>{
        let seleccionados=document.querySelectorAll(".seleccionar");
        for(let parrafo of seleccionados){
            parrafo.style.fontSize=tTamaño.value+"px";
        }
    });
})