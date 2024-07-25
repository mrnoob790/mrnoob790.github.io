document.addEventListener("DOMContentLoaded", function() {
    var popupLink = document.getElementById('popup_link');
    
    popupLink.addEventListener('click', function(event) {
        event.preventDefault();
        
        // Open a new window with google.com
        var popupWindow = window.open('https://google.com', '_blank');
        
        // Set the title of the new window
        popupWindow.document.title = 'google.com';
    });
});
