from rest_framework import serializers
from rest_framework.authtoken.models import Token
from .models import User
from rest_framework import validators
from django.contrib.auth import get_user_model, authenticate
from decimal import Decimal


User = get_user_model()


class UserSerializer(serializers.ModelSerializer):

    first_name = serializers.CharField(required=True)
    last_name = serializers.CharField(required=True)
    email = serializers.EmailField(required=True,
                                validators = [validators.UniqueValidator(queryset=User.objects.all())])
    phone_number = serializers.CharField(required=True)

    class Meta:
        model = User
        fields = ('first_name', 
                'last_name', 
                'email', 
                'phone_number',
                'created_at',
                'updated_at'
                )
                
    
    def create(self, validated_data):
        user = User.objects.create(**validated_data)
        return user


class UserLoginSerializer(serializers.ModelSerializer):

    email = serializers.EmailField(required=True, write_only=True, label='email')
    password = serializers.CharField(required=True, write_only=True, label='password')
    token = serializers.CharField(read_only=True, allow_blank=False)

    class Meta:
        model = User
        fields = ('email', 'password', 'token')

    
    def validate(self, attrs):
        email = attrs.get('email', None)
        password = attrs.get('password', None)

        if not email:
            raise serializers.ValidationError("Please enter your email address to log in")

        if not password:
            raise serializers.ValidationError("Please enter your password to log in")
                      
        user = authenticate(email=email, password=password)

        if not user:
            raise serializers.ValidationError("Wrong email or password")

        if not user.is_active:
            raise serializers.ValidationError("The user is not active")

        token, created = Token.objects.get_or_create(user=user)
        attrs['token'] = token.key
        
        return attrs