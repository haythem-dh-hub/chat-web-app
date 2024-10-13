const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
usersList  = document.querySelector(".users .users-list");


searchBtn.onclick = ()=>{
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
    searchBar.value = "";
}

// sending ajax to php and getting from php to ajax


searchBar.onkeyup = ()=>{
    let searchTerm = searchBar.value;
    if(searchTerm != ""){
        searchBtn.classList.add("active"); //just adding an active classe when user seraching
    }else{
        searchBtn.classList.remove("active");
    }
    //ajax
    let xhr = new XMLHttpRequest();// creating XML object
    xhr.open("POST", "php/search.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                usersList.innerHTML = data;                                           
                }
                }
    }
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}
setInterval(()=>{

    let xhr = new XMLHttpRequest();// creating XML object
    xhr.open("GET", "php/users.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(!searchBtn.classList.contains("active")){//if active active not contains in search bar then add this data
                    usersList.innerHTML = data;
                  
                }
                
                }
                }
    }
    xhr.send();
},500) //this function will run frequently after 500ms