// getting all required elements
const searchWrapper = document.querySelector(".search-input");
const inputBox = searchWrapper.querySelector(".searchText");
const suggBox = searchWrapper.querySelector(".autocom-box");
const icon = searchWrapper.querySelector(".icon");
let linkTag = searchWrapper.querySelector("a");
let webLink;

// if user press any key and release
inputBox.onkeyup = (e)=>{
    let userData = e.target.value; //user enetered data
    let emptyArray = [];
    let userDataLink;
    if(userData){
        for(i=0; i<suggestions.length;i++){
            if(userData == suggestions[i]) {
                userData = suggestions[i];
                userDataLink = links[i];
                break;
            }
            else {
                let searchLink;
                searchLink = window.location.pathname;
                if(searchLink.includes("dizustuKategori") || searchLink.includes("masaustuKategori")) {
                    searchLink = '../../searchPage.php?q=' + e.target.value;
                } else if (searchLink.includes("dizustuUrun") || searchLink.includes("masaustuUrun")) {
                    searchLink = '../../../searchPage.php?q=' + e.target.value;
                } else {
                    searchLink = 'searchPage.php?q=' + e.target.value;
                }
                userDataLink = searchLink;
            }
        }
        icon.onclick = ()=>{
            webLink = userDataLink;
            linkTag.setAttribute("href", webLink);
            console.log(webLink);
            linkTag.click();
        }
        emptyArray = suggestions.filter((data)=>{
            //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase()); 
        });
        emptyArray = emptyArray.map((data)=>{
            // passing return data inside li tag
            return data = '<li>'+ data +'</li>';
        });

        searchWrapper.classList.add("active"); //show autocomplete box
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            //adding onclick attribute in all li tag
            allList[i].setAttribute("onclick", "select(this)");
        }
    }else{
        searchWrapper.classList.remove("active"); //hide autocomplete box
    }
}

function select(element){
    let selectData = element.textContent;
    inputBox.value = selectData;

    let userDataLink;
    for(i=0; i<suggestions.length;i++){
        if(selectData == suggestions[i]) {
            selectData = suggestions[i];
            userDataLink = links[i];
            break;
        }
        else {
            userDataLink = window.location.href;
        }
    }

    icon.onclick = ()=>{
        webLink = userDataLink;
        linkTag.setAttribute("href", webLink);
        linkTag.click();
    }
    searchWrapper.classList.remove("active");
}

function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputBox.value;
        listData = '<li>'+ userValue +'</li>';
    }else{
        listData = list.join('');
    }
    suggBox.innerHTML = listData;
}
