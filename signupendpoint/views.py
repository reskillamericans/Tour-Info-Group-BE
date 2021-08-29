
from rest_framework import generics
from rest_framework import status
from rest_framework.response import Response
from rest_framework.views import APIView
from rest_framework.authtoken.models import Token
from rest_framework.authentication import TokenAuthentication
from rest_framework.permissions import IsAuthenticated, IsAdminUser
from rest_framework.authtoken.views import ObtainAuthToken


from .models import User
from .serializers import UserSerializer, UserLoginSerializer

from django.contrib.auth import get_user_model

from drf_spectacular.utils import extend_schema


User = get_user_model


# Create your views here.
    
#Making a post request

class UserViews(generics.CreateAPIView):
    queryset = User.objects.all()
    serializer_class = UserSerializer


class UserLoginView(ObtainAuthToken):

    @extend_schema(
        request=UserLoginSerializer,
        responses={201: UserLoginSerializer},
    )
    def post(self, request, *args, **kwargs):
        serializer = UserLoginSerializer(data=request.data)

        if not serializer.is_valid():
            return Response(serializer.errors, status.HTTP_400_BAD_REQUEST)

        return Response({
            "status" : "Logged in successfully",
            "data" : serializer.data
            }, status=status.HTTP_201_CREATED)


class UserList(generics.ListAPIView):

    queryset = User.objects.all()
    serializer_class = UserSerializer
    permission_classes = [IsAuthenticated, IsAdminUser]
    authentication_classes = (TokenAuthentication)