const boton = document.querySelector('#boton');
const menu = document.querySelector('#menu');
const icono = document.querySelector('#icon-search');
const bars_search = document.querySelector('#ctn-bars-search');
const cover_ctn_search = document.querySelector('#cover-ctn-search');
var inputSearch = document.querySelector('#inputSearch');
var box_search = document.querySelector('#box-search');

boton.addEventListener('click', () => {
    console.log('click')
    menu.classList.toggle('hidden')
})

icono.addEventListener('click', () => {
    console.log('click')
    bars_search.classList.toggle('hidden')
    cover_ctn_search.classList.toggle('hidden')
    inputSearch.focus();
    box_search.style.display = "none";
})
cover_ctn_search.addEventListener('click', () => {
    console.log('click')
    bars_search.classList.toggle('hidden')
    cover_ctn_search.classList.toggle('hidden')
    inputSearch.value = "";
})

document.getElementById("inputSearch").addEventListener("keyup", buscador_interno);

function buscador_interno (){
    filter = inputSearch.value.toUpperCase();
    li = box_search.getElementsByTagName("li");
    for (i = 0; i < li.length; i++){
        a = li[i].getElementsByTagName("a")[0];        
        textValue = a.textContent || a.innerText;

        if(textValue.toUpperCase().indexOf(filter) > -1){

            li[i].style.display = "";
            box_search.style.display = "block";

            if (inputSearch.value === ""){
                box_search.style.display = "none";
            }

        }else{
            li[i].style.display = "none";
        }
    }
}