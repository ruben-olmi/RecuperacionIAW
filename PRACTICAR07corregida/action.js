window.addEventListener("DOMContentLoaded",function(e) {
    let main=document.querySelector("main");
    let rojo=document.getElementById("rojo");
    let verde=document.getElementById("verde");
    let azul=document.getElementById("azul");
    let y=document.getElementById("y");
    let x=document.getElementById("x");
    let rotacion=document.getElementById("rotacion");
    let colores=document.querySelectorAll("#fondo input");
    let mosca=document.querySelector(".mosca");
    let btNuevo=document.getElementById("nuevo");

    for(let color of colores){
        color.addEventListener("change",function(e){
            if(color.value<128)
                color.vaue=128;
            else if(color.value<255)
                color.vaue=255;
            let r=rojo.value;
            let v=verde.value;
            let a=azul.value;
            main.style.backgroundColor=`rgb(${r},${v},${a})`;
        });
    }
    y.addEventListener("change",function (e){
        let vy=y.value;
        mosca.style.top=vy+"px";
    });
    x.addEventListener("change",function (e){
        let vx=x.value;
        mosca.style.left=vx+"px";
    });
    rotacion.addEventListener("change",function (e){
        let vRotacion=rotacion.value;
        mosca.style.rotate=vRotacion+"deg";
    });

    btNuevo.addEventListener("click",function(e){
        let nuevaMosca=document.createElement("div");
        nuevaMosca.classList.add("mosca");
        nuevaMosca.classList.add("seleccionada");

        main.append(nuevaMosca);
        mosca.classList.remove("seleccionada");
        mosca=nuevaMosca;
        y.value=0;
        x.value=0;
        rotacion.value=0;
    });

    main.addEventListener("click",function(e){
        if(e.target.classList.contains("mosca")) {
            mosca.classList.remove("seleccionada");
            e.target.classList.add("seleccionada");
            mosca = e.target;
            x.value=mosca.style.left.replace("px","");
            y.value=mosca.style.top.replace("px","");
            rotacion.value=mosca.style.rotate.replace("deg","");
        }
    })
    /*Codigo correcto pero me captura 3 elementos
    let r=255;
    let g=255;
    let b=255;

    rojo.addEventListener("change",function(e){
        r=rojo.value;
        if(r<128){
            r=128;
            rojo.value=128;
        }
        main.style.backgroundColor=`rgb(${r},${g},${b})`;
    })
    verde.addEventListener("change",function(e){
        g=verde.value;
        if(g<128){
            g=128;
            verde.value=128;
        }
        main.style.backgroundColor=`rgb(${r},${g},${b})`;
    })
    azul.addEventListener("change",function(e){
        b=azul.value;
        if(b<128){
            b=128;
            azul.value=128;
        }
        main.style.backgroundColor=`rgb(${r},${g},${b})`;
    })*/
})