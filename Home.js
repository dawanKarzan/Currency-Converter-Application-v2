let fCurrency = "USD"; // to make first currency as a global varible and i assign then to usd so it can work for first time the page loaded
let sCurrency = "USD"; // to make second currency as a global varible 

//to get the first currncy after any change
function assignFirstCurrency(value) {
  fCurrency = value;
  updateSecondInput(document.getElementById("number_input").value);
}

//to get the second currency after any change
function assignSecondCurrency(value) {
  sCurrency = value;
  updateSecondInput(document.getElementById("number_input").value);//i trying to use the function again so when the user change currncy it the user doesn't have to change the number again  
}
function handleFormSubmit() {
  const value = document.getElementById("number_input").value;
  updateSecondInput(value);
  return false;
}
//to change the second input and show the user the cal
// and i got all the number from google to calculate them
function updateSecondInput(value) {
  // Make an AJAX request to the PHP file
  fetch('home.php', {
    method: 'POST',
    body: new URLSearchParams({
      finput: value,
      fcurrency: fCurrency,
      scurrency: sCurrency
    })
  })
  .then(response => response.json())
  .then(data => {
    // Update the second input with the converted value
    document.getElementById("second_input").value = data.newValue;
  })
  .catch(error => {
    console.error('Error:', error);
  });
}
    