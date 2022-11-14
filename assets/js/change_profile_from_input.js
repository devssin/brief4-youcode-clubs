const searchInput = document.querySelector('input[name="photo_profile"]');
// var profile_preview = document.getElementById("profile_preview");

searchInput.addEventListener("change",()=>{
    console.log(searchInput.value);
    document.getElementById("profile_preview").src = searchInput.value;
})