const singlePage = () => {
  const contentBlock = document.querySelector('.single__content');
  if (contentBlock) {
    const headings = contentBlock.querySelectorAll('h1, h2, h3, h4, h5, h6');
    const tocLinks = document.querySelector('.single__navigation');

    headings.forEach(function (heading, index) {
      const headingId = 'section-' + index;
      heading.setAttribute('id', headingId);

      const tocLink = document.createElement('div');

      const link = document.createElement('a');
      link.href = '#' + headingId;
      link.textContent = `${index + 1}. ${heading.textContent}`;

      link.classList.add('single__navigation-link');

      // tocLink.appendChild(link);

      tocLinks.appendChild(link);
    });
    if (headings.length === 0) {
      tocLinks.style.display = "none";
    }
  }
}
export default singlePage;