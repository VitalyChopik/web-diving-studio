function servicesSection(services) {
  const serviceInfo = services.querySelector('.services__info');
  const serviceInfoClose = services.querySelector('.services__info-close');
  const serviceInfoContent = serviceInfo.querySelector('.services__info-content');
  const content = {
    price: serviceInfo.querySelector('.services__info-price'),
    title: serviceInfo.querySelector('.services__info-title'),
    excerpt: serviceInfo.querySelector('.services__info-excerpt'),
    list: serviceInfo.querySelector('.services__info-list'),
    items: serviceInfo.querySelectorAll('.services__info-item')
  }
  const servicesBoxs = services.querySelectorAll('.services__box');
  servicesBoxs.forEach(servicesBox => {
    const boxContent = {
      price: servicesBox.querySelector('.services__box-price'),
      title: servicesBox.querySelector('.services__box-second-title'),
      excerpt: servicesBox.querySelector('.services__box-exerpt'),
      list: servicesBox.querySelector('.services__box-list'),
      items: Array.from(servicesBox.querySelectorAll('.services__box-item')).map(item => item.cloneNode(true))
    }
    servicesBox.addEventListener('click', () => {
      servicesBoxs.forEach(item => {
        item.classList.remove('active');
      })
      servicesBox.classList.add('active');

      serviceInfo.classList.add('hidden');

      // Ждем завершения анимации и применяем изменения
      setTimeout(() => {
        // Заменяем HTML-содержимое элементов в объекте content новым содержимым из boxContent
        Object.entries(boxContent).forEach(([key, value]) => {
          content[key].innerHTML = value.innerHTML;
        });

        serviceInfo.classList.remove('hidden');

        if (window.innerWidth <= 992) {
          serviceInfo.classList.add('open');
          document.documentElement.classList.toggle('lock');
        }
      }, 750);
    });
  });
  serviceInfoClose.addEventListener('click', () => {
    serviceInfo.classList.remove('open');
    document.documentElement.classList.toggle('lock');
  });
  servicesBoxs[0].click();
}
export default servicesSection;
