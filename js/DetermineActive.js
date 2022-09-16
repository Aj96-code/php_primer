const activePage = window.location.pathname;
const navLinks = document.querySelectorAll("ul li a").
forEach(link =>{
    if(activePage === "/")
    {
        if(link.href.includes("/index.php")){
            link.classList.add("active");
        }
    }
    else
    {
        if(link.href.includes(`${activePage}`)){
            link.classList.add("active");
        }
    }
});

