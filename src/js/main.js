/**
 * !(i)
 * Код попадает в итоговый файл, только когда вызвана функция, например FLSFunctions.spollers();
 * Или когда импортирован весь файл, например import "files/script.js";
 * Неиспользуемый код в итоговый файл не попадает.

 * Если мы хотим добавить модуль следует его раскомментировать
 */
// import MousePRLX from './libs/parallaxMouse'
// import AOS from 'aos'
// import Swiper, { Navigation, Pagination } from 'swiper';

import BaseHelpers from './helpers/BaseHelpers';
// import PopupManager from './modules/PopupManager';
import BurgerMenu from './modules/BurgerMenu';
import contacForm from './scripts/contactForm';
import heroBlock from './scripts/heroBlock';
import portfolioSection from './scripts/portfolioSection';
import servicesSection from './scripts/servicesSection';
import singlePage from './scripts/singlePage';
// import Tabs from './modules/Tabs';
// import Accordion from './modules/Accordion';

BaseHelpers.checkWebpSupport();

BaseHelpers.addTouchClass();

BaseHelpers.addLoadedClass();
BaseHelpers.headerFixed();
new BurgerMenu().init();

/**
 *  Библиотека для анимаций
 *  документация: https://michalsnik.github.io/aos
 * */
// AOS.init();

const heroBlocks = document.querySelectorAll('.hero__box-value');
if (heroBlocks) {
	heroBlock(heroBlocks);
}

const contactFormBlock = document.querySelector('.contacts__block');
if (contactFormBlock) {
	contacForm(contactFormBlock);
}
const portfolioBlock = document.querySelector('.portfolio');
if (portfolioBlock) {
	portfolioSection(portfolioBlock);
}
const services = document.querySelector('.services');
if (services) {
	servicesSection(services);
}

singlePage();