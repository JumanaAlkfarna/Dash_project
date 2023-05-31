 // Loading
 let loading = document.querySelector(".page-loader");
 let navbar = document.querySelector(".navbar");

 setTimeout((_) => {
   loading.style.display = "none";
   navbar.style.display = "block"
 }, 4000);




//

// -------* To on / off internet  *-------
 ononline = _=>{
            console.log("on");
            alert("تمت استعادة الاتصال");
        }
        onoffline = _=>{
            console.log("off");
            alert("تم قطع الاتصال");
    }


//




