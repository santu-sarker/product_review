const page_name = document.getElementById("page_name");
const email = document.getElementById("page_email");
const password = document.getElementById("page_Password");
const confirm_password = document.getElementById("confirm_password");
const male = document.getElementById("male");
const female = document.getElementById("female");
const check = document.getElementById("page_checkbox");
const submit = document.getElementById("submit");
var gender;
var message = [];

email.addEventListener("change", (e) => {
  if (e.target.value !== "") {
    if (mail_check(email.value)) {
      email.style.borderColor = "green";
    } else {
      email.style.borderColor = "red";
    }
  } else {
    email.style.borderColor = "grey";
  }
});

password.addEventListener("change", (e) => {
  if (password.value !== "") {
    if (password.value.length < 6) {
      password.style.borderColor = "red";
    } else {
      password.style.borderColor = "green";
    }
  } else {
    password.style.borderColor = "grey";
  }
});
confirm_password.addEventListener("change", (e) => {
  if (confirm_password === "") {
    confirm_password.style.borderColor = "grey";
  } else {
    if (pass_check(password.value, confirm_password.value)) {
      confirm_password.style.borderColor = "green";
    } else {
      confirm_password.style.borderColor = "red";
    }
  }
});

submit.addEventListener("click", (e) => {
  if (
    page_name.value === "" ||
    !mail_check(email.value) ||
    !check.checked ||
    !pass_check(password.value, confirm_password.value) ||
    gender === undefined
  ) {
    message.push("Please Fill All Data");
    alert("please fill all data");
    console.log(message);
    console.log(page_name.value);
    console.log(!mail_check(email.value));
    console.log(!check.checked);
    console.log(!pass_check(password.value));
    console.log(gender);
    e.preventDefault();
  } else if (password.value.length < 6) {
    message.push("password Can't Be Less Than 6 Digit ");
    console.log(page_name.value);
    console.log(!mail_check(email.value));
    console.log(!check.checked);
    console.log(!pass_check(password.value));
    console.log(gender);
    e.preventDefault();
  }
});
male.addEventListener("click", (e) => {
  gender = "male";
});
female.addEventListener("click", (e) => {
  gender = "female";
});

const pass_check = (pass, confirm_pass) => {
  const compare = pass.localeCompare(confirm_pass);
  if (compare == 0) {
    return true;
  } else {
    return false;
  }
};
const mail_check = (email) => {
  var mailformat = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
  if (email.match(mailformat)) {
    return true;
  } else {
    return false;
  }
};
