<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel World</title>
    <link rel="stylesheet" href="styles.css">
</head>

    <style>
        body, h1, p, img {
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .header {
            background-color: pink;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: row;
            /* justify-content: center;
            align-items: center; */
        }

        .paragraph {
            max-width: 600px;
            margin-bottom: 20px;
            text-align: center;
            flex: 1;
            padding: 20px;
        }

        .image {
            flex: 1;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 20px;
        }

        .image img {
            max-width: 100%;
            height: auto;
        }

        ul {
            list-style: none;
            padding-left: 20px;
            margin-top: 10px;
        }

        ul li {
            margin-bottom: 5px;
        }

        ul li:before {
            content: "\2022";
            color: #3498db;
            margin-right: 5px;
        }
    </style>
<body>

<div class="header">
    <h1>Welcome to Our Laravel World</h1>
</div>

<div class="main-content">
    <div class="paragraph">
    <p>Laravel is a popular open-source PHP framework designed to make web application development faster, easier, and more elegant. It provides developers with a set of tools and features that simplify common tasks and promote best practices in web development.</p>

<p>Key features and benefits of Laravel include:</p>

<ul>
    <li><strong>Modular Structure:</strong> Laravel follows the Model-View-Controller (MVC) architectural pattern, enabling clean and organized code separation.</li>
    <li><strong>Eloquent ORM:</strong> Laravel's Eloquent provides a simple, yet powerful, way to work with databases using an expressive and fluent syntax.</li>
    <li><strong>Routing:</strong> Laravel's flexible routing system allows developers to define clean and SEO-friendly URLs for their application's routes.</li>
</ul>

<p>Laravel's focus on developer experience, elegant syntax, and modern development practices has made it a popular choice for building a wide range of web applications, from simple websites to complex enterprise solutions.</p>

    </div>
    <div class="image">
        <img src="{{ asset('images/laravel.png') }}" alt="Sample Image">
    </div>
</div>

</body>
</html>
