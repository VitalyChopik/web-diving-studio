function heroBlock(heroBlocks) {


  // Пройдитесь по каждому элементу и установите анимацию
  heroBlocks.forEach((valueElement, index) => {
    const targetValue = parseInt(valueElement.getAttribute('data-value'), 10);
    const duration = 2500 + index * 500; // Увеличивайте длительность для каждого следующего блока

    animateValue(valueElement, 0, targetValue, duration);
  });

  function animateValue(element, start, end, duration) {
    const range = end - start;
    const increment = end > start ? 1 : -1;
    const stepTime = Math.abs(Math.floor(duration / range));
    let timer;

    function updateValue() {
      start += increment;
      element.textContent = start;

      if (start === end) {
        clearInterval(timer);
      }
    }

    timer = setInterval(updateValue, stepTime);
    updateValue(); // Сразу обновите значение, чтобы избежать начальной задержки
  }
}
export default heroBlock;