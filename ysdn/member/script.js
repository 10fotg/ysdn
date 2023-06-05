
<script>

      document.getElementById('myForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission

      // Get the selected date value
      var selectedDate = document.getElementById('date').value;
      console.log('Selected date:', selectedDate);

      // Create a FormData object to send the data to PHP
      var formData = new FormData();
      formData.append('date', selectedDate);

      // Send the form data to a PHP file using AJAX
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'process.php', true);
      xhr.onload = function() {
        if (xhr.status === 200) {
          console.log('Response:', xhr.responseText);
          // Handle the response from PHP if needed
        }
      };
      xhr.send(formData);

      // Reset the form
      this.reset();
    });

</script>
