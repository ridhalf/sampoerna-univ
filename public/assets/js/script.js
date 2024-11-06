async function loadComponent(url, selector) {
  try {
    const response = await fetch(url);
    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
    const content = await response.text();

    const element = document.querySelector(selector);
    if (element) {
      element.innerHTML = content;

      // Tambahkan event listener di sini setelah komponen dimuat
      if (selector === ".navbar") {
        addNavbarListeners(); // Memanggil fungsi untuk menambahkan event listener
        addDropdownNavbar();
        addHumburger();
        setActiveLink();
      }
    } else {
      console.error(`Element with selector "${selector}" not found.`);
    }
  } catch (error) {
    console.error("Failed to load the component:", error);
  }
}

// Fungsi untuk menambahkan event listener ke navbar
function addNavbarListeners() {
  document.querySelectorAll(".navbar-list .line").forEach((line) => {
    line.addEventListener("click", function (event) {
      // Hentikan klik ini dari menghapus dropdown
      event.stopPropagation();

      const listHeader = this.querySelector(".list-header");

      if (listHeader) {
        // Hapus 'active' dari semua list-header lainnya
        document.querySelectorAll(".list-header.active").forEach((dropdown) => {
          if (dropdown !== listHeader) {
            dropdown.classList.remove("active");
          }
        });

        // Toggle the 'active' class on the clicked line's .list-header
        listHeader.classList.toggle("active");
      }
    });
  });

  // Menghapus class 'active' jika pengguna mengklik di luar elemen dropdown
  document.addEventListener("click", function () {
    document.querySelectorAll(".list-header.active").forEach((dropdown) => {
      dropdown.classList.remove("active");
    });
  });
}

function addDropdownNavbar() {
  const arrowLists = document.querySelectorAll(".list.arrow .tag img");

  arrowLists.forEach((img) => {
    img.addEventListener("click", function () {
      const listItem = img.closest(".list.arrow");
      const tagImg = listItem.querySelector(".tag img");
      const bar = listItem.querySelector(".bar");

      tagImg.classList.toggle("active");
      bar.classList.toggle("active");
    });
  });
}

function addHumburger() {
  const hamburgerMenu = document.querySelector(".hamburger-menu");
  const navbarMobile = document.querySelector(".navbar-mobile");
  const closeButton = document.querySelector(".close");
  const sticky = document.querySelector(".sticky");

  // Toggle active class when hamburger menu is clicked
  hamburgerMenu.addEventListener("click", function () {
    navbarMobile.classList.toggle("active");

    // Toggle body class to hide scrollbar when navbar-mobile is active
    if (navbarMobile.classList.contains("active")) {
      document.body.classList.add("no-scroll");
    } else {
      document.body.classList.remove("no-scroll");
    }
  });

  // Close navbar when the close button is clicked
  closeButton.addEventListener("click", function () {
    navbarMobile.classList.remove("active");
    document.body.classList.remove("no-scroll"); // Restore scrollbar when navbar is closed
  });
}

function setActiveLink() {
  const currentLocation = window.location.pathname;
  const links = document.querySelectorAll(
    ".navbar-first .line a, .navbar-second .line a"
  );

  links.forEach((link) => {
    const linkHref = link.getAttribute("href");
    if (currentLocation.includes(linkHref)) {
      link.parentElement.classList.add("active"); // Highlight the active page link
    } else {
      link.parentElement.classList.remove("active");
    }
  });
}

// Fungsi berjalan untuk DOM
window.addEventListener("DOMContentLoaded", () => {
  loadComponent("/partials/header", ".navbar");
  loadComponent("/partials/footer", ".footer");
  loadComponent("/partials/floating", ".floating");
});

// content question - FAQs

const questions = document.querySelectorAll(".item-question");

questions.forEach((question) => {
  question.addEventListener("click", () => {
    const contentDesc = question.querySelector(".content-decs");
    const imgQuestion = question.querySelector(".question-img");

    imgQuestion.classList.toggle("active");
    contentDesc.classList.toggle("active");
  });
});

// core curriculum - choose competencies
const tabItems = document.querySelectorAll(".item-competencies li");
const contentItems = document.querySelectorAll(".content-competencies ul");

tabItems.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabItems.forEach((item) => item.classList.remove("active"));
    contentItems.forEach((content) => content.classList.remove("active"));

    tab.classList.add("active");
    contentItems[index].classList.add("active");
  });
});

//qair
const qairList = document.querySelectorAll(".qair-list li");
const qairData = document.querySelectorAll(".qair-data .data-list");

qairList.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    qairList.forEach((list) => list.classList.remove("active"));
    qairData.forEach((data) => data.classList.remove("active"));

    tab.classList.add("active");
    qairData[index].classList.add("active");
  });
});

// governance
const tabgovernance = document.querySelectorAll(
  ".governance-vision .tab-ul .tab-li"
);
const contentgovernance = document.querySelectorAll(
  ".governance-vision .content-ul .content-li"
);

tabgovernance.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabgovernance.forEach((list) => list.classList.remove("active"));
    contentgovernance.forEach((content) => content.classList.remove("active"));

    tab.classList.add("active"); // Perbaikan di sini
    contentgovernance[index].classList.add("active");
  });
});

// voices
const listVoice = document.querySelectorAll(".list-voice li");
const contentVoice = document.querySelectorAll(".content-voice li");

listVoice.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    listVoice.forEach((list) => list.classList.remove("active"));
    contentVoice.forEach((content) => content.classList.remove("active"));

    tab.classList.add("active");
    contentVoice[index].classList.add("active");
  });
});

// university admission
const tabUniv = document.querySelectorAll(".tab-univ li");
const listUniv = document.querySelectorAll(".list-univ li");
const contentUniv = document.querySelectorAll(
  ".content-univ .box-content .content-tab"
);

tabUniv.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabUniv.forEach((list) => list.classList.remove("active"));
    listUniv.forEach((item) => item.classList.remove("active"));
    contentUniv.forEach((content) => content.classList.remove("active"));

    tab.classList.add("active");
    contentUniv[index].classList.add("active");
    listUniv[index].classList.add("active");
  });
});

// requirements tuition

const itemRequirements = document.querySelectorAll(
  ".requirements-tab .tab-criteria .item"
);

const contentRequirements = document.querySelectorAll(
  ".requirements-tab .content-criteria .item"
);

itemRequirements.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    itemRequirements.forEach((item) => item.classList.remove("active"));
    contentRequirements.forEach((content) =>
      content.classList.remove("active")
    );

    tab.classList.add("active");
    contentRequirements[index].classList.add("active");
  });
});

// list-testing

const tabTest = document.querySelectorAll(".box-test .tab-test li");
const contentTest = document.querySelectorAll(".box-test .content-test .item");

tabTest.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabTest.forEach((test) => test.classList.remove("active"));
    contentTest.forEach((content) => content.classList.remove("active"));

    tab.classList.add("active");
    contentTest[index].classList.add("active");
  });
});

// requirements

const tabReq = document.querySelectorAll(".tab-req li");
const listReq = document.querySelectorAll(".list-req li");
const contentReq = document.querySelectorAll(
  ".content-req .box-content .content-tab"
);

tabReq.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabReq.forEach((list) => list.classList.remove("active"));
    listReq.forEach((item) => item.classList.remove("active"));
    contentReq.forEach((content) => content.classList.remove("active"));

    tab.classList.add("active");
    contentReq[index].classList.add("active");
    listReq[index].classList.add("active");
  });
});

document.querySelectorAll(".navbar-list .line").forEach((line) => {
  line.addEventListener("click", function () {
    const listHeader = this.querySelector(".list-header");

    if (listHeader) {
      // Toggle the 'active' class on the clicked line's .list-header
      listHeader.classList.toggle("active");
    }
  });
});
const sources = [
  "assets/img/pages/campus-life/clubs-1.webp",
  "assets/img/pages/campus-life/clubs-2.webp",
  "assets/img/pages/campus-life/clubs-3.webp",
];

const images = document.querySelectorAll(".item-clubs");
let currentIndex = 0;

function updateImage() {
  currentIndex = (currentIndex + 1) % sources.length;

  images.forEach((img) => {
    img.classList.remove("active");
  });

  setTimeout(() => {
    images.forEach((img, index) => {
      img.src = sources[(currentIndex + index) % sources.length]; // Update src in a circular manner
      img.alt = `Club Image ${((currentIndex + index) % sources.length) + 1}`;
    });

    requestAnimationFrame(() => {
      images.forEach((img) => {
        img.classList.add("active");
      });
    });
  }, 2000);
}

updateImage();
setInterval(updateImage, 4000);

// student affairs

const listComprehensive = document.querySelectorAll(
  ".box-list-comprehensive li"
);
const contentComprehensive = document.querySelectorAll(
  ".content-comprehensive li"
);

listComprehensive.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    listComprehensive.forEach((list) => list.classList.remove("active"));
    contentComprehensive.forEach((content) =>
      content.classList.remove("active")
    );

    tab.classList.add("active");
    contentComprehensive[index].classList.add("active");
  });
});

// spac

const tabProspective = document.querySelectorAll(".tab-prospective li");
const contentProspective = document.querySelectorAll(".content-prospective li");

tabProspective.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabProspective.forEach((list) => list.classList.remove("active"));
    contentProspective.forEach((content) => content.classList.remove("active"));

    tab.classList.add("active");
    contentProspective[index].classList.add("active");
  });
});

// Select all tab items and content items
const tabItemss = document.querySelectorAll(".tab-prospective-safety .item");
const contentItemss = document.querySelectorAll(
  ".content-prospective-safety .item"
);

// Function to handle tab switching
function switchTab(index) {
  // Remove active class from all tabs and contents
  tabItemss.forEach((tab, i) => {
    tab.classList.toggle("active", i === index);
    contentItemss[i].classList.toggle("active", i === index);
  });
}

// Add click event listeners to each tab item
tabItemss.forEach((tab, index) => {
  tab.addEventListener("click", () => switchTab(index));
});

const tabProspectivee = document.querySelectorAll(".tab-prospective-it .item");
const contentProspectivee = document.querySelectorAll(
  ".content-prospective-it .item"
);

tabProspectivee.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabProspectivee.forEach((list) => list.classList.remove("active"));
    contentProspectivee.forEach((content) =>
      content.classList.remove("active")
    );

    tab.classList.add("active");
    contentProspectivee[index].classList.add("active");
  });
});

// library

const tabLibrary = document.querySelectorAll(".tab-proquest li");
const boxProquest = document.querySelectorAll(".box-proquest li");

tabLibrary.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabLibrary.forEach((list) => list.classList.remove("active"));
    boxProquest.forEach((content) => content.classList.remove("active"));

    tab.classList.add("active");
    boxProquest[index].classList.add("active");
  });
});

// faculties - fob

const tabfob = document.querySelectorAll(".tab-fob li");
const boxfob = document.querySelectorAll(
  ".content-fob .box-content .content-tab"
);

tabfob.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabfob.forEach((list) => list.classList.remove("active"));
    boxfob.forEach((content) => content.classList.remove("active"));

    tab.classList.add("active");
    boxfob[index].classList.add("active");
  });
});

// fob overview

const tabfoboverview = document.querySelectorAll(
  ".faculty-program .tab-program .list-program li"
);
const boxfoboverview = document.querySelectorAll(
  ".faculty-program .tab-program .content-program li"
);

tabfoboverview.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabfoboverview.forEach((list) => list.classList.remove("active"));
    boxfoboverview.forEach((content) => content.classList.remove("active"));

    tab.classList.add("active");
    boxfoboverview[index].classList.add("active");
  });
});

// fob academics

const tabfobacademics = document.querySelectorAll(
  ".box-academics .position-staff li"
);
const boxfobacademics = document.querySelectorAll(
  ".box-academics .academic-staff li"
);

tabfobacademics.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabfobacademics.forEach((list) => list.classList.remove("active"));
    boxfobacademics.forEach((content) => content.classList.remove("active"));

    tab.classList.add("active");
    boxfobacademics[index].classList.add("active");
  });
});

// fet - tab

const tabfet = document.querySelectorAll(".tab-fet li");
const boxfet = document.querySelectorAll(
  ".content-fet .box-content .content-tab"
);

tabfet.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabfet.forEach((list) => list.classList.remove("active"));
    boxfet.forEach((content) => content.classList.remove("active"));

    tab.classList.add("active");
    boxfet[index].classList.add("active");
  });
});

// foe - tab

const tabfoe = document.querySelectorAll(".tab-foe li");
const boxfoe = document.querySelectorAll(
  ".content-foe .box-content .content-tab"
);

tabfoe.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabfoe.forEach((list) => list.classList.remove("active"));
    boxfoe.forEach((content) => content.classList.remove("active"));

    tab.classList.add("active");
    boxfoe[index].classList.add("active");
  });
});

// fas - tab

const tabfas = document.querySelectorAll(".tab-fas li");
const boxfas = document.querySelectorAll(
  ".content-fas .box-content .content-tab"
);

tabfas.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabfas.forEach((list) => list.classList.remove("active"));
    boxfas.forEach((content) => content.classList.remove("active"));

    tab.classList.add("active");
    boxfas[index].classList.add("active");
  });
});