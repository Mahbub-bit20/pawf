import tkinter as tk
from tkinter import ttk, messagebox
from models.produk_model import ambil_semua_produk
from assets.theme import COLORS, FONT_HEADER, FONT_NORMAL, FONT_BOLD, CARD_STYLE, BTN_PRIMARY, BTN_SUCCESS

class TransaksiView(tk.Toplevel):
    def __init__(self, parent):
        super().__init__(parent)
        self.title("Transaksi Kasir")
        self.geometry("700x650")
        self.configure(bg=COLORS["bg"])
        self.keranjang = []

        tk.Label(
            self, text="Sistem Transaksi", 
            font=FONT_HEADER, 
            bg=COLORS["bg"], 
            fg=COLORS["primary"]
        ).pack(pady=15)

        main_frame = tk.Frame(self, **CARD_STYLE)
        main_frame.pack(fill=tk.BOTH, expand=True, padx=20, pady=(0, 20))

        tk.Label(main_frame, text="Daftar Produk:", font=FONT_BOLD, bg=COLORS["surface"]).pack(anchor="w")
        self.tree_produk = ttk.Treeview(main_frame, columns=("ID", "Nama", "Harga", "Stok"), show="headings", height=8)
        for col in ("ID", "Nama", "Harga", "Stok"): 
            self.tree_produk.heading(col, text=col)
            self.tree_produk.column(col, width=100)
        self.tree_produk.pack(fill=tk.X, pady=5)

        tk.Button(
            main_frame, text="Tambah ke Keranjang", 
            command=self.tambah_ke_keranjang, 
            **BTN_PRIMARY
        ).pack(pady=10)

        tk.Label(main_frame, text="Keranjang:", font=FONT_BOLD, bg=COLORS["surface"]).pack(anchor="w", pady=(10,0))
        self.tree_keranjang = ttk.Treeview(main_frame, columns=("Nama", "Harga"), show="headings", height=5)
        for col in ("Nama", "Harga"): 
            self.tree_keranjang.heading(col, text=col)
            self.tree_keranjang.column(col, width=200)
        self.tree_keranjang.pack(fill=tk.X, pady=5)

        self.lbl_info = tk.Label(
            main_frame, text="Total Barang: 0 | Total Harga: Rp 0", 
            font=FONT_BOLD, bg=COLORS["surface"], fg=COLORS["primary"]
        )
        self.lbl_info.pack(pady=10)
        
        tk.Button(
            main_frame, text="Selesai & Bayar", 
            command=self.bayar, 
            **BTN_SUCCESS
        ).pack(fill=tk.X)

        self.load_produk()

    def load_produk(self):
        for i in self.tree_produk.get_children(): self.tree_produk.delete(i)
        for row in ambil_semua_produk():
            self.tree_produk.insert("", "end", values=row)

    def tambah_ke_keranjang(self):
        selected = self.tree_produk.selection()
        if selected:
            item = self.tree_produk.item(selected[0])['values']
            try:
                nama = item[1]
                harga = int(float(item[2])) 
            except (ValueError, TypeError):
                harga = 0
            
            self.keranjang.append({'nama': nama, 'harga': harga})
            self.tree_keranjang.insert("", "end", values=(nama, f"Rp {harga:,}"))
            
            total_barang = len(self.keranjang)
            total_harga = sum([x['harga'] for x in self.keranjang])
            self.lbl_info.config(text=f"Total Barang: {total_barang} | Total Harga: Rp {total_harga:,}")

    def bayar(self):
        if not self.keranjang:
            messagebox.showwarning("Peringatan", "Keranjang kosong!")
            return
        
        total_akhir = sum([item['harga'] for item in self.keranjang])
        if messagebox.askyesno("Bayar", f"Total: Rp {total_akhir:,}. Lanjutkan?"):
            messagebox.showinfo("Sukses", "Transaksi Berhasil!")
    
            self.keranjang = []
            self.tree_keranjang.delete(*self.tree_keranjang.get_children())
            self.lbl_info.config(text="Total Barang: 0 | Total Harga: Rp 0")