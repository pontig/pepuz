window.addEventListener("load", () => {

    let video = document.getElementsByTagName("video")[0]
    setTimeout(() => {
        document.getElementById("stage").style.height = (video.clientHeight * .75) + "px"
        window.scrollTo(0, 0)
    }, 301);
})