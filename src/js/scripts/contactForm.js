function contacForm(contactFormBlock) {
  const form = contactFormBlock.querySelector('.contacts__form');
  const spinner = form.querySelector('.spinner');
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    sendData();
  });

  function sendData() {
    spinner.classList.add('active');
    const formData = new FormData(form);
    fetch('https://formsubmit.co/web-divindstudio@yandex.by', {
      method: 'POST',
      body: formData,
      mode: 'no-cors'
    })
      .then(() => {
        spinner.classList.remove('active');
        contactFormBlock.classList.add('active');
      })
      .catch(error => {
        console.error('Error sending data:', error);
      });
  }
}

export default contacForm;
