import tkinter as tk
from tkinter import ttk
from assets.theme import COLORS, FONT_HEADER, ENTRY_STYLE, BTN_SUCCESS
from models.produk_model import ambil_semua_produk, tambah_produk, hapus_produk

class ManajemenBarangView(tk.Toplevel):
    def __init__(self, parent):
        super().__init__(parent)
        self.title("Manajemen Barang")
        self.geometry("600x500")
        self.configure(bg=COLORS["surface"])
        
        tk.Label(self, text="Data Barang", font=FONT_HEADER, bg=COLORS["surface"]).pack(pady=10)
        
        self.tree = ttk.Treeview(self, columns=("ID", "Nama", "Harga", "Stok"), show="headings")
        for col in ("ID", "Nama", "Harga", "Stok"): 
            self.tree.heading(col, text=col)
            self.tree.column(col, width=100)
        self.tree.pack(fill=tk.BOTH, expand=True, padx=20, pady=10)

        frame = tk.Frame(self, bg=COLORS["surface"])
        frame.pack(pady=10)
        
        self.ent_nama = tk.Entry(frame, **ENTRY_STYLE, width=20)
        self.ent_nama.grid(row=0, column=0, padx=5)
        self.ent_nama.insert(0, "Nama Barang")
        
        self.ent_harga = tk.Entry(frame, **ENTRY_STYLE, width=15)
        self.ent_harga.grid(row=0, column=1, padx=5)
        self.ent_harga.insert(0, "Harga")
        
        self.ent_stok = tk.Entry(frame, **ENTRY_STYLE, width=10)
        self.ent_stok.grid(row=0, column=2, padx=5)
        self.ent_stok.insert(0, "Stok")

        tk.Button(
            self, text="Tambah Barang", 
            command=self.add_barang, 
            **BTN_SUCCESS
        ).pack(pady=10, fill=tk.X, padx=100)
        
        self.load_data()

    def load_data(self):
        for i in self.tree.get_children(): self.tree.delete(i)
        for row in ambil_semua_produk(): self.tree.insert("", "end", values=row)

    def add_barang(self):
        tambah_produk(self.ent_nama.get(), self.ent_harga.get(), self.ent_stok.get())
        self.load_data()