const readMoreLinks = document.querySelectorAll('.read-more');
const extraContents = document.querySelectorAll('.extra-content');

readMoreLinks.forEach((link, index) => {
   link.addEventListener('click', function () {
      const extraContent = extraContents[index];
      if (extraContent.classList.contains('hidden')) {
         extraContent.classList.remove('hidden');
         link.textContent = 'Read Less';
      } else {
         extraContent.classList.add('hidden');
         link.textContent = 'Read More';
      }
   });
});