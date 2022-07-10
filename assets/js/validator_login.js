const form1 = document.querySelector(".login form"),
    keyBtn = form1.querySelector(".ayo input"),
    keyBt = form1.querySelector(".liveAlertBtn"),
    errText = form1.querySelector(".error-txtt");
/* loginText = form.querySelector(".error-txtt"); */

form1.onsubmit = (e) => {
    e.preventDefault(); //preventing form for submitting 
}
keyBtn.onclick = () => {
    // let's start Ajax
    let xhr = new XMLHttpRequest(); //Creating XML object
    xhr.open("POST", "validator_login.php", true);
    xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    if (data == "We're sorry, your login details are not correct!") {
                      
                        /* errText.textContent = data;
                        errText.style.display = "block"; */
                        document.querySelector(".liveAlertBtn").click();


                    } else {
                        // errText.textContent = data;
                        // errText.style.display = "block";
                         location.href = "index.php";


                    }
                }
            }
        }
        /* We have to send data through ajax to php */
    let formData = new FormData(form1); //creating new formData object
    xhr.send(formData); //sending the form data to php
}
