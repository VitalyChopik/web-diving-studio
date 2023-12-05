function servicesSection(services) {
  const serviceInfo = services.querySelector('.services__info');
  const servicesBoxs = services.querySelectorAll('.services__box');
  servicesBoxs.forEach(servicesBox => {
    servicesBox.addEventListener('click', () => {
      servicesBoxs.forEach(item => {
        item.classList.remove('active');
      })
      servicesBox.classList.add('active');
    });
  });
}
export default servicesSection;