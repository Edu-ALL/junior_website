import './bootstrap';
import 'flowbite';

window.addEventListener('scroll', function() {
    // Logika untuk menentukan apakah scroll lebih dari 200px
    if (window.scrollY > 150) {
        // Jika scroll lebih dari 200px, tambahkan kelas 'bg-white' dan hapus kelas 'bg-white/100'
        document.getElementById('navbar').classList.add('bg-white');
        document.getElementById('navbar').classList.remove('bg-white/0');
    } else {
        // Jika tidak, tambahkan kembali kelas 'bg-white/100' dan hapus kelas 'bg-white'
        document.getElementById('navbar').classList.add('bg-white/0');
        document.getElementById('navbar').classList.remove('bg-white');
    }
});