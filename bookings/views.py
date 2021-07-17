from django.contrib.auth.models import User
from django.http import request
from django.shortcuts import render
from django.contrib.auth import get_user_model

from rest_framework.views import APIView
from rest_framework import status
from rest_framework.authtoken.models import Token
from rest_framework.authentication import TokenAuthentication
from rest_framework.authtoken.views import ObtainAuthToken

from .import serializers

User = get_user_model()

# Create your views here.

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


