const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");

var meta = document.getElementsByTagName("meta");
let _token = meta[3].content;
let email = meta[4].content;

// searchBtn.addEventListener("click" , () =>{
//     sidebar.classList.remove("close");
// })

toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");

    var sideBarStateVal = 0;
    if(sidebar.classList.contains("close")){
        sideBarStateVal = 0; 
    }else{
        sideBarStateVal = 1;
    }
    $(function(){        
        $.ajax({
            url: "/changeSideBarState",
            type:"POST",
            data:{
                email:email,
                sideBarState: sideBarStateVal,
                _token: _token
            },
            success:function(response){
                console.log(response);
                if(response) {
                $('.success').text(response.success);
                }
            },
            error: function(error) {
                console.log(error);
            }
            });  
    });
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    var darkModeVal = 0;
    if(body.classList.contains("dark")){
        darkModeVal = 1; 
    }else{
        darkModeVal = 0;
    }

    $(function(){        
        $.ajax({
            url: "/changeDarkMode",
            type:"POST",
            data:{
                email:email,
                darkMode: darkModeVal,
                _token: _token
            },
            success:function(response){
                console.log(response);
                if(response) {
                $('.success').text(response.success);
                }
            },
            error: function(error) {
                console.log(error);
            }
            });  
    });


});
