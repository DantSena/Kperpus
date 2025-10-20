from flask import Flask, render_template, request, redirect, url_for, flash
import mysql.connector

# Tambahkan static_url_path agar path /kperpus/static bisa diakses benar
app = Flask(
    __name__,
    static_folder='static',
    static_url_path='/kperpus/static',
    template_folder='templates'
)

app.secret_key = 'rahasia123'

# Koneksi database
db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="Sm4r1.3k4",
    database="kperpus"
)

@app.route('/', methods=['GET', 'POST'])
def index():
    cursor = db.cursor(dictionary=True)

    if request.method == 'POST':
        tanggal = request.form['tanggal']
        nama = request.form['nama']
        kelas = request.form['kelas']
        keperluan = request.form['keperluan']
        judul_buku = request.form.get('judul_buku', '')
        nomor_buku = request.form.get('nomor_buku', '')
        keterangan_lain = request.form.get('keterangan_lain', '')

        sql = """INSERT INTO kunjungan 
                 (tanggal, nama, kelas, keperluan, judul_buku, nomor_buku, keterangan_lain)
                 VALUES (%s, %s, %s, %s, %s, %s, %s)"""
        val = (tanggal, nama, kelas, keperluan, judul_buku, nomor_buku, keterangan_lain)
        cursor.execute(sql, val)
        db.commit()

        flash("? Data berhasil disimpan!", "success")
        return redirect(url_for('index'))

    cursor.execute("SELECT * FROM kunjungan ORDER BY id DESC")
    data = cursor.fetchall()
    cursor.close()

    return render_template('index.html', kunjungan=data)

if __name__ == '__main__':
    app.run(debug=True)
