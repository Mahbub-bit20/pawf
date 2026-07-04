from django.urls import path
from .views import post_detail, post_list, about

urlpatterns = [
    path("post/<int:pk>/", post_detail, name="post_detail"),
    path("about/", about, name="about"),
    path("", post_list, name="home"),
]