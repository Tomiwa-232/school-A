const form1 = document.querySelector(".signupp form"),
    keyBtn = form1.querySelector(".butts button"),
    keyBt = form1.querySelector(".liveAlertBtn"),
    errText = form1.querySelector(".error-txtt");
/* loginText = form.querySelector(".error-txtt"); */

form1.onsubmit = (e) => {
    e.preventDefault(); //preventing form for submitting 
}
keyBtn.onclick = () => {
    // let's start Ajax
    let xhr = new XMLHttpRequest(); //Creating XML object
    xhr.open("POST", "sendtodb.php", true);
    xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    if (data == "We're sorry, it looks like the email address is already in use. Please use a different email address.") {
                      
                        // errText.textContent = data;
                        // errText.style.display = "block";
                        document.querySelector(".liveAlertBtn").click();


                    } else if (data == "Error! Confirm Password Not Match") {
               
                        // errText.textContent = data;
                        // errText.style.display = "block";
                        document.querySelector(".liveAlertBtn").click();

                    } else {
                     
                        location.href = "login.php";


                    }
                }
            }
        }
        /* We have to send data through ajax to php */
    let formData = new FormData(form1); //creating new formData object
    xhr.send(formData); //sending the form data to php
}






/* const smite = document.querySelector (".signup form"),
      keyBtn = smite.querySelector (".button input"),
      errorMessage =  smite.querySelector(".errortxt");

    smite.onsubmit=(e)=>{
        e.preventDefault ();
    }
    keyBtn.onClick =()=>{
        let xhr = new XMLHttpRequest ();
        xhr.open("POST", "sendtodb.php", true);
        xhr.onload = ()=> {
            if (xhr.readyState === XMLHttpRequest.DONE){
                if (xhr.status === 200){
                    let data = xhr.response;
                    if (data == "ogbeni o ti poju. Try again!!!"){
                        errorMessage.textContent = data;
                        errorMessage.display ="block";
                    } else{
                        location.href = "login.php"
                    }
                }
            }
        }

        let formData = new formData(smite);
        xhr.send (formData);
    }
     */