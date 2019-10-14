console.log("Test javascript file");


// Goal 1: To add a minimum date to checkout an item. The min date should be the current date.
const currentDate = new Date().toISOString().split('T')[0];

// Setting the min for the checkout date:
document.getElementsByName('checkout_date')[0].setAttribute('min', currentDate);

// Setting the min for checkin date:
document.getElementsByName('checkin_date')[0].setAttribute('min', currentDate);
