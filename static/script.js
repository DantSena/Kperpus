
document.addEventListener("DOMContentLoaded", function () {
    const keperluan = document.getElementById("keperluan");
    const isianBuku = document.getElementById("isian-buku");
    const isianLainnya = document.getElementById("isian-lainnya");
    const judulBuku = document.getElementById("judul_buku");
    const nomorBuku = document.getElementById("nomor_buku");
    const keteranganLain = document.getElementById("keterangan_lain");

    keperluan.addEventListener("change", function () {
        const nilai = keperluan.value;

        isianBuku.style.display = "none";
        isianLainnya.style.display = "none";

        judulBuku.required = false;
        nomorBuku.required = false;
        keteranganLain.required = false;

        if (nilai === "Meminjam Buku" || nilai === "Mengembalikan Buku") {
            isianBuku.style.display = "block";
            judulBuku.required = true;
            nomorBuku.required = true;
        } else if (nilai === "Lainnya") {
            isianLainnya.style.display = "block";
            keteranganLain.required = true;
        }
    });
});
