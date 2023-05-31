 // Loading
 let loading = document.querySelector(".page-loader");
 let navbar = document.querySelector(".navbar");

 setTimeout((_) => {
   loading.style.display = "none";
   navbar.style.display = "block"
 }, 100);




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

//  To display Files
function displaySelectedFile(input) {
    var fileMessage = document.getElementById('file-message');

    if (input.files && input.files[0]) {
      var file = input.files[0];
      var fileName = file.name;
      var fileExtension = fileName.split('.').pop();

      fileMessage.textContent = fileName + ' (' + fileExtension + ')';
    } else {
      fileMessage.textContent = 'لا يوجد ملف مختار';
    }
  }




