from models.auth_model import cek_login
from tkinter import messagebox
from views.dashboard_kasir import DashboardKasir
from views.dashboard_pemilik import DashboardPemilik

class AuthController:
    def login(self, username, password, view):
        user = cek_login(username, password)
        if user:
            role = user[3]
            view.withdraw() 
            
            if role == 'pemilik':
                DashboardPemilik(view) 
            else:
                DashboardKasir(view) 
        else:
            messagebox.showerror("Gagal", "Username/Password Salah")