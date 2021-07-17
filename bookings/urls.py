from django.urls import path, include
from . import views

urlpatterns = [
    path('login/', views.UserLoginView.as_view(), name='login'), 
    path('users/', views.UserList.as_view(), name='users')
]
