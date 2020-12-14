const form = document.getElementById('login-form');
const mail = document.getElementById('Email');
const pass = document.getElementById('password');


function LoginValidation(){

    const Mail= mail.value;
    const Password= pass.value;
 
    if(Mail === '' && Password ===''){
        Empty(mail,'Email cannot be blank');
        Empty(pass, 'Password cannot be blank');
        return false;

    }else if(Password !== ''  && Mail===''){
        Empty(mail, 'Email cannot be blank');
        NotEmpty(pass);
        return false;
    }else if(Password !=='' && !CheckMail(Mail)){
        Empty(mail, 'Invalid Email');
        NotEmpty(pass);
        return false;

    }else if(!CheckMail(Mail) && Password === ''){
        Empty(mail, 'Invalid Email');
        Empty(pass, 'Password cannot be blank');
        return false;
    }else if(Mail!== '' && Password ===''){
        NotEmpty(mail);
        Empty(pass, 'Password cannot be blank');
        return false;
    } 

}


function Empty(input, message){
    const FormDiv = input.parentElement;
    const small = FormDiv.querySelector('small');
    FormDiv.className = 'form-fill error';
    small.innerText = message;
    
}

function NotEmpty(input){
    const LoginPage = input.parentElement;
    LoginPage.className = 'form-fill success';
}

function CheckMail(mail){
    return '/^[^@]+@[^@]+\.[^@]+$/'.test(mail);

}