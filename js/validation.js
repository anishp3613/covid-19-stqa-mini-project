function validateRegister() {
  const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  const phonePattern = /^[0-9]{10}$/;
  const passPattern = /^(?=.*[A-Z])(?=.*\d).{6,}$/;

  const email = document.querySelector('input[name="email"]').value;
  const phone = document.querySelector('input[name="phone"]').value;
  const password = document.querySelector('input[name="password"]').value;

  if (!email.match(emailPattern)) {
    alert("Invalid email format!");
    return false;
  }
  if (!phone.match(phonePattern)) {
    alert("Phone must be 10 digits!");
    return false;
  }
  if (!password.match(passPattern)) {
    alert("Password must include at least 1 uppercase letter and 1 number!");
    return false;
  }
  return true;
}
