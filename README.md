# PHP REST API

A **PHP REST API** built for handling CRUD operations on a database, user management, etc. This API follows RESTful principles.

## Features

- **RESTful Endpoints**: Organized endpoints for managing resources.
- **Error Handling**: Custom error messages with appropriate HTTP response codes.
- **Authentication**: Token-based authentication using JWT (JSON Web Tokens).
- **Secure**: Implements secure practices like input validation and sanitization.
- **Flexible**: Easily expandable with more endpoints or functionality.
- **Efficient**: Handles large-scale requests with optimized database queries.

## Prerequisites

Before you start, ensure that you have met the following requirements:

- **PHP** (>= 7.4)
- **Composer** (for managing dependencies)
- **MySQL** or any database of your choice
- **Postman** or **Curl** (for testing API endpoints)
- **Apache** or **Nginx** server

## Installation

1. **Clone the repository:**

```bash
git clone https://github.com/mostafaamahmoudd/PHP-REST-API.git
cd php-rest-api
```

2. **Install dependencies:**

```bash
composer install
```

3. **Create a database:**

- Set up your MySQL (or other) database and run the following SQL to create the necessary tables:
```sql
CREATE DATABASE your_db_name;
```

4. **Configure your environment:**

- Copy the `.env.example` file and rename it to `.env`.
- Configure your environment variables inside `.env` (database credentials, JWT secret, etc.).

```bash
cp .env.example .env
```

5. **Run Migrations (if applicable):**

```bash
php migrate.php
```

## API Documentation

The following are the core API routes that can be accessed:

| Method | Endpoint                  | Description                |
|--------|---------------------------|----------------------------|
| GET    | /api/v1/resource           | Get all resources           |
| GET    | /api/v1/resource/{id}      | Get a single resource by ID |
| POST   | /api/v1/resource           | Create a new resource       |
| PUT    | /api/v1/resource/{id}      | Update an existing resource |
| DELETE | /api/v1/resource/{id}      | Delete a resource           |

### Authentication

You can secure your API endpoints using JWT. Add the following header to your requests:

```
Authorization: Bearer {your_token_here}
```

To get a token, you can use the login endpoint:

```bash
POST /api/v1/login
```

## Example Usage

Use **Postman** or **cURL** to test API endpoints. Here's an example of how to use **cURL**:

```bash
curl -X GET "http://localhost/api/v1/resource" -H "Authorization: Bearer {your_token}"
```

## Folder Structure

```
├── rest/
│   ├── api/
│   ├── core/
│   ├── includes/
└── README.md
```

- **core/**: Contains all the core logic, including controllers.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.
