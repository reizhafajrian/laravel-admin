const logout=document.getElementById('logout-form');

logout.onclick=()=>{
    fetch('/logout',{
        method:"post"
    })
}