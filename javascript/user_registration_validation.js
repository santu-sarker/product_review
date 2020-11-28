const first_name = document.getElementById("first_name");
const last_name = document.getElementById("last_name");
const email = document.getElementById("user_email");
const password = document.getElementById("user_Password");
const confirm_password = document.getElementById("confirm_password");
const check = document.getElementById("user_check");
const submit = document.getElementById("submit");
const male = document.getElementById("male");
const female = document.getElementById("female");
const message = document.getElementById("messages");
var gender;

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
    first_name.value === "" ||
    last_name.value === "" ||
    !mail_check(email.value) ||
    !check.checked ||
    !pass_check(password.value, confirm_password.value) ||
    gender === undefined
  ) {
    alert("please fill all data ");
    e.preventDefault();
  } else if (password.value.length < 6) {
    console.log(first_name.value);
    console.log(last_name.value);
    console.log(!mail_check(email.value));
    console.log(!check.checked);
    console.log(!pass_check(password.value));
    alert("password can't be less than 6 digit");
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

/*
const button_enable = (
  first_name,
  last_name,
  email,
  password,
  confirm_password,
  gender,
  check
) => {
  if (
    first_name === "" ||
    last_name === "" ||
    mail_check(email) ||
    !check ||
    !pass_check(password, confirm_password) ||
    gender === undefined
  ) {
    console.log("fail");
    console.log(first_name);
    console.log(last_name);
    console.log(mail_check(email));
    console.log(check);
    console.log(gender);
    console.log(pass_check(password));
    return false;
  } else {
    console.log("true");
    console.log(first_name);
    console.log(last_name);
    console.log(!mail_check(email));
    console.log(check);
    console.log(pass_check(password));
    return true;
  }
};
if (
        button_enable(
          first_name.value,
          last_name.value,
          email.value,
          password.value,
          confirm_password.value,
          gender,
          check.checked
        )
      ) {
        submit.disabled = false;
      }
*/
