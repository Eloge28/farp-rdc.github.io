import { news, team } from "./data.js";

const nav = document.querySelector(".navbar");
const newsContainer = document.querySelector(".news-container");
const newsContent = document.querySelector(".news");
const newsBtn = document.querySelector(".news-container .btn");
const banner = document.querySelector(".banner");

const menuSearch = document.querySelector(".menus__search");
const humbergerBtn = document.querySelector(".toggle__menu");

humbergerBtn.addEventListener("click", function (e) {
  const target = e.target;

  menuSearch.classList.toggle("hide__menu");
  if (target.classList.contains("show__menu")) {
    const parent = target.parentNode;

    parent.querySelectorAll("i").forEach((sub) => {
      sub.classList.add("show__menu");
      sub.classList.remove("hide__menu");
      if (sub === target) {
        target.classList.remove("show__menu");
        target.classList.add("hide__menu");
      }
    });
  }
});

/**
 * Setting active link
 * @param {Event} e
 * @returns {HTMLElement}
 */
const settActiveLink = function (e) {
  // e.preventDefault();

  const link = e.target;
  const sublings = link.closest(".navbar").querySelectorAll(".item");
  sublings.forEach((i) => {
    if (i !== link) {
      i.classList.remove("active");
    }
  });
  link.closest(".item").classList.add("active");
};

nav.addEventListener("click", settActiveLink);

/**
 * Create dynamicaly cards
 *
 * @param {Array} data
 * @returns {HTMLElement}
 */
const generateCard = function (data = []) {
  const cardsConatiner = document.querySelector(".cards");
  data.forEach((item) => {
    cardsConatiner.insertAdjacentHTML(
      "beforeend",
      `<div class="card">
      <div class="picture">
        <img src="${item.img}" alt="" />
      </div>
      <h3>${item.fullname}</h3>
      <p>${item.word}</p>
    </div>`
    );
  });
};
generateCard(team);

/**
 * Get and generate news
 *
 * @param {Array} data
 * @returns {HTMLElement}
 */
const generateNews = function (data = []) {
  data.forEach((n) => {
    const newContent = n.content.split(" ");
    const [a, b, c, d, e, f, g, h, i, j, k, l, m, o, p, q, r, s, t] =
      newContent;
    const shortText =
      [a, b, c, d, e, f, g, h, i, j, k, l, m, o, p, q, r, s, t].join(" ") +
      "...";

    newsContent.insertAdjacentHTML(
      "beforeend",
      `
        <div class="card">
          <div class="card-img">
            <img src="${n.img}" />
          </div>
          <h3>
            <a href="#">${n.title}</a>
          </h3>
          <p>${shortText}</p>
          <a href="#" class="read__more">Lire</a>
        </div>
        `
    );
  });
};
generateNews(news);

const newsObserver = new IntersectionObserver(
  (entries) => {
    const [entry] = entries;

    if (!entry.isIntersecting) return;

    const h2 = document.querySelector(".news-title");
    const news = document.querySelector(".news");

    h2.style.opacity = 1;
    h2.style.transform = "translateY(0)";
    news.style.opacity = 1;
    news.style.transform = "translateY(0)";

    newsObserver.unobserve(newsContainer);
    newsObserver.disconnect(newsContainer);
  },
  { root: null, threshold: 0.2 }
);

newsObserver.observe(newsContainer);

const newsBtnObserver = new IntersectionObserver((entries) => {
  const [entry] = entries;

  if (!entry.isIntersecting) return;

  const btn = document.querySelector(".news-container .btn button");
  btn.style.transform = "scale(1)";
  btn.style.opacity = 1;

  newsBtnObserver.unobserve(newsBtn);
  newsBtnObserver.disconnect(newsBtn);
});
newsBtnObserver.observe(newsBtn);

/* Automatic Slide Banner */
const imgs = document.querySelectorAll(".banner .slide img");

let currentSlide = 0;
let slideInterval;

/**
 * Slider for Banner
 */
function nextSlide() {
  imgs[currentSlide].classList.remove("active");
  currentSlide = (currentSlide + 1) % imgs.length;
  imgs[currentSlide].classList.add("active");
}

// Obtimize the Banner Performance
const bannerObserver = new IntersectionObserver((entries) => {
  const [entry] = entries;

  if (entry.isIntersecting) {
    slideInterval = setInterval(nextSlide, 5000);
  } else {
    clearInterval(slideInterval);
  }
});

bannerObserver.observe(banner);
