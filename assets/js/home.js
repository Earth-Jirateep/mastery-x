document.addEventListener("DOMContentLoaded", function () {
    // 🎯 Swiper ตัวแรก (Hero Section)
    var mainSwiper = new Swiper(".main-swiper", {
        loop: true, // ให้วนซ้ำ
        autoplay: {
            delay: 3000, // เปลี่ยนภาพทุก 3 วินาที
            disableOnInteraction: false, // ให้ autoplay ทำงานต่อแม้มีการคลิกหรือแตะ
        },
        speed: 800, // ความเร็วในการเลื่อน
        effect: "slide", // ใช้ effect แบบ slide
        allowTouchMove: true, // ปิดการลาก
        // **ลบ pagination ออก เพื่อไม่ให้มีจุด Dot**
        pagination: false, // 👈 ปิด Pagination

        // Event เมื่อ Slide เปลี่ยนเสร็จ
        on: {
            slideChangeTransitionStart: function () {
                // ซ่อนเฉพาะข้อความใน Swiper ตัวนี้
                mainSwiper.el.querySelectorAll(".section-top-image-silde-paragraph-box").forEach(el => {
                    el.classList.remove("active");
                });
            },
            slideChangeTransitionEnd: function () {
                // แสดงข้อความของ Slide ที่กำลังแสดงอยู่
                let activeSlide = mainSwiper.el.querySelector(".swiper-slide-active .section-top-image-silde-paragraph-box");
                if (activeSlide) {
                    activeSlide.classList.add("active");
                }
            }
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // 🎯 Swiper ตัวที่สอง (Slide Show) - มี Pagination
    var slideShowSwiper = new Swiper(".section-slide-show-swiper", {
        loop: true,
        autoplay: {
            delay: 4000, // เลื่อนอัตโนมัติทุก 4 วินาที
            disableOnInteraction: false,
        },
        speed: 1000, // ความเร็วของการเปลี่ยนภาพ
        pagination: {
            el: ".swiper-pagination",
            clickable: true, // สามารถคลิก Dot ได้
        },
        effect: "slide",
        allowTouchMove: true, // ปิดการลาก
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const openPopup = document.getElementById("openPopup");
    const popup = document.getElementById("popup");
    const closePopup = document.querySelector(".close-popup");

    // เปิด Popup เมื่อคลิกปุ่ม "ลงทะเบียน"
    openPopup.addEventListener("click", function (event) {
        event.preventDefault(); // ป้องกันการโหลดหน้าใหม่
        popup.style.display = "flex";
    });

    // ปิด Popup เมื่อคลิกที่ปุ่ม "close-popup" เท่านั้น
    closePopup.addEventListener("click", function () {
        popup.style.display = "none";
    });
});

