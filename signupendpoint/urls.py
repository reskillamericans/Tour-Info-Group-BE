from django.urls import path
from . import views


urlpatterns = [
    path('create-user/', views.UserViews.as_view(), name="create-user")
    ] #changed to "create-user" to mirror the format in Femi's example