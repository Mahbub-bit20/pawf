from models.db_config import get_connection

def tambah_produk(nama, harga, stok):
    conn = get_connection()
    cursor = conn.cursor()
    cursor.execute("INSERT INTO products (nama_produk, harga, stok) VALUES (%s, %s, %s)", (nama, harga, stok))
    conn.commit()
    conn.close()

def ambil_semua_produk():
    conn = get_connection()
    cursor = conn.cursor()
    cursor.execute("SELECT * FROM products")
    data = cursor.fetchall()
    conn.close()
    return data

def hapus_produk(produk_id):
    conn = get_connection()
    cursor = conn.cursor()
    cursor.execute("DELETE FROM products WHERE id = %s", (produk_id,))
    conn.commit()
    conn.close()