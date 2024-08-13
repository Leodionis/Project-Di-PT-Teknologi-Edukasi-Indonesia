// Fungsi untuk menampilkan atau menyembunyikan jawaban FAQ
function toggleAnswer(element) {
    // Mendapatkan elemen item FAQ (parent dari pertanyaan yang diklik)
    const faqItem = element.parentElement;
    
    // Memeriksa apakah item FAQ saat ini terbuka
    const isOpen = faqItem.classList.contains('open');
    
    // Menutup semua item FAQ yang terbuka
    document.querySelectorAll('.faq-item').forEach(item => {
        item.classList.remove('open');
    });
    
    // Jika item FAQ saat ini tidak terbuka, maka buka item tersebut
    if (!isOpen) {
        faqItem.classList.add('open');
    }
    
}
