window.addEventListener("load", () => {

    //Apertura menu
    document.getElementById("hamburger").addEventListener("click", () => {
        document.getElementById("menu").style.display = "flex"
        setTimeout(() => {
            document.getElementById("menu").style.opacity = "1"
        }, 1);
    })

    //Chiusura menu
    document.getElementById("x").addEventListener("click", () => {
        document.getElementById("menu").style.opacity = "0"
        setTimeout(() => {
            document.getElementById("menu").style.display = "none"
        }, 301);
    })

    //Apertura cambio lingua (non serve la chiusura, la x scompare)
    document.getElementsByClassName("active")[0].addEventListener("click", () => {
        document.getElementById("x").style.opacity = "0"
        Array.from(document.querySelectorAll(".voice")).forEach(e => {
            e.style.opacity = "0"
            setTimeout(() => {
                e.style.display = "none"
                Array.from(document.querySelectorAll(".flag")).forEach(f => {
                    f.style.opacity = "0"
                    f.style.display = "flex"
                    setTimeout(() => {
                        f.style.opacity = "1"
                    }, 301);
                })
            }, 301);

        })
    })

    window.addEventListener("scroll", () => {

        //Cambio dell'header sulla base dello scroll
        if (window.scrollY > 1) {
            document.getElementsByTagName("header")[0].style.backgroundColor = "var(--giallo)"
            document.getElementsByTagName("header")[0].style.boxShadow = "0 0 20px 2px black"
            document.querySelector("header h1").style.fontSize = "20px"
            document.querySelector("header h1").style.color = "var(--neroTrasparente)"
            document.querySelector("header h1").style.marginTop = "25px"
            document.getElementById("topleftpath").style.fill = "var(--neroTrasparente)"
            Array.from(document.querySelectorAll("#hamburger>div")).forEach(e => {
                e.style.backgroundColor = "var(--neroTrasparente)"
            })
        } else {
            document.getElementsByTagName("header")[0].style.backgroundColor = "transparent"
            document.getElementsByTagName("header")[0].style.boxShadow = "none"
            document.querySelector("header h1").style.fontSize = "30px"
            document.querySelector("header h1").style.color = "var(--biancoTrasparente)"
            document.querySelector("header h1").style.marginTop = "18px"
            document.getElementById("topleftpath").style.fill = "var(--biancoTrasparente)"
            Array.from(document.querySelectorAll("#hamburger>div")).forEach(e => {
                e.style.backgroundColor = "var(--biancoTrasparente)"
            })
        }

        //Faccio comparire gli articoli man mano che scrolli (si può anche utilizzare in altre pagine)
        window.addEventListener("scroll", () => {
            Array.from(document.getElementsByClassName("article")).forEach(e => {
                if (window.scrollY > (e.offsetTop - e.clientHeight)) e.style.opacity = 1
            })

            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                Array.from(document.getElementsByClassName("article")).forEach(e => {
                    e.style.opacity = 1
                })
            }
        })

    })
})