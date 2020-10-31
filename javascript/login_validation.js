const email = document.getElementById('input_email');
const password = document.getElementById('input_password');
const check = document.getElementById('login_check');
const form = document.getElementById('form_signin');
const error = document.getElementById('error_message');

form.addEventListener('submit',(e)=>{
  let message = [];
  const pass_check = pass(password);
  if(pass_check){
    e.preventDefault();
    message.push("password can't be less than 6 digit")
    console.log(message);
    //error.innerText = message.join(',')
    alert("password can't be less than 6 digit")
  }
  if(message.value.length > 0){

  }

})

const pass=(password1)=>{
  if(password1.value.length <= 6){
    return true;
  }
  else {
    return false;
  }
}
