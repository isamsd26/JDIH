function updateTime() {
  const days = ["Minggu", "Senin", "Senin", "Rabu", "Kamis", "Jumat", "Sabtu"];
  const months = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
  ];
  const now = new Date();
  const day = days[now.getDay()];
  const date = now.getDate();
  const month = months[now.getMonth()];
  const year = now.getFullYear();
  const time = now.toLocaleTimeString();

  const fullDate = `${day}, ${date} ${month} ${year}`;
  document.getElementById("current-day-date").textContent = fullDate;
  document.getElementById("current-time").textContent = time;
}

// Initial call to set the time immediately
updateTime();

// Update the time every second
setInterval(updateTime, 1000);

const pages = [
  "../display.php",
  "surat_masuk.php",
  "undangan.php",
  "agendaA.php",
  "agendaM.php",
];

// Get the current URL path
const currentPath = window.location.pathname.split("/").pop();

// Get the last visited page from sessionStorage
let lastVisitedPage = sessionStorage.getItem("lastVisitedPage");

// If last visited page is found, set the currentIndex to one after last visited page
let currentIndex = 0;
if (lastVisitedPage) {
  currentIndex = (pages.indexOf(lastVisitedPage) + 1) % pages.length;
}

// Function to cycle through the pages
function cyclePages() {
  sessionStorage.setItem("lastVisitedPage", pages[currentIndex]);
  window.location.href = pages[currentIndex];
  currentIndex = (currentIndex + 1) % pages.length;
}

// Set the current page as the last visited page
sessionStorage.setItem("lastVisitedPage", currentPath);

// Set interval to cycle pages every 10 seconds
setInterval(cyclePages, 10000);
