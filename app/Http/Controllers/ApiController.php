<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{
    public function fetchPost()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts', [
            'apiKey' => 'YOUR_API_KEY_HERE',
           
        ]);
        $elements = json_decode($response->body());
        foreach ($elements as $element) {
            $post = new Post;
            $post->userId = $element->userId;
            $post->title = $element->title;
            $post->body = $element->body;
            $post->save();
        }
        return "DONE";
    }

    public function fetchUser()
    {
        /** @var TYPE_NAME $response */
        $response = Http::get('https://jsonplaceholder.typicode.com/users', [
            'apiKey' => 'YOUR_API_KEY_HERE',

        ]);
        $elements = json_decode($response->body());
        foreach ($elements as $element) {
            $user = new User;
            $user->id = $element->id;
            $user->name = $element->name;
            $user->username = $element->username;
            $user->email = $element->email;
            $user->street = $element->address->street;
            $user->suite = $element->address->suite;
            $user->city = $element->address->city;
            $user->zipcode = $element->address->zipcode;
            $user->lat = $element->address->geo->lat;
            $user->lng = $element->address->geo->lng;
            $user->phone = $element->phone;
            $user->website = $element->website;
            $user->name_company = $element->company->name;
            $user->catchPhrase = $element->company->catchPhrase;
            $user->bs = $element->company->bs;
            $user->save();
        }
        return "READY !!!";
    }

    public function patchPost()
    {
        $response = Http::patch('https://jsonplaceholder.typicode.com/posts', [
            'apiKey' => 'YOUR_API_KEY_HERE',
            //'limit' => 10,
        ]);
        $elements = json_decode($response->body());
        foreach ($elements as $element) {
            $post = new Post;
            $post->userId = $element->userId;
            $post->title = $element->title;
            $post->body = $element->body;
            $post->save();
        }
        return "Posts have been updated!";
    }

    public function patchUser()
    {
        /** @var TYPE_NAME $response */
        $response = Http::patch('https://jsonplaceholder.typicode.com/users', [
            'apiKey' => 'YOUR_API_KEY_HERE',
            //'limit' => 10,
        ]);
        $elements = json_decode($response->body());
        foreach ($elements as $element) {
            $user = new User;
            $user->id = $element->id;
            $user->name = $element->name;
            $user->username = $element->username;
            $user->email = $element->email;
            $user->street = $element->address->street;
            $user->suite = $element->address->suite;
            $user->city = $element->address->city;
            $user->zipcode = $element->address->zipcode;
            $user->lat = $element->address->geo->lat;
            $user->lng = $element->address->geo->lng;
            $user->phone = $element->phone;
            $user->website = $element->website;
            $user->name_company = $element->company->name;
            $user->catchPhrase = $element->company->catchPhrase;
            $user->bs = $element->company->bs;
            $user->save();
        }
        return "Users have been updated!";
    }


}
