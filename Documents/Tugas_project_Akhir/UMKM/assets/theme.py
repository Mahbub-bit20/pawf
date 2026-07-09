# assets/theme.py

# Palet Warna Utama
COLORS = {
    "primary": "#2D3436",     # Abu Gelap Elegan
    "accent": "#0984E3",      # Biru Modern
    "success": "#00B894",     # Hijau Segar
    "danger": "#D63031",      # Merah Modern
    "bg": "#F1F2F6",          # Abu-abu sangat terang
    "surface": "#FFFFFF"      # Putih (Untuk Card)
}

# Tipografi
FONT_HEADER = ("Segoe UI", 18, "bold")
FONT_SUBHEADER = ("Segoe UI", 12, "bold")
FONT_NORMAL = ("Segoe UI", 10)
FONT_BOLD = ("Segoe UI", 10, "bold")

# Komponen Style (Gunakan ini agar kodingan View kamu sangat ringkas)
CARD_STYLE = {"bg": COLORS["surface"], "padx": 20, "pady": 20}
ENTRY_STYLE = {"font": FONT_NORMAL, "relief": "flat", "bg": "#F8F9FA"}

# Style Tombol (Tinggal panggil **BTN_PRIMARY, dll)
BTN_PRIMARY = {"bg": COLORS["accent"], "fg": "white", "font": FONT_BOLD, "relief": "flat"}
BTN_SUCCESS = {"bg": COLORS["success"], "fg": "white", "font": FONT_BOLD, "relief": "flat"}
BTN_DANGER = {"bg": COLORS["danger"], "fg": "white", "font": FONT_BOLD, "relief": "flat"}