
from rest_framework import generics
from rest_framework import status
from rest_framework.response import Response

from .models import User
from .serializers import UserSerializer

# Create your views here.
    
#Making a post request

class UserViews(generics.CreateAPIView):
    queryset = User.objects.all()
    serializer_class = UserSerializer