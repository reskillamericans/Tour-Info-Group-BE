from django.test import TestCase
from django.urls import reverse
from rest_framework.test import APITestCase
from django.contrib.auth.models import User
from rest_framework import status

# Create your tests here.

class UserTest(APITestCase):
    def setUp(self):
        # self.test_user = User.objects.create_user('FirstNameexample', 'LastNameexample', 'Emailexample@address.com', '0000000001')
        # Took out the phone number below because it says "TypeError: create_user() takes from 2 to 4 positional arguments but 5 were given" which I guess means that it counts self as an arguement. I don't know how to make it take 5 positional arguements, I made sure to include first name, last name, email, and phone number in everything. Once I removed one of the arguements(Phone number) it follows the video again. 
        self.test_user = User.objects.create_user('FirstNameexample', 'LastNameexample', 'Emailexample@address.com')
        self.create_url = reverse('account-create')

    def test_create_user(self):
        data = {
            'first_name' : 'Foo',
            'last_name' : 'Bar',
            'email' : 'foobar@example.com',
            # 'phone_number' : '000-000-0001'
        }

        response = self.client.post(self.create_url, data, format='json')

        self.assertEqual(User.objects.count(), 2)
        # count the models and see if it is 2. If the number of users in the database is 2. If not, then it updates to 2
        self.assertEqual(response.status_code, status.HTTP_201_CREATED)
        # This returns a 201 Created
        self.assertEqual(response.data['first_name'], data['first_name'])
        self.assertEqual(response.data['last_name'], data['last_name'])
        # should return FirstNameexample and Foo Bar
        self.assertFalse('email' in response.data)
        # self.assertFalse('phone_number' in response.data)