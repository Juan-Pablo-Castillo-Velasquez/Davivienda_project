const confimar=document.querySelectorAll("#modificar").forEach(e=>{
    e.addEventListener("click",(a)=>{
        x=confirm("seguro que deseas borrar tes producto")
        if(x){
            alert("producto borrado")
        }else{
            alert("producto no borrado")
            a.preventDefault()
        }
    })

})
