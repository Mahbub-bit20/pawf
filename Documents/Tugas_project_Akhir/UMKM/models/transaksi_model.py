from models.db_config import get_connection

def simpan_transaksi(total):
    conn = get_connection()
    cursor = conn.cursor()
    cursor.execute("INSERT INTO transactions (total_harga, tanggal) VALUES (%s, NOW()) RETURNING id", (total,))
    trans_id = cursor.fetchone()[0]
    conn.commit()
    conn.close()
    return trans_id