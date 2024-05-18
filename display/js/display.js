function updateTime() {
  const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
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
  "features/surat_masuk.php",
  "features/undangan.php",
  "features/agendaA.php",
  "features/agendaM.php",
];

let currentIndex = 0;

// Function to cycle through the pages
function cyclePages() {
  currentIndex = (currentIndex + 1) % pages.length;
  window.location.href = pages[currentIndex];
}

// Set interval to cycle pages every 10 seconds
setInterval(cyclePages, 10000);
