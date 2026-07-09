import tkinter as tk
from tkinter import messagebox
from controllers.auth_controller import AuthController
from assets.theme import COLORS, FONT_HEADER, FONT_NORMAL, CARD_STYLE, ENTRY_STYLE, BTN_PRIMARY

class LoginView(tk.Tk):
    def __init__(self):
        super().__init__()
        self.title("Login Sistem")
        self.geometry("350x400")
        self.configure(bg=COLORS["primary"])
        self.controller = AuthController()
    
        tk.Label(
            self, text="LOGIN", 
            font=FONT_HEADER, 
            bg=COLORS["primary"], 
            fg="white"
        ).pack(pady=40)
        
        frame = tk.Frame(self, **CARD_STYLE)
        frame.pack(fill=tk.BOTH, expand=True, padx=30, pady=(0, 40))
        
        tk.Label(frame, text="Username:", bg=COLORS["surface"], font=FONT_NORMAL).pack(anchor="w")
        self.entry_user = tk.Entry(frame, **ENTRY_STYLE)
        self.entry_user.pack(fill=tk.X, pady=5)
        
        tk.Label(frame, text="Password:", bg=COLORS["surface"], font=FONT_NORMAL).pack(anchor="w")
        self.entry_pass = tk.Entry(frame, show="*", **ENTRY_STYLE)
        self.entry_pass.pack(fill=tk.X, pady=5)
        
        tk.Button(
            frame, text="MASUK", 
            command=self.do_login, 
            **BTN_PRIMARY
        ).pack(pady=20, fill=tk.X)

    def do_login(self):
        self.controller.login(self.entry_user.get(), self.entry_pass.get(), self)