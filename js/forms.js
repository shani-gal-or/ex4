

document.querySelector('#form-tag').addEventListener('submit', function(event) {
    var age = document.querySelector('#age').value;
    if (age < 23 || age > 38) {
        event.preventDefault();
        document.querySelector('#age-error').textContent = 'Please enter an age between 23 and 38.';
    }
  });
  