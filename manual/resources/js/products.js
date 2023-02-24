// Get the filter buttons and product cards
const filterButtons = document.querySelectorAll('.filter-button');
const productCards = document.querySelectorAll('.product-card');

// Add click event listener to each filter button
filterButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove the "active" class from all filter buttons
    filterButtons.forEach(button => button.classList.remove('active'));
    
    // Add the "active" class to the clicked filter button
    button.classList.add('active');
    
    // Get the category of the clicked filter button
    const category = button.id.replace('filter-', '');
    
    // Show only the product cards with the selected category
    productCards.forEach(card => {
      if (category === 'all' || card.dataset.category === category) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  });
});

