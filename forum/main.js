// Script JavaScript untuk interaktivitas (jika diperlukan)
// Contoh: Menambahkan fungsi carousel otomatis

let currentSlide = 0;
const slides = document.querySelectorAll(".carousel-item");

function showSlide(index) {
  slides.forEach((slide) => slide.classList.remove("active"));
  slides[index].classList.add("active");
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}

setInterval(nextSlide, 5000); // Ganti slide setiap 5 detik

// JavaScript untuk modal dan buat topik baru
document.addEventListener("DOMContentLoaded", function () {
  const newTopicModal = document.getElementById("newTopicModal");
  const newTopicForm = document.getElementById("newTopicForm");
  const btnNewTopic = document.querySelector(".btn-new-topic");
  const closeBtn = document.querySelector(".close");
  const forumTopics = document.querySelector(".forum-topics");

  // Buka modal saat tombol "Buat Topik Baru" diklik
  btnNewTopic.addEventListener("click", function () {
    newTopicModal.style.display = "block";
  });

  // Tutup modal saat tombol "x" diklik
  closeBtn.addEventListener("click", function () {
    newTopicModal.style.display = "none";
  });

  // Tutup modal jika pengguna mengklik di luar modal
  window.addEventListener("click", function (event) {
    if (event.target == newTopicModal) {
      newTopicModal.style.display = "none";
    }
  });

  // Tangani pengiriman formulir untuk topik baru
  newTopicForm.addEventListener("submit", function (event) {
    event.preventDefault();

    // Ambil nilai dari formulir
    const title = document.getElementById("title").value;
    const description = document.getElementById("description").value;

    // Buat elemen topik baru
    const newTopic = document.createElement("div");
    newTopic.classList.add("forum-topic");
    newTopic.innerHTML = `
      <h3><a href="topik.php">${title}</a></h3>
      <p>${description}</p>
      <div class="forum-topic-meta">
        <span><i class="fas fa-user"></i> Oleh: Pengguna</span>
        <span><i class="fas fa-comments"></i> 0 Komentar</span>
        <span><i class="fas fa-clock"></i> Baru saja</span>
      </div>
    `;

    // Tambahkan topik baru ke daftar topik
    forumTopics.prepend(newTopic);

    // Reset formulir dan tutup modal
    newTopicForm.reset();
    newTopicModal.style.display = "none";
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const commentForm = document.querySelector(".comment-form");
  const commentTextarea = commentForm.querySelector("textarea");
  const commentsContainer = document.querySelector(".comments");

  // Tangani pengiriman komentar
  commentForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const newCommentText = commentTextarea.value;
    if (newCommentText.trim() === "") return; // Jangan tambahkan komentar kosong

    // Buat elemen komentar baru
    const newComment = document.createElement("div");
    newComment.classList.add("comment");
    newComment.innerHTML = `
      <span><i class="fas fa-user"></i> Anda</span>
      <p>${newCommentText}</p>
      <span class="comment-time"><i class="fas fa-clock"></i> Baru saja</span>
    `;

    // Tambahkan komentar baru ke daftar komentar
    commentsContainer.appendChild(newComment);

    // Kosongkan textarea
    commentTextarea.value = "";
  });
});
