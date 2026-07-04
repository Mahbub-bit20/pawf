from django.contrib import admin
from .models import Post

class PostAdmin(admin.ModelAdmin):
    list_display = ("title", "author", "created_at") # Tambahkan created_at di sini

admin.site.register(Post, PostAdmin)