
window.onload = function(){
    const fnameInput = document.querySelector("#fname");
    const lnameInput = document.querySelector("#lname");
    const phoneInput = document.querySelector("#phone_num");
    const mailInput = document.querySelector("#email");
    const startDateInput = document.querySelector("#start_day");
    const endDateInput = document.querySelector("#end_day");
    const formHandle = document.querySelector(".applicationForm");
    const requiredfName = document.querySelector(".emptyfname");
    const requiredlName = document.querySelector(".emptylname");
    const requiredPhone = document.querySelector(".emptyPhoneNum");
    const requiredMail = document.querySelector(".emptymail");
    const requiredStartDate = document.querySelector(".emptyStartDate");
    const requiredEndDate = document.querySelector(".emptyEndDate");
    function processForm(event){
        event.preventDefault();
        //require boxes.
        const fnameValue = fnameInput.value;
        const lnameValue = lnameInput.value;
        const phoneValue = phoneInput.value;
        const mailValue = mailInput.value;
        const startDateValue = startDateInput.value;
        const endDateValue = endDateInput.value;
        let valid = true;
        if (fnameValue === ""){
            fnameInput.style.backgroundColor = "red";
            requiredfName.style.fontSize = "0.8em";
            requiredfName.innerHTML = "Pleae write down your first name.";
            return false;
        }   
        if (lnameValue === ""){
            lnameInput.style.backgroundColor = "red";
            requiredlName.style.fontSize = "0.8em";
            requiredlName.innerHTML = "Pleae write down your last name.";
            return false;
        }    
        if (phoneValue === ""){
            phoneInput.style.backgroundColor = "red";
            requiredPhone.style.fontSize = "0.8em";
            requiredPhone.innerHTML = "Pleae write down your phone number.";
            return false;
        } 
        if (mailValue === ""){
            mailInput.style.backgroundColor = "red";
            requiredMail.style.fontSize = "0.8em";
            requiredMail.innerHTML = "Pleae write down your email.";
            return false;
        } 
        if (startDateValue === ""){
            startDateInput.style.backgroundColor = "red";
            requiredStartDate.style.fontSize = "0.8em";
            requiredStartDate.innerHTML = "Pleae choose the checkin date.";
            return false;
        } 
        if (endDateValue === ""){
            endDateInput.style.backgroundColor = "red";
            requiredEndDate.style.fontSize = "0.8em";
            requiredEndDate.innerHTML = "Pleae choose the checkout date.";
            return false;
        } 
        if (valid) {
            formHandle.submit();
        }
    }
    formHandle.addEventListener("submit", processForm);
 }