<script>
document.getElementById('myForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission

  // Get the selected date value
  var selectedDate = document.getElementById('date').value;
  console.log('Selected date:', selectedDate);

  // Perform additional actions with the selected date

  // Reset the form
  this.reset();
});
</script>