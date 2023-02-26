// Get the form element
const profileForm = document.querySelector('form');

// Add event listener to the form submit button
profileForm.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent form from submitting

  // Get the form data
  const formData = new FormData(profileForm);

  // Send an AJAX request to update profile data
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'update_profile.php');
  xhr.onload = function() {
    if (xhr.status === 200) {
      // Display success message
      alert('Profile updated successfully!');
    } else {
      // Display error message
      alert('Profile update failed!');
    }
  };
  xhr.send(formData);
});
