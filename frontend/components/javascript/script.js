$(document).ready(function() {
    // tailwind theme setup
    tailwind.config = {
        theme : {
            extend :{
                fontFamily : {
                    sans : ["Segoe UI", "Roboto", "Helvetica Neue", "Arial", "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"],
                },
                color : {
                    core: "#da373d",
                }
            }
        }
    }

});