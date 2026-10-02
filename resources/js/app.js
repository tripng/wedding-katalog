import '../css/app.css';

// Catalog search filter — mirrors the template's inline script
document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.getElementById('catalogSearchInput');
  const cards = document.querySelectorAll('article');

  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      const query = e.target.value.toLowerCase().trim();

      cards.forEach((card) => {
        const cardText = card.innerText.toLowerCase();

        if (query === '' || cardText.includes(query)) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  }
});
