import tkinter as tk
from tkinter import messagebox
from assets.theme import COLORS, FONT_HEADER, BTN_PRIMARY, BTN_DANGER

class DashboardPemilik(tk.Toplevel):
    def __init__(self, login_view):
        super().__init__()
        self.login_view = login_view
        self.title("Dashboard Pemilik")
        self.geometry("400x450")
        self.configure(bg=COLORS["bg"])

        tk.Label(
            self, text="Menu Pemilik", 
            font=FONT_HEADER, 
            bg=COLORS["bg"], 
            fg=COLORS["primary"]
        ).pack(pady=30)
        
        tk.Button(
            self, text="Manajemen Barang", 
            command=self.buka_manajemen, 
            **BTN_PRIMARY, 
            padx=20, pady=10
        ).pack(pady=10, ipadx=10)
        
        tk.Button(
            self, text="Logout", 
            command=self.logout, 
            **BTN_DANGER, 
            padx=20, pady=10
        ).pack(pady=10, ipadx=10)

    def buka_manajemen(self):
        from views.manajemen_barang_view import ManajemenBarangView
        ManajemenBarangView(self)

    def logout(self):
        if messagebox.askyesno("Logout", "Yakin ingin keluar?"):
            self.destroy()
            self.login_view.deiconify()