from django.urls import path
from . import views


urlpatterns = [
    path('create-user/', views.UserViews.as_view(), name="user")
    ]