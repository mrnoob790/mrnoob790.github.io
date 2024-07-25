window.addEventListener("load", function onLoad(event) {
    var popupLink = document.getElementById("popup_link");
    popupLink.onclick = openPopupWindow;
});

function openPopupWindow() {
    var newWindow = window.open("javascript:''", "_blank");

    // Set the title of the new popup window
    newWindow.document.title = "Google";

    var iframe = newWindow.document.createElement("iframe");
    iframe.src = "http://neverssl.com/";

    newWindow.document.body.appendChild(iframe);
}
