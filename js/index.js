// Burger Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-list');

    burger.addEventListener('click', function() {
        nav.classList.toggle('active');
        burger.classList.toggle('toggle');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Simulasi mendapatkan parameter id dari URL
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');

    // Data berita (simulasi data dari database)
    const beritaData = {
        1: {
            title: 'Kejuaraan Sepak Bola',
            date: '20 November 2022',
            image: 'img/download.jpg',
            content: `<p>Kejuaraan sepak bola dunia diadakan di Qatar pada tahun 2022. Ini adalah salah satu turnamen yang paling dinantikan oleh penggemar sepak bola di seluruh dunia. Tim-tim terbaik dari berbagai negara bersaing untuk menjadi juara dunia.</p>
                      <p>Pertandingan ini juga menjadi ajang untuk melihat perkembangan strategi dan kemampuan individu para pemain yang tampil. Banyak momen bersejarah tercipta selama turnamen ini, menjadikannya sebuah event yang tidak terlupakan.</p>`
        },
        2: {
            title: 'CRUD Codeigniter',
            date: '20 November 2024',
            image: 'img/fy_johan.png',
            content: `<p>Belajar Framework CodeIgniter 3 bisa menjadi pengalaman yang sangat menyenangkan bagi pengembang web, terutama bagi mereka yang baru memulai. Dalam artikel ini, kita akan mempelajari cara membuat aplikasi CRUD sederhana dengan CodeIgniter 3.</p>
                      <p>CRUD adalah singkatan dari Create, Read, Update, dan Delete, yang merupakan operasi dasar yang diperlukan dalam membuat aplikasi web dinamis. Dengan memahami konsep dasar ini, Anda bisa mulai mengembangkan aplikasi web yang lebih kompleks.</p>`
        },
        3: {
            title: 'Fullstack Development',
            date: '20 November 2024',
            image: 'img/1.png',
            content: `<p>Belajar backend dengan Flask dan frontend dengan Reactjs bisa menjadi pengalaman yang sangat menyenangkan bagi pengembang web, terutama bagi mereka yang baru memulai. Kombinasi ini memungkinkan pembuatan aplikasi web yang kuat dan fleksibel.</p>
                      <p>Dalam artikel ini, kita akan mengeksplorasi langkah demi langkah bagaimana mengintegrasikan Flask dan Reactjs untuk membangun aplikasi web fullstack yang modern dan responsif.</p>
                      <p>`
            
        }
    };

    // Menampilkan data berita berdasarkan ID
    if (id && beritaData[id]) {
        document.getElementById('news-title').textContent = beritaData[id].title;
        document.getElementById('news-date').textContent = beritaData[id].date;
        document.getElementById('news-image').src = beritaData[id].image;
        document.getElementById('news-content').innerHTML = beritaData[id].content;
    } else {
        document.querySelector('.content').innerHTML = '<p>Berita tidak ditemukan.</p>';
    }
});